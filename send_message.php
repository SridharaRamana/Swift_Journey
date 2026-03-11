<?php

session_start();
include "config/db.php";

$user=$_SESSION['user'];

$ticket=$_POST['ticket'];
$msg=$_POST['message'];

mysqli_query($conn,"
INSERT INTO messages(ticket_id,sender,message)
VALUES('$ticket','$user','$msg')
");

header("Location: chat.php?ticket=".$ticket);

?>