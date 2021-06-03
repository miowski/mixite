<?php

class InBand implements JsonSerializable {

    private $since = null;
    private $isAdmin = false;

    public function getSince()
    {
        return $this->since;
    }

    public function setSince($since): InBand
    {
        $this->since = $since;
        return $this;
    }

    public function isAdmin(): bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): InBand
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function __construct($since, $isAdmin)
    {
        $this->since = $since;
        $this->since = $isAdmin;
    }
}