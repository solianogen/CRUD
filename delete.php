<?php

include("config.php");

$id = $GET['id'];

$result = mysqli_query($db, "DELETE FROM users WHERE id=$id");

header("Location:index.php");
?>