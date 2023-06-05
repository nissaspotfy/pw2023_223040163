<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}


?>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

.container {
  position: relative;
  width: 100%;
  max-width: 300px;
  height: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Image Overlay Title</h2>
<p>Hover over the image to see the effect.</p>

<div class="container">
  <img src="img/dok1.jpg" alt="Avatar" class="image">
  <div class="overlay">My Name is John</div>
</div>

</body>
</html>
