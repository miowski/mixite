<?php

require_once('classes/class.Post.php');

$pdo = new PDO(
    "mysql:host=localhost;dbname=mixite;charset=utf8",
"root",
"",
"http://localhost//mixite/mixite-api//"
);

$sql = "SELECT * FROM Posts WHERE Publisher IS 1 ORDER BY PublicationDate";

$request = $pdo->prepare($sql);
$list = array();

if ($request->execute()) {

    while($data = $request.fetch()) {

        $post = new Post(
            $data['ID'],
            $data['Publisher'],
            $data['PublicationDate'],
            $data['Title'],
            $data['Description'],
            $data['Media'],
        );

    }

}