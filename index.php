<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style/boostrapPageStyle.css">
</head>
<body>

<?php 
require 'header.php';
?>



<div class="container">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./image/OIP.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="sliderH">ლეპტოპები</h5>
        <p>ყველა მოდელის და მონაცემების მქონე ლეპტოპები საუკეთესო ფასებში.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./image/OIP (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="sliderH">პლანშეტები</h5>
        <p>საუკეთესო ხარისხი საუკეთესო ფასად.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img  src="./image/OIP (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="sliderH" >მობილურები</h5>
        <p>შეიძინეთ ორწლიანი გარანტიით.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="padding"></div>
<div class="conteiner">
    
<div class="divebi">
    <div class="div erti">
        <img src="./image/689396.png" alt="">
        <h2>ლეპტოპები</h2>
        <div class="xazi"></div>
        <p>ყიდვა-გაყიდვა, შეკეთება პროგრამული უზრუნველყოფა ყველა ტიპის ნაწილი </p>
    </div>
    <div class="div ori">
        <img src="./image/mobile-phone.png" alt="">
        <h2>ტელეფონები</h2>
        <div class="xazi"></div>
        <p>ყიდვა-გაყიდვა, შეკეთება პროგრამული უზრუნველყოფა ყველა ტიპის ნაწილი.</p>
    </div>
    <div class="div sami">
        <img src="./image/tablet.png" alt="">
        <h2>ტაბლეტები </h2>
        <div class="xazi"></div>
        <p>ყიდვა-გაყიდვა, შეკეთება პროგრამული უზრუნველყოფა ყველა ტიპის ნაწილი.</p>
    </div>
  
</div>
</div>
<div class="padding"></div>

<footer class="footer">
    <div class="conteiner">
    <div class="Ftext">
        <p>© Made with <span> “KUKURI NEBADZE”.</span> </p>
    </div>
    <div class="social">
        <ul>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-google-plus"></a></li>
            <li><a href="#" class="fa fa-pinterest"></a></li>
        </ul>
    </div>
</div>
</footer>

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.js"></script>

<script src="./js/slider.js"></script>

</body>
</html>