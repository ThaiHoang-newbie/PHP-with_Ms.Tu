<?php
// Nhập điểm TB của 1 SV, cho biết SV đó xếp loại gì, biết (Từ 9.0: Xuất sắc, 8.0 - 9.0: Giỏi, 
// 7.0 - 8.0: Khá, 5.0 - 7.0: Trung bình, còn lại là yếu)


$score = rand(0,10);

if ($score >= 0 and $score <= 10){
    switch ($score) {
        case $score > 9.0 and $score <= 10:
            echo "Xuất sắc";
            break;
        case $score > 8.0 and $score <= 9.0:
            echo "Giỏi";
            break;
        case $score > 7.0 and $score <= 8.0:
            echo "Khá";
            break;
        case $score > 5.0 and $score <= 7.0:
            echo "Trung bình";
            break;
        case $score <= 5.0:
            echo "Yếu";
            break;
        default:
            echo "Nhập lại!";
    }
}else{
    echo "Nhập lại";
}

echo "<br><BUTTON TYPE=\'button\" onClick=\"history.go(0)\" >Refresh</BUTTON>";
