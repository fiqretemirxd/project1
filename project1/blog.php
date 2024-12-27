<?php
//include db config
session_start();
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Product Portfolio Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/newstyle.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <!-- <h1>Home</h1> 	
		<img class="image" src="img/coffeeblog.png"> -->
  </header>
  <!-- User Nav section-->
  <?php
  include("includes/userNav.php");
  ?>
  <!-- Main container for sticky footer -->
  <div class="container">
    <!-- Navigation Menu -->
    <?php
      include("includes/topNav.php");           
      include("userAuth/modalForm.php");
    ?>
    <main>
      <h2 style="text-align: center;">Blog</h2>
      <div class="section" style="text-align: center;">
        Search Blog: <input type="search" name="search" id="search">
      </div>
      <div class="section">
        <table width="100%" border="1" id="blogtable">
          <tr>
            <th style="background-color: #e0e0e0;text-align: center;" colspan="3">Category 1</th>
          </tr>
          <tr>
            <td>Article</td>
            <td>Article</td>
            <td>Video</td>
          </tr>
          <tr>
            <th style="background-color: #e0e0e0;text-align: center;" colspan="3">Category 2</th>
          </tr>
          <tr>
            <td>Video </td>
            <td>Article</td>
            <td>Article</td>
          </tr>
        </table>
      </div>
    </main>
  </div>
  <footer class="footer">
    <p>Copyright &copy; 2024 FCI</p>
  </footer>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navLinks = document.querySelectorAll(".topnav a");
      const currentPath = window.location.pathname;

      navLinks.forEach(link => {
        if (link.href.includes(currentPath)) {
          link.classList.add("active");
        } else {
          link.classList.remove("active");
        }
      });
    });

    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    //Login & Reg Form Popup
		function openLoginPopup() {
			document.getElementById("login-popup").style.display = "block";
			document.getElementById("overlay").style.display = "block";
		}

		function closeLoginPopup() {
			document.getElementById("login-popup").style.display = "none";
			document.getElementById("overlay").style.display = "none";
		}

		function openRegPopup() {
			document.getElementById("reg-popup").style.display = "block";
			document.getElementById("overlay").style.display = "block";
		}

		function closeRegPopup() {
			document.getElementById("reg-popup").style.display = "none";
			document.getElementById("login-popup").style.display = "none";
			document.getElementById("overlay").style.display = "none";
		}
  </script>
</body>

</html>