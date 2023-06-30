<?php

    require "../pdo.php";
    require "loai.php";


        //hiển thị 1 loại
        $ds_loai_hang = loai_select($_GET['ma_loai']);
        

        //thêm
        if(isset($_POST['tenloai'])){
            $name=$_POST['tenloai'];
            $ma_loai=$_GET['ma_loai'];
            loai_edit($name,$ma_loai);
            header("location:danhsach_loaihang.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .content-text{
            background-color: rgb(210, 208, 208);
            height: 30px;
            display: flex;
            align-items: center;

        }
        label{
            margin: 0 15px;
            font-weight: 600;
        }
        input[type="text"]{
            height: 25px;
            width: 100%;
            margin: 0px 0px;
            border: 1px solid black;
        }
        .rowheader{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:#fff;
        }
        .but{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input[type="submit"],input[type="reset"],input[type="button"]{
            margin: 0 10px;
            width: 100px;
            height: 30px;
            border-radius: 5px 5px 5px 5px;
            font-weight: 700;
        }
        input[type="submit"]:hover,input[type="reset"]:hover,input[type="button"]:hover{
            background-color: burlywood;
            color: #fff;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="./admin.php">Loại hàng</a></li>
                <li><a href="../hanghoa/admin_hanghoa.php">Hàng hóa</a></li>
                <li><a href="../tuan/user/index.php?act=kh">Khách hàng</a></li>
                <li><a href="../binhluan/danhsach_binhluan.php">Bình luận</a></li>
                <li><a href="../tuan/user/index.php?act=tk">Thống kê</a></li>
            </ul>
        </div>
        <div class="rowheader"><h1>Sửa loại hàng</h1></div>
        <div class="row-content">
            <form action="" method="post">
                <div class="content-text">
                    <label for="">Mã loại</label>
                </div>
                <input type="text" name="maloai" disabled value="<?php extract($ds_loai_hang); echo $ma_loai?>">
                <br>
                <div class="content-text">
                    <label for="" >Tên loại</label>
                </div>
                <input type="text" name="tenloai" value="<?php extract($ds_loai_hang); echo $ten_loai?>">
                <br>
                <br>
                <div class="but">
                    <input type="submit" value="Sửa">
                </div>

            </form>
        </div>





    </div>
</body>
</html>