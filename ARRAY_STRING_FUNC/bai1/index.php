<?php
  $message = "";
  $array = array();
    function cauA($n){
        if($n>=0) return 1;
        return 0;
    }
    
    function cauB($n, &$array){
        for ($i=0; $i < $n; $i++) { 
            array_push($array, rand(-50,50));
        }
    
    }
    function cauC($n, $array){
        $dem = 0;
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]%2==0) $dem++;
        }
        return $dem;
    }
    function cauD($n, $array){
        $dem = 0;
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]<100) $dem++;
        }
        return $dem;
    }
    function cauE($n, $array){
        $tongAm = 0;
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]<0) $tongAm += $array[$i];
        }
        return $tongAm;
    }

    function cauF($n, $array){
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]==0) echo ($i+1). " ";
        }
    }
    function cauG($n, &$array){
        for ($i=0; $i < $n - 1; $i++)
            for ($j=$i+1; $j < $n; $j++){
                if($array[$i] > $array[$j]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
    }
    function XuatMang($n, $array){
        for ($i=0; $i < $n; $i++) { 
            echo $array[$i]. " ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <style>
        .container{
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>BÀI 1</h2>
        <form method="post">
            <span>Nhập vào N </span>
            <span> <input type="text" name="numberN" id=""> </span>
            <span> <input type="submit" name="submit" id="" value="Kiểm tra"> </span>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $n = (int)$_POST['numberN'];
                if(is_numeric($n)){
                   if(cauA($n)){
                       //cau B
                        cauB($n, $array);
                        echo "<span> Câu B) Mảng phát sinh với ".$n." phần tử số nguyên: </span> ";
                        XuatMang($n, $array);
                        //cau C
                        echo "<p> <span> Câu C) Số phần tử trong mảng có giá trị là số chẵn: ".cauC($n,$array)."</span> </p>" ;        
                        //Cau D
                        echo "<p> <span> Câu D) Đếm số phần tử trong mảng có giá trị là số nhỏ hơn 100: ".cauD($n,$array)."</span> </p>" ;        
                        //Cau E
                        echo "<p> <span> Câu E) Tổng của các phần tử trong mảng có giá trị là số âm: ".cauE($n,$array)."</span> </p>" ;        
                        //Cau F
                        echo " <span> Câu F) vị trí của các phần tử trong mảng có giá trị bằng 0 : </span>" ;        
                        cauF($n, $array);
                        //Cau G
                        echo "<p>Câu G) Sắp xếp mảng theo thứ tự tăng dần </p>";
                        echo "<span> Mảng ban đầu </span> "; XuatMang($n, $array);
                        cauG($n, $array);
                        echo "<br> <span>Mảng sau khi sắp xếp: </span>"; XuatMang($n, $array);
                   }
                   else{
                       echo  "<p>".$n." không phải là số nguyên dương </p>";
                   }
                }
        
            }
        ?>
    </div>
</body>
</html>