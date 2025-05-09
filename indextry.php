<?php
// Error reporting level ko set karein
error_reporting(E_ALL);

// Error ko display karne ki settings ko enable karein
ini_set('display_errors', 1);

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "sequelmysql";
$database = "signUpForm";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
    // Fetching data from the database
    $query = "SELECT * FROM index_page";
    $result = mysqli_query($connection, $query);

    // Checking if there are any rows returned
    if(mysqli_num_rows($result) > 0) {
        // Loop through each row
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="box">';
            echo '<img src="' . $row['image_url'] . '" alt="">';
            echo '<h2>' . $row['content_name'] . '</h2>';
            echo '<p>' . $row['content_description'] . '</p>';
            echo '</div>';
        }
    } else {
        echo 'No data found.';
    }
} catch (Exception $e) {
    // Exception ko handle karne ke liye
    echo "Error: " . $e->getMessage();
}

// Close the database connection
mysqli_close($connection);
?>
