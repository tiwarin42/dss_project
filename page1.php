<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    .navbar {
      overflow: hidden;
      background-color: #00cc66;

    }

    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .subnav {
      float: left;
      overflow: hidden;
    }

    .subnav .subnavbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .subnav:hover .subnavbtn {
      background-color: #00e673;
    }

    .subnav-content {
      display: none;
      position: absolute;
      left: 0;
      background-color: #00e673;
      width: 100%;
      z-index: 1;
    }

    .subnav-content a {
      float: left;
      color: white;
      text-decoration: none;
    }

    .subnav-content a:hover {
      background-color: #00ff80;
      color: black;
    }

    .subnav:hover .subnav-content {
      display: block;
    }

    * {
      box-sizing: border-box
    }

    body {
      font-family: Verdana, sans-serif;
      margin: 0
    }

    .mySlides {
      display: none
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      width: 1200px;
      box-shadow: 5px 5px 15px 5px #000000;
      border: 5px solid #35E982;
      border-radius: 10px 10px 10px 10px;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
      color: black;
      font-size: 50px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }

    .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}



    /*contrainer*/
    .grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color: white;
  padding: 10px;
  max-width:1200px;
  margin: auto;
}

.grid-container > div {
  background-color: gray;
  text-align: center;
  padding: 10px 0;
  font-size: 30px;
  position: relative;
}
.first-txt {
            position: absolute;
            top: 17px;
            left: 50px;
            font-weight: bold;
            color: white;
        }

.item1 {
  grid-area: 1 / 1 / span 2 / span 3;
}
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
}
.main {
  flex: 70%;
  background-color: white;
  padding: 20px;
}
.fakeimg {
 
  width: 100%;
  padding: 20px;
  text-align: center;
}


    
  </style>
</head>

<body>
<!-- Header -->
<div class="header">
  <h1>เที่ยว ไหมม</h1>
  <p>เที่ยว<b>ทุก</b> เดือน</p>
</div>
  <div class="navbar">
    <a href="#home"><i class="fa fa-home"></i> หน้าแรก</a>

    <div class="subnav">
      <button class="subnavbtn"><i class="fa fa-map"></i> ภาค <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="#bring">เหนือ</a>
        <a href="#deliver">ใต้</a>
        <a href="#package">ออก</a>
        <a href="#express">ตก</a>
      </div>
    </div>
    <div class="subnav">
      </i><button class="subnavbtn">ทะเล </button>

    </div>
    <div class="subnav">
      <button class="subnavbtn">ภูเขา <i class="fa fa-caret-down"></i></button>

    </div>
    <a href="#contact">ที่พัก</a>
  </div>
  <br><br>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="rongkhun.jpg" style="width:100%">
      <div class="text">เที่ยวไหนดี</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="rongkhun.jpg" style="width:100%">
      <div class="text">เหนือ</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="rongkhun.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="rongkhun.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

  <br><br>
  <center>
  <div style="max-width: 1200px;text-align: center;">
  <div class="main" style="text-align: center;">
    <h2>ชิงช้าต้นไม้  พิษณุโลก</h2>
    <h5>อัพดท เมื่อวันที่ -----</h5>
    <div class="fakeimg" >
      <img src="singsa.png" style="width:500px;height: 400px;">
    </div>
    <p>---*----</p>
    <p> ถ้ามีโอกาสไปเที่ยวพิษณุโลก แต่ไม่ได้ไปนั่งชิงช้าต้นไม้ ที่ บ้านสวนชมวิวภูรักไทย อ.เนินมะปราง เราบอกเลยว่าพลาดอย่างแรง!!! เพราะเป็นจุดชมวิวที่สวยที่สุดในพิษณุโลกทีเดียวค่ะ</p>
    <p>จากจุดชมวิวบนต้นไม้นี้สามารถมองออกไปเห็นทิวเขาและพื้นที่ราบรอยต่อของ 5 จังหวัด คือ นครสวรรค์ ลพบุรี พิจิตร เพชรบูรณ์ และพิษณุโลก เวลาที่แนะนำให้มาเลยก็คือช่วงปลายฝนต้นหนาว เพราะจะได้เห็นทั้งทะเลหมอกและพระอาทิตย์ขึ้นยามเช้าเลยทีเดียว</p>
    <br>
    <h2>ไร่ชาฉุยฟง เชียงราย
    </h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg">
      <img src="chuy.png" style="width:500px;height: 400px;">
    </div>
    <p>---*----</p>
  
    <p>นอกจาก เชียงราย จะเป็นจังหวัดที่มีสถานที่ท่องเที่ยวชื่อดังอย่าง วัดร่องขุ่น, บ้านดำ, ดอยตุง แล้ว ที่นี่ยังเป็นอีกจังหวัดหนึ่งที่มีการทำไร่ชาตามแนวภูเขาค่ะ และแน่นอนว่าตรงจุดนี้เอง ทำให้เราเห็นวิวภูเขาสูงรายล้อมไร่ชาสีเขียวเป็นแนวยาว และฟ้าสีคราม</p>
    <p>ไร่ชาฉุยฟง ตั้งอยู่ที่ อ.แม่จัน จ.เชียงราย ค่ะ เป็นแหล่งปลูกชาชั้นดี กิจกรรมอีกอย่างที่นักท่องเที่ยวชื่นชอบกันมากๆ ก็คือ การลงไปถ่ายรูปสวยๆ กับไร่ชาค่ะ นอกจากนี้ ถ้ามาตอนเช้าหน่อยๆ ก็จะได้เห็นคุณป้า คุณอา มาเก็บยอดอ่อนใบชาด้วยนะ</p>
  </div>
  </div>
</center>

  <br><br>
  <div class="grid-container">
    <div class="item1" style="height:530px;width:670px"><img src="cat.jpeg" > <h3 class="first-txt">
     เที่ยวไหมจ้ะพี่จ๋า
  </h3></div>
    
    
    <div class="item2" style="height:210px;width:500px">6</div>
    <div class="item3" style="height:300px;width:500px">7</div>
  </div>


  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>


</body>

</html>