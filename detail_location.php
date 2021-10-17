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
    </style>
</head>

<body>

    <?php
    if (isset($_GET['location'])) {
        $loc = $_GET['location'];

        $location = "SELECT * from location where Name = '" . $loc . "'";

    ?>
        <div class="hero-image">
            <div class="hero-text">
            <?php if ($result = mysqli_query($conn, $location)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div style="font-size:50px;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">' . $row["Name"] . '</div>';
                    }
                }
            }
        } ?>
            </div>
        </div>
        <?php
        $sum = $conn->query("select Name from month");
        ?>

        <div class="navbar">
            <a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a>


            <div class="subnav">

                <button class="subnavbtn">ภูเขา </button>

            </div>
            <div class="subnav">

                <button class="subnavbtn">น้ำตก</button>

            </div>
            <div class="subnav">

                <button onclick="goBack()" class="subnavbtn">ย้อนกลับ</button>

            </div>

        </div>
        <div style="margin-left:10%;padding:20px">
            <?php if ($result = mysqli_query($conn, $location)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="name" style="font-size:40px;">' . $row["Name"] . '</div>';
            ?>
        </div>
        <div style="margin-left:10%;">
<?php
                        echo '<img src="images/image_location/' . $row["Image"] . '" width="90%" height="400px">';
                    }
                }
            }
?>
        </div>
        <div style="margin-left:10%;padding:20px">
            <div class="name" style="font-size:30px">รายละเอียด</div>
            <?php if ($result = mysqli_query($conn, $location)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div style="margin-left:5%;margin-right:12%;padding:8px;font-size:20px;text-align:justify;"> ' . $row["Detail"] . '<div>';
                    }
                }
            }
            ?>
        </div>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

</body>
</html>