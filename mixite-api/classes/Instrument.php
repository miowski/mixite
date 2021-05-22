<?php

/* Generated from GenMyModel */

class Instrument {
    /**
     * @return mixed
     */
    public function getInstrumentID()
    {
        return $this->instrumentID;
    }

    /**
     * @param mixed $instrumentID
     */
    public function setInstrumentID($instrumentID)
    {
        $this->instrumentID = $instrumentID;
    }

    /**
     * @return mixed
     */
    public function getInstrumentName()
    {
        return $this->instrumentName;
    }

    /**
     * @param mixed $instrumentName
     */
    public function setInstrumentName($instrumentName)
    {
        $this->instrumentName = $instrumentName;
    }

    /**
     * @return mixed
     */
    public function getInstrumentCategory()
    {
        return $this->instrumentCategory;
    }

    /**
     * @param mixed $instrumentCategory
     */
    public function setInstrumentCategory($instrumentCategory)
    {
        $this->instrumentCategory = $instrumentCategory;
    }
	public $instrumentID;
	public $instrumentName;
	public $instrumentCategory;

    /**
     * Instrument constructor.
     * @param $instrumentID
     * @param $instrumentName
     * @param $instrumentCategory
     */
    public function __construct($instrumentID, $instrumentName, $instrumentCategory)
    {
        $this->instrumentID = $instrumentID;
        $this->instrumentName = $instrumentName;
        $this->instrumentCategory = $instrumentCategory;
    }

}
