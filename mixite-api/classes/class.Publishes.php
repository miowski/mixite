<?php

require_once('class.Post.php');
require_once('class.Profile.php');

class Publishes implements JsonSerializable {

    private $date = null;

    private int $profile = 0;
    private int $post = 0;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): Publishes
    {
        $this->date = $date;
        return $this;
    }

    public function getProfile(): int
    {
        return $this->profile;
    }

    public function setProfile(int $profile): Publishes
    {
        $this->profile = $profile;
        return $this;
    }

    public function getPost(): int
    {
        return $this->post;
    }

    public function setPost(int $post): Publishes
    {
        $this->post = $post;
        return $this;
    }

    public function __construct($date, int $profile, int $post)
    {
        $this->date = $date;
        $this->profile = $profile;
        $this->post = $post;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}