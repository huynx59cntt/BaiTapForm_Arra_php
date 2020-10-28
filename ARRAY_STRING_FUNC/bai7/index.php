<?php 
    $namdinhhoi = $namduonglich = "";
    $arrCan = array('Canh', 'Tân', 'Nhâm', 'Quý', 'Giáp', 'Ất','Bính','Đinh', 'Mậu', 'Kỷ');
    $arrChi = array('Thân', 'Dậu', 'Tuất', 'Hợi','Tý','Sửu','Dần','Mẹo','Thịnh','Tỵ','Ngọ','Mùi');
    $arrImg = array('than.png','dau.png','tuan.png','hoi.png','ty.png','sua.png','dan.png','mao.png','thinh.png','tyj.png','ngo.png','mui.png');

    if(isset($_POST['submit'])){
        if(!empty($_POST['namduonglich']) && $_POST['namduonglich'] > 0 && is_numeric($_POST['namduonglich'])){
            $namduonglich = $_POST['namduonglich'];
            $can = $namduonglich % 10;
            $chi = $namduonglich % 12;
            $namdinhhoi = $arrCan[$can]." ". $arrChi[$chi];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
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
            min-width: 200px;
            font-weight: bold;
        }
        .form-group input{
            min-width: 200px;
        }
        ::-webkit-input-placeholder { /* WsebKit, Blink, Edge */
            color:  red !important;
        }
        button{
            width: 50px;
            height: 30px;
            margin-top: 30px;
            margin-left: 30px;
            padding-bottom: 30px !important;
        }
        .form-message-erorr{
            height: 30px;
            margin-left: 150px;
        }
        .form-message-erorr small{
            color:red;
        }
        .img {
            width: 100%;
            margin-left: 30%;
        }
     
    </style>
</head>
<body>
    
    
<div class="form-bt">
        <div class="title">
            <h2>TÍNH NĂM ÂM LỊCH</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div>
                    <div class="label-group"><label for="">Năm dương lịch</label></div>
                    <input type="text" name="namduonglich" id="" class="form-control" value="<?php  echo $namduonglich; ?> " aria-describedby="helpId">
                </div> 
                <button class="btn btn-danger" name="submit">
                    =>
                 </button>
                 <div class="ml-4">
                    <div class="label-group"><label for="">Năm đinh hợi</label></div>
                    <input type="text" name="namdinhhoi" readonly id="" class="form-control" value="<?php  echo $namdinhhoi; ?> " aria-describedby="helpId">
                </div> 
            </div>
          
            <div class="img">
                <img src="<?php  echo 'img/'.$arrImg[$chi]; ?>" alt="">
            </div>
        </form>
        </div>
    </div>
</body>
</html>