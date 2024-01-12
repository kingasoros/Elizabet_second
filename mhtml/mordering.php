<?php
session_start();
require "../html/db_conn.php";

if(isset($_POST['full-name']) && isset($_POST['contact']) && 
isset($_POST['email']) && isset($_POST['address'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


$uname = validate($_POST['full-name']);
$cont = validate($_POST['contact']);
$email = validate($_POST['email']);
$address = validate($_POST['address']);

if(empty($uname)){
    header ("Location: morder_agree.php?error=User Name is required");
    exit();
}
else if(empty($cont)) {
    header ("Location: morder_agree.php?error=Contact is required");
    exit();
}else if(empty($email)) {
    header ("Location: morder_agree.php?error=Email is required");
    exit();
}else if(empty($address)) {
    header ("Location: morder_agree.php?error=Address is required");
    exit();
}else{
    
    $sql = "INSERT INTO login(name, contact, email, address) VALUES
    ('$uname', '$cont', '$email' ,'$address')";
    $result = mysqli_query($conn, $sql);

    $total = 0;

    // Ellenőrizzük, hogy a checkbox-ok be vannak-e pipálva
    if (isset($_POST['options'])) {
        foreach ($_POST['options'] as $option) {
            $total += (int)$option;
        }
    }
    if($result){

        $_SESSION['total']=$total;

        header("Location:mresult.php?success");
        exit();
    }else{
        header("Location:mresult.php?error");
        exit();
    }   



   
}

header ("Location: mresult.php");
exit();
}else{
header ("Location: morder_agree.php");
exit();
}