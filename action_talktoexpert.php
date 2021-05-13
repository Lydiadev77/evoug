<?php
  // Connecting to the MySQL server
  $host="localhost";
  $user_name="root";
  $pwd="";
  $database_name="evougue"; 

  $db=mysql_connect($host, $user_name, $pwd);
  if (mysql_error() > "") print mysql_error() . "<br>";
  mysql_select_db($database_name, $db);
  if (mysql_error() > "") print mysql_error() . "<br>";
  
  $firstName = $_POST["firstName"]; 
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $company = $_POST["company"]; 
  $phone = $_POST["phone"];
  $country = $_POST["country"];
  $comments = $_POST["comments"];

  $query = "insert into expert (firstName, lastName, email, company, phone, country, comments) values ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $company . "', '" . $phone . "', '" . $country . "', '" . $comments . "')";
  $result = mysql_query($query);
 
  echo "<p>Thank you for entering an email!</p>";
?>
