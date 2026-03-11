<?php

include "config/db.php";

$ticket=$_POST['ticket_id'];
$rating=$_POST['rating'];

mysqli_query($conn,"UPDATE tickets SET rating='$rating' WHERE id='$ticket'");

header("Location: explore.php");

?>