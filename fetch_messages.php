<?php

session_start();
include "config/db.php";

$ticket = $_GET['ticket'];

$result = mysqli_query($conn,"
SELECT * FROM messages
WHERE ticket_id='$ticket'
ORDER BY created_at ASC
");

while($row = mysqli_fetch_assoc($result)){

$user = $row['sender'];

/* get avatar */

$u = mysqli_query($conn,"
SELECT avatar FROM users
WHERE name='$user'
");

$avatar = "default.png";

if($u && mysqli_num_rows($u) > 0){
$data = mysqli_fetch_assoc($u);
$avatar = $data['avatar'];
}

echo "

<div class='message'>

<img src='images/avatars/$avatar'>

<div class='bubble'>

<b>".$row['sender']."</b><br>
".$row['message']."

</div>

</div>

";

}

?>