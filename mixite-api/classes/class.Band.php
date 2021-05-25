<?php
require_once 'class.Identity.php';

class Band extends Identity {

    private $genre = null;

    private array $members = array();

    public function getGenre() {return $this->genre;}
    public function setGenre($genre): void {$this->genre = $genre;}
    public function getMembers(): array {return $this->members;}
    public function setMembers(array $members): void {$this->members = $members;}

    public function __construct(int $id, $name, int $picture, int $banner, $description, $joinDate, $insta, $twitter, $tiktok, $youtube, $spotify, $genre, array $members)
    {
        parent::__construct($id, $name, $picture, $banner, $description, $joinDate, $insta, $twitter, $tiktok, $youtube, $spotify);
        $this->genre = $genre;
        $this->members = $members;
    }
}