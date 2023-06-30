
<form class="w-full m-auto px-[15px] py-[20px]" action="./login.php?fo=ed" method="post" enctype="multipart/form-data">
<h1 class="text-black w-full flex justify-center font-[500] text-[25px] text-white mb-[50px]">Cập nhật thông tin</h1>

<div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Họ và tên</label><br>
        <input type="text" name="fullname" value="<?php if (isset($_POST['up']) && ($_POST['up'])) {
                                                echo $_POST['fullname'];
                                            } else {
                                                echo $edit_us['fullname'];
                                            } ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['fullname'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Email</label><br>
        <input type="email" name="email" value="<?php if (isset($_POST['up']) && ($_POST['up'])) {
                                            echo $_POST['email'];
                                        } else {
                                            echo $edit_us['email'];
                                        } ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['email'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Password</label><br>
        <input type="text" name="password" value="<?php if (isset($_POST['up']) && ($_POST['up'])) {
                                                echo $_POST['password'];
                                            } else {
                                                echo $edit_us['password'];
                                            } ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['password'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Ảnh</label><br>
        <img src="./tuan/img_upload/<?php if (isset($_POST['up']) && ($_POST['up'])) {
                                        echo $_POST['img'];
                                    } else {
                                        echo $edit_us['hinh'];
                                    } ?>" alt="" class="" style="width:50px;height:50px;">
        <input type="hidden" name="img" value="<?php if (isset($_POST['up']) && ($_POST['up'])) {
                                        echo $_POST['img'];
                                    } else {
                                        echo $edit_us['hinh'];
                                    } ?>">
        <input type="file" name="anh" value="" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['img'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Địa chỉ</label><br>
        <input type="text" name="location" value="<?php if (isset($_POST['up']) && ($_POST['up'])) {
                                                echo $_POST['location'];
                                            } else {
                                                echo $edit_us['location'];
                                            } ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['location'] ?? "" ?></span>
    </div>
    <input type="hidden" name="ma_us" value="<?= $edit_us['ma_us'] ?? "" ?>">
    <input type="hidden" name="role" value="<?=$edit_us['role']?>">
    <input type="submit" name="up" value="Cập nhật" class="h-[30px] md:h-[40px] lg:h-[50px] font-semibold text-[16px] border-none w-full bg-[#37A9CD] my-[15px] rounded-[5px] text-[#FFFFFF]">
    <span style="color: red; display:flex; justify-content:center"><?= $thongbao ?? "" ?></span>
</form>
<section class="w-full flex justify-between items-center">
    <a href="./index.php" class="font-semibold text-[14px]  w-full text-white text-center">Quay lại</a>
    <a href="./login.php?fo=qmk" class="font-semibold text-[14px]  w-full text-white text-center">Quên mật khẩu</a>
</section>