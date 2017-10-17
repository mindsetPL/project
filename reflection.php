<?php
echo 'I got here';
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["good"])) {
    $err = "You must say what went well. ";
  } else if(empty($_POST['bad'])) {
      $err = $err + "You must say what could have gone better. "
  } else if(empty($_POST['ugle'])){
      $err = $err + "You must say what you could change. "
  }
}

?>