<?php
    
    $tt = "";
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $errorName = "Chưa nhập tên chủ hộ";
        }else $errorName =$_POST['name'];
// 
        if(empty($_POST['numberOld'])){
            $numberOld = "Chưa nhập chỉ số cũ";
        }else{
            if(!is_numeric($_POST['numberOld']))
                $numberOld = "Chỉ số cũ phải là số"; 
            else $numberOld = $_POST['numberOld'];
        }
           
    
        if(empty($_POST['numberNew'])){
            $numberNew = "Chưa nhập chỉ số mới";
        }else {
            if(!is_numeric($_POST['numberNew']))
                $numberNew = "Chỉ số cũ phải là số"; 
            else $numberNew = $_POST['numberNew'];
        }

        if(is_numeric($numberOld) && is_numeric($numberNew)){
            $tt = ($numberNew - $numberOld) * $_POST['price'];
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bài 3 </title>
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
            <h2>THANH TOÁN TIỀN ĐIỆN</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Tên chủ hộ</label></div>
                <div><input type="text" name="name" id="" class="form-control" placeholder="<?php echo $errorName ?> " aria-describedby="helpId"></div>
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Chỉ số cũ</label></div>
                <div> <input type="text" name="numberOld" value="" id="" class="form-control" placeholder="<?php echo $numberOld ?>" aria-describedby="helpId"></div>
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Chỉ số mới</label></div>
                <div> <input type="text" name="numberNew" value="" id="" class="form-control" placeholder="<?php echo $numberNew ?>" aria-describedby="helpId"></div>
            </div>    
            <div class="form-group">
                <div class="label-group"><label for="">Đơn giá</label></div>
                <div> <input type="text" readonly name="price" value="20000" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
                </div>
            <div class="form-group">
                <div class="label-group"><label for="">Số tiền thanh toán</label></div>
                <div> <input type="text" readonly value="<?php echo $tt; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <button class="btn btn-danger" name="submit">
                Tính
            </button> 
              </form>
        </div>
    </div>
</body>
</html>