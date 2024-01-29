<?php
// Include the file that establishes a database connection
include('connect.php');

// Start a PHP session
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the username and password from the submitted form
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    // Construct an SQL query to check for matching username and password in the 'userlogin' table
    $sql = "SELECT * FROM userlogin WHERE username='$uname' AND password='$pword'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch the associative array representing the first row of the result set
        $row = mysqli_fetch_assoc($result);

        // Check if a row was returned (username and password match)
        if ($row) {
            // Set the 'login_user' session variable with the username
            $_SESSION['login_user'] = $uname;

            // Redirect to the 'welcome.php' page
            header("location: welcome.php");
            exit(); // Stop further execution of the script
        } else {
            // Redirect to 'main.php' with an error message for invalid username or password
            header("location: main.php?msg=Invalid username or password");
            exit();
        }
    } else {
        // Display an error message if the query encounters an error
        echo "Error: " . mysqli_error($conn);
        exit();
    }
} else {
    // Handle the case where the form was not submitted
    header('Location: main.php');
    exit();
}
?>
