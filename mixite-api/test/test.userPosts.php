<?php

require_once("../classes/class.Post.php");
require_once("../classes/class.Profile.php");

$user = new Profile (
    0,
    'Phil',
    0,
    '0b',
    'Bonjour, moi c\'est Phil !',
    '02.05.2021',
    'phil.varret',
    '',
    '',
    '',
    '',
    'philemon.varret@gmail.com',
    'passpass'
);

$post1 = new Post (
    0,
    0,
    '02.05.2021',
    'Nouveau post',
    'Ceci est un nouveau post — le tout premier de cette plateforme.',
    0
);

$post2 = new Post (
    1,
    0,
    '02.05.2021',
    'Nouveau post',
    'Ceci est un nouveau post — le deuxième de cette plateforme.',
    0
);

// Créer liste des publications
$postList = array();

// Insérer publications dans la liste
$postList[] = $post1;
$postList[] = $post2;

$user->setPublishedPosts($postList);

echo '<pre>';
print_r($user);
echo '</pre>';
