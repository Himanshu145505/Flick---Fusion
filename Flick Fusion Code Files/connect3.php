<!--Connectivity Details -->

<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];

// Connectivity Check

$conn = new mysqli('127.0.0.1:3308', 'root', '', 'OTTPLAT');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Insertion of registration data into database
    $stmt = $conn->prepare("insert into Data(Name, Email, Password, ConfirmPassword) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Name, $Email, $Password, $ConfirmPassword);
    $execval = $stmt->execute();

    if ($execval) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }

    $stmt->close();
    $conn->close();
}
?>
