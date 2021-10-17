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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

        div {
            font-family: 'Itim', cursive;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .button1:hover {
            background-color: #555555;
            color: white;
        }
    </style>

</head>

<body>

    <div class="hero-image">
        <div class="hero-text">
        <div style="font-size:70px">สถานที่ท่องเที่ยวที่แนะนำ</div>
        </div>
    </div>

    <?php
    if (isset($_GET['name']) && isset($_GET['month'])) {
        $p = $_GET['name'];
        $month = $_GET['month'];

        $location = $conn->query("SELECT l.Name,l.Detail from location l  inner join province p
                on l.id_province = p.id_province
                inner join month m
                on l.id_month = m.id_month
        		where p.Name = '" . $p . "' AND m.Name = '" . $month . "' ");

        $province = "SELECT Name from province where Name = '" . $p . "'";

        $sql = "SELECT Name from month where Name = '" . $month . "'";

        $region = "SELECT r.Name from region r inner join province p 
                   on r.id_region = p.id_region 
                   where p.Name = '" . $p . "'";

        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
    ?>
                    <div id="borderDemo"></div>
                <?php
                    echo "<br>";
                    echo "<div class='month'> เดือนที่เลือก : " . $row["Name"] . "</div>";
                }
            }
        }
        if ($result = mysqli_query($conn, $region)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                ?>
                <?php
                    echo "<br>";
                    echo "<div class='month'> ภาคที่เลือก : " . $row["Name"] . "</div>";
                }
            }
        }
        if ($result = mysqli_query($conn, $province)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                ?>
    <?php
                    echo "<br>";
                    echo "<div class='month'> จังหวัดที่เลือก : " . $row["Name"] . "</div>";
                }
            }
        }
    }
    ?>
    <br>
    <div class='month'> สถานที่แนะนำ : </div>
    <br>
    <form action="detail_location.php" method="get">
        <?php while ($row = $location->fetch_assoc()) {
            echo '<div class="month">                  
                        <button class="button button1" name="location" value="' . $row["Name"] . '">' . $row["Name"] . '</button>
                </div>';
        } ?>
    </form>

    <div class="flex-container">
        <?php while ($row = $location->fetch_assoc()) {
        ?>
            <div class="pic-center">
                <?php
                echo '<a href="page1.php"><img src="images/mountain.jpg" width="280" height="280">';
                echo '<b>';
                echo '<div class="centered" style="font-size: 25px;color: white">' . $row["Name"] . '</div>';
                echo '</b>';
                ?>
            </div>
            </a>
        <?php
        } ?>
        <!-- <div class="pic-center">
            <a href="sea.php"><img src="images/sea.png" width="280" height="280">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">ทะเล</div>
                </b>
            </a>
        </div>
        <div class="pic-center">
            <a href="page1.php"><img src="images/waterfall.jpg" width="280" height="280">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">น้ำตก</div>
                </b></a>
        </div>
        <div class="pic-center">
            <a href="page1.php"><img src="images/park.jpg" width="280" height="280">
                <b>
                    <div class="centered" style="font-size: 50px;color: white; ">เมือง</div>
                </b></a>
        </div> -->
    </div>
</body>

</html>