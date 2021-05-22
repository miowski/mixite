<?php
require_once 'class.Identity.php';


/* Generated from GenMyModel */

class Band extends Identity
{
    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->Genre;
    }

    /**
     * @param mixed $Genre
     */
    public function setGenre($Genre)
    {
        $this->Genre = $Genre;
    }

    public $Genre;

    /**
     * Band constructor.
     * @param $Genre
     */
    public function __construct($ID, $Name, $Picture, $Banner, $Desc, $JoinDate, $Insta, $Twitter, $Tiktok, $Youtube, $Spotify, $Genre)
    {
        parent::__construct($ID, $Name, $Picture, $Banner, $Desc, $JoinDate, $Insta, $Twitter, $Tiktok, $Youtube, $Spotify);
        $this->Genre = $Genre;
    }
}