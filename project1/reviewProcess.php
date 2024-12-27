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
        <!-- <h1>Home</h1> 	 -->
        <img class="image" src="img/coffeeblog.png">
    </header>
    <!-- Main container for sticky footer -->
    <div class="container">
        <!-- Navigation Menu -->
        <?php
        include("includes/topNav.php");
        ?>
        <main>
            <h2 style="text-align: center;">Review</h2>
            <div class="rowform">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Sanitize and retrieve inputs
                    $email = htmlspecialchars($_POST['email']);
                    $orderDate = htmlspecialchars($_POST['orderdate']);
                    //$foodType = isset($_POST['foodtype']) ? $_POST['foodtype'] : "None";
                    $foodTypes = isset($_POST['foodtype']) ? implode(", ", $_POST['foodtype']) : "None";
                    $orderType = htmlspecialchars($_POST['orderType']);
                    $branch = htmlspecialchars($_POST['branch']);
                    $review = htmlspecialchars($_POST['review']);
                    $rating = htmlspecialchars($_POST['range']);

                    // Format the order date to dd/mm/yyyy
                    $formattedOrderDate = date("d/m/Y", strtotime($orderDate));
                    echo "<h2>Thank You For Your Review</h2>";
                    echo "<p><strong>Email:</strong> $email</p>";
                    echo "<p><strong>Order Date:</strong> $formattedOrderDate</p>";
                    echo "<p><strong>Food Types:</strong> $foodTypes</p>";
                    echo "<p><strong>Order Type:</strong> $orderType</p>";
                    echo "<p><strong>Branch:</strong> $branch</p>";
                    echo "<p><strong>Review:</strong> $review</p>";
                    echo "<p><strong>Rating:</strong> $rating</p>";
                }
                ?>
            </div>
        </main>
    </div>
    <p></p>
    <footer class="footer">
        <p><small><i>Copyright &copy; 2024 FCI</i></small></p>
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
    </script>
</body>
</html>