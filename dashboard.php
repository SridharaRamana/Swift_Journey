<?php

session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="post_ticket.php">Post Ticket</a>

<br><br>

<a href="explore.php">Explore Tickets</a>

<br><br>

<a href="logout.php">Logout</a>