<?php
// Hàm kết nối database
function pdo_get_connection(){
    try {
      $conn = new PDO("mysql:host=localhost;dbname=xsshop;charset=utf8", "root", "trinhduc2001");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e) {
      echo "Lỗi kết nối: " . $e->getMessage();
    }
    
}
// Hàm thực thi sql
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
      $conn= pdo_get_connection();
      $stmt=$conn->prepare($sql);
      $stmt->execute($sql_args);
    }catch(PDOException $e){
      throw $e;
    }finally{
      unset($conn);
    }
}
// Hàm truy vấn nhiều dữ liệu
function pdo_query($sql){
  $sql_args = array_slice(func_get_args(),1);
  try{
    $conn= pdo_get_connection();
    $stmt=$conn->prepare($sql);
    $stmt->execute($sql_args);
    $rows=$stmt->fetchAll();
    return $rows;
  }catch(PDOException $e){
    throw $e;
  }finally{
    unset($conn);
  }
}
// Hàm truy vấn một dữ liệu
function pdo_query_one($sql){
  $sql_args = array_slice(func_get_args(),1);
  try{
    $conn= pdo_get_connection();
    $stmt=$conn->prepare($sql);
    $stmt->execute($sql_args);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }catch(PDOException $e){
    throw $e;
  }finally{
    unset($conn);
  }
}
// Hàm truy vấn một loại
function pdo_query_value($sql){
  $sql_args = array_slice(func_get_args(), 1);
  try{
      $conn = pdo_get_connection();
      $stmt = $conn->prepare($sql);
      $stmt->execute($sql_args);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return array_values($row)[0];
  }
  catch(PDOException $e){
      throw $e;
  }
  finally{
      unset($conn);
  }
}