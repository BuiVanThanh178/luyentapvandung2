<?php
function kiemTraNamNhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return true;
    }
    return false;
}

$nam = 2024;
if (kiemTraNamNhuan($nam)) {
    echo "Năm $nam là năm nhuận.";
} else {
    echo "Năm $nam không phải là năm nhuận.";
}
?>