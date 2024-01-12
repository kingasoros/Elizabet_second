<?php
    session_start();
    require "../html/db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/result.css">
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
            <li><a href="mhome.php">HOME</a></li>     
            <li><a href="msmestaj.html">SZÁLLÁS</a></li>
            <li><a href="mjelovnik.html">ÉTLAP</a></li>
            <li><a href="mgalerija.html">GALÉRIA</a></li>
            <li><a href="morder.php">RENDELÉS</a></li>
            <li><a href="mkontakt.html">ELÉRHETŐSÉG</a></li>
            <li><a href="morder.php" class="lang1"></a></li>
            <li><a href="../html/order.php" class="lang2"></a></li>
        </ul>
    </div>
    </div>
 
    
    <div class="message">
        <?php
            $sql="SELECT name FROM login";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $user = $row['name'];
            }

           ?>

        <p><?php echo $user;?>,<br> dostavjac će uskoro stići. <br> Račun: <?php echo $_SESSION['total'] ;?>din.
        <br>Hvala na cekanju!</p>
    </div>
     
<?php
    $conn->close();
?>
</body>
</html>