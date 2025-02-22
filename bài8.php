<?php

function chuyenDoiInHoa($chuoi) {
    
    return strtoupper($chuoi);
}

$chuoi1 = "hello world!";
$chuoi2 = "Welcome to iruma ";

echo chuyenDoiInHoa($chuoi1);  
echo "<br>";  
echo chuyenDoiInHoa($chuoi2);  
?>