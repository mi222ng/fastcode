<?php
    $hostname = 'localhost';
    $dbuserid = 'mzeeyy';
    $dbpasswd = 'fastcode12*';
    $dbname = 'mzeeyy';

    $mysqli = new mysqli($hostname,$dbuserid, $dbpasswd,$dbname);
    if($mysqli -> connect_errno){
        die('Connect Error:'.$mysqli->connect_error);
    } 
    // echo 'connect successfully';
?>