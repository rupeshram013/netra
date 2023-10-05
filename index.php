
<?php
    echo "<script>console.log('Start of index page!')</script>";
    setcookie("error" , "no" , time() + 86400 ,"/");
    include("database/database.php");
    
    echo "<script>console.log('Database was surfed!')</script>";
    // $mysql_query = "select * from netra_users.login";
    // $result = mysqli_query($netra_database,$mysql_query);
    // if (mysqli_num_rows($result) > 0){

    //     while($row = mysqli_fetch_array($result)){
    //         // echo "<div id='content_box'>";
    //         echo "<h5>".$row['username']."</h5>";
    //         echo "<h3>".$row['userpassword']. "</h3>";
    //         echo "<p>".$row['useremail']. "</p>";
    //         // echo "</div>";
    //         // echo "<div id='bottom_content_box'>";
    //         // echo "</div>";
    //     }
    // }
    
    if($_COOKIE["username"] === NULL){
        header("Location: pages/join.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style/index_style.css">
    <link rel="icon" href="static/images/logo_small.png">
    <script src="static/scripts/index_script.js"></script>
    <title>Netra</title>
</head>
<body>

    <div id="navbox">

        <div id="nav_title" >
            <img src="static/images/logo.png" id="logo">
            <h1><a href="index.php">Netra</a></h1>    
        </div>

        <div id="options">
            <div id="upload"> <a href="pages/upload.php">  <img src='static/images/add.png' > </a> </div>
            <?php 
                
                if($_COOKIE["username"] != NULL){
                    echo "<div id='profile'> <a href='pages/profile.php'> ".$_COOKIE["username"]." </a> </div>";
                }else{
                    echo "<div id='profile'> <a href='pages/join.php'><p>Join</p></a> </div>";
                }
            ?>
            </div>
        <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div>
    </div>


    <div id="contentbox">
        <div id="leftcontent" class="innercontent">
            <div id="tab">
                
                <button onclick="switch_tab_P('news')" id="switch_tab_button"> 
                    <p id="P_switch_arrow" style="color:rgb(0, 0, 0,0.5)"><</p>
                </button>
                <button onclick="switch_tab_M('news')" id="switch_tab_button"> 
                    <p id="M_switch_arrow" style="color:rgb(56, 89, 224)">></p>     
                </button>

            </div>

            <div id="categories">
                <h1>Contents</h1>
                <h2>Hot & Trending</h2>
                <h2>Politics</h2>
                <h2>Foreign Affairs</h2>
                <h2>Sports</h2>
                <h2>Education</h2>
                <h2>finance & Business</h2>
                <h2>AI</h2>
                <h2>Music</h2>
                <h2>Movies</h2>

            </div>

        </div>


        <div id="midcontent">
            
            
            <div id="news"   >
                <div id="news_title">
                    <h1>News Flash!</h1>
                </div>
                
                
                
                <div id="news_content">
                    <?php 
                            // include("database/database.php");

                            // $mysql_query = "select * from netra_content.news";
                            // $result = mysqli_query($netra_database,$mysql_query);

                            // if (mysqli_num_rows($result) > 0){
                                
                                //     while($row = mysqli_fetch_array($result)){
                                    //         echo "<div id='contents'>";
                                    //         echo "<h2>".$row['title']."</h2>";
                                    //         echo "<h6>".$row['date']. "</h6>";
                            //         echo "<div id='outer_news_img'>";
                            //             echo "<img id='news_img' src="."database/".$row['image'].">";
                            //         echo "</div>";
                            //         echo "<p>".$row['description']. "</p>";
                            //         echo "</div>";
                            
                            //     }
                            // }
                            ?>
                    <div id="contents">
                        <h2> Mayor Shah listed as emerging leader in 2023 TIME100 Next </h2>
                        <h6>2023.09.15</h6>
                        <div id="outer_news_img">
                            <img id="news_img" src='static/images/bolon.jpg'>
                        </div>
                        <p>Balendra Shah, the mayor of Kathmandu Metropolitan City (KMC), has been named one of the TIME100 Next emerging leaders of the globe for 2023. Shah is one of the 100 up-and-coming individuals included on the 2023 TIME100 Next. Shah became the mayor of KMC after winning the local elections in 2079.<br><br>According to the magazine, the 33-year-old, who holds a master's degree in structural engineering, ran as an independent and used social media platforms like TikTok, Twitter, and Instagram to capitalize on voter resentment of the status quo. This created a "Balen effect" that led to up to 385 independent candidates beating out seasoned politicians in the local election last spring. </p>
                        
                    </div>

                    <div id="contents">
                        <h2>The government declares a holiday to mourn Subas Chandra Nembang's passing.</h2>
                        <h6>2023.09.15</h6>
                        <div id="outer_news_img">
                            <img id="news_img" src='static/images/mango.webp' >
                        </div>
                        <p>Former speaker and Vice-Chair of the CPN-UML Subas Chandra Nembang is no more, and the nation mourns this loss. He had suffered a heart attack Tuesday morning and was assumed dead on being brought to the TU Teaching Hospital at Maharajgunj.He was 71. </p>
                        
                    </div>

                    <div id="contents" id="last">
                        <h2>Heavy rains trigger floods and landslides in India's Himalayan region . </h2>
                        <h6>2023.09.15</h6>
                        <div id="outer_news_img">
                            <img id="news_img" src='static/images/flood.jpg'>
                        </div>
                        <img id="news_img" >
                        <p> Heavy monsoon rains triggered floods and landslides in India's Himalayan region, leaving at least 33 people dead and many others trapped, officials told local media on Monday. Torrential downpours that began over the weekend in the mountainous Himachal Pradesh state have flooded roads and washed away homes as scores of rescuers work to help those trapped under piles of debris.<br><br>A cloudburst in the state's Solan district on Sunday night killed nine people in the area, and 12 people died following two landslides in Shimla, the state's capital, authorities told the Press Trust of India news agency. </p>
                        
                    </div>
                </div>
                
            </div>
            <div id="thread" style="display:none; ">
                <div id="title"> 
                    <div id="thread_img">
                        <img src="static/images/thread_logo_black.png">
                    </div>
                    <h1>
                        Thread
                    </h1>
                </div>

                <div id="content">
                    <?php 
                        include("database/database.php");

                        $mysql_query = "select * from netra_content.thread";
                        $result = mysqli_query($netra_database,$mysql_query);

                        if (mysqli_num_rows($result) > 0){

                            while($row = mysqli_fetch_array($result)){
                                // echo "<div>";
                                echo "<div id='content_box'>";
                                    echo "<h5>".$row['post_date']."</h5>"."<br>";
                                    echo "<h4>"."@".$row['creator']."</h4>";
                                    echo "<h3 id ='content_title_thread'>".$row['title']. "</h3>";
                                    
                                    echo "<div id='image_box'>";
                                    if ($row["image_name"] != "images/"){
                                            echo "<img src="."database/".$row['image_name'].">";
                                    }
                                    echo "</div'>";
                                    echo "<p>".$row["description"]."</p>";
                                    echo "</div>";
                                    
                                    if($row['creator'] === $_COOKIE['username']){
                                        echo "<div id='bottom_thread_box'>";
                                        echo "<form action='database/content_delete.php' id='delete' method='POST'>"; 
                                        echo "<button name='delete_button' type='submit' value=".$row['id']."><img src='static/images/bin_white.png'></button>"; 
                                        echo "</form>"; 
                                        echo "</div>";
                                        
                                    }


                                echo "</div>";

                            }
                        }
                    ?>
                </div> 
                
            </div>

        </div>

    </div>
    <div id="bottom_navbox">

        <div id="options">
            <div id="upload"> <a href="pages/upload.php">  <img src='static/images/add.png' > </a> </div>
            <?php 
                if($_COOKIE["username"] != NULL){
                    echo "<div id='profile'> <a href='pages/profile.php'> <img src='static/images/profile.png' width='10%'> </a> </div>";
                }else{
                    echo "<div id='profile'> <a href='pages/join.php'><p>Login</p></a> </div>";
                }
            ?>
            <button onclick="change_tab('news')" id="switch_tab_button"> 
                <img src="static/images/comment_white.png">
            </button>
        </div>
        <div id="nav_dots" style="display:none;"><button onclick="show_nav()"><img src="../static/images/horizontal_dots.png"></button></div>
    </div>
    <div id="rightcontent" class="innercontent" > 
            <div id="title">
                <h1>Contact</h1>
            </div>
            <div id="super_users">

                <div id="contact">
                    <div id="left_box">
                        
                    </div>
                    <div id="right_box">
                        <div id="img">
                            <img src="static/images/contact.png" alt="">
                        </div>
                        <p>Rupesh Ram</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>