<?php

//truy vấn ds hàng hóa đã nhập
function hanghoa_selectAll(){
    $sql="SELECT * FROM `hang_hoa`";
    return pdo_query($sql);
}
//truy vấn ds hàng hóa và loại
function hanghoa_loai_selectAll(){
    $sql="SELECT * FROM `hang_hoa` JOIN `loai` ON `hang_hoa`.`ma_loai`=`loai`.`ma_loai`";
    return pdo_query($sql);
}

//truy vấn 9 mặt hàng 
function hanghoa_loai_nine_selectAll(){
    $sql="SELECT * FROM `hang_hoa` JOIN `loai` ON `hang_hoa`.`ma_loai`=`loai`.`ma_loai` LIMIT 0,9";
    return pdo_query($sql);
}
//show top 10 yêu thích
function show_top_10(){
    $sql="SELECT * FROM `hang_hoa` order by so_luot_xem desc limit 0,10 ";
    return pdo_query($sql);
}
//truy vấn điện thoại
function hanghoa_loai_dienthoai_selectAll(){
    $sql="SELECT * FROM `hang_hoa` JOIN `loai` ON `hang_hoa`.`ma_loai`=`loai`.`ma_loai` WHERE `loai`.`ma_loai`=28";
    return pdo_query($sql);
}
//truy vấn đồng hồ
function hanghoa_loai_dongho_selectAll(){
    $sql="SELECT * FROM `hang_hoa` JOIN `loai` ON `hang_hoa`.`ma_loai`=`loai`.`ma_loai` WHERE `loai`.`ma_loai`=25";
    return pdo_query($sql);
}
//truy vấn laptop
function hanghoa_loai_laptop_selectAll(){
    $sql="SELECT * FROM `hang_hoa` JOIN `loai` ON `hang_hoa`.`ma_loai`=`loai`.`ma_loai` WHERE `loai`.`ma_loai`=26";
    return pdo_query($sql);
}
//truy vấn máy ảnh
function hanghoa_loai_mayanh_selectAll(){
    $sql="SELECT * FROM `hang_hoa` JOIN `loai` ON `hang_hoa`.`ma_loai`=`loai`.`ma_loai` WHERE `loai`.`ma_loai`=27";
    return pdo_query($sql);
}
//truy vấn 1 loại
function hanghoa_select($ma_hh){
    $sql="SELECT * FROM `hang_hoa` join `loai` on `hang_hoa`.`ma_loai`=`loai`.`ma_loai` WHERE ma_hh=?";
    return pdo_query_one($sql,$ma_hh);
}

//thêm mới hàng hóa
function hanghoa_insert($name,$price,$sale,$upload,$date,$describe,$special,$view,$choose){
    $sql = "INSERT INTO `hang_hoa`(`ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$name,$price,$sale,$upload,$date,$describe,$special,$view,$choose);


}

//xóa
    function hanghoa_delete($ma_hh){
        $sql = "DELETE FROM `hang_hoa` WHERE ma_hh=?";
        pdo_execute($sql,$ma_hh);
    }
// //Sửa
    function hanghoa_edit($name,$price,$sale,$img,$date,$describe,$special,$view,$choose,$ma_hh){
        $sql = "UPDATE `hang_hoa` SET`ten_hh`=?,`don_gia`=?,`giam_gia`=?,`hinh`=?,`ngay_nhap`=?,`mo_ta`=?,`dac_biet`=?,`so_luot_xem`=?,`ma_loai`=? WHERE ma_hh=?";
        pdo_execute($sql,$name,$price,$sale,$img,$date,$describe,$special,$view,$choose,$ma_hh);
    }
?>