<?php

function tachChuoi($chuoi, $kyTuPhanCach) {
   
    return explode($kyTuPhanCach, $chuoi);
}


$chuoi1 = "apple,banana,orange";
$kyTuPhanCach1 = ",";  

$chuoi2 = "apple|banana|orange";
$kyTuPhanCach2 = "|";  


print_r(tachChuoi($chuoi1, $kyTuPhanCach1));  
echo "<br>";
print_r(tachChuoi($chuoi2, $kyTuPhanCach2));  
?>