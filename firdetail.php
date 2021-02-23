<?php
session_start();
    $sid_val = $_SESSION['sid'];
    $date = $_POST["date"];
    $nps = $_POST["nps"];
    $type = $_POST["typ"];
    #$status = $_POST["status"];
    $subject = $_POST["sub"];
    $fir = $_POST["fir"];

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf','jpg','png');

    if(in_array($fileActualExt,$allowed)) {
        if($fileError === 0){
            if($fileSize<100000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                #header("location:firdetails.php?uploadSuccess");
            }
            else{
                echo'Your file is too big !!';
            }
        }
        else{
            echo'Error !!';
        }
    }
    else{
        echo 'files of this typeis not allowed';
    }


    $conn = mysqli_connect("localhost", "root", "", "thefir");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO aboutfir(uid,status,subject,documents,date,nps,type,fir) VALUES('$sid_val','unSolved','$subject','$fileDestination','$date','$nps','$type','$fir')";

    if (mysqli_query($conn, $sql)) {
        header("FormFillUp.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);
?>
