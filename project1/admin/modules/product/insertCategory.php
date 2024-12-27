<?php
//include db config
include("../../config/config.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryName = $_POST['categoryName'];
    $categoryDesc = $_POST['categoryDesc'];
     
        $sql = "INSERT INTO category (categoryName, categoryDesc) 
        VALUES ('$categoryName', '$categoryDesc')";
    
        if (mysqli_query($conn, $sql)) {
        echo "<br>New product record created successfully";
        echo "<br><a href='" . ADMIN_BASE_URL . "'>Back to Admin Panel</a>";
        } else {
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
        }

}
mysqli_close($conn);
?>

