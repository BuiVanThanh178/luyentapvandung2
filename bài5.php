<?php
function kiemTraSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 20;
if (kiemTraSoNguyenTo($n)) {
    echo "Số $n là số nguyên tố.";
} else {
    echo "Số $n không phải là số nguyên tố.";
}
?>