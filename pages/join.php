<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style/index_style.css">
    <link rel="stylesheet" href="../static/style/login_form.css">
    <link rel="icon" href="../static/images/logo_small.png">
    <script src="../static/scripts/index.js"></script>
    
    <title>Join</title>
</head>

<body>

    <div id="navbox">
        <div id="nav_title">
            <img src="../static/images/logo.png" id="logo">
            <h1><a href="../index.php">Netra</a></h1>    
        </div>
    </div>

    <div id="forms" >
 
        <form id="login_form" class="form" action="../database/join_database.php" method="POST" autocomplete="off" style="background-color:white;">
            <h1>Join</h1>
            <input type="text" placeholder="Username" name="username" required autocomplete="off">
            <input type="password" placeholder="Password" name="userpassword" required autocomplete="off">
            <?php
                if($_COOKIE["error"] === "yes"){
                    echo "<p id='error_text'>Username exists , password invalid!</p>";
                }
            ?>
            <!-- <a href="../pages/register.php">Forgot Password?</a> -->
            <button type="submit">Join</button>
        </form>
    </div>

</body>
</html>