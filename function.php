<!DOCTYPE html>
<head>
<title>PHP Function</title>
<body>
    <?php
        function increment($val, &$ref) {
            echo "Passed values: $val, $ref <br />";
            $val++;
            $ref++;
            echo "Incremented values: $val, $ref <hr />";
        }
        $val = 4;
        $ref = 5; 
        increment($val, $ref); 
    ?>

    <?php
        function greet() {
            echo 'Hello World! <br />';
        }
        greet();
    ?>
</body>
</head>