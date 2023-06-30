<?php

//truy vấn ds loại đã nhập
function loai_selectAll(){
    $sql="SELECT * FROM `loai`";
    return pdo_query($sql);
}
//truy vấn 1 loại
function loai_select($ma_loai){
    $sql="SELECT * FROM `loai` WHERE ma_loai=?";
    return pdo_query_one($sql,$ma_loai);
}

//thêm mới loại
function loai_insert($name){
    $sql = "INSERT INTO `loai`(`ten_loai`) VALUES (?)";
    pdo_execute($sql,$name);


}

//xóa
    function loai_delete($ma_loai){
        $sql = "DELETE FROM `loai` WHERE ma_loai=?";
        pdo_execute($sql,$ma_loai);
    }
//Sửa
    function loai_edit($name,$ma_loai){
        $sql = "UPDATE `loai` SET `ten_loai`=? WHERE ma_loai=?";
        pdo_execute($sql,$name,$ma_loai);
    }
?>