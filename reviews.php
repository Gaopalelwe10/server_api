<?php

include "library/config.php";

$postjson = json_decode(file_get_contents('php://input'), true);
$id = $postjson['id'];
$data = array();

$query = mysqli_query($mysqli, "SELECT * FROM reviews R LEFT JOIN users U ON R.userID =U.id Where R.restID='$id' ORDER BY review_id DESC");

while($row = mysqli_fetch_array($query)){

    $data[] = array(
        'firstname' => $row['firstname'],
        'lastname' => $row['lastname'],
        'profileUrl' => $row['profileUrl'],
        'msg' => $row['msg'],
        'rating' => $row['rating'],
        'restID'=> $row['restID'],
        'userID' => $row['userID'],
        'review_id' => $row['review_id']
    );
}

if($query) $result = json_encode(array('success'=>true, 'result'=>$data));
else $result = json_encode(array('success'=>false));

echo $result;