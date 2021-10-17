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
    </style>

</head>

<body>

    <div class="hero-image">
        <div class="hero-text">
            <div style="font-size:70px">เลือกจังหวัด</div>
        </div>
    </div>

    <?php
    if (isset($_GET['name']) && isset($_GET['month'])) {
        $name = $_GET['name'];
        $month = $_GET['month'];

        $province = $conn->query("SELECT DISTINCT p.Name from province p inner join region r
                on r.id_region = p.id_region
                inner join location l 
                on p.id_province = l.id_province
                inner join month m
                on l.id_month = m.id_month
        		where r.Name = '" . $name . "' AND m.Name = '" . $month . "' ");

        $sql = "SELECT Name from month where Name = '" . $month . "'";
        $region = "SELECT Name from region where Name = '" . $name . "'";

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
    }
    ?>
    <br>
    <div class="region">
        <form action="select_location.php" method="get">
            <label>เลือกจังหวัดที่ต้องการท่องเที่ยว : </label>
            <?php echo "<select name='name' id='poll'>";
            echo '<option> -- เลือกจังหวัด -- </option>';
            while ($row = $province->fetch_assoc()) {
                $name = $row['Name'];
                echo '<option value="' . $name . '">' . $name . '</option>';
            }
            echo "</select>";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $m = $row['Name'];
                        echo " <button style='height:30px' type='submit' name='month' value=" . $m . "><i class='fa fa-search'></i></button>";
                    }
                }
            }
            ?>
        </form>
    </div>


    <div class="flex-container">
        <div class="pic-center">
            <a href="mountain.php"><img src="images/mountain.jpg" width="200" height="200">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">ภูเขา</div>
                </b>
        </div>
        </a>
        <div class="pic-center">
            <a href="sea.php"><img src="images/sea.png" width="200" height="200">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">ทะเล</div>
                </b>
            </a>
        </div>
        <div class="pic-center">
            <a href="waterfall.php"><img src="images/waterfall.jpg" width="200" height="200">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">น้ำตก</div>
                </b></a>
        </div>
    </div>

    <div style="margin-left:3%;padding:8px;">
        <input type="image" src="images/back.png" alt="Submit" width="48" height="48" onclick="goBack()">
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>