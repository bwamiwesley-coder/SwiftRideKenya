<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"swiftride_db"
);

if(!$conn){
die("Database connection failed");
}

?>