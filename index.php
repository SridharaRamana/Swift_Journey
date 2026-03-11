<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>

<title>SwiftJourney</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<div class="logo">SWIFTJOURNEY</div>

<nav>

<a href="index.php">Home</a>
<a href="explore.php">Explore</a>

<?php

if(isset($_SESSION['user'])){
echo '<a href="dashboard.php">Dashboard</a>';
echo '<a href="logout.php">Logout</a>';
}else{
echo '<a href="login.php">Login</a>';
echo '<a href="register.php">Register</a>';
}

?>

</nav>

</header>


<section class="hero">

<h1>Travel Smarter</h1>

<p>Find unused train tickets instantly</p>

<a href="explore.php">
<button class="main-btn">Explore Tickets</button>
</a>

</section>

<section class="features">

<div class="feature">

<h3>Swap Tickets</h3>
<p>Upload unused tickets and help other travelers</p>

</div>

<div class="feature">

<h3>Find Routes</h3>
<p>Search available tickets by route</p>

</div>

<div class="feature">

<h3>Instant Contact</h3>
<p>Chat with ticket owner instantly</p>

</div>

</section>

</body>
</html>