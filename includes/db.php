<?php
      $server = 'localhost';
	  $user= "root";
	  $password='';
	  $db = 'cms_system';
	  
	  $conn = mysqli_connect($server,$user,$password,$db);
	  
	  if(!$conn) {
		  die("connection Failled!:".mysqli_connect_error());
		  }
	  
?>