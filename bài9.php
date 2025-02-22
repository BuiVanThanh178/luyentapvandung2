<?php
function demKyTuXuatHien($chuoi, $kyTu) {
  
    return substr_count($chuoi, $kyTu);
}


$chuoi1 = "hello world!";
$kyTu1 = "o";

$chuoi2 = "Chào mừng bạn đến với PHP!";
$kyTu2 = "m";


echo "Số lần xuất hiện của '$kyTu1' trong chuỗi '$chuoi1' là: " . demKyTuXuatHien($chuoi1, $kyTu1) . "<br>"; 
echo "Số lần xuất hiện của '$kyTu2' trong chuỗi '$chuoi2' là: " . demKyTuXuatHien($chuoi2, $kyTu2) . "<br>";  
?>