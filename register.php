<?php

include "library/config.php";

$postjson = json_decode(file_get_contents('php://input'), true);

$password = md5($postjson['password']);
$query = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$postjson[email]' AND password='$password'");
$check = mysqli_num_rows($query);

if ($check > 0) {
    $result = json_encode(array('success' => false, 'msg' => 'This email already exist'));
} else {
    $query = mysqli_query($mysqli, "INSERT INTO users SET
      firstname = '$postjson[firstname]',
      lastname ='$postjson[lastname]',
      email='$postjson[email]',
      password = '$password' ,
      profileUrl =''
    ");

if ($query) $result = json_encode(array('success' => true));
else $result = json_encode(array('success' => false, 'msg' => 'error, please try again'));
}

echo $result;

?>
