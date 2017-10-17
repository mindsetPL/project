<!DOCTYPE html>
<head>
    <title>Plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Nunito:700|Open+Sans" rel="stylesheet">
    <?php include reflection.php; ?>
    <script type="text/javascript" src="backtoHome.js"></script>
</head>
<body onload="backtoHome()">
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
            <form name="reflection" method="post">
                <span class="error"><?php echo $error; ?></span>
                <textarea rows="15" placeholder="What went well?" name="good"></textarea>
                <textarea rows="15" placeholder="What could have gone better?" name="bad"></textarea>
                <textarea rows="15" placeholder="What can I change?" name="ugly"></textarea>
                <input type="submit" class="addBtn" value="Submit">
            </form>
            
        </div>
        
    </section>
    <section id="footer">
        <p>Designed by Sarah Overton and Drew Lytle</p>
    </section>
    
</body>