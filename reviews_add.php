<?php

include "library/config.php";

$postjson = json_decode(file_get_contents('php://input'), true);


$query = mysqli_query($mysqli, "INSERT INTO reviews SET
      msg = '$postjson[msg]',
      rating ='$postjson[rating]',
      userID='$postjson[userID]',
      restID='$postjson[restID]'
");

if($query) $result = json_encode(array('success'=>true));
else $result = json_encode(array('success'=>false, 'msg'=>'error, please try again'));

echo $result;
