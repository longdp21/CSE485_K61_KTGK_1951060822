<?php

$id = $_POST['maNV'];
$hovaten = $_POST['hovaten'];
$chucvu = $_POST['status'];
$phongban = $_POST['year'];
$luong = $_POST['drate'];
$ngayvaolam = $_POST['wrate'];
$conn =mysqli_connect('localhost','root','','1951060822_employees');
if(!$conn){
die("kết nối thất bại");
}

$sql_1 = "INSERT INTO cars values('$id','$hovaten','$chucvu','$phongban','$luong','$ngayvaolam')";
echo $sql_1;
    $result_1 = mysqli_query($conn,$sql_1);
    if($result_1 > 0)
    {
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }
