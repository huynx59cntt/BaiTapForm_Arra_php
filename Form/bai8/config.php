<?php 
    if(isset($_POST['submit_button']))
        if($_POST['submit_button'] == "Cancel"){
            header("Location: index.html");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8 KQ</title>
</head>
<body>
    <p>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập</p>
    <p>Họ tên: <?php echo $_POST['fullname'] ?></p>
    <p>Address: <?php echo $_POST['address'] ?> </p>
    <p>Phone: <?php echo $_POST['phone'] ?> </p>
    <p>Gender: <?php echo $_POST['gender'] ?> </p>
    <p>Country: <?php echo $_POST['country'] ?> </p>
    <p>Study: <?php foreach($_POST['study'] as $object)
                    echo $object. " ";
    ?> </p>
    <p>Note: <?php echo $_POST['note'] ?> </p>
    <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a> 
</body>
</html>