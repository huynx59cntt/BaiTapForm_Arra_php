<?php 
    $mang = array();
    $dayso = "";
    $tongdayso = 0;
    if(isset($_POST['submit'])){
        if(!empty($_POST['dayso'])){
            $mang = explode(",", $_POST['dayso']);
            $dayso = $_POST['dayso'];
        }
        foreach($mang as $value){
            $tongdayso+= $value;
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
        }
        button{
            width: 150px;
            margin: 0px 10px 10px 150px;
            
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
            <h2>NHẬP VÀ TÍNH DÃY SỐ</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Nhập dãy số</label></div>
                <div>
                    <input type="text" name="dayso" id="" class="form-control" value="<?php  echo $dayso; ?> " aria-describedby="helpId">
                </div> 
                <div style="color:red">(*)</div>     
            </div>
            <button class="btn btn-danger" name="submit">
                Tổng dãy số
             </button> 
        <div class="form-group">
            <div class="label-group">Tổng dãy số</div>
            <div> <input type="text" readonly name="tongdayso" value="<?php echo $tongdayso; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group" style="color:red">*) Các số được nhập phải cách nhau bằng dấu ","</div>
                </div>
        </form>
        </div>
    </div>
</body>
</html>