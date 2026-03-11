<?php session_start(); ?>

<link rel="stylesheet" href="css/style.css">

<body class="form-body">

<form class="form-box" action="backend/post_ticket_process.php" method="POST">

<h2>Post Ticket</h2>

<input type="text" name="train" placeholder="Train Name" required>

<input type="text" name="from" placeholder="From Station" required>

<input type="text" name="to" placeholder="To Station" required>

<input type="date" name="date" required>

<input type="number" name="price" placeholder="Price" required>

<input type="text" name="contact" placeholder="Phone Number" required>

<button type="submit">Upload Ticket</button>

</form>

</body>