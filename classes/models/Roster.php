<?php
class Roster {
    private $id;
    private $team_code;
    private $number;
    private $name;
    private $pos;
    private $height;
    private $weight;
    private $dob;
    private $nationality;
    private $years_exp;
    private $college;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of team_code
     */ 
    public function getTeam_code()
    {
        return $this->team_code;
    }

    /**
     * Set the value of team_code
     *
     * @return  self
     */ 
    public function setTeam_code($team_code)
    {
        $this->team_code = $team_code;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of pos
     */ 
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set the value of pos
     *
     * @return  self
     */ 
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of dob
     */ 
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */ 
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of nationality
     */ 
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set the value of nationality
     *
     * @return  self
     */ 
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get the value of years_exp
     */ 
    public function getYears_exp()
    {
        return $this->years_exp;
    }

    /**
     * Set the value of years_exp
     *
     * @return  self
     */ 
    public function setYears_exp($years_exp)
    {
        $this->years_exp = $years_exp;

        return $this;
    }

    /**
     * Get the value of college
     */ 
    public function getCollege()
    {
        return $this->college;
    }

    /**
     * Set the value of college
     *
     * @return  self
     */ 
    public function setCollege($college)
    {
        $this->college = $college;

        return $this;
    }
}