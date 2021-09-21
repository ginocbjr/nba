<?php
require_once 'Database.php';
require_once 'classes/models/SearchField.php';

abstract class GenericDao {
    private $db;
    private $reflection;

    function __construct() {
        $database = new Database(Config::host, Config::port, Config::database, Config::user, Config::password);
        $this->db = $database->getDb();
        $this->reflection = new ReflectionClass($this->getEntityClass());
    }

    abstract protected function getEntityClass();

    protected function getFields() {
        $properties = $this->reflection->getProperties(ReflectionProperty::IS_PRIVATE);
        $fields = [];
        foreach ($properties as $prop) {
            array_push($fields, $prop->getName());
        }
        return $fields;
    }

    /**
     * By default, all fields are searchable. Override this to set your own search fields.
     * This supports array of string or array of SearchField
     */
    protected function getSearchableFields() {
        return $this->getFields();
    }

    public function doSearch($entity) {
        $query = "SELECT * FROM " . $this->getEntityClass();
        $searchableFields = $this->getSearchableFields();
        $where = [];
        foreach ($searchableFields as $field) {
            if ($field instanceof SearchField) {
                if($entity->has($field->label)) {
                    $where[] = $field->field . " = '" . $entity[$field->label] . "'";
                }
            } else {
                if($entity->has($field)) {
                    $where[] = $field . " = '" . $entity[$field] . "'";
                }
            }
        }
        if (!empty($where)) {
            $where = implode(' AND ', $where);
            $query = $query . " WHERE " . $where;
        }
        error_log($query . ' \n');
        return collect(query($query))
            ->map(function($item, $key) {
                unset($item['id']);
                return $item;
            });
    }
}