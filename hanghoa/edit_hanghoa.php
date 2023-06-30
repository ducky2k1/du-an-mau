<?php

    require "../pdo.php";
    require "./hanghoa.php";
    require "../loai/loai.php";

    //hiển thị hàng
        $ds_hh = hanghoa_select($_GET['ma_hh']);
            //hiển thị loại
            $ds_loai = loai_selectAll();

        //thêm
        if(isset($_POST['btn'])){
            $name=$_POST['tenhh'];

            $price=$_POST['giahh'];

            $sale=$_POST['giamgia'];

            // $img=$_POST['anh'];
            $dir="img/";
            if(!empty($_FILES['img']['tmp_name'])){
                $upload=$dir.$_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], $upload);
            } else{
                $upload=$ds_hh['hinh'];
            }

            $date=$_POST['ngay'];

            $describe=$_POST['mota'];

            $special=$_POST['dacbiet'];

            $view=$_POST['luotxem'];

            $choose=$_POST['chon'];

            $ma_hh=$_GET['ma_hh'];


            hanghoa_edit($name,$price,$sale,$upload,$date,$describe,$special,$view,$choose,$ma_hh);
            header("location:danhsach_hanghoa.php");


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
                <li><a href="../loai/danhsach_loaihang.php">Loại hàng</a></li>
                <li><a href="./danhsach_hanghoa.php">Hàng hóa</a></li>
                <li><a href="../tuan/user/index.php?act=kh">Khách hàng</a></li>
                <li><a href="../binhluan/danhsach_binhluan.php">Bình luận</a></li>
                <li><a href="../tuan/user/index.php?act=tk">Thống kê</a></li>
            </ul>
        </div>
        <div class="rowheader"><h1>Sửa hàng hóa</h1></div>
        <div class="row-content">
            <form action="" method="post">
                <div class="content-text">
                    <label for="">Mã hàng hóa</label>
                </div>
                <input type="text" name="mahh" disabled value="<?php extract($ds_hh); echo $ma_hh ?>">
                <br>
                <div class="content-text">
                    <label for="">Tên hàng hóa</label>
                </div>
                <input type="text" name="tenhh" value="<?php extract($ds_hh); echo $ten_hh ?>">
                <br>
                <div class="content-text">
                    <label for="">Đơn giá</label>
                </div>
                <input type="number" name="giahh" value="<?php extract($ds_hh); echo $don_gia ?>">
                <br>
                <div class="content-text">
                    <label for="">Giảm giá</label>
                </div>
                <input type="number" name="giamgia" value="<?php extract($ds_hh); echo $giam_gia ?>">
                <br>
                <div class="content-text">
                    <label for="">Hình ảnh</label>
                </div>
                <input type="file" name="img" value="<?php extract($ds_hh); echo $hinh ?>">
                <br>
                <div class="content-text">
                    <label for="">Ngày nhập</label>
                </div>
                <input type="date" name="ngay" value="<?php extract($ds_hh); echo $ngay_nhap ?>">
                <br>
                <div class="content-text">
                    <label for="">Mô tả</label>
                </div>
                <input type="text" name="mota" value="<?php extract($ds_hh); echo $mo_ta ?>">
                <br>
                <div class="content-text">
                    <label for="">Đặc biệt</label>
                </div>
                <input type="number" name="dacbiet" value="<?php extract($ds_hh); echo $dac_biet ?>">
                <br>
                <div class="content-text">
                    <label for="">Số lượt xem</label>
                </div>
                <input type="number" name="luotxem" value="<?php extract($ds_hh); echo $so_luot_xem ?>">
                <br>
                <div class="content-text">
                    <label for="">Mã loại</label>
                </div>
                <select name="chon" id="">
                    <option value=""><?php extract($ds_hh); echo $ma_loai ?></option>
                    <?php
                        foreach($ds_loai as $ds){
                    ?>
                    <option value="<?php extract($ds); echo $ma_loai ?>"><?php extract($ds); echo $ma_loai ?> - <?php extract($ds); echo $ten_loai ?></option>
                    <?php
                        }
                    ?>

                </select>
                <br>
                <br>
                <div class="but">
                    <input type="submit" name="btn" value="Sửa">
                </div>

            </form>
        </div>





    </div>
</body>
</html>