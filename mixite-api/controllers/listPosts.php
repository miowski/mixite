<?php

require_once('../cnx.php');
require_once('../classes/class.Post.php');

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

        $sqlProfile = "SELECT * FROM profile WHERE ID = 1";
        $requestProfile = $pdo->prepare($sqlProfile);
        //$requestProfile->bindValue(1, $data['publisher']);

        if ($requestProfile->execute()) {

            while($profileData = $requestProfile->fetch()) {
                //echo var_dump($profileData);
                $publisher = new Profile(
                    $profileData["ID"],
                    $profileData["name"],
                    null,
                    null,
                    $profileData["description"],
                    $profileData["joinDate"],
                    $profileData["insta"],
                    $profileData["spotify"],
                    $profileData["tiktok"],
                    $profileData["youtube"],
                    $profileData["email"],
                    $profileData["password"],
                );
                $post->setPublisher($publisher);
            }
        }



        $list[] = $post;
    }

}

echo json_encode($list);

exit();