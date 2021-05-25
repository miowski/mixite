<?php

class Identity implements JsonSerializable
{
    private int $id = 0;
    private $name = null;
    private int $picture = 0;
    private int $banner = 0;
    private $description = null;
    private $joinDate = null;
    private $insta = null;
    private $twitter = null;
    private $tiktok = null;
    private $youtube = null;
    private $spotify = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Identity
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

    public function getPicture(): int
    {
        return $this->picture;
    }


    public function setPicture(int $picture): Identity
    {
        $this->picture = $picture;
        return $this;
    }

    public function getBanner(): int
    {
        return $this->banner;
    }

    public function setBanner(int $banner): Identity
    {
        $this->banner = $banner;
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

    public function getJoinDate()
    {
        return $this->joinDate;
    }

    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;
        return $this;
    }

    public function getInsta()
    {
        return $this->insta;
    }

    public function setInsta($insta)
    {
        $this->insta = $insta;
        return $this;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
        return $this;
    }

    public function getTiktok()
    {
        return $this->tiktok;
    }

    public function setTiktok($tiktok)
    {
        $this->tiktok = $tiktok;
        return $this;
    }

    public function getYoutube()
    {
        return $this->youtube;
    }

    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
        return $this;
    }

    public function getSpotify()
    {
        return $this->spotify;
    }

    public function setSpotify($spotify)
    {
        $this->spotify = $spotify;
        return $this;
    }

    public function __construct(int $id, $name, int $picture, int $banner, $description, $joinDate, $insta, $twitter, $tiktok, $youtube, $spotify)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
        $this->banner = $banner;
        $this->description = $description;
        $this->joinDate = $joinDate;
        $this->insta = $insta;
        $this->twitter = $twitter;
        $this->tiktok = $tiktok;
        $this->youtube = $youtube;
        $this->spotify = $spotify;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
