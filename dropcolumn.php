<?php
$conn = mysqli_connect('localhost','root','','mycadimas') or die('error');

$sql=" ALTER TABLE stud_info
DROP COLUMN civil_status;  ";

if(mysqli_query($conn,$sql)){
echo"Column dropped";
}else{
echo"Error!".mysqli_error($conn);
}
mysqli_close($conn);

?>