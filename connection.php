<?php

function Connect()
{
$dbhost = "localhost";
$dbuser = "vmnandan_orangus";
$dbpass = "M@h@nt3sh";
$dbname = "vmnandan_Orangus";

//connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ($conn->connect_error);

return $conn;
}
?>