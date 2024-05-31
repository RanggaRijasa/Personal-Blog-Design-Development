<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Me - My Personal Blog</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
        body {
            padding-top: 60px; /* Adjust according to navbar height */
            background-color: #f4f4f4; /* Background color */
            color: #0A122A; /* Text color */
            position: relative; /* Add position relative for footer positioning */
            min-height: 100vh; /* Set minimum height to full viewport height */
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #0A122A !important; /* Navbar color */
        }

        .jumbotron {
            background-size: cover;
            background-color: #f8f9fa;
            padding: 100px 0;
            flex: 1;
        }

        #footer {
            background: #0A122A;
            color: #45505b;
            font-size: 14px;
            text-align: center;
            padding: 20px 0;
            margin-top: auto; /* Push the footer to the bottom */
            width: 100%;
        }

        #footer p {
            font-size: 15;
            font-style: italic;
            padding: 0;
            margin: 0 0 40px 0;
        }

        #footer .social-links {
            margin: 0 0 40px 0;
        }

        #footer .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #0563bb;
            color: #fff;
            line-height: 40px; /* Adjust line height to match image height */
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 40px;
            height: 40px;
            transition: 0.3s;
        }

        #footer .social-links a:hover {
            background: #0678e3;
            color: #fff;
            text-decoration: none;
        }

        #footer .credits {
            font-size: 13px;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px; /* Adjust distance from bottom */
            right: 20px; /* Adjust distance from right */
            z-index: 9999; /* Ensure it's above other elements */
        }

        .arrow-icon {
            width: 30px; /* Adjust size of the arrow */
            height: 30px; /* Adjust size of the arrow */
        }

    .navbar {
      background-color: #0A122A !important; /* Navbar color */
    }

    .btn-primary {
      background-color: #804E49;
    }
  </style>
</head>
<body>
<?php
if (!isset($_GET["action"])) {
?>
<form action="page3contacts.php?action=save" method="post">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="page1.html">Rangga's Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="page1.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page2about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page3contacts.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contact Section -->
  <div class="jumbotron">
    <div class="container">
      <h1>Contact Me</h1>
      <p>Feel free to reach out to me if you have any questions or inquiries.</p>
      <form method="post" action="send_email.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <footer id="footer">
    <div class="container">
      <p>Stay connected with us for the latest updates and news. Join our community and explore more with us. Let's create together!</p>
      <div class="social-links">
        <a href="https://github.com/RanggaRijasa" class="Github"><img src="pngimg.com - github_PNG47.png" alt="GitHub" style="width: 40px; height: 40px; margin-bottom: 5.5px;"></a>
        <a href="https://www.instagram.com/rangga_r42/" class="instagram"><img src="social-instagram-new-circle-512.webp" alt="Instagram" style="width: 40px; height: 40px; margin-bottom: 5px;"></a>
        <a href="https://api.whatsapp.com/send?phone=6285241997304" class="Whatsapp"><img src="wa.gif" alt="WhatsApp" style="width: 40px; height: 40px; margin-bottom: 5px;"></a>
      </div>
      <div class="credits">       
        Created by <a href="#">Rangga Rijasa</a>
      </div>
    </div>
  </footer>

  <div class="back-to-top">
    <a href="#top" id="backToTopBtn">
      <img src="uparrowtrans.png" alt="Back to Top" class="arrow-icon">
    </a>
  </div>

  <!-- Bootstrap JS and jQuery (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var backToTopBtn = document.getElementById('backToTopBtn');

      window.addEventListener('scroll', function() {
        // Check if scroll position is at the top
        if (window.pageYOffset === 0) {
          backToTopBtn.style.display = 'none'; // Hide the button
        } else {
          backToTopBtn.style.display = 'block'; // Show the button
        }
      });
    });
  </script>
</form>
<?php
}
else 
{
  // echo "simpan ke database";
  $ServerName = "localhost";
  $userName = "root";
  $password = "rangga123";
  $database = "webdevafl2";
  $conn = new mysqli($ServerName, $userName, $password, $database);

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $sql = "INSERT INTO ContactMe (Name_, Email_, Message_) 
  VALUES ('$name', '$email', '$message');";

  if ($conn->query($sql) === TRUE)
  {
    header("Location: page3contacts.php");
    exit();
  }
  else
  {
    echo "error: " . $sql . "<br>" . $conn->error;
  }

  // if ($conn->connect_error)
  // {
  //     die("Connection failed: ". $conn->connect_error);
  // }
  // else
  // {
  //     echo "Connected Succesfully";
  // }
}
?>
</body>
</html>
