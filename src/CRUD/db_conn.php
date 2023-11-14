<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-porosia";

// krijimi i lidhjes me database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// kontrollimi i lidhjes
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}