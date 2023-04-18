<!DOCTYPE html>
<html>
<head>
  <title>Barriolert</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style type="text/css">
  body {
      font-family: Arial, sans-serif; /* customize the font as needed */
      margin: 0;
      padding: 0;
    }

    /* Set header styles */
    header {
      background-color: #333; /* customize the background color as needed */
      color: #fff; /* customize the text color as needed */
      padding: 20px; /* add padding as needed */
    }

    /* Set navigation styles */
    nav {
      display: flex;
      justify-content: center;
      background-color: #555; /* customize the background color as needed */
      padding: 10px; /* add padding as needed */
    }

    nav a {
      color: #fff; /* customize the text color as needed */
      padding: 10px; /* add padding as needed */
      text-decoration: none;
    }

    /* Set main content styles */
    main {
      padding: 20px; /* add padding as needed */
    }

    /* Set footer styles */
    footer {
      background-color: #333; /* customize the background color as needed */
      color: #fff; /* customize the text color as needed */
      padding: 20px; /* add padding as needed */
      text-align: center;
    }

    /* Add media queries for responsiveness */
    @media (max-width: 768px) {
      /* Adjust header, navigation, and footer styles for smaller screens */
      header, nav, footer {
        padding: 10px; /* adjust the padding for smaller screens */
      }

      nav a {
        padding: 5px; /* adjust the padding for smaller screens */
      }
    }



    .container {
        max-width: auto; /* adjust the maximum width as needed */
        margin: 0 auto; /* center the container horizontally */
        padding: 20px; /* add padding as needed */
        background-color: #7e6ce0; /* customize the background color as needed */
      }
    
      /* Set text styles inside the container */
      .container p {
        font-size: 16px; /* customize the font size as needed */
        line-height: 1.5; /* customize the line height as needed */
        color: #333; /* customize the text color as needed */
      }
    
      /* Add media queries for responsiveness */
      @media (max-width: 768px) {
        .container {
          padding: 10px; /* adjust the padding for smaller screens */
        }
      }

      body, figure, h1, h2, p, ul, li {
        margin: 0;
        padding: 0;
    }
    
    /* Apply some basic styles */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }
    
    header {
        background-color: #333;
    }

    .hero {
        padding: 100px 0;
        text-align: center;
    }
    
    .hero h1 {
        font-size: 48px;
        margin-bottom: 20px;
    }
    
    .hero p {
        font-size: 18px;
        color: #777;
        margin-bottom: 40px;
    }
    
    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        font-size: 16px;
    }
    
    .cta-button:hover {
        background-color: #777;
    }
    
    .features {
        padding: 80px 0;
        text-align: center;
    }
    
    .features h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .features p {
        font
    }
    
    .li {
        display: inline;
      }

      
            /* Set container for the picture */
            .container2 {
                margin: auto;
                position: relative;
                width: fit-content; /* adjust the width and height as needed */
                height: 200px;
                overflow: hidden;
              }
          
              /* Set the image as the background */
              .container2 img {
                margin: auto;
                width: auto;
                height: auto;
                transition: transform 0.3s ease-in-out;
              }
          
              /* Add the hover effect */
              .container2:hover img {
                transform: translateY(100%); /* adjust the value to control the hover effect */
              }
          
              /* Add caption text at the bottom */

          
              /* Show the caption text on hover */
              .container2:hover .caption {
                opacity: 1;
              }

              .container1 {
                position: relative;
                height: 100vh; /* set the height of the container as needed */
                overflow: hidden;
              }
          
              /* Set background image styles */
              .background-image {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-image: url('pictures/back.jpg'); /* replace with your desired image URL */
                background-size: cover;
                background-position: center center;
                filter: brightness(50%); /* customize the brightness as needed */
              }
          
              /* Set interactive content styles */
              .content {
                position: relative;
                z-index: 1;
                padding: 20px; /* add padding as needed */
                color: #fff; /* customize the text color as needed */
              }
</style>
<body>

  <nav>
    <a href="welcomepage.php"><i class="fa fa-home fa-fw" style="color: #000000;" aria-hidden="true"></i>Home</a>
    <a href="#"><i class="fa solid fa-address-book" style="color: #000000;" aria-hidden="true"></i>About</a>
    <a href="login.php"><i class="fa fa-user fa-fw" style="color: #000000;" aria-hidden="true"></i>Log in</a>
    <a href="signup.php"><i class="fa solid fa-user-plus " style="color: #000000;" aria-hidden="true"></i>Register</a>
  </nav>
  <div class="container1">
    <div class="background-image"></div>
    <div class="content">

  <main>
  </main>
  <div class="container">
    <section class="hero">
        <h1>BARRIOLERT: A
            Localized SMS Notification
            System for Barangays</h1>
        <!-- <p style="color: black;">Sumacab Norte</p> -->
        <a href="signup.php" class="cta-button">Get Started</a>
    </section>
</div>
<div class="container2">
        <!-- <img src="pictures/map.PNG"> -->
        <!-- <div class="caption">Sumacab Norte</div> -->
      </div>

      </div>
  </div>
  <footer>
  <a href="costumerservice.php" class="cta-button">Contact Us</a>
  <p>&copy; 2023 Barriolert. All rights reserved.</p>
  </footer>
</body>
</html>
