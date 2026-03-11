<!DOCTYPE html>
<html>
<head>

<title>Register</title>
<link rel="stylesheet" href="css/style.css">

</head>

<body class="form-body">

<form class="form-box" action="backend/register_process.php" method="POST">

<h2>Create Account</h2>

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Register</button>

</form>

</body>
</html>