<?php
session_start();
include "config/db.php";

if(!isset($_SESSION['user'])){
header("Location: login.php");
exit();
}

$user=$_SESSION['user'];
$ticket=$_GET['ticket'];

?>

<!DOCTYPE html>
<html>

<head>

<title>Chat</title>

<link rel="stylesheet" href="css/chat.css">

<script>

function loadMessages(){

fetch("fetch_messages.php?ticket=<?php echo $ticket;?>")

.then(res=>res.text())

.then(data=>{
document.getElementById("chat-box").innerHTML=data;
});

}

setInterval(loadMessages,2000);

function typing(){

document.getElementById("typing").style.display="block";

setTimeout(()=>{
document.getElementById("typing").style.display="none";
},1000);

}

</script>

</head>

<body onload="loadMessages()">

<div class="chat-container">

<h2>Ticket Chat</h2>

<div id="chat-box"></div>

<div id="typing">Someone is typing...</div>

<form action="send_message.php" method="POST">

<input type="hidden" name="ticket" value="<?php echo $ticket;?>">

<input type="text" name="message" onkeypress="typing()" placeholder="Type message..." required>

<button>Send</button>

</form>

</div>

</body>
</html>