<?php
$conn = mysqli_connect('localhost','root','', 'mycadimas') or die('error');

$sql="ALTER TABLE student_info RENAME TO stud_info";

if(mysqli_query($conn,$sql)){
    echo"Table renamed succesfully";
}else{
    echo"Error!".mysqli_error($conn);
}
mysqli_close($conn);
?>