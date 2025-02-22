<?php
function demSoTu($chuoi) {
    return str_word_count($chuoi);
}


$chuoi = "Xin chào, hôm nay là một ngày đẹp trời!";
echo "Số từ trong chuỗi là: " . demSoTu($chuoi);
?>