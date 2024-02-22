<?php
    session_start();
    require "./pdo.php";
    require "./tuan/user/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('./IMG/background.jpg')]">
    <div class="container w-[30%] h-[500px] m-auto ">
        <div class="boxcontent mt-[150px] w-full border-[1px] pb-[20px]">
            <?php
                if (isset($_GET['fo'])) {
                    $fo = $_GET['fo'];
                    switch ($fo) {
                        case 'dn':
                            if (isset($_POST['dang_nhap']) && ($_POST['dang_nhap'])) {
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $errer = [];
                                if (empty($password)) {
                                    $errer['password'] = "Vui lòng nhập mật khẩu";
                                }
                                if (empty($email)) {
                                    $errer['email'] = "Vui lòng nhập email";
                                }
                                if (empty($errer)) {
                                    $sql = "SELECT * FROM user WHERE email='" . $email . "' ";
                                    $data = pdo_query_one($sql);
                                    if ($data) {
                                        if ($password == $data['password']) {
                                            $_SESSION['login'] = $data['role'];
                                            $_SESSION['email'] = $data['email'];
                                            header('location:index.php');
                                        } else {
                                            $errer['password'] = "Mật khẩu không đúng";
                                        }
                                    } else {
                                        $errer['email'] = "Không tồn tại email này";
                                    }
                                }
                            }
                            include "./tuan/form/login.php";
                            break;
                        case 'qmk':
                            if (isset($_POST['lay_lai']) && ($_POST['lay_lai'])) {
                                $email = $_POST['email'];
                                $errer = [];
                                if (empty($email)) {
                                    $errer['email'] = "Vui lòng nhập email";
                                } else {
                                    $sql = "SELECT * FROM user WHERE email='" . $email . "' ";
                                    $data = pdo_query_one($sql);
                                    if ($data) {
                                        $password = $data['password'];
                                    } else {
                                        $errer['email'] = "Không tồn tại email này";
                                    }
                                }
                            }
                            require_once "./tuan/form/forget.php";
                            break;
                        case 'dx':
                            require_once "./tuan/form/logout.php";
                            // delete_cookie('duc');
                            header('location:index.php');
                            break;
                        case 'edt':
                            if (isset($_GET['id']) && ($_GET['id'])) {
                                $edit_us = one_kh($_GET['id']);
                            }
                            require_once "./tuan/form/edit.php";
                            break;
                        case 'ed':
                            
                                if (isset($_POST['up']) && ($_POST['up'])) {
                                $ma_us = $_POST['ma_us'];
                                $fullname = $_POST['fullname'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $anh = $_POST['img'];
                                $anh_moi = $_FILES['anh'];
                                $location = $_POST['location'];
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
                                    move_uploaded_file($anh_moi['tmp_name'], "./tuan/img_upload/" . $img);
                                    update_kh_no_role($ma_us, $fullname, $email, $password, $img, $location);
                                    $thongbao = "Cập nhật thành công";
                                }
                            }
                            require_once './tuan/form/edit.php';
                            break;
                        case 'dk':
                            if (isset($_POST['creat']) && ($_POST['creat'])) {
                                $fullname = $_POST['fullname'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $anh = $_FILES['img'];
                                $location=$_POST['location'];
                                $errer = [];
                                if (empty($fullname)) {
                                    $errer['fullname'] = "Vui lòng nhập họ và tên";
                                }
                                if (empty($email)) {
                                    $errer['email'] = "Vui lòng nhập email";
                                }
                                if(empty($password)){
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
                                if(empty($location)){
                                    $errer['location']="Vui lòng nhập địa chỉ";
                                }
                                if (empty($errer)) {
                                    move_uploaded_file($anh['tmp_name'], "./tuan/img_upload/" .$img);
                                    add_kh_no_role($fullname, $email, $password, $img,$location);
                                    $tb="Tạo Thành công";
                                }
                            }
                            require_once './tuan/form/creat.php';
                            break;
                        default:
                            include "./tuan/form/login.php";
                            break;
                    }
                } else {
                    require_once "./tuan/form/login.php";
                }

            ?>
        </div>
    </div>
</body>
</html>