<?php

include "library/config.php";
$postjson = json_decode(file_get_contents('php://input'), true);

$password = md5($postjson['password']);
$query = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$postjson[email]' AND password='$password'");
$check = mysqli_num_rows($query);

if ($check > 0) {
    $data = mysqli_fetch_array($query);
    $result = json_encode(array('success' => true, 'result' => $data));
} else {
    $result = json_encode(array('success' => false, 'msg' => 'The email or password you entered was incorrect'));
}

echo $result;

?>
