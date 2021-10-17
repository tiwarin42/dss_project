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
        div{
            font-family: 'Itim', cursive;
        }
    </style>
</head>

<body>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Monthly Travel Decision Support System</h1>
        </div>
    </div>

    <?php
    $sum = $conn->query("select Name from month");
    ?>

    <div id="borderDemo"></div>
    <div class="text-center">
        <form action="region.php" method="get">
            <label>เลือกเดือนที่ต้องการท่องเที่ยว : </label>
            <?php echo "<select name='name' id='poll'>";
            echo '<option> -- เลือกเดือน -- </option>';
            while ($row = $sum->fetch_assoc()) {
                // $id = $row['id_month'];
                $name = $row['Name'];
                echo '<option value="' . $name . '">' . $name . '</option>';
            }
            echo "</select>";
            ?>
            <button style='height:30px' type='submit'><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div id="borderDemo"></div>
    <div class="flex-container">
        <div class="pic-center">
            <a href="mountain.php"><img src="images/mountain.jpg" width="280" height="280">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">ภูเขา</div>
                </b>
        </div>
        </a>
        <div class="pic-center">
            <a href="sea.php"><img src="images/sea.png" width="280" height="280">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">ทะเล</div>
                </b>
            </a>
        </div>
        <div class="pic-center">
            <a href="waterfall.php"><img src="images/waterfall.jpg" width="280" height="280">
                <b>
                    <div class="centered" style="font-size: 50px;color: white">น้ำตก</div>
                </b></a>
        </div>
    </div>
</body>

</html>