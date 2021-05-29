<?php


require_once('../cnx.php');
require_once('../classes/class.Profile.php');

header("Access-Control-Allow-Origin: *");

$sql = "SELECT * FROM profile ORDER BY id";

$request = $pdo->prepare($sql);
$list = array();

if ($request->execute()) {

    while ($data = $request->fetch()) {

        $profile = new Profile(
            $data['ID'],
            $data['name'],
            $data['picture'],
            $data['banner'],
            $data['description'],
            $data['joinDate'],
            $data['insta'],
            $data['tiktok'],
            $data['spotify'],
            $data['youtube'],
            $data['email'],
            $data['password'],
        );

        $list[] = $profile;
    }

}

echo json_encode($list);

exit();