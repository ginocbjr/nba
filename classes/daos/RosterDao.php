<?php

require_once 'GenericDao.php';
require_once 'classes/models/SearchField.php';

class RosterDao extends GenericDao {
    protected function getEntityClass() {
        return "Roster";
    }

    protected function getSearchableFields() {
        $fields = [];
        $fields[] = new SearchField('player', 'name');
        $fields[] = new SearchField('playerId', 'id');
        $fields[] = new SearchField('team', 'team_code');
        $fields[] = new SearchField('position', 'pos');
        $fields[] = new SearchField('country', 'nationality');
        return $fields;
    }
}