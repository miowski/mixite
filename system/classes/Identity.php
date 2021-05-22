<?php

/* Generated from GenMyModel */

class Identity
{

    public $ID;
    public $Name;
    public $Picture;
    public $Banner;
    public $Desc;
    public $JoinDate;
    public $Insta;
    public $Twitter;
    public $Tiktok;
    public $Youtube;
    public $Spotify;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->Picture;
    }

    /**
     * @param mixed $Picture
     */
    public function setPicture($Picture)
    {
        $this->Picture = $Picture;
    }

    /**
     * @return mixed
     */
    public function getBanner()
    {
        return $this->Banner;
    }

    /**
     * @param mixed $Banner
     */
    public function setBanner($Banner)
    {
        $this->Banner = $Banner;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->Desc;
    }

    /**
     * @param mixed $Desc
     */
    public function setDesc($Desc)
    {
        $this->Desc = $Desc;
    }

    /**
     * @return mixed
     */
    public function getJoinDate()
    {
        return $this->JoinDate;
    }

    /**
     * @param mixed $JoinDate
     */
    public function setJoinDate($JoinDate)
    {
        $this->JoinDate = $JoinDate;
    }

    /**
     * @return mixed
     */
    public function getInsta()
    {
        return $this->Insta;
    }

    /**
     * @param mixed $Insta
     */
    public function setInsta($Insta)
    {
        $this->Insta = $Insta;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->Twitter;
    }

    /**
     * @param mixed $Twitter
     */
    public function setTwitter($Twitter)
    {
        $this->Twitter = $Twitter;
    }

    /**
     * @return mixed
     */
    public function getTiktok()
    {
        return $this->Tiktok;
    }

    /**
     * @param mixed $Tiktok
     */
    public function setTiktok($Tiktok)
    {
        $this->Tiktok = $Tiktok;
    }

    /**
     * @return mixed
     */
    public function getYoutube()
    {
        return $this->Youtube;
    }

    /**
     * @param mixed $Youtube
     */
    public function setYoutube($Youtube)
    {
        $this->Youtube = $Youtube;
    }

    /**
     * @return mixed
     */
    public function getSpotify()
    {
        return $this->Spotify;
    }

    /**
     * @param mixed $Spotify
     */
    public function setSpotify($Spotify)
    {
        $this->Spotify = $Spotify;
    }

    /**
     * Identity constructor.
     * @param $ID
     * @param $Name
     * @param $Picture
     * @param $Banner
     * @param $Desc
     * @param $JoinDate
     * @param $Insta
     * @param $Twitter
     * @param $Tiktok
     * @param $Youtube
     * @param $Spotify
     */
    public function __construct($ID, $Name, $Picture, $Banner, $Desc, $JoinDate, $Insta, $Twitter, $Tiktok, $Youtube, $Spotify)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Picture = $Picture;
        $this->Banner = $Banner;
        $this->Desc = $Desc;
        $this->JoinDate = $JoinDate;
        $this->Insta = $Insta;
        $this->Twitter = $Twitter;
        $this->Tiktok = $Tiktok;
        $this->Youtube = $Youtube;
        $this->Spotify = $Spotify;
    }

}
