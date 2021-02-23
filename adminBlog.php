<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Blog</title>
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
                <a href="#">Logout</a>
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

</body>
</html>