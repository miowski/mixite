<?php
require_once 'Identity.php';


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
    public function __construct($Genre)
    {
        $this->Genre = $Genre;
    }
}