<?php
function kiemTraChanLe($n) {
    if ($n % 2 == 0) {
        return "Số $n là số chẳn.";
    } else {
        return "Số $n là số lẻ.";
    }
}


echo kiemTraChanLe(10) . "\n"; 
echo kiemTraChanLe(7) . "\n";  
?>