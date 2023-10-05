<?php include('header.php')
?>
<body>


    <div id="navbox">

    <div id="nav_title" >
        <img src="../static/images/logo.png" id="logo">
        <h1><a href="../index.php">Netra</a></h1>    
    </div>

    <div id="options">
        <div id="upload"> <a href="upload.php">  <img src='../static/images/add.png' > </a> </div>
        <?php 
            
            if($_COOKIE["username"] != NULL){
                echo "<div id='profile'> <a href='profile.php'> ".$_COOKIE["username"]." </a> </div>";
            }else{
                echo "<div id='profile'> <a href='join.php'><p>Join</p></a> </div>";
            }
        ?>
        </div>
    <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div>
    </div>


    <div id="profile_content">
        <div id="title"> 
            <div id="profile_img">
                <img src="../static/images/profile_black.png">
            </div>
            <h1>
            <?php 
                echo $_COOKIE["username"];
            ?></h1>
        </div>

        <div id="profile_buttons">
            <form action="../database/profile_database.php" method="POST">
                <button type="submit" id="logout_button">
                    <p>Logout</p>
                </button>
            </form>
        </div>
        


    </div>

    
</body>
</html>
