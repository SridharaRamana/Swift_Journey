<!DOCTYPE html>
<html>

<head>

<title>SwiftJourney</title>

<style>

body{
margin:0;
height:100vh;
background:linear-gradient(120deg,#020617,#0f172a,#020617);
display:flex;
justify-content:center;
align-items:center;
font-family:Arial;
overflow:hidden;
color:white;
}

/* Logo */

.logo{
font-size:95px;
font-weight:bold;
letter-spacing:12px;
color:#22d3ee;
text-shadow:0 0 30px #22d3ee;
animation:logoReveal 3s ease;
}

/* Tagline */

.tag{
position:absolute;
margin-top:150px;
font-size:28px;
opacity:0;
animation:fadeTag 2s forwards;
animation-delay:2s;
}

/* Train Animation */

.train{
position:absolute;
bottom:40px;
left:-300px;
font-size:80px;
animation:trainMove 4s linear forwards;
}

/* Animations */

@keyframes logoReveal{

0%{
opacity:0;
transform:scale(0.5);
}

100%{
opacity:1;
transform:scale(1);
}

}

@keyframes fadeTag{

0%{opacity:0}

100%{opacity:1}

}

@keyframes trainMove{

0%{
left:-300px;
}

100%{
left:110%;
}

}

</style>

<script>

setTimeout(function(){
window.location.href="index.php";
},5000);

</script>

</head>

<body>

<div class="logo">SWIFTJOURNEY</div>

<div class="tag">Travel Faster • Swap Tickets Instantly</div>

<div class="train">🚆</div>

</body>

</html>