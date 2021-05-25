<?php

class PlayedInstrument implements JsonSerializable {

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

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}