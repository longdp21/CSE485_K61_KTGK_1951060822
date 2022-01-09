<?php
$id = $_POST['maNV'];
$hovaten = $_POST['hovaten'];
$chucvu = $_POST['chucvu'];
$phongban = $_POST['phognban'];
$luong = $_POST['luong'];
$ngayvaolam = $_POST['ngayvaolam'];
$conn =mysqli_connect('localhost','root','','1951060822_employees');
if(!$conn){
die("kết nối thất bại");
}
$sql="UPDATE 'nhanvien' SET  'maNV'=$id ,'hovaten'=$hovaten,'chucvu'=$chucvu, 'phognban'=$phongban ,'luong'=$luong,'ngayvaolam'=$ngayvaolam WHERE maNV ='$id'";
$result =  mysqli_query($conn,$sql);
if($result > 0)
    {
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


?>