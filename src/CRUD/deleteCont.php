<?php
include "db_conn.php";
//funksioni per fshirjen e te dhenave ne databaz ne baz te ID-se
$id = $_GET["id"];
$sql = "DELETE FROM `contactus` WHERE id = $id";
$result = mysqli_query($conn, $sql);

//kontrolla per error
if ($result) {
    header("Location: ContactPage.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}