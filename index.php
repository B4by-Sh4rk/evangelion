<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EVA</title>
</head>
<body>

<header class="header">
<div class="container">
    <div class="header_top">
    
    <nav  class="nav">
        <div class="nav_logo">
            <h2 class="logo"><a href="#!">EVANGELION</a></h2>
        </div>
        <ul class="nav_list">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="charecters.php">Charecters</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <ul class="nav_login">
            <li><a href="#!">Sign up</a></li>
            <li><a href="#login_popup" class="login_btn">Login</a></li>
        </ul>
    </nav>
    </div>
<div class="header_row">    
    <div class="header_content">
        <div class="header_badge">新世紀エヴァンゲリオン</div>
        <h1 class="header_title">Neon Genesis Evangelion (1996)</h1>
        <div class="header_about">
          <p>
          Жанр / тематика : меха, постапокалиптика, психологическая драма
        </p>
        </div>
        <a href="#!" class="header_btn">Студия	Gainax</a>
      </div>  
      <div class="header_img">
           <img src="./img/header/header_image.png" alt="Image">
        </div>
        </div>
</div>
</header>

<div id="header" class="fix_top"></div>

<main>
    <section class="description">
<div class="container-left">
    <div class="description_row">
    <div class="description_text">
        <p>
        «Евангелион» (яп. 新世紀エヴァンゲリオン Синсэйки Эвангэрион, букв. «Евангелие нового столетия», международное название — Neon Genesis Evangelion), или сокращённо «Ева», — аниме-сериал в жанре «меха», снятый режиссёром Хидэаки Анно на студии Gainax и выходивший с 4 октября 1995 по 27 марта 1996 года. Сценарий написан шестью сценаристами, однако в создании сюжета четвёртой серии Анно участия не принимал.
    </p>
    </div>
    <div class="description_slider">
        <div class="slider">
        <div class="owl-carousel">
            <img class="slider_img" src="/img/slider/1.jpg" alt="Img1">
            <img class="slider_img active" src="/img/slider/2.jpg" alt="Img2">
            <img class="slider_img" src="/img/slider/3.jpg" alt="Img3">
            <img class="slider_img" src="/img/slider/4.jpg" alt="Img4">
        </div>
        <button class="slider_btn slider_btn-prev">
            <img src="./img/slider/left.svg" alt="">
        </button>
        <button class="slider_btn slider_btn-next">
            <img src="./img/slider/right.svg" alt="">
        </button>
        </div>
    </div>
</div>
    </section>
    <div class="what">    
        <img src="./img/shinji-ikari.png" alt="">
        <p>"Я не знаю что ещё сюда написать !"</p>
</div>



<div id="login_popup" class="popup">
    <a href="#header" class="popup_close_area"></a>
    <div class="popup_body">
        <div class="popup_content">
            <a href="#header" class="popup_close">x</a>
            <div class="popup_title">
                <div class="popup_row">
        SIGN IN
        </div>            
            <div class="popup_text">
                <form action="" class="login_form">
                <br>
                <label for="">Login : </label>
                <input type="text" placeholder="type login here"><br>
                <label for="">Password : </label>
                <input type="password" placeholder="type password here"><hr>
                <button class="login_form_btn">GET IN THE ROBOT!</button>
                </form>
            </div>
            </div>
        </div>
    </div>
   </div>


</main>

<footer>
        <div class="footer_container">
        <img class="footer_img" src="./img/footer_image.png" alt="">
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
</body>
</html>