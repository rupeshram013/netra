
<?php 

    echo "<script> console.log('Start of the database code!') </script>";
    $netra_database = mysqli_connect("localhost" , "root" , "");
    
    if (!$netra_database){
        echo "<script> console.log('Database was not connected successfully!') </script>";
    }else{
        echo "<script> console.log('Database was connected successfully!') </script>";
    }
    
    // User data grabbed from the form filling;
   
    
    echo "<script> console.log('End of the database code!') </script>";
?>