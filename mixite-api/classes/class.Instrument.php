<?php

require_once('class.Profile.php');

class Instrument implements JsonSerializable {

    private int $id = 0;
    private $name = null;
    private $category = null;

    private array $playingUsers = array();

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Instrument
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function getPlayingUsers(): array
    {
        return $this->playingUsers;
    }

    public function setPlayingUsers(array $playingUsers): Instrument
    {
        $this->playingUsers = $playingUsers;
        return $this;
    }

    public function __construct(int $id, $name, $category, array $playingUsers)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->playingUsers = $playingUsers;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
