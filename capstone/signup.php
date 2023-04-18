<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

<!-- <button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button> -->

</head>
<body>
<style>
    body{
      background-color: #e1e6e3;
    }
    #sign{
      border: solid black 1px;
      height: 50%;
      max-width: 500px;
      border-radius: 25px;
      background-color: #edf4f5;
      margin: auto;
      margin-top: 5%;
      margin-bottom: 5%;
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

    <div id="sign" class="container-fluid form-control ">
        <form action="signupuser.php" method="POST" id="form"><br>
        <h1 style="text-align:center; margin-top: none;">REGISTER</h1>
        <p style="text-align: center;">please fill up the form below.</p>
        <hr>
        <div class="form-control">
        <label style="margin-left: 10px;" ><strong>Full Name</strong></label><br>
        <input type="text" name="first" placeholder="First Name" style=" margin: 9px;" class="input" required>
        <input type="text" name="middle" placeholder="Middle Name" style=" margin: 9px;" class="input" required>
        <input type="text" name="last" placeholder="Last Name"style=" margin: 9px;" class="input" required><br>

        </div>
        <div class="form-control">
        <label style="margin-left: 10px;" ><strong>Gender</strong></label><br>
        <input type="radio" name="gender" value="Male" style="margin: 10px;margin-left: 50px;" required>Male<br>
        <input type="radio" name="gender" value="Female" style="margin: 10px; margin-left: 50px;" required>Female<br>
        
        </div>
        <div class="form-control">
        <label style="margin-left: 10px;" ><strong>Birthday</strong></label><br>
        <input type="date" id="birthday" name="birthday" style="margin: 10px;border-radius: 5px;" required><br>
        </div>
        <div class="form-control">        
        <label style="margin-left: 10px;" ><strong>Phone Number</strong></label><br>
        <input type="tel" placeholder= "Number"name="phone" style="margin: 10px;" class="input" required><br>
        </div>
        <div class="form-control">
        <label style="margin-left: 10px;" ><strong>Position</strong></label><br>
        <select name="position" style="margin: 10px; border-radius: 5px; border:black 2px; border-style: inset;">
          <option value="captain">Barangay Captain</option>
          <option value="secretary">Barangay secretary</option>
          <option value="treasurer">Barangay treasurer</option>
          <option value="councilor">Barangay councilor</option>
          <option value="sk chairman">SK chairman</option>
          <option value="sk councilor">SK councilor</option>
        </select><br>
        </div>
        <div>
        <input type="reset" name="reset" value="Clear" style="margin: 10px auto; width: 50%" class="btn btn-danger">
        <input type="submit" name="signup" style="margin: 10px auto; width: 50%" class="btn btn-success" value="Next">
        </div>  
      </form>

    </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>