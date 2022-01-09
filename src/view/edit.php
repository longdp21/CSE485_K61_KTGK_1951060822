<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Sửa nhân viên:</h2>
            <form class="px-md-2"  action ="checkedit.php" method="POST">

<div class="form-outline mb-4" >

<input type="text" id="id" class="form-control" name ="maNV" />
  <label class="form-label" for="form3Example1q">Mã nhân viên cần sửa</label>
</div>
  <input type="text" id="id" class="form-control" name ="maNV" />
  <label class="form-label" for="form3Example1q">Mã nhân viên mới</label>
</div>
<div class="form-outline mb-4">
  <input type="text" id="name" class="form-control" name= "hovaten" />
  <label class="form-label" for="form3Example1q">Họ tên mới</label>
</div>

<div class="row">
  <div class="col-md-6 mb-4">

    <div class="form-outline datepicker">
      <input
        type="text"
        class="form-control"
        id="chucvu"
        name = "chucvu"
      />
      <label for="exampleDatepicker1" class="form-label">Chức vụ mới</label>
    </div>
  </div>
  <div class="row">
  <div class="col-md-6 mb-4">

    <div class="form-outline datepicker">
      <input
        type="text"
        class="form-control"
        id="phongban"
        name = "phongban"
      />
      <label for="exampleDatepicker1" class="form-label">Phòng ban mới</label>
    </div>
  </div>


<div class="row mb-4 pb-2 pb-md-0 mb-md-5">
  <div class="col-md-6">
  <div class="form-outline">
      <input type="text" id="luong" class="form-control" name ="luong" />
      <label class="form-label" for="form3Example1w">Lương mới</label>
    </div>
    <div class="form-outline">
      <input type="text" id="ngayvaolam" class="form-control" name= "ngayvaolam" />
      <label class="form-label" for="form3Example1w">Ngày vào làm mới</label>
    </div>
   
    

  </div>
</div>

<button type="submit" class="btn btn-success btn-lg mb-1" name ="add">Sửa</button>

</form>

            </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>