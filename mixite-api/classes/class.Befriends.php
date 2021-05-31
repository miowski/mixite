<?php

require_once('class.Profile.php');

class Befriend implements JsonSerializable
{

    private $since = null;

    private int $profile1 = 0;
    private int $profile2 = 0;


    public function getSince()
    {
        return $this->since;
    }

    public function setSince($since): Befriend
    {
        $this->since = $since;
        return $this;
    }

    public function getProfile1(): int
    {
        return $this->profile1;
    }

    public function setProfile1(int $profile1): Befriend
    {
        $this->profile1 = $profile1;
        return $this;
    }

    public function getProfile2(): int
    {
        return $this->profile2;
    }

    public function setProfile2(int $profile2): Befriend
    {
        $this->profile2 = $profile2;
        return $this;
    }


    public function __construct($since, int $profile1, int $profile2)
    {
        $this->since = $since;
        $this->profile1 = $profile1;
        $this->profile2 = $profile2;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}