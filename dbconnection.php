<?php
/**
 * using mysqli_connect for database connection
 */

$Host = 'localhost';
$database = 'lms_db';
$Username = 'root';
$Password = '';

$mysqli = mysqli_connect($Host, $Username, $Password, $database);
// if($mysqli)
// {
//     echo "connection successful";
// }
// else{
//     echo "connectivity error";
// }


?>