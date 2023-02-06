<?php
# Nhập tháng bất kỳ, trả lời tháng đó có bao nhiêu ngày

$month = rand(1,12);

switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "Tháng $month có 31 ngày";
        break;
    case 4:
    case 6:
    case 11:
        echo "Tháng $month có 30 ngày";
        break;
    case 2:
        $year = rand(0,2023);
        if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
            echo "Tháng $month năm $year có 29 ngày";
        } else {
            echo "Tháng $month năm $year có 28 ngày";
        }
        break;
    default:
        $month = (int) readline('Enter a months (1 to 12): ');
}

echo "<body style='background-color:lightblue;color:black;font-size:30px;'>";
echo "<br><BUTTON TYPE=\'button\" onClick=\"history.go(0)\" >Refresh</BUTTON>";
