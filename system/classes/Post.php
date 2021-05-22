<?php

/* Generated from GenMyModel */

class Post {
    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * @param mixed $Media
     */
    public function setMedia($Media)
    {
        $this->Media = $Media;
    }
	public $ID;
	public $Date;
	public $Title;
	public $Description;
	public $Media;

    /**
     * Post constructor.
     * @param $ID
     * @param $Date
     * @param $Title
     * @param $Description
     * @param $Media
     */
    public function __construct($ID, $Date, $Title, $Description, $Media)
    {
        $this->ID = $ID;
        $this->Date = $Date;
        $this->Title = $Title;
        $this->Description = $Description;
        $this->Media = $Media;
    }

}
