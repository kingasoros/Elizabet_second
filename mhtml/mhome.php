<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style.css">
    <meta name="robots" content="index, follow">
    <meta name="description" content="This website was created on the basis of a website, but it is not publicly maintained.">
    <meta name="author" content="Kinga">
    <title>Elizabet</title>

    <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <div class="menu">
        <div class="logo"> 
             <img src="../images/logo.png"> 
        </div> 
        <div onclick="toggleDropdown()" class="dropbtn"></div>
        <ul id="myDropdown" class="menu-points">   
                <li><a href="mhome.php">HOME</a></li>     
                <li><a href="msmestaj.html">SZÁLLÁS</a></li>
                <li><a href="mjelovnik.html">ÉTLAP</a></li>
                <li><a href="mgalerija.html">GALÉRIA</a></li>
                <li><a href="mkontakt.html">ELÉRHETŐSÉG</a></li>
                <li><a href="mhome.php" class="lang1"></a></li>
                <li><a href="../home.php" class="lang2"></a></li>
        </ul>   
        
    </div> 

    <div class="opening-hours">
        <img src="../images/clock.png">
        <span style="font-weight: bold;">Aktuális idő:</span>
        <?php
        $currentDateTime = date("Y-m-d H:i:s");
        echo $currentDateTime;
        ?><br>
        <span style="font-weight: bold;">Munka idő:</span>
        <span class="indented">08:00-23:00</span>
    </div>
    
    <swiper-container class="content-container elizabet" pagination="true">
        <div class="swiper-slide"
            style="background-image:url(../images/eli_1.jpg)"></div>
        <div class="swiper-slide"
            style="background-image:url(../images/eli_2.jpg)"></div>     
        <div class="swiper-slide"
            style="background-image:url(../images/eli.jpg)"></div>
        <div class="swiper-slide"
            style="background-image:url(../images/eli_3.jpg)"></div>
        <div class="swiper-slide"
            style="background-image:url(../images/eli_4.jpg)"></div>
            <div class="swiper-slide"
            style="background-image:url(../images/eli_5.jpg)"></div>
            <div class="swiper-slide"
            style="background-image:url(../images/eli_6.jpg)"></div>
    </swiper-container>  

    <div class="restaurant">
        <div class="r-text">
            <img src="../images/chicken.png">
            <br><b>ÉTTEREM</b><br>Helyben, elvitelre vagy házhoz szállítással is elérhető!<br>   
        </div>
        <div class="r-pic">
            <img src="../images/eli_4.jpg">  
        </div>
    </div>
    
    <div class="rooms">
        <div class="ro-text">
            <img src="../images/room.png">
            <br><b>SZOBÁK</b><br>Foglaljon szobát a helyszínen, telefonon vagy előjegyzéssel!<br>
        </div>
        <div class="ro-pic">
            <img src="../images/eli_7.jpg">
        </div>

    </div>

    <footer>
        <div class="footer1">
                <p class="dvg-information1"> <img src="../images/adress.png" alt=""> Rijecska 9<br>
                    24413 Palics, Szerbia<br>
                <p class="dvg-information2"><img src="../images/phone.png" alt=""> <a href="tel:+3642203066"> 064-220-30-66</a><br></p>
    
                <p class="dvg-information3"><img src="../images/email.png" alt=""> vilaelizabet@gmail.com</p>
                </p>
        </div>
    </footer>




    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    //Swiper
    var swiper = new Swiper(".mySwiper", {
        pagination: {
        el: ".swiper-pagination",
        },
    });

    // cards
    var swiper = new Swiper(".last-page", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
    },
    pagination: {
    el: ".swiper-pagination",
    },
    });
    var swiper = new Swiper(".mySwiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });

    //burger menu
    console.log('hello');
    function toggleDropdown() {
        console.log('click');
        var dropdown = document.getElementById("myDropdown");
        if (dropdown.style.display === "none") {
            dropdown.style.display = "flex";
        } else {
            dropdown.style.display = "none";
        }
    }
    </script>
</body>

</html>