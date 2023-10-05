
<?php 

    include("../database/database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style/index_style.css">
    <link rel="icon" href="../static/images/logo_small.png">
    <link rel="stylesheet" href="../static/style/upload_style.css">
    <script src="../static/scripts/index.js"></script>
    <title>Netra</title>
</head>
<body>
    

    <div id="navbox">

        <div id="nav_title">
            <img src="../static/images/logo.png" id="logo">
            <h1><a href="../index.php">Netra</a></h1>    
        </div>

        <div id="options">
            <!-- // <div id="upload"> <a href="../pages/upload.php">  <img src='../static/images/add.png' > </a> </div> -->
            <?php 
                if($_COOKIE["username"] != NULL){
                    echo "<div id='profile'> <a > ".$_COOKIE["username"]." </a> </div>";
                }else{
                    echo "<div id='profile'> <a href='pages/join.php'><p>Join</p></a> </div>";
                }
            ?>
        </div>
        <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div>

    </div>

    <div id="forms">

        <form style="background-color:white;" id="login_form" class="form" action="../database/upload_database.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <h1>Upload</h1>
            <input type="text" placeholder="Title" autocomplete="off" name="title" value="Give a title!!" required>
            <h3>Your View:</h3>
            <textarea placeholder="Write here....." name="description" required></textarea>
            <input type="file" id="images" name="image">
            <label for="images">Upload Image </label>
            <!-- <a href="../pages/register.php">Forgot Password?</a> -->
            <button type="submit">Upload</button>
        </form>
    </div>

    <div id="bottom_navbox" style="display:none;">

        <div id="options">
            <div id="upload"> <a href="../pages/upload.php">  <img src='../static/images/add.png' > </a> </div>
            <?php 
                if($_COOKIE["username"] != NULL){
                    echo "<div id='profile'> <a > <img src='../static/images/profile.png' width='10%'> </a> </div>";
                }else{
                    echo "<div id='profile'> <a href='../pages/login.php'><p>Login</p></a> </div>";
                }
            ?>
            <button onclick="switch_tab_P('news')" id="switch_tab_button"> 
                <img src="../static/images/comment_white.png">
            </button>
        </div>
        <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div>
    </div>
</body>
</html>