<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

<style>
    body{
      background-color: #e1e6e3;
    }
    
    #user{
      border: solid black 1px;
      height: 50%;
      max-width: 500px;
      margin: auto;
      margin-top: 5%;
      background-color: #edf4f5;
      border-radius: 25px;
      padding: 20px;
    }

    .input{
      border-radius: 5px;
    }
    .form-control label {
			display: block;
		}
    .form-control input{
			border: 1px solid black #777;
			border-radius: 5px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		.form-control input[type="radio"] {
			display: inline-block;
			width: auto;
		}
    .form-control{
      background-color: #edf4f5;
      border-color: #edf4f5 ;
    }
<?php
require_once 'signupconn.php';
?>
</style>
</head>
<body>
<div id = "user" class="form-control">
    <form action="signupland.php" method="post">
        <h1 style="text-align:center; margin-top: none;">REGISTER</h1>
        <p style="text-align: center;">please fill up the form below.</p>
        <hr>
        <div class="form-control">
        <label style="margin-left: 10px;" ><strong>Username</strong></label>
        <input type="text" name="username" style="margin: 10px;" class="input" required>
        <label style="margin-left: 10px;"><strong>Password</strong></label><br>
        <input type="password" name="password" style="margin: 10px; " class="input" required><br>
        </div>
        
        <div style="align-items:center;">
        <input type="submit" name="signupuser" style="margin: 10px auto; width: 50%" class="btn btn-success" value="Register">
        </div> 
    </form>

</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>