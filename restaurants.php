<?php

include "library/config.php";

$postjson = json_decode(file_get_contents('php://input'), true);

$data = array();
$query = mysqli_query($mysqli, "SELECT * FROM restaurants");

while($row = mysqli_fetch_array($query)){

    $data[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'location' => $row['location'],
        'type' => $row['type'],
        'rating' => $row['rating'],
        'imgUrl' => $row['imgUrl'],
    );
}

if($query) $result = json_encode(array('success'=>true, 'result'=>$data));
else $result = json_encode(array('success'=>false));

echo $result;
?>