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

        .containergc {
            display: grid;
            grid-auto-columns: 1fr;
            grid-template-columns: 400px 400px;
            grid-template-rows: 400px 400px;
            gap: 8px 8px;
            grid-template-areas:
                "gc1 gc1";
        }

        .gc1 {
            grid-area: gc1;
        }

    </style>
</head>

<body>

    <div class="hero-image">
        <div class="hero-text">
            <div style="font-size:50px;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">ภูเขาที่แนะนำในเดือนนี้
            </div>
        </div>
    </div>
    <?php
    $sum = "select l.Name,l.Image,l.Detail,p.Name p  from location l inner join type_location t
            on l.id_type = t.id_type
            inner join province p
            on l.id_province = p.id_province
            where  t.Name = 'ภูเขา' AND l.id_month = ". date("m")." ORDER BY RAND()
            LIMIT 1";
    ?>

    <div class="navbar" style="background-color: #008060;">
        <a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a>

        <a href="sea.php">ทะเล</a>

        <a href="waterfall.php">น้ำตก</a>

    </div>

    <div class="containergc" style="margin-left: 23%;padding:16px;">
        <?php if ($result = mysqli_query($conn, $sum)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo ' <div class="gc1" style="background-color: white;text-align:center;"><img src="images/image_location/' . $row['Image'] . '" style="height:400px;width:800px;padding:8px;">';
                    echo '<div style="color: white;margin-top: 20px;font-size:30px;">' . $row['Name'] . '</div>';
                    echo '<div style="color: white;margin-top: 20px;font-size:20px;">' . $row['p'] . '</div>';
                    echo '<div style="color: white;margin-top: 20px;font-size:20px;text-align:justify;">' . $row['Detail'] . '</div></div>';
                }
            }
        } ?>
    </div>

</body>

</html>