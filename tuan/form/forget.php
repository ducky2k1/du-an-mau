<form class="w-full m-auto" action="./login.php?fo=qmk" method="post">
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Email</label><br>
        <input type="text" name="email" value="<?= $_POST['email'] ?? "" ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['email'] ?? "" ?></span>
    </div>
    <input type="submit" name="lay_lai" value="Lấy lại Mật Khẩu" class="h-[30px] md:h-[40px] lg:h-[50px] font-semibold text-[16px] border-none w-full bg-[#37A9CD] my-[15px] rounded-[5px] text-[#FFFFFF]">
    <?php if (isset($password)) {
        echo  '<span class="w-full border-solid border-[1px] border-[red] rounded-[5px] p-[10px] text-red-600 flex justify_center items-center text-center m-auto">','Mật khẩu bạn là: ',$password,'</span>';
    } ?>

</form>

<section class="w-full flex justify-between items-center">
    <a href="./login.php" class="font-semibold text-[14px]  w-full text-white text-center">Đăng nhập</a>
    <a href="./login.php?fo=dk" class="font-semibold text-[14px]  w-full text-white text-center">Đăng kí thành viên</a>
</section>