<?php
include("config/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_BASE_URL; ?>/css/admin.css">
</head>
<body>
    <div class="topNav">
        <img src="<?php echo ADMIN_BASE_URL; ?>/img/icon.png" alt="Logo">
        <h2>Welcome to Admin Panel</h2>
        <a href="login.php">
            <i class="fa fa-sign-in" style="font: size 12px;"></i> Login
        </a>
    </div>
    <?php include 'includes/sideNav.php'; ?>

    <script>
        /* JS for dropdown content */
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