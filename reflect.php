<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <title>Reflect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Nunito:700|Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="backtoHome.js"></script>
</head>
<body onload="backtoHome()">
    <?php
        function checkGood() {
            $good;
            if ($_POST['good'] == "" && isset($_SESSION['loaded'])) {
                $err = "You must say what went well. ";
            }
            else {
                $err = "";
                $good=$_POST['good'];
            }
            return $err;
            
        }
        function checkBad() {
            $bad;
            if ($_POST['bad'] == "" && isset($_SESSION['loaded'])) {
                $err = "You must say what could've gone better. ";
            }
            else {
                $err = "";
                $bad=$_POST['bad'];
            }
            return $err;
        }
        function checkUgly() {
            $ugly;
            if ($_POST['ugly'] == "" && isset($_SESSION['loaded'])) {
                $err = "You must say what you can change. ";
            }
            else {
                $err = "";
                $ugly=$_POST['ugly'];
            }
            return $err;
        }
    

    ?>
    <nav id="navbar">
        <ul>
            <li id="mainTitle"><a href="index.html"><img src="images/msLogoV1.png"  width="80px;" style="vertical-align: middle; margin-right: 5px;"/>MindSet</a></li>
            <li><a href="breathe.html" class="navLink">Breathe</a></li>
            <li><a href="plan.html" class="navLink">Plan</a></li>
        </ul>
    </nav>
    <section id="main">
        <h1>Reflect</h1>
        <p id="quote">What you think, you become; what you feel, you attract; what you imagine, you create.</p>
        <div class="container">
            <form name="reflection" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <span class="error">
                    <?php if(isset($_POST['submit'])) {
                        $masterErr="";
                        $masterErr.= checkGood();
 
                        $masterErr.= checkBad();
                        $masterErr.= checkUgly();
                        echo $masterErr;
                    }
                    ?>
                </span>
                <textarea rows="15" placeholder="What went well?" name="good"><?php 
                    if (isset($_POST['good']) && $_POST['good']!="" && $masterErr!=""){
                        echo $_POST['good'];
                    }
                    ?></textarea>
                <textarea rows="15" placeholder="What could have gone better?" name="bad"></textarea>
                <textarea rows="15" placeholder="What can I change?" name="ugly"></textarea>
                <input type="submit" class="addBtn" value="Submit" name="submit">
            </form>
            
        </div>
        
    </section>
    <section id="footer">
        <p>Designed by Sarah Overton and Drew Lytle</p>
    </section>
    <?php 
        $_SESSION['loaded'] = 1;
    ?>
</body>