<?php
function daoNguocChuoi($chuoi) {
    return strrev($chuoi);
}

$chuoi = "123456789";
$chuoi_dao_nguoc = daoNguocChuoi($chuoi);
echo "Chuỗi đảo ngược của chuỗi '$chuoi' là: '$chuoi_dao_nguoc'.";
?>