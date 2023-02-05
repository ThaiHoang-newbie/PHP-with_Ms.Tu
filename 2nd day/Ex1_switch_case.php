<?php
# Nhập tháng bất kỳ, trả lời tháng đó có bao nhiêu ngày

$month = (int) readline('Enter a months: ');

switch ($month) {
    case 1 || 3 || 5 || 7 || 8 || 10 || 12:
        echo "Tháng $month có 31 ngày";
        break;
    case 4 || 6 || 11:
        echo "Tháng $month có 30 ngày";
        break;
    case 2:
        $year = (int) readline('Enter year: ');
        if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
            echo "Tháng $month năm $year có 29 ngày";
        } else {
            echo "Tháng $month năm $year có 28 ngày";
        }
        break;
    default:
        $month = (int) readline('Enter a months (1 to 12): ');
}