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
      <h2 style="text-align: center;">Review</h2>
      <div class="rowform">
        <form action="reviewProcess.php" method="post" name="reviewForm">
          <p>Email : <input type="email" name="email" id="email" required></p>
          <p>Order date : <input type="date" id="orderdate" name="orderdate" required></p>
          <p>Food Type : <input type="checkbox" name="foodtype[]" value="breakfast"> Breakfast
            <input type="checkbox" name="foodtype[]" value="lunch"> Lunch
            <input type="checkbox" name="foodtype[]" value="dinner"> Dinner
          <p>Order type : <input type="radio" name="orderType" value="takeaway" id="takeaway" checked>
            <label for="takeaway"> Takeaway</label>
            <input type="radio" name="orderType" value="dineIn" id="dineIn">
            <label for="dineIn"> Dine-In</label>
          </p>
          <p>Branch : <select name="branch" required>
              <option value="">- Please Select -</option>
              <option value="KK">Kota Kinabalu</option>
              <option value="Sandakan">Sandakan</option>
            </select></p>
          <p>Review: <br><textarea id="review" name="review" rows="4" cols="50" required></textarea>
          </p>
          <p>
            <label for="range">Rating (1-5):</label>
            <input type="range" name="range" id="range" min="1" max="5">
          </p>
          <input type="submit" value="Submit">
          <input type="reset" value="Reset">
        </form>         
        <!-- <p id="output" style="color:red;"></p> -->
      </div>
    </main>
  </div>
  <p></p>
  <footer class="footer">
    <p><small><i>Copyright &copy; 2024 FCI</i></small></p>
  </footer>

  <script>
    
    document.addEventListener("DOMContentLoaded", function () {
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