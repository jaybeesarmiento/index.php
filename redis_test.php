<?php
   $host = $_GET['redis_host'];
   if(empty($host)) {
     echo "No Host : (http://url?redis_host=<redis_host>)";
     die();
   }
   try {
     $redis = new Redis(); 
     $redis->connect($host, 6379); 
     echo "Connection to server sucessfully"; 
     //check whether server is running or not 
     echo "Server is running: ".$redis->ping();
   } catch (Exception $e) {
     echo "Error Connecting to ".$host;
   }
