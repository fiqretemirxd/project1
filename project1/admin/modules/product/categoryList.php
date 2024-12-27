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
        <h2 style="text-align: center;">Manage Category</h2>
        <div class="rowform">
            <?php
            $sql_product = "SELECT categoryID, categoryName, categoryDesc
            FROM category 
            ORDER BY categoryID ASC";
            $result = mysqli_query($conn, $sql_product);
            $rowcount = mysqli_num_rows($result);
          
            if ($rowcount > 0) {
                // Start the table
                echo "<table border='1' cellpadding='5' cellspacing='0' width='100%'>";
                echo "<tr>";               
                echo "<th>Category ID</th>";
                echo "<th>Category Name</th>";
                echo "<th>Category Description</th>";
                echo "<th>Actions</th>";
                echo "</tr>";

                // Dynamically create html table row based on output data of each row from customer table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";                    
                    echo "<td>" . htmlspecialchars($row["categoryID"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["categoryName"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["categoryDesc"]) . "</td>";
                    echo "<td>";
                    //echo "<a href='editCategory.php?id=" . urlencode($row["categoryID"]) . "'>Edit</a> | ";
                    echo "<a href='manageCategory.php?id=" . urlencode($row["categoryID"]) . "' onclick='return confirm(\"Are you sure you want to delete this category?\");'>Delete</a>";
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