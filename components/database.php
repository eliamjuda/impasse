<?php 


session_start();


$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "impasse2021"; /* Database name */ 


// $host = "localhost"; /* Host name */
// $user = "clindexa_eliam"; /* User */
// $password = "KXvz+iJMAs9A"; /* Password */
// $dbname = "clindexa_impasse"; /* Database name */ 

$conn = mysqli_connect($host, $user, $password,$dbname);
mysqli_set_charset($conn,'utf8'); 
// Check connection
if (!$conn) {

 die("Connection failed: " . mysqli_connect_error());
 
}

?>

