<?php
// define variables and set to empty values
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


if (isSet($_POST('good')))
{
    $count = 0;
    
    $words = preg_split('[\s]+/', $_POST['good'], -1, PREG_SPLIT_NO_EMPTY);
    
    $count = count($words);
    if ($count >= 250){
        echo "Too many words!";
    }
    /*https://stackoverflow.com/questions/17206468/php-reading-word-by-word*/          
    echo $count+" words <br>";
}
else
{
    echo "0 words <br>"
}

if (isSet($_POST('bad')))
{
    $count = 0;
    
    $words = preg_split('[\s]+/', $_POST['bad'], -1, PREG_SPLIT_NO_EMPTY);
    
    $count = count($words);
    if ($count >= 250){
        echo "Too many words!";
    }
       
    echo $count+" words <br>";
}
else
{
    echo "0 words <br>"
}

if (isSet($_POST('ugly')))
{
    $count = 0;
    
    $words = preg_split('[\s]+/', $_POST['ugly'], -1, PREG_SPLIT_NO_EMPTY);
    
    $count = count($words);
    if ($count >= 250){
        echo "Too many words!";
    }
       
    echo $count+" words <br>";
}
else
{
    echo "0 words <br>"
}

?>