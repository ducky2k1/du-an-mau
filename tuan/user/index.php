<?php
require_once "./pdo.php";
require_once "./user.php";
require_once "./header.php";
// require "../../pdo.php";
// require "../../loai/loai.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'kh':
            $data_kh = all_kh();
            require_once "./list.php";
            break;
        case 'add_kh':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $anh = $_FILES['img'];
                $location = $_POST['location'];
                $role = $_POST['role'];
                $errer = [];
                if (empty($fullname)) {
                    $errer['fullname'] = "Họ và tên không được để trống";
                } else {
                    if (strlen($fullname) < 6) {
                        $errer['fullname'] = "Vui lòng nhập đầu đủ họ và tên";
                    }
                }
                if (empty($email)) {
                    $errer['email'] = "Email không được để trống";
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errer['email'] = "Email không đúng định dạng";
                    }
                }
                if (empty($password)) {
                    $errer['password'] = "Vui lòng nhập mật khẩu";
                }
                if ($anh['size'] <= 0) {
                    $errer['img'] = "Vui lòng chọn file ảnh";
                } else {
                    $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
                    $duoi = pathinfo($anh['name'], PATHINFO_EXTENSION);
                    if (!in_array($duoi, $duoianh)) {
                        $errer['img'] = "File không phải là ảnh";
                    } else {
                        $img = $anh['name'];
                    }
                }
                if (empty($location)) {
                    $errer['location'] = "Vui lòng nhập địa chỉ";
                }
                if (empty($errer)) {
                    move_uploaded_file($anh['tmp_name'], '../img_upload/' . $img);
                    add_kh($fullname, $email, $password, $img, $location, $role);
                    $thongbao = "Thêm thành công";
                }
            }
            require_once "./add.php";
            break;
        case 'del_kh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                dell_kh($_GET['id']);
            }
            $data_kh = all_kh();
            require_once "./list.php";
            break;
        case 'edit_kh':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $edit_kh = one_kh($_GET['id']);
            }
            require_once "./update.php";
            break;
        case 'update_kh':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_us = $_POST['ma_us'];
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $anh = $_POST['img'];
                $anh_moi = $_FILES['anh'];
                $location = $_POST['location'];
                $role = $_POST['role'];
                $errer = [];

                if (empty($fullname)) {
                    $errer['fullname'] = "Họ và tên không được để trống";
                } else {
                    if (strlen($fullname) < 6) {
                        $errer['fullname'] = "Vui lòng nhập đầu đủ họ và tên";
                    }
                }
                if (empty($email)) {
                    $errer['email'] = "Email không được để trống";
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errer['email'] = "Email không đúng định dạng";
                    }
                }
                if (empty($password)) {
                    $errer['password'] = "Vui lòng nhập mật khẩu";
                }
                if ($anh_moi['size'] > 0) {
                    $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
                    $duoi = pathinfo($anh_moi['name'], PATHINFO_EXTENSION);
                    if (!in_array($duoi, $duoianh)) {
                        $errer['img'] = "File không phải là ảnh";
                    } else {
                        $img = $anh_moi['name'];
                    }
                } else {
                    $img = $anh;
                }
                if (empty($location)) {
                    $errer['location'] = "Vui lòng nhập địa chỉ";
                }
                if (empty($errer)) {
                    move_uploaded_file($anh_moi['tmp_name'], "../img_upload/" . $img);
                    update_kh($ma_us, $fullname, $email, $password, $img, $location, $role);
                    $thongbao = "Cập nhật thành công";
                }
            }
            require_once "./update.php";
            break;
        case 'tk':
                $sql="SELECT l.ma_loai, l.ten loai  from hang_hoa h join loai l  on h.ma_loai=l.ma_loai ";
                $tk = pdo_query($sql);
                require_once "../thongke/list.php";
                break;
        case 'bd':
                $sql = "select l.ma_loai as ml , l.ten_loai as tl, count(l.ma_loai) as sl from hang_hoa h join loai l on h.ma_loai= l.ma_loai group by l.ma_loai ";
                $tk = pdo_query($sql);
                require_once "../thongke/bieudo.php";
                break;


        default:
            require_once "./container.php";
            break;
    }
} else {
    require_once "./container.php";
}
require_once "./footer.php";
