<?php
function all_kh()
{
    $sql = "SELECT * from user";
    $data_kh = pdo_query($sql);
    return $data_kh;
}
function add_kh($fullname, $email, $password, $img, $location, $role)
{
    $sql = "INSERT INTO user(fullname,email,password,hinh,location,role) VALUES ('$fullname','$email','$password','$img','$location','$role')";
    pdo_execute($sql);
}
function dell_kh($ma_us)
{
    $sql = "DELETE from user where ma_us=" . $ma_us;
    pdo_execute($sql);
}
function update_kh_no_role($ma_us, $fullname, $email, $password, $img, $location)
{
    $sql = "UPDATE user set fullname='" . $fullname . "',email='" . $email . "',password='" . $password . "',hinh='" . $img . "',location='" . $location . "' where ma_us=" . $ma_us;
    pdo_execute($sql);
}
function update_kh($ma_us, $fullname, $email, $password, $img, $location, $role)
{
    $sql = "UPDATE user set fullname='" . $fullname . "',email='" . $email . "',password='" . $password . "',hinh='" . $img . "',location='" . $location . "',role='" . $role . "' where ma_us=" . $ma_us;
    pdo_execute($sql);
}
function one_kh($ma_us)
{
    $sql = "SELECT * from user where ma_us=" . $ma_us;
    $edit_dm = pdo_query_one($sql);
    return  $edit_dm;
}
function add_kh_no_role($fullname, $email, $password, $img, $location)
{
    $sql = "INSERT INTO user (fullname,email,password,hinh,location) VALUES('$fullname','$email','$password','$img','$location')";
    pdo_execute($sql);
}
