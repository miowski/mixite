<?php

class PlayedInstrument implements JsonSerializable {

    private $since = null;

    private int $profile = 0;
    private int $instrument = 0;

    public function getProfile(): int
    {
        return $this->profile;
    }

    public function setProfile(int $profile): PlayedInstrument
    {
        $this->profile = $profile;
        return $this;
    }

    public function getInstrument(): int
    {
        return $this->instrument;
    }

    public function setInstrument(int $instrument): PlayedInstrument
    {
        $this->instrument = $instrument;
        return $this;
    }


    public function getSince()
    {
        return $this->since;
    }

    public function setSince($since): PlayedInstrument
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