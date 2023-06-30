<?php

//truy vấn ds hàng hóa đã nhập
function binhluan_selectAll(){
    $sql="SELECT * FROM `binh_luan` order by ma_kh";
    return pdo_query($sql);
}

//truy vấn 1 loại
function binhluan_select($ma_bl){
    $sql="SELECT * FROM `binh_luan` WHERE ma_bl=?";
    return pdo_query_one($sql,$ma_bl);
}


//xóa
    function binhluan_delete($ma_bl){
        $sql = "DELETE FROM `binh_luan` WHERE ma_bl=?";
        pdo_execute($sql,$ma_bl);
    }
// //Sửa
    function binhluan_edit($noidung,$ma_bl){
        $sql = "UPDATE `binh_luan` SET `noi_dung`=? WHERE ma_bl=?";
        pdo_execute($sql,$noidung,$ma_bl);
    }

    //truy vấn hàng hóa và bình luận
    function hanghoa_bl_selectAll($ma_hh){
        $sql="SELECT * FROM `binh_luan` JOIN `hang_hoa` ON `binh_luan`.`ma_hh`=`hang_hoa`.`ma_hh` WHERE `hang_hoa`.ma_hh=?";
        return pdo_query($sql,$ma_hh);
    }
    //truy vấn hàng hóa, bình luận, user
    function hh_bl_kh_selectAll($ma_hh){
        $sql="SELECT * FROM `hang_hoa` JOIN `binh_luan` on `hang_hoa`.`ma_hh`=`binh_luan`.`ma_hh` JOIN `user` on `binh_luan`.`ma_kh`=`user`.`ma_us` WHERE `hang_hoa`.`ma_hh`=?";
        return pdo_query($sql,$ma_hh);
    }
?>