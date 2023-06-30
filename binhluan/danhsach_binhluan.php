<?php
    require "../pdo.php";
    require "./binhluan.php";


    //hiển thị
    
    $ds_bl = binhluan_selectAll();
    //xóa
    if(isset($_GET['ma_bl'])){
        binhluan_delete($_GET['ma_bl']);
    header("location:danhsach_binhluan.php");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại hàng</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .content-text{
            background-color: rgb(210, 208, 208);
            height: 30px;
            display: flex;
            align-items: center;

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
            margin: 20px 0;
        }
        input[type="button"]{
            margin: 0 10px;
            width: 150px;
            height: 30px;
            border-radius: 5px 5px 5px 5px;
            font-weight: 700;
        }
        input[type="button"]:hover{
            background-color: burlywood;
            color: #fff;
            font-weight: 700;
        }
        td{
            width: 300px;
            height:50px;
        }
        th{
            height:30px;

        }
        table, th, td{
            border:1px solid #868585;
        }
        table{
            border-collapse:collapse;
        }
        table tr:nth-child(odd){
            background-color:#eee;
        }
        table tr:nth-child(even){
            background-color:white;
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
                <li><a href="../hanghoa/danhsach_hanghoa.php">Hàng hóa</a></li>
                <li><a href="../tuan/user/index.php?act=kh">Khách hàng</a></li>
                <li><a href="./danhsach_binhluan.php">Bình luận</a></li>
                <li><a href="../tuan/user/index.php?act=tk">Thống kê</a></li>
            </ul>
        </div>
        <div class="rowheader"><h1>Danh sách bình luận</h1></div>
        <div class="row-content">
            <form action="" method="post">
                <div class="tab">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã bình luận</th>
                                <th>Nội dung</th>
                                <th>Mã hàng hóa</th>
                                <th>Mã khách hàng</th>
                                <th>Ngày bình luận</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($ds_bl as $ds){
                            ?>
                            
                            <tr>
                                <td><input type="checkbox" name="name[]" id="check_all"></td>
                                <td align="center"><?php extract($ds); echo $ma_bl?></td>
                                <td align="center"><?php extract($ds); echo $noi_dung?></td>
                                <td align="center"><?php extract($ds); echo $ma_hh?></td>
                                <td align="center"><?php extract($ds); echo $ma_kh?></td>
                                <td align="center"><?php extract($ds); echo $ngay_bl?></td>
                                <td style="display:flex;justify-content: center;align-items: center;">
                                    <a href="edit_binhluan.php?ma_bl=<?php extract($ds); echo $ma_bl ?>"><input type="button" value="Sửa" style="width:60px"></a>
                                    
                                    <a href="danhsach_binhluan.php?ma_bl=<?php extract($ds); echo $ma_bl ?>" onclick="return confirm('Bạn có chắc xóa không')">
                                        <input type="button" value="Xóa" style="width:60px">
                                    </a>
                                </td>
                            </tr>  
                            
                            <?php
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="but">
                    <input type="button" value="Chọn tất cả" id="btn1">
                    <input type="button" value="Bỏ chọn tất cả" id="btn2">
                    <input type="button" value="Xóa các mục đã chọn">
                </div>

            </form>
        </div>





    </div>
    <script>
        
        // Chức năng chọn hết
        document.getElementById("btn1").onclick = function () 
            {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('name[]');
                // Lặp và thiết lập checked
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = true;
                }
            };
            // Chức năng bỏ chọn hết
            document.getElementById("btn2").onclick = function () 
            {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('name[]');
                // Lặp và thiết lập Uncheck
                for (var i = 0; i < checkboxes.length; i++){
                    checkboxes[i].checked = false;
                }
            };
    </script>
</body>
</html>