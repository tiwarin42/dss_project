<?php include("connect.php"); ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Monthly Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="sea_css.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=K2D:wght@200;400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

    div,
    h1 {
        font-family: 'Itim', cursive;
    }

    .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
            url("images/seaa.jpg");
        height: 30%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    </style>
</head>

<body>
    <div class="hero-image">
        <div class="hero-text">
            <div style="font-size:50px;">ทะเล</div>
        </div>
    </div>

    <?php
  $sum = $conn->query("select Name from month");
  ?>

    <div class="navbar">
        <a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a>

        <div class="subnav">

            <button class="subnavbtn"><i class="fa fa-map"></i> เดือน<i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <?php
        while ($row = $sum->fetch_assoc()) {
          $name = $row['Name'];
          echo '<a href="#">' . $name . '</a>';
        } ?>



            </div>
        </div>

        <div class="subnav">

            <button class="subnavbtn">ภูเขา </button>

        </div>
        <div class="subnav">

            <button class="subnavbtn">อุทยาน</button>

        </div>
    </div>
    <div class="container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/seaa.jpg" alt="Avatar" style="width:700px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h1>ทะเล</h1>
                    <p>สักที่แหละ</p>
                    <p>มั้ง</p>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>