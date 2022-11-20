<html lang="en">
<?php include 'partials/nav.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: rgb(115, 105, 215);
        background-repeat: no-repeat;
        background-size: 110% 110%;
    }

    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: fit-content;
        margin: 0 auto;
        float: none;
        overflow: hidden;
        display: flex;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);

    }

    /* Add some padding inside the card container */
    .container {
        padding: 2px 16px;
        transform: perspective(800px) rotateY(0deg);
        opacity: 1;
    }

    .logo-img {
        margin-top: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        transform: perspective();
        rotateY(0deg);
        opacity: 1;
    }

    .head {
        font-size: larger;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .h2 {
        font-size: medium;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        text-align: center;
    }

    .p {
        text-align: center;
        text-decoration: solid;
        font-weight: bold;
    }

    .img {
        display: block;
        margin-left: auto;
        margin-right: auto;

        transform-origin: center;
        transform: perspective(10000px);
        transition: 0.5s;
    }
</style>

<body>
    <img class="logo-img" src="res/Untitled.png" width="400" height="300">
    <div class="card">

        <div class="container">
            <h1 class="head">These Website is creted for an easy book for those who used to rent House,Car's, and Bike.</h1>
            <h2 class="h2"><b>This Project/Website is Created By - </b></h2>
            <img class="img" src="jona.jpg" width="400" height="400">
            <p class="p">Jonathan Biakdingliana</p>
            <p class="p">B.tech(Information Technology)- IT/20/26</p>
            <p class="p">5th Semester(3rd Year)</p>
            <p class="p">Ph: 8794527142</p>
        </div>
    </div>
</body>
<?php include 'partials/footer.php' ?>

</html>