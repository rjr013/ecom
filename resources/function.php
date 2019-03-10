<?php

function redirect($location){
  header("Location: $location");
}

function query($sql){
  global $connection;
  return mysqli_query($connection, $sql);
}

function confirm($result){
  global $connection;

  if(!$result){
    die("Query Failed ". mysqli_error($connection));

  }
}

function escape_string($string){
  global $connection;

  return mysqli_escape_string($connection, $string);
}

?>
