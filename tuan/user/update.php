


<div class="rowheader"><h1>Sửa USER</h1></div>
        <div class="row-content">
            <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                echo $thongbao;
                                                                            } else {
                                                                                echo "Đang sửa tài khoản";
                                                                            } ?></h5>
            <form action="./index.php?act=update_kh" method="post" enctype="multipart/form-data">
                <div class="content-text">
                    <label for="">Họ và tên</label>
                </div>
                <input name="fullname" value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['fullname'];
                                            } else {
                                                echo $edit_kh['fullname'];
                                            } ?>" class="" type="text">
                <span class=""><?= $errer['fullname'] ?? "" ?></span>   
                <br>
                <div class="content-text">
                    <label for="" >Email</label>
                </div>
                <input name="email" value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                            echo $_POST['email'];
                                        } else {
                                            echo $edit_kh['email'];
                                        } ?>" class="" type="email">
                <span class=""><?= $errer['danhmuc'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Mật khẩu</label>
                </div>
                <input name="password" value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['password'];
                                            } else {
                                                echo $edit_kh['password'];
                                            } ?>" class="" type="text">
                <span class=""><?= $errer['password'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Hình ảnh</label>
                </div>
                <img src="../img_upload/<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                        echo $_POST['img'];
                                    } else {
                                        echo $edit_kh['hinh'];
                                    } ?>" alt="" class="" style="width:50px;height:50px;">
                <input type="hidden" name="img" value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                        echo $_POST['img'];
                                                    } else {
                                                        echo $edit_kh['hinh'];
                                                    } ?>">
                <input name="anh" class="" type="file">
                <span class=""><?= $errer['img'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Địa chỉ</label>
                </div>
                <input name="location" value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['location'];
                                            } else {
                                                echo $edit_kh['location'];
                                            } ?>" class="" type="text">
                <span class=""><?= $errer['location'] ?? "" ?></span>
                <br>
                <div class="content-text">
                    <label for="" >Quyền truy cập</label>
                </div>
                <select name="role" id="" class="">
                <option value="user" <?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                            if (isset($_POST['role']) && ($_POST['role'] == "user")) {
                                                echo "selected";
                                            }
                                        } else {
                                            (isset($edit_kh['role']) && ($edit_kh['role'] == "user")) ? "selected" : "";
                                        } ?>>Người dùng</option>
                <option value="admin" <?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                            if (isset($_POST['role']) && ($_POST['role'] == "user")) {
                                                echo "selected";
                                            }
                                        } else {
                                            (isset($edit_kh['role']) && ($edit_kh['role'] == "user")) ? "selected" : "";
                                        } ?>>Quản trị</option>
                </select>
                <span class=""><?= $errer['role'] ?? "" ?></span>
                <br>
                <br>
                <div class="but">
                    <input type="hidden" name="ma_us" value="<?= $edit_kh['ma_us'] ?? "" ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="">
                    <input type="reset" value="Nhập Lại" class="">
                    <a href="./index.php?act=kh" class=""><input type="button" value="Danh sách"></a>
                    
                </div>

            </form>
        </div>