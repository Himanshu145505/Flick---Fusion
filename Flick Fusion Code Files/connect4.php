<?php
session_start();

if (isset($_POST['submit'])) {
    // Included DB connection file
    include 'connect33.php'; 
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);

    // Checking for Sign In

    $sql = "SELECT Email, Password FROM `Data` WHERE Email='{$Email}' AND Password='{$Password}'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error in SQL query: " . mysqli_error($conn);
        exit(); // Stop execution if there's an SQL error
    }

    // After Successfully Login it will redirect to Webmain.html
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['Email'];
        $_SESSION['fname'] = $row['Email'];
        header("location: webmain.html");
        exit(); // Make sure to exit after redirecting
    } else {
        // If the credentials do not match the one that are there in the DB it will throw alert error and redirect back to login page
        echo "<script>
            window.alert('Credentials do not match !!');
            window.alert('Please Try again using Correct Credentials !!');
            window.location.href = 'login.php';

            </script>";

       // echo "Invalid Request";
        


        
        
    }

    // Close the connection
    mysqli_close($conn);
}
?>
