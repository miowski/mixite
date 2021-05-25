<?php

class InBand {

    private $since = null;

    public function __construct($since)
    {
        $this->since = $since;
    }

    public function getSince()
    {
        return $this->since;
    }

    public function setSince($since)
    {
        $this->since = $since;
        return $this;
    }
}