<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/order_agree.css">
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
                     '750',
                     '820',
                     '850',
                     '850',
                     '870',
                     '850',
                     '920',
                     '890',
                     '970',
                     '940',
                     '920',
                     '890',
                     '880',
                     '990',
                     '960',
                     '990',
                     '990',
                     '970',
                     '990',
                     '990',
                     '900',
                     '990',
                     '990',
                     '890',
                     '970',
                     '950',
                     '390',
                     '350',
                     '990',
                     '890',
                     '890',
                     '920',
                     '900',
                     '1090',
                     '1150',
                     '1190',
                     '850',
                     '920',
                     '930',
                     '1680',
                     '850',
                     '870',
                     '860',
                     '950',
                     '950',
                     '550',
                     '350',
                     '380',
                     '350',
                     '310',
                     '350',
                     '450',
                     '350',
                     '360',
                     '380',
                     '340',
                     '380',
                     '400',
                     '500',
                     '590',
                     '480',
                     '590',
                     '460',
                     '490',
                     '530'
            );?>
        </div>
        <!-- fOOD sEARCH Section Starts Here -->
        <section class="food-search">
            <div class="container">
                
                <h2 class="text-center text-white">Töltse ki ezt az űrlapot, és erősítse meg rendelését.</h2>
    
    
    
                <form method="POST" action="mordering.php" >
                <fieldset>
                <legend>Ételek</legend>

                <?php if(isset($_GET['error'])) {?>
                        <p class="error"><?php echo $_GET['error']; ?> </p>
                <?php }
                ?>
              
                <?php foreach($images as $key => $image){?>
                <div class="opt">
                    <input type="checkbox" name="options[]" class="box" value="<?php echo "$prices[$key]"; ?>">
                    <?php echo "$names[$key]"; 
                    echo '<img src="' . $image .'" alt="image" class="img-food">';
                    
                    ?>
    
                </div>
                <?php }?>
                </fieldset>
    
                <fieldset>
                <legend>További adatok</legend>
    
                
                        <label for="full-name" class="order-label">Név és Vezetéknév</label>
                        <input type="text" id="full-name" name="full-name" placeholder="ime" class="input-responsive" required>
    
                        <label for="contact" class="order-label">Telefon</label>
                        <input type="tel" id="contact" name="contact" placeholder="telefon" class="input-responsive" required>
    
                        <label for="email" class="order-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="email" class="input-responsive" required>
    
                        <label for="address" class="order-label">Cim</label>
                        <textarea id="address" name="address" rows="8" placeholder="address" class="input-responsive" required></textarea>
    
                        <input type="submit" name="submit" value="Továbbitás" class="btn">
                    </fieldset>
    
                </form>
    
            </div>
        </section>
    
    </body>
    </html>