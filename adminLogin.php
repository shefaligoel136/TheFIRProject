<?php
session_start();

$email = $_POST["email"];
$pass = $_POST["password"];

$conn= mysqli_connect("localhost","root","","thefir");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from loginadmin where email = '$email' and pass = '$pass'";
$e= mysqli_query($conn,$sql);// gets store in a query $conn- connection $sql- asked query
$f = mysqli_num_rows($e);// that whole row gets selected
$row=mysqli_fetch_array($e,MYSQLI_ASSOC);

if($f==1)
{
    $_SESSION['sid'] = $row['id'];
    $_SESSION['admin'] = 1;

    header("location: adminBlog.php");
}
else{
    header("location: adminPage.php");
}

?>
