<?php
  //error_reporting(0);

  $dbhost = "localhost";
  $dbuser = "id9824304_user";
  $dbpass = "password";
  $dbname = "id9824304_bengkel";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Tidak dapat terhubung ke database: ".mysqli_error());
?>