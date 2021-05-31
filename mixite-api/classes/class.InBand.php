<?php

class InBand implements JsonSerializable {

    private $since = null;

    public function __construct($since)
    {
        $this->since = $since;
    }

    public function getSince()
    {
        return $this->since;
    }

    public function setSince($since): InBand
    {
        $this->since = $since;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}