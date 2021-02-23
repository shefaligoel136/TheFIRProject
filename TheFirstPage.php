<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File FIR</title>

    <style>

        body {
            margin: 0px;
            font-family: sans-serif;
            font-size: 30px;
        }

        #body-header {
            background-image: url("https://ninjasfiles.s3.amazonaws.com/asset_0000000000000020_1549743985_macbook_mouse.jpg");
            height: 65vh;
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

        .nav-menu li a {
            transition: color 0.5s;
            border-bottom: 4s;
        }

        .nav-menu li a:hover {
            color: lightgrey;
            border-bottom: 1px solid white;
        }

        #name-container {
            margin-top: 12vh;
        }

        .my-name {
            font-size: 3rem;
            letter-spacing: 0.1rem;
            font-weight: 700;
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

        #about-para {
            padding: 10px;
            width: 70%;
            text-align: justify;
            color: grey;
            line-height: 28px;
            font-size: 1.1rem;
            margin: auto;
        }

        .section-heading {
            color: #008080;
            font-size: 30px;
            text-align: center;
            padding: 20px 10px 10px;
            margin: 5px auto;
            font-weight: 600;
        }

        section {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }

        section:nth-child(2n+1) {
            background-color: lightgrey;
        }

        section:nth-child(2n) {
            background-color: white;
        }

        #lodging-made-easy ol {
            font-size: 25px;
            color: gray;
            line-height: 39px;
            margin-left: 20px;
        }

        .steps-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 75%;
        }

        #steps {
            width: 240px;
            height: auto;
            padding: 5px;
        }

        #steps h3 {
            color: #20B2AA;
            font-size: 20px;
        }

        #steps p {
            color: grey;
            font-size: 20px;
        }

        #my-profile {
            color: white;
            top: -29px;
            right: 10px;
            position: absolute;
            z-index: 1;
            transition: color 0.5s;
            border-bottom: 4s;
            font-weight: 200;
            cursor: pointer;
        }

        #my-profile a {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }

        #profile-popup:target {
            max-width: 300px;
            padding: 10px;
            background-color: lightgray;
            height: auto;
            width: 30%;
        }


        #profile-popup {
            height: 0;
            width: 0;
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            transition: all 2s ease-in-out;
        }

        #my-profile button {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
        }

        .review_box{
            height:auto;
            width:250px;
            display: flex;
        }
    </style>
</head>
<body>
<header id="body-header">

    <nav>
        <ul class="horizontal-list text-center nav-menu">

            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#review">Reviews</a>
            </li>
            <li>
                <a href="faq.html">FAQ</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>
    <div id="my-profile">
        <p><a href="#profile-popup">My Profile</a></p>
        <div id="profile-popup">
            <a href="#" style="color:rosybrown;font-weight: bold;">X</a>
            <form action="adminPage.php">
                <button type="submit">
                    I am Admin
                </button>
            </form>

            <br>
            <form action="userPage.php">
                <button type="submit">
                    I am User
                </button>
            </form>

        </div>
    </div>
    <div id="name-container">
        <div class="text-center my-name">
            <h2>Online FIR Portal</h2>
        </div>
    </div>
</header>

<section id="about">
    <div id="my-image">
        <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000020_1549743985_macbook_mouse.jpg"
             alt="logo">
    </div>

    <div id="about-para">
        <p>
            A first information report (FIR) is a written document prepared by police organizations in countries A first
            information report (FIR) is a written document prepared by police organizations in countries when the police
            receives information about any criminal offence. It is generally a complaint lodged with the police by the
            victim of a cognizable offense or by someone on his or her behalf, but anyone can make such a report either
            orally or in writing to the police. Investigating work of the police starts after an FIR is recorded
            For a non-cognizable offense a community service register is created and registered.
            FIR is an important document because it sets the process of criminal justice in motion. It is only after the
            FIR is registered in the police station that the police take up investigation of the case. Anyone who knows
            about the commission of a cognizable offence, including police officers, can file an FIR
        </p>
    </div>
</section>

<section id="lodging-made-easy">
    <h3 class="section-heading">
        <u> Lodging a FIR made easy.</u>
    </h3>

    <ol>
        <li>No need to go to the police station for lodging the FIR.</li>

        <li> No standing in queues.</li>

        <li> Easy registration.</li>

        <li>Tracking the status made easy.</li>

        <li>The police are not here to create disorder,they're here to preserve disorder</li>
    </ol>
</section>

<section id="steps-to-lodge">
    <h3 class="section-heading">
        <u> Steps to file FIR.</u>
    </h3>
    <div class="steps-container">
        <div id="steps">
            <h3>
                1. Register with us
            </h3>

            <p>
                You need to first register your self as online FIR client only then can you proceed further.
            </p>
        </div>

        <div id="steps">
            <h3>
                2.File the complain
            </h3>

            <p>
                You will then have to give your personal information, and the facts regarding the FIR
            </p>
        </div>

        <div id="steps">
            <h3>
                3. Track the status
            </h3>

            <p>
                After filing the FIR you can now see it in My FIR's and track your FIR
            </p>

        </div>

        <div id="steps">
            <h3>
                4. Provide Feedback
            </h3>

            <p>
                When you get your compain resolved please give us feedback.
            </p>

        </div>
    </div>
</section>

<section id="review">
    <h3 class="section-heading">
        <u> Reviews/Feedback.</u>
    </h3>
    <div class="review_box">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "thefir");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT feedback.feedback as FEEDBACK , signup.FIRST_NAME as FIRST_NAME , signup.LAST_NAME as LAST_NAME  FROM `feedback` JOIN signup ON feedback.user_id = signup.Id";

    $e = mysqli_query($conn, $sql);
    if ($e) {
        $tb = "<table>";
        while ($row = mysqli_fetch_array($e, MYSQLI_ASSOC)) {
            $tb = $tb .
                "<tr>
                <td style='color: #008080;text-transform: capitalize;font-size: 25px;font-weight: 200;text-decoration: underline'>" . $row['FIRST_NAME'] . " " . $row['LAST_NAME'] .":". "</td>
                </tr>
                <tr>
                <td style='color: gray;font-size: 20px;font-weight: 100''>" . $row['FEEDBACK'] . "</td>
                </tr>";
        }
        echo $tb . "</table>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    </div>
</section>

<section id="contact">
    <h3 class="section-heading">
        <u> Contact.</u>
    </h3>

    <table>
        <tr>
            <td>
<span style="color:silver">8/10,, W-1, Juhi Kalan, Saket Nagar, Kanpur, Uttar Pradesh 208014<br><br>
Dr.Virendra Swarup Institute of Computer Studies.</span>
            </td>
            <td>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td>
    <span style="color:silver">
        logdeonlineFIR@gmail.com &nbsp&nbsp| **********<br>
        Terms and Conditions&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|Copyright LogdeOnlineFIR 2018
    </span>
            </td>
        </tr>
    </table>
</section>

</body>
</html>
