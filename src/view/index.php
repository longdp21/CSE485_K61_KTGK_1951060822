<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
       h1{ 
           color : red;
           margin: 1px 300px 1px 450px;
       }
</style>   
<body>
<h1>Bảng lưu trữ thông tin nhân viên:</h1>
<table class="table table-success table-striped">
  <thead>
    <tr>
    <th scope="col">Mã nhân viên</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Phòng ban</th>
      <th scope="col">Lương</th>
      <th scope="col">Ngày vào làm</th>
    </tr>
  </thead>
  <tbody>
    <style>
a {
width:80px;
height:40px;
margin:20px;
}

    </style>
<?php
 $conn=mysqli_connect('localhost','root','','1951060822_employees');
 if(!$conn)
 die('Kết nối thát bại!!');
 $sql= "SELECT * FROM nhanvien";
 $result= mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
?>
      <tr>
          <th scope="row"><?php echo $row['maNV']; ?></th>
          <th><?php echo $row['hovaten']; ?></th>
          <th><?php echo $row['chucvu']; ?></th>
          <th><?php echo $row['phongban']; ?></th>
          <th><?php echo $row['luong']; ?></th>
          <th><?php echo $row['ngayvaolam']; ?></th>
      </tr>
<?php
}
}

?>
  </tbody>
</table>
<?php
echo '<a class="btn btn-primary" href="view/add.php" role="button">Thêm</a>';
echo '<a style="background:red" class="btn btn" href="view/delete.php" role="button">Xóa</a>';
echo '<a style="background:green" class="btn btn" href="view/edit.php" role="button">Sửa</a>';
?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>