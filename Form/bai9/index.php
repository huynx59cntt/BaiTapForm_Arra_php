<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    

    <style>
         .header{
             width: 100%;
             height: 100px;
         }             
         .header-nav{
            width: 100%;
            padding: 30px 30%;
         }
         .header-nav-list{
             display: flex;
         }
         .header-nav-list li{
            display: block;
            width: 100px;
         }
         .header-nav-list li a:link{
             text-decoration: none;
         }
    </style>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
</head>
        
<body>
    <div class="header">
        <div class="header-nav">
            <ul class="header-nav-list">
                <li><a href="index.php?p=1">Trang Chủ</a></li>
                <li><a href="index.php?p=2">Giới Thiệu</a></li>
                <li><a href="index.php?p=3">Tin tức</a></li>
                <li><a href="index.php?p=4">Liên hệ</a></li>
                <li><a href="index.php?p=5">Diễn đàn</a></li>
            </ul>
        </div>
    </div>    
    <div class="container">
         <?php 
            if(isset($_GET['p'])){
                switch($_GET['p']){
                    case '1': require_once "trangchu.php";break;
                    case '2': require_once "gioithieu.php";break;
                    case '3': require_once "tintuc.php";break;
                    case '4': require_once "lienhe.php";break;
                    case '5': require_once "diendan.php";break;
                }
            }
         ?>
    </div>
</body>
</html>