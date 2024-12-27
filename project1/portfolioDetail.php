<?php
//include db config
session_start();
include("config/config.php");

if(isset($_GET['id'])){
	$productID = $_GET['id'];
	$sql_product = "SELECT * FROM product WHERE productID = $productID";
}

$result = mysqli_query($conn, $sql_product);
$rowcount = mysqli_num_rows($result);
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
  <style>       
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 20px;
        }

        .product-card {
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .product-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
            color: #333;
        }

        .product-card p {
            font-size: 0.9em;
            color: #666;
            margin: 0 10px 10px;
        }
    </style>
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
    <h2 style="text-align: center;">Product Details</h2>
    <div class="section">
      <table border="1" align="center">
        <tr>
          <td><a href="portfolio.php?cat=0">All</a></td>
          <td><a href="portfolio.php?cat=1">Action</a></td>
          <td><a href="portfolio.php?cat=2">Romance</a></td>
          <td><a href="portfolio.php?cat=3">Sci-Fi</a></td>
        </tr>
      </table>
    </div>
    <div class="product-container">
        <?php
        if ($rowcount > 0) { 
            // Output each product
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product-card">';
                echo '<img src="' . $row["productImg"] . '" alt="' . $row["productName"] . '">';
                echo '<h3>' . $row["productName"] . '</h3>';
                echo '<p> RM ' . $row["productPrice"] . '</p>';
                echo '<form method="post" action="cart_action.php?action=add&id=' . $row['productID'] . '">
                <input type="number" name="quantity" value="1" min="1" max="999"/>
                <button type="submit"><i class="fa fa-shopping-cart" style="font-size:20px"></i></button>
                </form>';
                echo '<br></div>';
            }
        } else {
            echo "No products found.";
        }
       // Free result set
      mysqli_free_result($result);
      //close connection
      mysqli_close($conn);
        ?>
    </div>

  </main>  
  </div>
  <footer class="footer">
		<p>Copyright &copy; 2024 FCI</p>
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
	</script>
</body>
</html>