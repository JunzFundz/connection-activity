<?php
$conn = mysqli_connect('localhost','root','') or die('error');
if (mysqli_connect_error()){
    echo 'failed to connect to the database'.mysqli_connect_error();
}
    else {
        echo'successfully connected to the database';
    }

    $sql="CREATE DATABASE mycadimas";

    if(mysqli_query($conn,$sql)){
        echo"DATABASE created";
    }else{
        echo"Error!".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    


