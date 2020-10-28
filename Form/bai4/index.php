<?php 
$td = $kqt = $toan = $ly = $hoa ="";
    if(isset($_POST['submit'])){
        
        if(is_numeric($_POST['toan']) && ($_POST['toan']) >=0  &&
           is_numeric($_POST['ly']) && ($_POST['ly']) >=0  &&
           is_numeric($_POST['hoa']) && ($_POST['hoa']) >=0  
        ){
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $td = $toan + $ly + $hoa;
            if($td >= $_POST['diemchuan'])
                $kqt = "Đậu";
            else     $kqt = "Rớt";
        }
        else
            $toan =   $ly = $hoa = "Phải nhập đủ 3 trường và là số >= 0";
        


    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
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
            <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Toán</label></div>
                <div><input type="text" name="toan" id="" class="form-control" placeholder="<?php echo $toan ?> " aria-describedby="helpId"></div>
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Lý</label></div>
                <div> <input type="text" name="ly" value="" id="" class="form-control" placeholder="<?php echo $ly ?>" aria-describedby="helpId"></div>
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Hóa</label></div>
                <div> <input type="text" name="hoa" value="" id="" class="form-control" placeholder="<?php echo $hoa ?>" aria-describedby="helpId"></div>
            </div>    
            <div class="form-group">
                <div class="label-group"><label for="">Điểm chuẩn</label></div>
                <div> <input type="text" readonly name="diemchuan" value="20" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
                </div>
            <div class="form-group">
                <div class="label-group"><label for="">Tổng điểm</label></div>
                <div> <input type="text" readonly value="<?php echo $td; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Kết Quả Thi</label></div>
                <div> <input type="text"  readonly value="<?php echo $kqt; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <button class="btn btn-danger" name="submit">
                Xem kết quả
            </button> 
              </form>
        </div>
    </div>
</body>
</html>