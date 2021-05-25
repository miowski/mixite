<?php

require_once('class.Profile.php');

/* Generated from GenMyModel */

class Post
{

    private int $id = 0;
    private int $publisher = 0;
    private $date = null;
    private $title = null;
    private $description = null;
    private $media = null;

    private array $publishingUsers = array();
    private array $likingUsers = array();

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Post
    {
        $this->id = $id;
        return $this;
    }

    public function getPublisher(): int
    {
        return $this->publisher;
    }

    public function setPublisher(int $publisher): Post
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    public function getPublishingUsers(): array
    {
        return $this->publishingUsers;
    }

    public function setPublishingUsers(array $publishingUsers): Post
    {
        $this->publishingUsers = $publishingUsers;
        return $this;
    }

    public function getLikingUsers(): array
    {
        return $this->likingUsers;
    }

    public function setLikingUsers(array $likingUsers): Post
    {
        $this->likingUsers = $likingUsers;
        return $this;
    }

    public function __construct(int $id, int $publisher, $date, $title, $description, $media, array $publishingUsers, array $likingUsers)
    {
        $this->id = $id;
        $this->publisher = $publisher;
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
        $this->media = $media;
        $this->publishingUsers = $publishingUsers;
        $this->likingUsers = $likingUsers;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
