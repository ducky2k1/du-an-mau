<?php
    session_start();
    require "./pdo.php";
    require "./hanghoa/hanghoa.php";
    require "./loai/loai.php";
    require_once "./tuan/user/user.php";
    require_once "./binhluan/binhluan.php";
    if (isset($_SESSION['login'])) {
        $email=$_SESSION['email'];
        $sql="SELECT * from user where email='$email'";
        $info=pdo_query_one($sql);
        $ma_us=$info['ma_us'];
    }


    $ds_hanghoa = hanghoa_loai_nine_selectAll();

    $ds_dt = hanghoa_loai_dienthoai_selectAll();

    $ds_dh = hanghoa_loai_dongho_selectAll();

    $ds_lt = hanghoa_loai_laptop_selectAll();

    $ds_ma = hanghoa_loai_mayanh_selectAll();




    $ds_loai = loai_selectAll();

    $show = show_top_10();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="container h-auto">
        <nav class="bg-[#eee] border-gray-200 fixed top-0 w-[1536px] z-[100]" id="header">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4 bg-blue">
                <a href="./index.php" class="flex items-center">
                    <img src="./imgindex/X.png" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">X-Shop</span>
                </a>
                <div class="flex items-center md:order-2">
                <?php
                    if (!isset($_SESSION['login'])) {
                        echo '
                        <a href="./login.php?fo=dn" class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 focus:outline-none">Login</a>
                        <a href="./login.php?fo=dk" class="text-white bg-[#37A9CD] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 focus:outline-none">Sign up</a>
                        ';
                    } else {
                        echo ' 
                        <a href="./login.php?fo=dx" class="font-semibold text-[14px] flex justify-center">
                            <button class="bg-[#37A9CD] hover:bg-sky-700 rounded-[20px] w-[100px] h-[30px] text-white">
                                Đăng xuất
                            </button>
                        </a>
                        ';
                    }
                ?>

                </div>
                <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li>
                            <a href="./index.php" class="block py-2 pl-3 pr-4 text-[#37A9CD] border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 font-bold " aria-current="page">Trang chủ</a>
                        </li>
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-bold text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0">
                                Danh mục <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div id="mega-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <li>
                                            <a href="./index.php?act=dh" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Đồng hồ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./index.php?act=dt" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Điện thoại
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./index.php?act=lt" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Laptop
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./index.php?act=ma" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Máy ảnh
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Liên hệ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Góp ý
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-blue-600 font-bold">
                                                Hỏi đáp
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 font-bold ">Liên hệ</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 font-bold ">Góp ý</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 font-bold ">Hỏi đáp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="box mt-[60px]">
            <div class="boxright float-right" style="width: 26%;">
                <div class="row">
                    <?php
                    if(isset($info)&&($info)) {
                    ?>

                        <div class="boxtitle">Tài khoản </div>
                        <div class="">
                            <div class="flex items-center  w-full justify-center">
                                <div class="w-[300px]">
                                    <div class="bg-white  rounded-lg py-3">
                                        <div class="photo-wrapper p-2">
                                            <img class="w-32 h-32 rounded-full mx-auto" src="./tuan/img_upload/<?=$info['hinh'] ?>" alt="">
                                        </div>
                                        <div class="p-2">
                                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8"><?=$info['fullname']  ?></h3>
                                            <table class="text-xs my-3">
                                                <tbody>
                                                    <tr>
                                                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                                        <td class="px-2 py-2"><?=$info['location'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                                        <td class="px-2 py-2"><?=$info['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-2 py-2 text-gray-500 font-semibold">Account Type</td>
                                                        <td class="px-2 py-2"><?=$info['role'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="./login.php?fo=edt&id=<?=$info['ma_us'] ?>" class="font-semibold text-[14px]  w-full flex justify-center my-[20px]">
                                <button class="bg-[#37A9CD] hover:bg-sky-700 rounded-[20px] w-[150px] h-[30px] text-white">Cập nhật thông tin</button>
                            </a>
                            <?php if (isset($_SESSION['login']) && ($_SESSION['login']== "admin")) {
                                    echo '<a href="loai/danhsach_loaihang.php" 
                                    class="font-semibold text-[14px]  w-full flex justify-center">
                                        <button class="bg-[#37A9CD] hover:bg-sky-700 rounded-[20px] w-[150px] h-[30px] text-white">
                                            Admin
                                        </button>
                                    </a>';
                                } ?>
                        </div>
                        <?php
                            }
                        ?>     
                </div>
                <div class="row">
                    <div class="boxtitle "> Danh mục</div>
                    <div class="boxcontent2 ">
                        <ul>
                            <li><a href="./index.php">Sản phẩm</a></li>
                            <li><a href="./index.php?act=dh">Đồng hồ</a></li>
                            <li><a href="./index.php?act=dt">Điện thoại</a></li>
                            <li><a href="./index.php?act=lt">Laptop</a></li>
                            <li><a href="./index.php?act=ma">Máy ảnh</a></li>

                        </ul>
                    </div>
                    <div class="boxfooter">
                        <input type="text" placeholder="Từ khóa muốn tìm kiếm">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích </div>
                        <div class="boxcontentt p-0">
                            <?php foreach($show as $sh){
                            ?>
                            <div class="one border-[1px] w-full p-[10px]">
                                <img src="<?php extract($sh); echo "./hanghoa/img/$hinh" ?>" alt="" width="20px" height="20px">
                                <a href="./index.php?act=ct&id=<?php echo $sh['ma_hh'] ?>" class="ml-[15px] text-gray-800 hover:text-red-500"><?php extract($sh); echo $ten_hh ?></a>
                            </div>
                            <?php
                            } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="boxleft float-left">
                <div class="row">
                    
                    <div class="slideshow-container max-w-none">

                        <div class="mySlides fade">
                            <img src="./IMG/hinh1.jpg" style="width:100%; height:350px;">
                        </div>

                        <div class="mySlides fade">
                            <img src="./IMG/hinh2.jpg" style="width:100%; height:350px;">
                        </div>

                        <div class="mySlides fade">
                            <img src="./IMG/hinh3.jpg" style="width:100%; height:350px;">
                        </div>

                        <div class="mySlides fade">
                            <img src="./IMG/hinh4.png" style="width:100%; height:350px;">
                        </div>

                        </div>
                        <br>

                        <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span>
                            <span class="dot"></span> 
                        </div>
                    </div>
                
                    <?php 
                    if (isset($_GET['act'])){
                        $act = $_GET['act'];
                        switch ($act){
                            case 'dh' :
                                $ds_dh = hanghoa_loai_dongho_selectAll();
                                require_once './giaodien/watch.php';
                                // require './footer.php';
                                break;
                            case 'dt' :
                                $ds_dt = hanghoa_loai_dienthoai_selectAll();
                                require_once './giaodien/phone.php';
                                break;
                            case 'lt' :
                                $ds_lt = hanghoa_loai_laptop_selectAll();
                                require_once './giaodien/laptop.php';
                                break;
                            case 'ma' :
                                $ds_ma = hanghoa_loai_mayanh_selectAll();
                                require_once './giaodien/mayanh.php';
                                break;
                            case 'ct':
                                    //hiển thị loại
                                    $ds_loai = loai_selectAll();
                                    //hiển thị hàng
                                    $ma_hh = $_GET['id'];
                                    //click +1 lượt xem
                                    $sql="UPDATE hang_hoa set so_luot_xem=so_luot_xem+1 where ma_hh=$ma_hh";
                                    pdo_execute($sql);
                                    //hiển thị danh sách hàng háo theo mã hàng hóa
                                    $ds = hanghoa_select($ma_hh);
                                    //hiển thị nội dung bình luận theo mã hàng hóa
                                    $ds_bl=hh_bl_kh_selectAll($ma_hh);
                                require_once './giaodien/chitiet_hanghoa.php';
                                break;
                            case 'bl':
                                $ma_hh = $_GET['id'];
                                $date = date('Y-m-d');
                                $comment = $_POST['cmt'];
                                $sql="INSERT INTO `binh_luan`(`noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES ('$comment',$ma_hh, $ma_us ,'$date') ";
                                pdo_execute($sql);
                                $ds = hanghoa_select($ma_hh);

                                $ds_bl=hh_bl_kh_selectAll($ma_hh);

                                require_once './giaodien/chitiet_hanghoa.php';
                                break;

                            default:
                                $ds_hanghoa = hanghoa_loai_nine_selectAll();
                                include "./giaodien/sanpham.php";
                                break;
                        } 
                    } else {
                        $ds_hanghoa = hanghoa_loai_nine_selectAll();
                        require_once './giaodien/sanpham.php';
                    } ?>
<script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }


        var menu = document.getElementById('mega-menu-dropdown-button');
        var bar = document.getElementById('mega-menu-dropdown');
        var head = document.getElementById('header');
        
        
        
        menu.onclick = function () {
            
            var isClosed = head.clientHeight === 56.5;
            if(isClosed){
                bar.classList.toggle('hidden');
            } else{
                bar.classList.toggle('hidden');
            }
        }
</script>


<?php require './footer.php'; ?>

