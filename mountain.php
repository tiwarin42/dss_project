<?php include("connect.php"); ?>
<html>

<head>
    <title>Monthly Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="sea_css.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

    div {
        font-family: 'Itim', cursive;
    }

    .name {
        color: white;

        text-shadow: 1px 1px 2px black, 0 0 25px green, 0 0 5px green;

    }
    .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
      url("images/Phu_Luang_LEI2.jpg");
    height: 30%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  .containergrid {
  display: grid;
  grid-gap: 10px;

  grid-template-columns: 400px 400px;
  grid-template-rows: 300px 300px 300px;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". ."
    "g1 g2"
    "g1 g3";
}

.g1 { grid-area: g1; }

.g2 { grid-area: g2; }

.g3 { grid-area: g3; }

    </style>
</head>

<body>

    <div class="hero-image">
        <div class="hero-text">
            <div style="font-size:50px;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">ภูเขา
            </div>
        </div>
    </div>
    <?php
    $sum = $conn->query("select Name from month");
    ?>

    <div class="navbar" style="background-color: #00cc66;">
        <a href="index.php"> หน้าแรก</a>

            <div class="subnav">
            <button class="subnavbtn">ทะเล</button>

        </div>
        <div class="subnav">

            <button class="subnavbtn">ภูเขา </button>

        </div>

    </div>

    
    <div class="containergrid" style="margin-top:-15%;margin-left: 25%;padding:16px;">
  <div class="g1" style="background-color: #d1d1e0;"><img src="images/mountain.jpg" style="height:400px;width:400px;padding:8px">
    <h1>ภูเขาสักที่</h1>
</div>
  <div class="g2" style="background-color: #d1d1e0;"><img src="images/P03013181_1.jpeg" style="height:300px;width:400px;padding:8px"></div>
  <div class="g3" style="background-color: #d1d1e0;"><img src="images/Phu_Luang_LEI2.jpg" style="height:300px;width:400px;padding:8px"></div>
</div>

</body>