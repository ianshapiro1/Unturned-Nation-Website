<?php

   $server="localhost";
   $user="billgates";
   $pass="DuVBm5gevEiNVcyo64V1jXbqfsei20344";
   $db="unturnednationcart"; 


   mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");


   mysql_select_db($db) or die("Sorry, can't select the database.");

?>
