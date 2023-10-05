<?php 

    include("database.php");

    echo "content_delete.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        echo $delete_id;
        $delete_id = $_POST["delete_button"];

        echo $delete_id;

        $delete_query = "delete from netra_content.thread where id = $delete_id";

        mysqli_query($netra_database,$delete_query);
    }

    header("Location: ../index.php");

?>