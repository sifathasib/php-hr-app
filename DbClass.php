<?php 

    $user ='hr';
    $password = 'hr';
    $database = 'DESKTOP-GBPVGVV:1521/XEPDB1';
    $conn = oci_connect($user, $password,$database );
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }


?>