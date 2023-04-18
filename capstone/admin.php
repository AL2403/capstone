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
      max-width: 990px;
      margin: 1% 1% 1% 1%;
      background-color: #edf4f5;
      padding: 20px;
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
    .suggest{
      margin-left: 50%;
      width: 100px;
    }
    #recipients{
      width: 90%;
      height: 40px;
      font-size: 16px;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 5px;
      margin-bottom:1%;
      margin-top: 1%;
    }
    #message{
      width: 90%;
      height: 70%;
      font-size: 16px;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 5px;
      resize:none;
      margin-left: 80px;
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
            <a class="nav-link"><button type="button" class="side btn btn-outline-info" style="margin-top: 15%;">New Message</button></a>

            <a class="nav-link" href="sent.php"><button type="button" class="side btn btn-outline-info">Sent Message</button></a>
            <a class="nav-link" href="residents.php"><button type="button" class="side btn btn-outline-info">Residents</button></a>
            <a class="nav-link" href="settings.php"><button type="button" class="side btn btn-outline-info">Settings</button></a>
            <a class="nav-link" href="logout.php"><button type="button" class="side btn btn-outline-info">Log Out</button></a>
            <!-- <a class="nav-link" href="#"><button type="button" class="side btn btn-outline-info">Info</button></a> -->
          </div>

            <div class="col" id="col" style="background-color: grey;">
                <?php
                  session_start()
                  // $_SESSION['recipients'] = $_POST['recipients']; 
                  // $_SESSION['message'] = $_POST['message'];
                    // // Connect to database
                    // require_once 'dbconn.php';

                    // // Retrieve data from database
                    // $sql = "SELECT Phone FROM residents";
                    // $result = $conn->query($sql);

                    // $data = array();

                    //   if ($result->num_rows > 0) {
                    //       // Output data of each row
                    //       while($row = $result->fetch_assoc()) {
                    //       $data =  $row["Phone"]; 
                    //       echo $data. " ";

                    //       }
                    //     }
               

                  ?>

        <form class="form-control" id="send" method="POST" action="send.php">
                  <label>Recipients: </label>
                  <input type="tel" name="recipients" id="recipients" value=""><br>
                  <label style="margin-right: 1%;">Message:</label><br>
                  <textarea name="message" id="message"></textarea>
                  <!-- <input type="text" name="message" id="message" style="max-height: 50%;"> -->
                  <div style="text-align: right; margin-right: 5% ;">
                    <input type="submit" name="submitmes" style="border-radius: 5px;" value="send">   
                  </div>
              </form>

            </div>

          <div class="col" id= "suggest">
            <h5>Shortcuts:</h5>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" style="margin-top: 15%;" name="all">ALL</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Purok 1</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Purok 2</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Purok 3</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Purok 4</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Purok 5</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Purok 6</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Senior Citizens</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">18+</button>
            <button type="button" class="suggest btn btn-outline-dark btn-sm" name="">Teens</button>                       
          </div>

      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
