
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại hàng</title>
    <link rel="stylesheet" href="../../css/style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
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
        /* th,td{
            border: 1px solid red;

        } */
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
        /* table th:nth-child(1){
            background-color:skyblue;
        } */
        input[type="submit"],input[type="reset"],input[type="button"]{
            margin: 0 10px;
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
            <ul class="">
                <li><a href="../../index.php">Trang chủ</a></li>
                <li><a href="../../loai/danhsach_loaihang.php">Loại hàng</a></li>
                <li><a href="../../hanghoa/danhsach_hanghoa.php">Hàng hóa</a></li>
                <li><a href="./index.php?act=kh">Khách hàng</a></li>
                <li><a href="../../binhluan/danhsach_binhluan.php">Bình luận</a></li>
                <li><a href="./index.php?act=tk">Thống kê</a></li>
            </ul>
        </div>
        
