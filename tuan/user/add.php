





<div class="rowheader"><h1>Thêm USER</h1></div>
        <div class="row-content">
            <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                echo $thongbao;
                                                                            } else {
                                                                                echo "Đang thêm tài khoản";
                                                                            } ?></h5>
            <form action="./index.php?act=add_kh" method="post" enctype="multipart/form-data">
                <div class="content-text">
                    <label for="">Họ và tên</label>
                </div>
                <input name="fullname" value="<?= $_POST['fullname'] ?? '' ?>" class="" type="text">
                <span class=""><?= $errer['fullname'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Email</label>
                </div>
                <input name="email" value="<?= $_POST['email'] ?? '' ?>" class="" type="email">
                <span class=""><?= $errer['email'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Mật khẩu</label>
                </div>
                <input name="password" value="<?= $_POST['password'] ?? '' ?>" class="" type="password">
                <span class=""><?= $errer['password'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Hình ảnh</label>
                </div>
                <input name="img" class="" type="file">
                <span class=""><?= $errer['img'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Địa chỉ</label>
                </div>
                <input name="location" value="<?= $_POST['location'] ?? '' ?>" class="" type="text">
                <span class=""><?= $errer['location'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Quyền truy cập</label>
                </div>
                <select name="role" id="" class="">
                    <option value="user" <?= (isset($_POST['role']) && ($_POST['role'] == "user")) ? "selected" : "" ?>>Người dùng</option>
                    <option value="admin" <?= (isset($_POST['role']) && ($_POST['role'] == "admin")) ? "selected" : "" ?>>Quản trị</option>
                </select>
                <span class=" "><?= $errer['role'] ?? "" ?></span>
                <br>
                <br>
                <div class="but">
                <input type="submit" name="them" value="Thêm Mới" class="">
                <input type="reset" value="Nhập Lại" class="">
                <a href="./index.php?act=kh" class=""><input type="button" value="Danh sách"></a>
                    
                </div>

            </form>
        </div>