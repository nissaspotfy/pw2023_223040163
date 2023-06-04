<?php  
// session_start();

// if( !isset($_SESSION["login"])){
//     header("Location: login.php");
//     exit;
// }
require 'functions.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
</head>

<style>
  .carousel-inner img {
      width: 50%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
</style>
<body>
<!--START NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Hallo, Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php"><i class="fa-solid fa-house"></i></a></li>
        <li class="active"><a href="backend.php"><i class="fa-solid fa-users"></i></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="janji.php"><i class="fa-solid fa-user-plus"></i></span>Tambah Data</a></li>
        <li><a href="login.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--END NAVBAR-->



  <div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="img/profile.jpeg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">masyaallah</span>
          <span class="label label-primary">ruwet</span>
          <span class="label label-success">pusing</span>
          <span class="label label-info">yaaa</span>
          <span class="label label-warning">apahayo</span>
          <span class="label label-danger">haaa</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        jaga kesehatan ya dik adik
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status: Feeling Blue</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>     
            </div>
          </div>
        </div>
      </div>
   
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>spesialis mata</p>
           <img src="img/mata1.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>pasien spesialis mata</p>
            <h2>12</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>spesialis gigi</p>
           <img src="img/gigi2.jpg" class="img-circle" height="55" width="55" alt="gigi">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>pasien spesialis gigi</p>
            <h2>24</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>spesialis anak</p>
           <img src="img/anak1.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>pasien spesialis anak</p>
            <h2>10</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>spesialis umum</p>
           <img src="img/umum1.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>pasien spesialis umum</p>
            <h2>23</h2>
          </div>
        </div>
      </div>     
    </div>
    <div class ="left d-flex"

    

    














    

</body>
</html>
