
<?php
    header("Location: ../index.php");
?>

<body>

    <div id="navbox">

        <div id="nav_title">
            <img src="../static/images/logo.png" id="logo">
            <h1><a href="../index.php">Netra</a></h1>    
        </div>

        <div id="options">
            <!-- <div id="upload"> <a href="../pages/upload.php">  <img src='../static/images/add.png' > </a> </div> -->
            <?php 
                // include("../database/database.php");

                // try{
                //     if($_COOKIE["username"] != NULL){
                //         echo "<div id='profile'> <a href='../pages/profile.php'> <img src='../static/images/profile.png' width='10%'>".$_COOKIE["username"]." </a> </div>";
                //     }else{
                //         echo "<div id='profile'> <a href='../pages/login.php'><p>Login</p></a> </div>";
                //     }

                // }catch(Exception $except){
                //     echo "<script> console.log('login unsuccessfull') </script>";
                // }
            ?>

        </div>
        <!-- <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div> -->
    </div>

    <!-- <div id="forms">
 
        <form id="login_form" class="form" action="../database/login_database.php" method="POST">
            <h1>Login</h1>
            <input type="text" placeholder="Username" name="username" required autocomplete = "off">
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
             <a href="../pages/register.php">Forgot Password?</a> -->
            <!-- <button type="submit">Login</button>
        </form>
    </div> --> 
<!-- 
    <div id="bottom_navbox" style="display:none;">

        <div id="options">
            <div id="upload"> <a href="../pages/upload.php">  <img src='../static/images/add.png' > </a> </div>
            <?php 
                // if($_COOKIE["username"] != NULL){
                //     echo "<div id='profile'> <a href='../pages/profile.php'> <img src='../static/images/profile.png' width='10%'> </a> </div>";
                // }else{
                //     echo "<div id='profile'> <a href='../pages/login.php'><p>Login</p></a> </div>";
                // }
            ?>
            <button onclick="switch_tab_P('news')" id="switch_tab_button"> 
                <img src="../static/images/comment_white.png">
            </button>
        </div>
        <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div>
    </div>
     -->
</body>
</html>