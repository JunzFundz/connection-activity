<?php
$conn = mysqli_connect('localhost','root','', 'mycadimas') or die('error');

$sql="ALTER TABLE stud_info
ADD s_tuition DECIMAL(10,2);";

if(mysqli_query($conn,$sql)){
echo"Table  added";
}else{
echo"Error!".mysqli_error($conn);
}
mysqli_close($conn);
?>
