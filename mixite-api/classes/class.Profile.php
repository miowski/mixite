<?php
require_once('class.Identity.php');

class Profile extends Identity implements JsonSerializable {

    private $email = null;
    private $password = null;

    private array $publishedPosts = array();
    private array $likedPosts = array();
    private array $playedInstruments = array();
    private array $inBands = array();

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPublishedPosts(): array
    {
        return $this->publishedPosts;
    }

    public function setPublishedPosts(array $publishedPosts): Profile
    {
        $this->publishedPosts = $publishedPosts;
        return $this;
    }

    public function getLikedPosts(): array
    {
        return $this->likedPosts;
    }

    public function setLikedPosts(array $likedPosts): Profile
    {
        $this->likedPosts = $likedPosts;
        return $this;
    }

    public function getPlayedInstruments(): array
    {
        return $this->playedInstruments;
    }

    public function setPlayedInstruments(array $playedInstruments): Profile
    {
        $this->playedInstruments = $playedInstruments;
        return $this;
    }

    public function getInBands(): array
    {
        return $this->inBands;
    }

    public function setInBands(array $inBands): Profile
    {
        $this->inBands = $inBands;
        return $this;
    }

    public function __construct(int $id, $name, int $picture, int $banner, $description, $joinDate, $insta, $twitter, $tiktok, $youtube, $spotify, $email, $password)
    {
        parent::__construct($id, $name, $picture, $banner, $description, $joinDate, $insta, $twitter, $tiktok, $youtube, $spotify);
        $this->email = $email;
        $this->password = $password;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}