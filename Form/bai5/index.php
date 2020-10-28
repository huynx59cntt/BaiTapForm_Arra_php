<?php
$giobatdau = $gioketthuc = $tt = "";
    if(isset($_POST['submit'])){
        if(is_numeric($_POST['giobatdau']) && $_POST['giobatdau'] >= 10 && $_POST['giobatdau'] <= 24 &&
            is_numeric($_POST['gioketthuc']) && $_POST['gioketthuc'] >= 10 &&  $_POST['gioketthuc'] <= 24
        ){
            $giobatdau = $_POST['giobatdau'];
            $gioketthuc = $_POST['gioketthuc'];
            if($gioketthuc <  $giobatdau){
                $gioketthuc = "Phải lớn hơn giờ bắt đầu";
                $giobatdau = "Phải nhỏ hơn giờ kết thúc";
            }
            else{
                if($gioketthuc > 17)
                    $tt = ( ( $gioketthuc - 17) * 45000 ) + ( (17 - $giobatdau) * 20000);
                else   $tt =  ((17 - $giobatdau) * 20000);
        }
        
    }else{
        $giobatdau = $gioketthuc = "Nhập sai dữ liệu hoặc không đúng với yêu cầu ";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
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
    }
    button{
        width: 150px;
        margin-left: 150px;
    }
    .form-message-erorr{
        height: 30px;
        margin-left: 150px;
    }
    .form-message-erorr small{
        color:red;
    }
</style>
</head>
<body>
    
<div class="form-bt">
        <div class="title">
            <h2>TÍNH TIỀN KARAOKE</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Giờ bắt đầu</label></div>
                <div>
                    <input type="text" name="giobatdau" id="" class="form-control" placeholder="<?php  echo $giobatdau; ?> " aria-describedby="helpId"> 
                </div>  
                <h3 class="ml-2">(h)</h3> 
            </div>
            <div class="form-message-erorr"> <small><?php echo $errorHeight ?></small></div>
        <div class="form-group">
            <div class="label-group">Giờ kết thúc</div>
            <div> <input type="text" name="gioketthuc" id="" class="form-control" placeholder="<?php echo $gioketthuc ?>" aria-describedby="helpId">
            </div>
            <h3 class="ml-2">(h)</h3> 
        </div>
        <div class="form-message-erorr"> <small><?php echo $errorWidth ?></small></div>
        <div class="form-group">
            <div class="label-group">Tiền thanh toán</div>
            <div> <input type="text" readonly  value="<?php echo $tt; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            <h3 class="ml-2">(VNĐ)</h3> 
        </div>
        <button class="btn btn-danger" name="submit">
            Tính
        </button> 
              </form>
        </div>
    </div>
</body>
</html>