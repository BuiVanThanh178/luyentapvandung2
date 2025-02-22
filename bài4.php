<?php
function fibonacci($n) {
    if ($n <= 0) {
        return "Lỗi: n phải là số nguyên dương.";
    } elseif ($n == 1) {
        return 0;
    } elseif ($n == 2) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}


$n = 20;
echo "Số Fibonacci thứ $n là: " . fibonacci($n) . "\n";
?>