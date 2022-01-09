<?php
$id=$_POST['maNV'];
echo $id;

$conn =mysqli_connect('localhost','root','','1951060822_employees');
if(!$conn){
die("kết nối thất bại");
}
$sql="DELETE FROM nhanvien WHERE maNV ='$id'";
$result=mysqli_query($conn,$sql);
if($result > 0)
header("Location:index.php");
else
echo 'that bai'
?>