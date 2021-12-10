<?php

include "library/config.php";

$postjson = json_decode(file_get_contents('php://input'), true);

$query = mysqli_query($mysqli, "DELETE FROM reviews WHERE review_id='$postjson[review_id]'");

if($query) $result = json_encode(array('success'=>true, 'result'=>'success'));
else $result = json_encode(array('success'=>false, 'result'=>'error'));

echo $result;