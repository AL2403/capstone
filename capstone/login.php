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
    
    #log{
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

</style>
</head>
<body>
    <div id = "log" style="text-align: center;">
        <H1 style="text-align:center;">LOG IN</H1>
        <p>please log in to continue</p>
        <hr>
        <div  class = "form-control">
          <form action="admin.php" method="post">
            <input type="text" name="usernamelog" style="margin: 10px; float: center;" class="input" placeholder="Username" required>
            <input type="password" name="passwordlog" style="margin: 10px; float: center;" class="input" placeholder="Password" required><br>
            <input type="submit" name="login" value="Continue" class= "btn btn-success">   
          </form>

        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>