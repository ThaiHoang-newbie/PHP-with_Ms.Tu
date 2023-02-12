# Nhập tháng bất kỳ (gồm có ngày tháng năm), kiểm tra tính hợp lệ của ngày tháng vừa nhập

<form method="POST" action="">
    Thang:
    <input type="number" name="thang">

    Nam:
    <input type="number" name="nam">

    <input type="submit" name="btn1">
</form>

<?php

if (isset($_POST["thang"])) {

    $month = $_POST['thang'];

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
            $year = $_POST['nam'];
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

}
;