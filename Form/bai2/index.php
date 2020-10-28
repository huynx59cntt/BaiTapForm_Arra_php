<?php
const PI = 3.14;
      $errorBK = $ChuVi = $DienTich = $BanKinh ="";
      if(isset($_POST['submit'])){
            if(empty($_POST['bankinh'])) $errorBK = "Chưa nhập bán kính";
            else{   
                $BanKinh = $_POST['bankinh'];
                if($BanKinh < 1) $errorBK = "Bán kính không phải số nhỏ hơn 1";
                else{
                        $errorBK = $BanKinh;
                        $DienTich = PI * pow($BanKinh, 2);
                        $ChuVi = 2 * PI * $BanKinh;
                    }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
<style>
     .form-bt{
        margin: 40px auto;
        width: 50%;
        border: 1px solid black;
    }
    .title{
        background-color: #dc3545;
        height: 70px;
    }
    .title h2{
        text-align: center;
        color: #fff;
        line-height: 70px;
    }
  
    .form{
        padding: 20px;
    }
    .form-group{
        display: flex;
    }
    .form-group .label-group{
        min-width: 150px;
        font-weight: bold;
    }
    .form-group input{
        min-width: 400px;
    }
    ::-webkit-input-placeholder { /* WsebKit, Blink, Edge */
        color:  red !important;
        font-weight: bold;
    }
    button{
        width: 150px;
        margin-left: 150px;
    }
</style>
</head>
<body>
    
<div class="form-bt">
        <div class="title">
            <h2>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
            <div class="label-group"><label for="">Bán kính</label></div>
            <div><input type="number" name="bankinh" id="" class="form-control" placeholder="<?php echo $errorBK ?> " aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group">Diện tích</div>
            <div> <input type="number" readonly name="dientich" value="<?php echo $DienTich; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group">Chu vi</div>
            <div> <input type="number" readonly name="chuvi" value="<?php echo $ChuVi; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <button class="btn btn-danger" name="submit">
            Tính
        </button> 
              </form>
        </div>
    </div>
</body>
</html>