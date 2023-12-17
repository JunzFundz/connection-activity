<?php
$conn = mysqli_connect('localhost','root','', 'mycadimas') or die('error');

$sql="CREATE TABLE student_info(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    s_lname VARCHAR(100),
    s_fname VARCHAR(100),
    s_mname VARCHAR(100),
    s_gender VARCHAR(1)
    )";

if(mysqli_query($conn,$sql)){
echo"Table created";
}else{
echo"Error!".mysqli_error($conn);
}
mysqli_close($conn);

?>