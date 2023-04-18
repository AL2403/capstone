<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
    #survey{
      border: solid black 1px;
      height: 50%;
      max-width: 500px;
      margin: auto;
      margin-top: 5%;
      margin-bottom:5% ;
      background-color: #edf4f5;
      border-radius: 25px;
      padding: 20px;
    }
    body{
      background-color: #e1e6e3;
    }
    .input{
      border-radius: 5px;

    }    .form-control label {
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
<div id="survey" class="container-fluid form-control" >
  <form action="surveyland.php" method= "POST">
    <h1 style="text-align:center;">Barangay Residents</h1>
    <p style="text-align:center;">please provide the information needed below.</p>
    <hr>
    <div class="form-control">
    <label style="margin-left: 10px;" ><strong>Full Name</strong></label><br>
    <input type="text" name="firstsur" placeholder="First Name" style=" margin: 9px;" class="input" required>
    <input type="text" name="middlesur" placeholder="Middle Name" style=" margin: 9px;" class="input" required>
    <input type="text" name="lastsur" placeholder="Last Name"style=" margin: 9px;" class="input" required><br>
    </div>

    <div class="form-control">
        <label style="margin-left: 10px;" ><strong>Gender</strong></label><br>
        <input type="radio" name="gendersur" value="Male" style="margin: 10px;margin-left: 50px;" required>Male<br>
        <input type="radio" name="gendersur" value="Female" style="margin: 10px; margin-left: 50px;" required>Female<br>
    </div>

    <div class="form-control">
    <label style="margin-left: 10px;" ><strong>Birthday</strong></label><br>
    <input type="date" id="birthday" name="birthdaysur" style="margin: 10px;border-radius: 5px;" required><br>
    </div>
      
    <div class="form-control">        
    <label style="margin-left: 10px;" ><strong>Phone Number</strong></label><br>
    <input type="tel" placeholder= "Number"name="phonesur" style="margin: 10px;" class="input" required><br>
    </div>

    <div class="form-control">        
    <label style="margin-left: 10px;" ><strong>Purok</strong></label><br>
    <input type="number" placeholder= "Purok"name="puroksur" style="margin: 10px;" class="input" required><br>
    </div>

    <input type="submit" name="survey" value="Continue" style="margin: 10px auto; width: 50%" class= "btn btn-success">   
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>