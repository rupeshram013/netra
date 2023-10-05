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
    
    echo "databaseloladed"; 
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = $_POST["username"];
        $useremail = $_POST["email"];
        
        echo "Variables set"; 
        setcookie("username" , $username , time() + 86400 , "/");
        setcookie("useremail" , $useremail , time() + 86400 , "/");
        
        echo "Cookies set"; 
        
        $insert_query = "insert into netra_users.join (username , email) values ('$username' , '$useremail')"; 
        mysqli_query($netra_database, $insert_query);
        
        // $database_data_join = mysqli_query($netra_database , $result_query);
        echo "Sql ran"; 
        

        // if (mysqli_num_rows($database_data_join) > 0){

        //     while($row = mysqli_fetch_array($database_data_join)){

        //     }
        // }
        
    }

    header("Location: ../index.php");

?>