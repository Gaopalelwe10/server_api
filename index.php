

<?php
include "library/config.php";
$postjson = json_decode(file_get_contents('php://input'), true);
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Review App</title>

</head>
<body>
   <h2> welcome to Restaurant Review App</h2>
</body>
</html>';
?>