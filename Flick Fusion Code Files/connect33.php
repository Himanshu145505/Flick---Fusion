<!-- DB Connection Establish--->

<?php
$conn=mysqli_connect("127.0.0.1:3308","root","","OTTPLAT");
if($conn){
    echo "";
}
else{
    echo "Connection Failed!";
    die();
}



?>
