<?php

class Post implements JsonSerializable
{

    private int $id = 0;
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): Post
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): Post
    {
        $this->description = $description;
        return $this;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media): Post
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

    public function __construct(int $id, $title, $description, $media)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->media = $media;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
