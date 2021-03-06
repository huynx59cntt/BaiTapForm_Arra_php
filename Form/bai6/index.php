<?php 
    session_start();
    $tt = $_SESSION["tt"];

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>

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
  .radio label input{
      min-width: 50px;
  }
</style>
</head>
<body>
    <div class="form-bt">
        <div class="title">
            <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        </div>
        <div class="form">
            <form action="ketqua.php" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Chọn phép tính</label></div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="+" checked>Cộng</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="-" <?php if($tt == "-") echo "checked" ?>   >Trừ</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="*" <?php if($tt == "*") echo "checked" ?>>Nhân</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="/" <?php if($tt == "/") echo "checked" ?>>Chia</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="%" <?php if($tt == "%") echo "checked" ?>>Chia lấy dư</label>
                </div>
            </div>
        <div class="form-group">
            <div class="label-group">Số thứ nhất</div>
            <div> <input type="text"  value="<?php if(isset($_POST['so1'])) echo $_POST['so1'] ?>" name="so1" id="" class="form-control"  aria-describedby="helpId">           
            </div>
        </div>
        <div class="form-group">
            <div class="label-group">Số thứ hai</div>
            <div> <input type="text" value="<?php if(isset($_POST['so2'])) echo $_POST['so2'] ?>" name="so2" id="" class="form-control"  aria-describedby="helpId">           
            </div>
        </div>
          
        <button class="btn btn-danger" name="submit">
            Tính
        </button> 
              </form>
        </div>
    </div>
</body>
</html>