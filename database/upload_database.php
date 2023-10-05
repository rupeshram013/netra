<?php 

    include("database.php");
    
    
        
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $random_id = rand(1024,2048);

        $author = str_replace( "'" ,"\'",$_COOKIE["username"]);
        $title = str_replace( "'" ,"\'",$_POST["title"]);
        $rawdescription = str_replace( "'" ,"\'",$_POST["description"]); 
        $date = str_replace( "'" ,"\'",date("Y/m/d")); 
        
        $newline_description = str_replace("\n","<br>",$rawdescription); 
        $description = str_replace('"','\"',$newline_description); 

        $image_name = $_FILES["image"]["name"];
        $image_tmp_name = $_FILES["image"]["tmp_name"];
        $image_type_name = $_FILES["image"]["type"];
        
        
        echo $image_name ;
        echo $image_tmp_name;
        echo "<br>".$_FILES["image"]["type"];

        $target_folder = "images/$image_name";

        move_uploaded_file($image_tmp_name,$target_folder );


        echo "Variables were initilized!";
        $mysql_query ="insert into netra_content.thread (creator , title , description , post_date , image_name , image_type , id) values ('$author' , '$title' , '$description' , '$date' , '$target_folder' , '$image_type_name' , '$random_id')";
        mysqli_query($netra_database,$mysql_query);
        echo "Sql ran"; 
        
    }

  
    header("Location: ../index.php");


?>