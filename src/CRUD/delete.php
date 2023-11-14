<?php
include "db_conn.php";
//funksioni per fshirjen e te dhenave ne databaz ne baz te ID-se
$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);

//kontrolla per error
if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}