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
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Thêm nhân viên</h3>

            <form class="px-md-2"  action ="checkadd.php" method="POST">

              <div class="form-outline mb-4" >
              
                <input type="text" id="maNV" class="form-control" name ="maNV" />
                <label class="form-label" for="form3Example1q">Mã nhân viên</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control" name= "hovaten" />
                <label class="form-label" for="form3Example1q">Họ và tên</label>
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
                    <label for="exampleDatepicker1" class="form-label">Phòng ban</label>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input
                      type="text"
                      class="form-control"
                      id="luong"
                      name = "luong"
                    />
                    <label for="exampleDatepicker1" class="form-label">Lương</label>
                  </div>
                </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">
                <div class="form-outline">
                    <input type="text" id="ngayvaolam" class="form-control" name ="ngayvaolam" />
                    <label class="form-label" for="form3Example1w">Ngày vào làm</label>
                  </div>

                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1" name ="add">Add</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>