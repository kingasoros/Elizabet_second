<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
            <li><a href="../home.php">HOME</a></li>     
            <li><a href="smestaj.html">SMESTAJ</a></li>
            <li><a href="jelovnik.html">JELOVNIK</a></li>
            <li><a href="galerija.html">GALERIJA</a></li>
            <li><a href="order.php">DOSTAVA</a></li>
            <li><a href="kontakt.html">KONTAKT</a></li>
            <li><a href="../mhtml/morder.php" class="lang1"></a></li>
            <li><a href="order.php" class="lang2"></a></li>
        </ul>
    </div>
    </div>

    <h2 class="menu_h">Dostava</h2>    
    <div>
        <?php $images = array(
            '../images/margareta.jpg',
            '../images/napoletana.jpg',
            '../images/capricciosa.jpg',
            '../images/pepperoni.jpg',
            '../images/misto.jpg',
            '../images/bianco.jpg',
            '../images/dacasa.jpg',
            '../images/pancetta.jpg',
            '../images/contadino.jpg',
            '../images/affumicata.jpg',
            '../images/salvatore.jpg',
            '../images/vegetariano.jpg',
            '../images/hawaii.jpg',
            '../images/delicates.jpg',
            '../images/conca.jpg',
            '../images/gambero.jpg',
            '../images/fruttidimare.jpg',
            '../images/tonno.jpg',
            '../images/prosciutto.jpg',
            '../images/greco.jpg',
            '../images/bbq.jpg',
            '../images/messicano.jpg',
            '../images/cassamia.jpg',
            '../images/vulcanico.jpg',
            '../images/bambino.jpg',
            '../images/vilaelizabet.jpg',
            '../images/ragu.jpg',
            '../images/par_leves.jpg',
            '../images/becka.jpg',
            '../images/piletina.jpg',
            '../images/sir.jpg',
            '../images/samp.jpg',
            '../images/korpica.jpg',
            '../images/cordon.jpg',
            '../images/italijanska.jpg',
            '../images/karadorde.jpg',
            '../images/pljeskavica.jpg',
            '../images/p_pljeskavica.jpg',
            '../images/cevapi.jpg',
            '../images/m_meso.jpg',
            '../images/kob.jpg',
            '../images/batak.jpg',
            '../images/belo.jpg',
            '../images/belo_sir.jpg',
            '../images/belo_slan.jpg',
            '../images/tortila.jpg',
            '../images/m_salata.jpg',
            '../images/sopska.jpg',
            '../images/srpska.jpg',
            '../images/kupus.jpg',
            '../images/pomfrit.jpg',
            '../images/somloi.jpg',
            '../images/kesten.jpg',
            '../images/eur.jpg',
            '../images/nut_plazma.jpg',
            '../images/pek.jpg',
            '../images/nut.jpg',
            '../images/nut_plazma.jpg',
            '../images/ban.jpg',
            '../images/nar.jpeg',
            '../images/ros.jpeg',
            '../images/jag.jpg',
            '../images/hom.jpg',
            '../images/tof.jpg',
            '../images/frag.jpeg'
        );
              $names = array(
                'Margherita',
                'Napoletana',
                'Capriccosa',
                'Pepperoni',
                'Misto',
                'Bianco',
                'Da Casa',
                'Pancetta',
                'Contadino',
                'Affumicata',
                'Salvatore',
                'Vegetariano',
                'Hawaii',
                'Delicates',
                'Conca',
                'Gambero',
                'Frutti Di Mare',
                'Tonno',
                'Prosciutto',
                'Greco',
                'BBQ',
                'Messicano',
                'Cassa Mia',
                'Vulcanico',
                'Quoco Bambino',
                'Vila Elizabet',
                'Pileca Ragu Corba',
                'Paradajz Corba',
                'Becka Snicla',
                'Pohovana Piletina',
                'Pohovani Sir',
                'Pohovani Punjeni Sampinjoni Sa Feta Sirom',
                'Pileca Korpica',
                'Cordon Bleu',
                'Pohovana Punjena Piletina Na Italijanski Nacin',
                'Karadordeva Snicla',
                'Pljeskavica',
                'Punjena Pljeskavica',
                'Cevapi',
                'Mesano Meso',
                'Pikantna Kobasica',
                'Grilovani Pileci Batak' ,
                'Grilovano Pilece Belo Meso',
                'Grilovani Pilece File Sa sirom, Sampinjonima i Paprikom',
                'Grilovani Pilece File Umortano u Slanino',
                'Tortila',
                'Mesana Salata',
                'Sopska Salata',
                'Srpska Salata',
                'Kupus Salata',
                'Pomfrit',
                'Somloi Galuska',
                'Kesten Pire',
                'Palacinta Sa Eurokremom',
                'Palacinta Sa Eurokremom i Plazmom',
                'Palacinta Sa Pekmezom',
                'Palacinta Sa Nutelom',
                'Palacinta Sa Nutelom i Plazmom',
                'Banana Plazma',
                'Raw Narandza- Urma',
                'Rosberitta Nuts',
                'Raw Jagoda',
                'Homeroche',
                'Toffee',
                'Fragoletta'
        );
              $prices = array(
                '650 RSD 750 RSD 1490 RSD',
                '700 RSD 820 RSD 1590 RSD',
                '730 RSD 850 RSD 1690 RSD',
                 '730 RSD 850 RSD 1690 RSD',
                 '750 RSD 870 RSD 1790 RSD',
                 '730 RSD 850 RSD 1690 RSD',
                 '790 RSD 920 RSD 1890 RSD',
                 '770 RSD 890 RSD 1790 RSD',
                 '830 RSD 970 RSD 1950 RSD',
                 '820 RSD 940 RSD 1920 RSD',
                 '790 RSD 920 RSD 1890 RSD',
                 '760 RSD 890 RSD 1820 RSD',
                 '760 RSD 880 RSD 1790 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '850 RSD 960 RSD 1930 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '850 RSD 970 RSD 1920 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '790 RSD 900 RSD 1850 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '870 RSD 990 RSD 1990 RSD',
                 '790 RSD 890 RSD 1790 RSD',
                 '860 RSD 970 RSD 1960 RSD',
                 '840 RSD 950 RSD 1890 RSD',
                 '390 RSD',
                 '350 RSD',
                 '890 RSD 990 RSD',
                 '770 RSD 890 RSD',
                 '790 RSD 890 RSD',
                 '800 RSD 920 RSD',
                 '900 RSD',
                 '950 RSD 1090 RSD',
                 '970 RSD 1150 RSD',
                 '1190 RSD',
                 '690 RSD 850 RSD',
                 '920 RSD',
                 '780 RSD 930 RSD',
                 '1680 RSD',
                 '850 RSD',
                 '750 RSD 870 RSD',
                 '740 RSD 860 RSD',
                 '830 RSD 950 RSD',
                 '830 RSD 950 RSD',
                 '550 RSD',
                 '350 RSD',
                 '380 RSD',
                 '350 RSD',
                 '310 RSD',
                 '350 RSD',
                 '450 RSD',
                 '350 RSD',
                 '360 RSD',
                 '380 RSD',
                 '340 RSD',
                 '380 RSD',
                 '400 RSD',
                 '500 RSD',
                 '590 RSD',
                 '480 RSD',
                 '590 RSD',
                 '460 RSD',
                 '490 RSD',
                 '530 RSD'
        );


        $i=0;
        $price=0;
            foreach($images as $key => $image){
        ?>
    <selection class="food-menu">
            <div class="food-menu-box">
                <div class="food-menu-img">
                     <?php echo '<img src="' . $image .'" alt="image" class="img-responsive img-curve">'; ?>
                </div>

                <div class="food-menu-desc">
                    <h2><?php  echo "$names[$key]"; ?></h2>
                    <p class="food-price"><?php echo "$prices[$key]"; ?></p>
                    <br>
                   
                    <button onclick="redirectToAnotherPage()" class="btn-primary">ORDER NOW!</button>
                </div>
            </div>
        <?php } ?>
            </selection>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
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
  
    //food adding

    function toggleCheckbox(label) {
      const checkbox = label.querySelector('input[type="checkbox"]');
      checkbox.checked = !checkbox.checked;

      if (checkbox.checked) {
        label.classList.add('checked');
      } else {
        label.classList.remove('checked');
      }
    }

        function redirectToAnotherPage() {
            // Az alábbi sorban helyettesítsd be a céloldal URL-jét
            window.location.href = "order_agree.php";
        }

    </script>
</body>
</html>