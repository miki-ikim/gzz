<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'gz';

     $conn = mysqli_connect($servername, $username, $password, $database);
     

     $ctSql = "SELECT * FROM customer";
     $resultctSql = mysqli_query($conn, $ctSql);
     $rsall= mysqli_fetch_all($resultctSql,MYSQLI_ASSOC);
   exit(json_encode($rsall));

?> 