<?php 
    
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="bd_presence";
    
   
    try {
        $bd= new PDO("mysql:host=$server;dbname=$database;charset=utf8",$username,$password);
       
        // echo 'base de donnée connecté';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
?>