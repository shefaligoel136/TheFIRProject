<?php
session_start();
$userId = null;
if (isset($_SESSION['admin']) && $_SESSION['admin'] != null) {
//    store userId in a global
    header("location:  adminBlog.php");
//    redirect to fir.php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

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

        .form-container{
            height:500px;
            width:500px;
            margin-left:38%;
            margin-top: 5%;
            position: relative;
            border-radius: 5% 5%;
            display: flex;
            text-align: center;
            color:#20B2AA;

        }

        .container-form-div input{
            width: 350px;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        .container-form-div button{
            background-color: #20B2AA;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 200px;
            margin-bottom:10px;
            opacity: 0.8;
            border-radius: 25% 25% 25% 25%;
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

    <div class="form-container">
        <div class="container-form-div">
            <h4>
                Sign-In to online FIR
            </h4>
            <p>
                Use your email account
            </p>
            <form action="adminLogin.php" method="POST">

                <label for="email"></label>
                <input type="email" placeholder="Email" name="email" id="email"><br>

                <label for="password"></label>
                <input type="password" placeholder="Password" name="password" id="password"><br>


                <button>SIGN-IN</button>
            </form>
        </div>
    </div>

</section>

</body>
</html>