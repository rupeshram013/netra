<?php 

    include("database.php");
 
    // echo $_COOKIE["username"];
    // echo $_COOKIE["useremail"];
    // echo $_COOKIE["userpassword"];
    
    // if ($_SERVER["REQUEST_METHOD"] = "POST"){

    //     $found = 0;

    //     $username = $_POST["username"];
    //     $useremail = $_POST["email"];
    //     $userpassword = $_POST["password"]; 
    
    //     $mysql_query = 'select * from netra_users.login';
    //     $result = mysqli_query($netra_database,$mysql_query);
    
    //     if (mysqli_num_rows($result) > 0){
    
    //         while($row = mysqli_fetch_array($result)){
    //             if ($row["username"] == $username && $row["email"] == $useremail && $row["password"] == $userpassword ){
    //                 $found = 1;
    //             }else{
    //                 $found = 0;
    //             }
    //         }
    //     }

    //     if ($found == 1){
    //         setcookie("username" , $username , time() + 86400 ,"/");
    //         setcookie("useremail" , $useremail , time() + 86400 ,"/");
    //         setcookie("userpassword" , $userpassword , time() + 86400 ,"/");
    //         echo "The user was successfully logged in!!";
    //     }else{
    //         echo "User was not found in the database;";
    //     }


    //     // $mysql_query ="insert into netra_users.login(username , email , password) values ('$username' , '$useremail' , '$userpassword')";     
    //     // mysqli_query($netra_database,$mysql_query);


    // }
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = $_POST["username"];
        $userpassword = $_POST["userpassword"];
        
        $result_grab_query = 'select * from netra_users.join';
        $database_result_join = mysqli_query($netra_database,$result_grab_query);
        
        echo "databaseloladed--0"; 
        if(mysqli_num_rows($database_result_join) >= 0){
            echo "databaseloladed--2"; 
            
            while($row = mysqli_fetch_array($database_result_join)){
                echo "databaseloladed--2--"; 
                if($username === $row["username"]){
                    echo "Username found !!"; 
                    if($userpassword === $row["password"]){
                        setcookie("username" , $username , time() + 86400 , "/");
                        setcookie("userpassword" , $userpassword , time() + 86400 , "/");
                        
                        echo "Password found !!"; 
                        header("Location: ../index.php");
                    }else{
                        echo "Password invalied !!"; 
                        setcookie("error" , "yes" , time() + 86400 ,"/");
                        header("Location: ../pages/join.php");
                        
                    }
                }
            }
            
        }

        echo "For joining !!"; 
        $insert_query = "insert into netra_users.join (username , password) values ('$username' , '$userpassword')"; 
        mysqli_query($netra_database, $insert_query);
        echo "Sql ran"; 
        echo "databaseloladed--1"; 
        echo "Variables set"; 
        
        echo "Cookies set"; 
        
        
        // $database_data_join = mysqli_query($netra_database , $result_query);
        

        // if (mysqli_num_rows($database_data_join) > 0){

        //     while($row = mysqli_fetch_array($database_data_join)){

        //     }
        // }
        
    }

    header("Location: ../index.php");

?>