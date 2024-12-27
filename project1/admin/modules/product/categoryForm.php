<?php
include("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" type="text/css" href="../../css/admin.css">
  <title>Category Form</title>
</head>

<body>
  <div class="topNav">
    <img src="../../img/icon.png" alt="Logo">
    <a href="login.php">
      <i class="fa fa-sign-in" style="font: size 12px;"></i> Login
    </a>
  </div>

  <?php
  include '../../includes/sideNav.php';
  ?>
  
  <div class="main">
    <h2 style="text-align: center;">Category Form</h2>
    <div class="rowform">
      <form action="insertCategory.php" method="POST" enctype="multipart/form-data">
        <label for="categoryName">Category Name:</label>
        <input type="text" id="categoryName" name="categoryName" required><br><br>

        <label for="categoryDesc">Category Description:</label>
        <input type="text" id="categoryDesc" name="categoryDesc" required><br><br>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>