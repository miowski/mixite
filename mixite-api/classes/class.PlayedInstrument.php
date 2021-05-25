<?php

class PlayedInstrument {

    private $since = null;

    public function getSince()
    {
        return $this->since;
    }

    public function setSince($since)
    {
        $this->since = $since;
        return $this;
    }

    public function __construct($since)
    {
        $this->since = $since;
    }
}