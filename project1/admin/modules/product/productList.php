<?php
//include db config
include("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <title>Product Form</title>
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
        <h2 style="text-align: center;">Manage Product</h2>
        <div class="rowform">
            <?php
            $sql_product = "SELECT p.productID, p.productName, p.productImg, p.categoryID,
            c.categoryID, c.categoryName, p.productQty, p.productPrice 
            FROM product p, category c 
            WHERE p.categoryID = c.categoryID
            ORDER BY p.productID ASC";
            $result = mysqli_query($conn, $sql_product);
            $rowcount = mysqli_num_rows($result);
          
            if ($rowcount > 0) {
                // Start the table
                echo "<table border='1' cellpadding='5' cellspacing='0' width='100%'>";
                echo "<tr>";               
                echo "<th>Product ID</th>";
                echo "<th>Category Name</th>";
                echo "<th>Product Name</th>";
                echo "<th>Product Qty</th>";
                echo "<th>Actions</th>";
                echo "</tr>";

                // Dynamically create html table row based on output data of each row from customer table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";                    
                    echo "<td>" . htmlspecialchars($row["productID"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["categoryName"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["productName"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["productQty"]) . "</td>";
                    echo "<td>";
                    echo "<a href='editProduct.php?id=" . urlencode($row["productID"]) . "'>Edit</a> | ";
                    echo "<a href='deleteProduct.php?id=" . urlencode($row["productID"]) . "' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                echo "</table>";

                // Display row and field counts
                echo "<p>Row Count: $rowcount</p>";
            } else {
                echo "<p>No results found.</p>";
            }

            echo '</div>';
            echo '</div>';
            // Free result set
            mysqli_free_result($result);
            //close connection
            mysqli_close($conn);
            ?>
            <p><a href="<?php echo ADMIN_BASE_URL; ?>">Admin Page</a></p>