<?php

if (isSet($_POST('good')))
{
    $count = 0;
    
    $words = preg_split('[\s]+/', $_POST['good'], -1, PREG_SPLIT_NO_EMPTY);
    
    $count = count($words);
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
       
    echo $count+" words <br>";
}
else
{
    echo "0 words <br>"
}


?>