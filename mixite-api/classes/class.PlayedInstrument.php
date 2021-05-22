<?php

/* Generated from GenMyModel */

class PlayedInstrument {
	public $Date;

    /**
     * PlayedInstrument constructor.
     * @param $Date
     */
    public function __construct($Date)
    {
        $this->Date = $Date;
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

}
