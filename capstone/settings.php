<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
            <style>
    body{
      background-color: #e1e6e3;
    }
    
   #col{
      border: solid black 1px;
      height: 480px;
      max-width: 90%;
      margin: 1% 1% 1% 1%;
      padding: 20px;
      border-radius: 5px;
    } 
    #side{
      border-right: solid black 1px;
      max-width: 10%;
      max-height: 100%;

    }
    .btn{
      margin-bottom: 10px;
      margin-top: 1%;
    }
    #suggest{
      max-width: 5%;
      border-left: solid black 1px;
    }
    .side{
      height: 60px;
      width: 100px;
      border: none;
      border-bottom: solid grey 1px;
      border-radius: 0px;
      color: deepskyblue;
    }
    #header{
      border-bottom: solid grey; 1px;
    }
    #dropdownMenuClickableInside{
      background-color: #e1e6e3; 
      color: black; 
      border: none; 
      margin-top: 10%;
    }
    #send{
      height: 100%;
      margin-bottom: 10px;
      margin-top: none;
    }
    #body{
      background-color: #edf4f5; 
      height: 99%; 
      width: 99%; 
      margin-left: 5px; 
      border-radius: 5px;
    }

  </style>
  <title>
    Barriolert
  </title>
</head>

<body>
<div class="form-control" style="background-color: #e1e6e3">
  

  <div id="header">
    <!-- <h1 style="margin-left:1%;">Barriolert</h1> -->
        <img src="pictures/barriolert.png" class="card-img-top" alt="Barriolert" style="max-height: 5%; max-width:13%; margin-left:1%;">
    <div class="btn-group" style="text-align: right;">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        Clickable inside
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
        <li><a class="dropdown-item" href="#">Menu item</a></li>
        <li><a class="dropdown-item" href="#">Menu item</a></li>
        <li><a class="dropdown-item" href="#">Menu item</a></li>
      </ul>
    </div>
  </div>

  <br>
  <div class="form-control" style=" margin-left:1%; max-width: 98%; max-height: 99%;">
    <div>
      <div class="row">

          <div class = "col" id="side">
            <a class="nav-link" href="admin.php"><button type="button" class="side btn btn-outline-info" style="margin-top: 15%;">New Message</button></a>

            <a class="nav-link" href="sent.php"><button type="button" class="side btn btn-outline-info">Sent Message</button></a>
            <a class="nav-link" href="residents.php"><button type="button" class="side btn btn-outline-info">Residents</button></a>
            <a class="nav-link" href="settings.php"><button type="button" class="side btn btn-outline-info">Settings</button></a>
            <a class="nav-link" href="logout.php"><button type="button" class="side btn btn-outline-info">Log Out</button></a>
            <!-- <a class="nav-link" href="#"><button type="button" class="side btn btn-outline-info">Info</button></a> -->
          </div>

            <div class="col" id="col" style="background-color: grey;">

              <div id = "body">
                <?php 
                include_once 'settings1.php';
                ?>
                
              </div>

            </div>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
