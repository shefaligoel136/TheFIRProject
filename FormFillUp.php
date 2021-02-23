<?php
session_start();
$userId = null;
if (isset($_SESSION['sid']) && $_SESSION['sid'] != null) {
    $userId = $_SESSION['sid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FIR Form</title>

    <style>
        body {
            margin: 0px;
            font-family: sans-serif;
            font-size: 30px;
        }

        #body-header {
            background-image: url("https://ninjasfiles.s3.amazonaws.com/asset_0000000000000020_1549743985_macbook_mouse.jpg");
            height: 40vh;
            opacity: 0.8;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .horizontal-list {
            list-style: none;
            padding-left: 0px;
            margin: 0px;
        }

        .horizontal-list li {
            display: inline-block;
            margin: 0px 8px 8px 0px;
            font-weight: 100;
            font-size: 0.9rem;
        }

        .text-center {
            text-align: center;
        }

        .horizontal-list li a {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }

        .my-name {
            font-size: 3rem;
            letter-spacing: 0.1rem;
            font-weight: 400;
            margin-bottom: 0.5rem;
            color: white;
        }

        #my-image {
            height: 12rem;
            width: 12rem;
            margin: auto;
            margin-top: -17vh;
        }

        #my-image img {
            height: 100%;
            width: 100%;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 1px 10px 2px lightgrey;
        }

        section {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }


        .heading {
            color: #008080;
            font-size: 30px;
            text-align: center;
            padding: 20px 10px 10px;
            margin: 5px auto;
            font-weight: 600;
        }

        .form-details {
            height: auto;
            width: auto;
            padding-top: 40px;
            line-height: 15px;
            padding-left: 5px;
            text-align: center;
            border: 2px solid #008080;
            color: #008080;
            font-size: 15px;
        }

        .form-details input {
            width: 250px;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        button {
            background-color: #20B2AA;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 200px;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        .myPreviousFir {
            height: 150px;
            width: 40%;
            padding-top: 20px;
            line-height: 15px;
            padding-left: 5px;
            border: 2px solid #008080;
            color: #008080;
            margin-top: 20px;
            display: flex;
            text-align: left;
        }

        table {
            width: 100%;
            height: 100%;
        }

        table th {
            color: #008080;
        }

        table td {
            color: gray;
        }


    </style>

</head>
<body>

<header id="body-header">

    <nav>
        <ul class="horizontal-list text-center nav-menu">

            <li>
                <a href="TheFirstPage.php">Home</a>
            </li>
            <li>
                <a href="#myfir">MY FIR</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div id="name-container">
        <div class="text-center my-name">
            <h3>Online FIR Portal</h3>
        </div>
    </div>
</header>

<div id="my-image">
    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000020_1549743985_macbook_mouse.jpg"
         alt="logo">
</div>

<section id="form-part">
    <h2 class="heading">Fill the form to get the FIR registered.</h2>

    <div class="form-details">
        <form action="firdetail.php" method="post" id="firform" enctype="multipart/form-data">

            DATE: <input type="date" name="date" required>

            Nearest Police-Station: <input type="text" name="nps" required><br>

            TYPE: <input type="text" name="typ" required><br>

            SUBJECT: <input type="text" name="sub" required>

            Documents : <input type="file" name="file"><br>

            <textarea rows="30" cols="70" name="fir" form="firform">
            Write your FIR here...
    </textarea><br><br>

            <button value="FILE">SUBMIT</button>
            <br>
        </form>
    </div>
</section>
<hr>
<section id="myfir">

    <h2 class="heading">MY registered FIR's</h2>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "thefir");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "select subject, status, date from aboutfir where uid = '$userId'";
    $e = mysqli_query($conn, $sql);// gets store in a query $conn- connection $sql- asked query
    if ($e) {
        $tb = "";
        while ($row = mysqli_fetch_array($e, MYSQLI_ASSOC)) {
            $tb = $tb .
                '<div class="myPreviousFir">
        <table>
            <tr>
                <th>Subject:  </th>
                <td>' . $row['subject'] . '</td>
            </tr>
            <tr>
                <th>Date:   </th>
                <td>' . $row['date'] . '</td>
            </tr>
            <tr>
                <th>Status:   </th>
                <td>' . $row['status'] . '</td>
            </tr>
        </table>
    </div>';
        }
        echo $tb;
    }
    ?>

</section>
</body>
</html>