<?php
session_start();
$userId = null;
if ($_SESSION['sid'] != null) {
//    store userId in a global
    $userId = $_SESSION['sid'];
    header("location:  Form.html");
//    redirect to fir.php
} else {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $conn = mysqli_connect("localhost", "root", "", "thefir");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "select * from signup where email = '$email' and password = '$pass'";
    $e = mysqli_query($conn, $sql);// gets store in a query $conn- connection $sql- asked query
    $f = mysqli_num_rows($e);// that whole row gets selected
    $row = mysqli_fetch_array($e,MYSQLI_ASSOC);

    if ($f == 1) {
        $_SESSION['sid'] = $row['Id'];
        header("location: Form.html?sid=" . $_SESSION['sid']);
    } else {
        header("location: userPage.php");
    }
}
exit();
?>