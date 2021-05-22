<?php

/* Generated from GenMyModel */

class Post {

    public $ID;
    public $Publisher;
    public $Date;
    public $Title;
    public $Description;
    public $Media;

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->Publisher;
    }

    /**
     * @param mixed $Publisher
     */
    public function setPublisher($Publisher)
    {
        $this->Publisher = $Publisher;
    }

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

    /**
     * Post constructor.
     * @param $ID
     * @param $Date
     * @param $Title
     * @param $Description
     * @param $Media
     */
    public function __construct($ID, $Publisher, $Date, $Title, $Description, $Media)
    {
        $this->ID = $ID;
        $this->Publisher = $Publisher;
        $this->Date = $Date;
        $this->Title = $Title;
        $this->Description = $Description;
        $this->Media = $Media;
    }

}
