<?php 

    require_once 'conect.php';
s
    function notification(){
        global $con;
        $query = "SELECT * FROM notif";
        $result = mysqli_query($con,$query);
        return $result;
    }
?>