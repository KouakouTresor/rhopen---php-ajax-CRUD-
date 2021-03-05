<?php

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'rhopen';
  $db_port = 8889;

  $conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($conn->connect_error) {
    die('Could not connect to the database!' . $conn->connect_error);
  }  
  /*  phpinfo();

  // Affiche uniquement le module d'information.
  // phpinfo(8) fournirait les mêmes informations.
  phpinfo(INFO_MODULES);
  */





  
?>