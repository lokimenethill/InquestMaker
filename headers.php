<?php
 $connection= new mysqli("127.0.0.1","root", "","inquestmaker");
 session_start();
 $questions=["¿Que te parecio la organizacion de este evento?","¿Que te parecio la calidad de el/la/las/los ponente(s)?","¿Que te parecio la estadia en el evento?"];
 $answers=["Muy bueno","Bueno","Malo","Muy Malo"];
 $devmode=true;
?>
<link href="https://bootswatch.com/5/vapor/bootstrap.css" rel="stylesheet" >
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquest Maker</title>
</head>
<body>
<?php
if($devmode==true){
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">InquestMaker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./stats.php">Stats</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
}
?>