<?php

include "config/db.php";

$from="";
$to="";

if(isset($_GET['from'])){
$from=$_GET['from'];
$to=$_GET['to'];

$result=mysqli_query($conn,"
SELECT * FROM tickets
WHERE source_station LIKE '%$from%'
AND destination_station LIKE '%$to%'
");

}else{

$result=mysqli_query($conn,"SELECT * FROM tickets");

}

?>

<link rel="stylesheet" href="css/style.css">

<h1 style="text-align:center;">Find Tickets</h1>

<form style="text-align:center;margin:20px;" method="GET">

<input type="text" name="from" placeholder="From Station">

<input type="text" name="to" placeholder="To Station">

<button>Search</button>

</form>


<div class="ticket-container">

<?php

while($row=mysqli_fetch_assoc($result)){

echo "

<div class='ticket-card'>

<h3>".$row['train']."</h3>

<p>".$row['source_station']." → ".$row['destination_station']."</p>

<p>Date: ".$row['journey_date']."</p>

<p>Price: ₹".$row['price']."</p>

<p>Owner: ".$row['user_name']."</p>

<p>Contact: ".$row['contact']."</p>

<a href='chat.php?ticket=".$row['id']."'>
<button>Chat</button>
</a>

</div>

";

}

?>

</div>

<div style="text-align:center;margin:40px;">

<h2>Route Map</h2>

<iframe

width="80%"

height="400"

style="border:0"

loading="lazy"

allowfullscreen

src="https://maps.google.com/maps?q=india%20railway&t=&z=5&ie=UTF8&iwloc=&output=embed">

</iframe>

</div>