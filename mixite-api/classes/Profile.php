<?php
require_once 'Identity.php';


/* Generated from GenMyModel */

class Profile extends Identity {
    private $Email;
    private $Password;

    /**
     * Profile constructor.
     * @param $Email
     * @param $Password
     */
    public function __construct($ID, $Name, $Picture, $Banner, $Desc, $JoinDate, $Insta, $Twitter, $Tiktok, $Youtube, $Spotify, $Email, $Password)
    {
        parent::__construct($ID, $Name, $Picture, $Banner, $Desc, $JoinDate, $Insta, $Twitter, $Tiktok, $Youtube, $Spotify);
        $this->Email = $Email;
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * Profile constructor.
     * @param $Email
     * @param $Password
     */


}
