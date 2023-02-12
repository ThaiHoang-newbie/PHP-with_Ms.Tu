# Nhập tháng bất kỳ (gồm có ngày tháng năm), kiểm tra tính hợp lệ của ngày tháng vừa nhập

<form method="POST" action="">
    Ngay:
    <input type="number" name="ngay">
    Thang:
    <input type="number" name="thang">
    Nam:
    <input type="number" name="nam">

    <input type="submit" name="btn1">
</form>

<?php

if (isset($_POST["ngay"]) || isset($_POST["thang"]) || isset($_POST["nam"])) {
    $ngay = $_POST['ngay'];
    $thang = $_POST['thang'];
    $nam = $_POST['nam'];




    switch ($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            if ($ngay > 0 and $ngay <= 31) {
                echo ("Ngay $ngay thang $thang nam $nam hop le\n");
                break;
            } else {
                echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
                break;
            }
        case 4:
        case 6:
        case 9:
        case 11:
            if ($ngay <= 30 && $ngay > 0) {
                echo ("Ngay $ngay thang $thang nam $nam hop le\n");
                break;
            } else {
                echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
                break;
            }

        case 2:
            if ($ngay <= 28 && $ngay > 0) {
                echo ("Ngay $ngay thang $thang nam $nam hop le\n");
                break;
            } else {
                echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
                break;
            }
        default: {
                echo ("Ngay $ngay thang $thang nam $nam khong hop le\n");
                break;
            }
    }

    echo "<br><BUTTON TYPE=\'button\" onClick=\"history.go(0)\" >Refresh</BUTTON>";
}
;