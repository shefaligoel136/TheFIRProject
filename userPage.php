<?php
session_start();
$userId = null;
if (isset($_SESSION['sid']) && $_SESSION['sid'] != null) {
//    store userId in a global
    $userId = $_SESSION['sid'];
    header("location:  Form.html");
//    redirect to fir.php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>

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
            height:700px;
            width:900px;
            margin-left:20%;
            margin-top: 5%;
            position: relative;
            border-radius: 5% 5%;
            display: flex;

        }

        .container-text{
            height: 700px;
            width: 350px;

            border-radius: 5% 0% 0% 5%;
            background-color: #20B2AA;
            color: white;
            text-align: center;

        }

        .container-form{
            height: 700px;
            width: 550px;
            border-radius: 0% 5% 5% 0%;
        }

        .container-text div{
            padding-top: 225px;
        }

        .container-form-div{
            padding-top: 60px;
            line-height: 15px;
            padding-left: 10px;
            text-align: center;
        }

        .container-form-div h4{
            color:#20B2AA;

        }

        .container-form-div p{
            color:grey;

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

        .container-text button{
            background-color: transparent;
            color: white;
            padding: 16px 20px;
            border: 1px solid white;
            cursor: pointer;
            width: 200px;
            margin-bottom:10px;
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
            <li>
                <a href="#faq">FAQ</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
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
<section id="form-setup">
    <div class="form-container">

        <div class="container-text">
            <div>
                <h5>
                   In trouble again?
                </h5>
                <p style="font-size: medium">
                    We are here to help you out! Login.
                </p>
                <button type="submit" id="submit-form">
                    Sign-In
                </button>
            </div>
        </div>

        <div class="container-form">
            <div class="container-form-div">
                <h4>
                    Create account
                </h4>
                <p>
                    Use email for registration
                </p>
                <br>
                <br>
                <form action="signUser.php" method="post">
                    <label for="first_name"></label>
                    <input type="text" placeholder="First Name" name="first_name" id="first_name"required><br>

                    <label for="last_name"></label>
                    <input type="text" placeholder="Last Name" name="last_name" id="last_name"required><br>

                    <label for="email"></label>
                    <input type="email" placeholder="Email" name="email" ><br>

                    <label for="password"></label>
                    <input type="password" placeholder="Password" name="password"><br>

                    <label for="aadhar"></label>
                    <input type="numbers" placeholder=" aadhar" name="aadhar" id="aadhar"><br>

                    <label for="phone"></label>
                    <input type="numbers" placeholder="Phone Number" name="phone" id="phone"><br>

                    <label for="address"></label>
                    <input type="text" placeholder="address" name="address" id="address"><br>

                    <label for="pincode"></label>
                    <input type="numbers" placeholder="pincode" name="pincode" id="pincode"><br>

                    <button>SIGN-UP</button>
                </form>
            </div>
        </div>

        <div class="container-form">
            <div class="container-form-div">
                <h4>
                    Sign-In to online FIR
                </h4>
                <p>
                    Use your email account
                </p>
                <br>
                <br>
                <form action="loginUser.php" method="post">

                    <label for="email"></label>
                    <input type="email" placeholder="Email" name="email" id="email"><br>

                    <label for="password"></label>
                    <input type="password" placeholder="Password" name="password" id="password"><br>


                    <button>SIGN-IN</button>
                </form>
            </div>
        </div>

        <div class="container-text">
            <div>
                <h5>
                    In trouble?
                </h5>
                <p style="font-size: medium">
                    Enter your details and get the FIR Lodged
                </p>
                <button type="submit">
                    SIGN-UP
                </button>
            </div>
        </div>

    </div>
</section>

</body>
</html>