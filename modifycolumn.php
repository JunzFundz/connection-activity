<?php
$conn = mysqli_connect('localhost','root','','mycadimas') or die('error');

$sql="ALTER TABLE stud_info
MODIFY s_gender VARCHAR(7)";

if(mysqli_query($conn,$sql)){
echo"Column modified";
}else{
echo"Error!".mysqli_error($conn);
}
mysqli_close($conn);

?>