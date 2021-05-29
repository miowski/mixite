<?php

require_once('cnx.php');
require_once('classes/class.Post.php');

header("Access-Control-Allow-Origin: *");

$sql = "SELECT * FROM post ORDER BY publicationDate";

$request = $pdo->prepare($sql);
$list = array();

if ($request->execute()) {

    while ($data = $request->fetch()) {

        $post = new Post(
            $data['ID'],
            $data['publisher'],
            $data['publicationDate'],
            $data['title'],
            $data['description'],
            $data['media'],
        );

        $list[] = $post;
    }

}

echo json_encode($list);

exit();