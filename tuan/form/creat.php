<form class="w-full m-auto px-[15px] py-[20px]" action="./login.php?fo=dk" method="post" enctype="multipart/form-data">
<h1 class="text-black w-full flex justify-center font-[500] text-[25px] text-white mb-[50px]">Đăng kí</h1>

<div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Họ và tên</label><br>
        <input type="text" name="fullname" value="<?= $_POST['fullname'] ?? "" ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['fullname'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Email</label><br>
        <input type="email" name="email" value="<?= $_POST['email'] ?? "" ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['email'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Password</label><br>
        <input type="password" name="password" value="<?= $_POST['password'] ?? "" ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['password'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Ảnh</label><br>
        <input type="file" name="img" value="<?= $_POST['img'] ?? "" ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['img'] ?? "" ?></span>
    </div>
    <div class="form-group">
        <label class="font-normal sm:font-medium md:semibold text-[16px] text-white" for="">Địa chỉ</label><br>
        <input type="text" name="location" value="<?= $_POST['location'] ?? "" ?>" class="w-full h-[50px] border-solid border-[1px] border-[#37A9CD] rounded-[5px] p-[10px] focus:outline-none">
        <span style="color: red;"><?= $errer['location'] ?? "" ?></span>
    </div>
    <input type="submit" name="creat" value="Đăng Kí" class="h-[30px] md:h-[40px] lg:h-[50px] font-semibold text-[16px] border-none w-full bg-[#37A9CD] my-[15px] rounded-[5px] text-[#FFFFFF]">
    <span style="color: red; display:flex; justify-content:center"><?= $tb ?? "" ?></span>
</form>
<section class="w-full flex justify-between items-center">
    <a href="./login.php?fo=dn" class="font-semibold text-[14px]  w-full text-white text-center">Đăng Nhập</a>
    <a href="./login.php?fo=qmk" class="font-semibold text-[14px]  w-full text-white text-center">Quên mật khẩu</a>
</section>