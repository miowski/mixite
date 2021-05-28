<?php

require_once('cnx.php');
require_once('classes/class.Post.php');

$pdo = new PDO(
    "mysql:host=localhost;dbname=mixite;charset=utf8",
    "mixite_admin",
    "password",

);

$sql = "SELECT * FROM Posts ORDER BY PublicationDate";

$request = $pdo->prepare($sql);
$list = array();

if ($request->execute()) {

    while ($data = $request->fetch()) {

        $post = new Post(
            $data['ID'],
            $data['Publisher'],
            $data['PublicationDate'],
            $data['Title'],
            $data['Description'],
            $data['Media'],
        );

        $list[] = $post;
    }

}

echo json_encode($list);
exit();

?>