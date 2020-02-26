<?php
    include "conn.php";

    $id = $_GET["id"];
    $exemplo = $_GET["exemplo"];
    
    if($exemplo == null || $id == null){
        echo "NULO";
    }else{
        $sql = mysqli_query($conn, "UPDATE arduino SET exemplo = ('$exemplo') WHERE id = $id");

        if($sql){
            echo "cadastrou";
        }else{
            echo "não cadastrou";
        }
    }
?>