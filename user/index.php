<?php
     session_start();
     include_once "../config/config.php";
     $timestamp = time();
     $_SESSION['unique_id'] = $timestamp;
     $unique_id = $timestamp;
     $created_at = strval($timestamp);
     $ip_address = $_SERVER['HTTP_CLIENT_IP'] 
               ?? $_SERVER['HTTP_CF_CONNECTING_IP']
               ?? $_SERVER['HTTP_X_FORWARDED'] 
               ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
               ?? $_SERVER['HTTP_FORWARDED'] 
               ?? $_SERVER['HTTP_FORWARDED_FOR'] 
               ?? $_SERVER['REMOTE_ADDR'] 
               ?? '0.0.0.0';
     $sql="INSERT INTO customer (unique_id,ip_address,created_at) VALUES ($unique_id,'$ip_address','$created_at')";
     if(mysqli_query($conn,$sql)){
          include "./customer.php";
     }
?>