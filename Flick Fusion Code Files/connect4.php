<?php
session_start();

if (isset($_POST['submit'])) {
    include 'connect33.php'; // Correct include statement for database connection details
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT Email, Password FROM `Data` WHERE Email='{$Email}' AND Password='{$Password}'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error in SQL query: " . mysqli_error($conn);
        exit(); // Stop execution if there's an SQL error
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['Email'];
        $_SESSION['fname'] = $row['Email'];
        header("location: webmain.html");
        exit(); // Make sure to exit after redirecting
    } else {
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
