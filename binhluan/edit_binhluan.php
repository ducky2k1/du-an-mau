<?php

    require "../pdo.php";
    require "./binhluan.php";


        //hiển thị 1 loại
        // $idEdit=$_GET['id'];

        $ds_bl = binhluan_select($_GET['ma_bl']);
        

        //thêm
        if(isset($_POST['btn'])){

            $noidung=$_POST['content'];

            binhluan_edit($noidung,$ma_bl);

            header("location:danhsach_binhluan.php");


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
                <li><a href="../loai/admin.php">Loại hàng</a></li>
                <li><a href="../hanghoa/admin_hanghoa.php">Hàng hóa</a></li>
                <li><a href="../tuan/user/index.php?act=kh">Khách hàng</a></li>
                <li><a href="./danhsach_binhluan.php">Bình luận</a></li>
                <li><a href="../tuan/user/index.php?act=tk">Thống kê</a></li>
            </ul>
        </div>
        <div class="rowheader"><h1>Sửa bình luận</h1></div>
        <div class="row-content">
            <form action="" method="post">
                <div class="content-text">
                    <label for="">Mã bình luận</label>
                </div>
                <input type="text" name="mabl" value="<?php extract($ds_bl); echo $ma_bl?>" disabled>
                <br>
                <div class="content-text">
                    <label for="">Mã hàng hóa</label>
                </div>
                <input type="text" name="mahh" value="<?php extract($ds_bl); echo $ma_hh?>" disabled>
                <br>
                <div class="content-text">
                    <label for="">Mã khách hàng</label>
                </div>
                <input type="text" name="makh" value="<?php extract($ds_bl); echo $ma_kh?>" disabled>
                <br>
                <div class="content-text">
                    <label for="">Nội dung</label>
                </div>
                <input type="text" name="content" value="<?php extract($ds_bl); echo $noi_dung?>">
                <br>
                <br>
                <div class="but">
                    <input type="submit" value="Sửa" name="btn">
                </div>

            </form>
        </div>





    </div>
</body>
</html>