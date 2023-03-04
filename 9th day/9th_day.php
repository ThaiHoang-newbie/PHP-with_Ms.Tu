<form action="" method="POSt">
    <input type="number" name="snt" placeholder="Nhập số cần kiểm tra">
    <input type="submit" name="btn" value="Check">

</form>

<?php #Function


function test($a)
{
    $b = "";
    for ($i = 0; $i <= $a; $i++) {
        if ($i % 2 == 0 or $i % 3 == 0 or $i % 5 == 0) {
            $b = $b . "$i không phải là số nguyên tố!" . "<br>";
        } else if ($i == 0 or $i == 1 or $i == 2) {
            $b = $b . "$i là số nguyên tố!" . "<br>";
        } else {
            $b = $b . "$i là số nguyên tố!" . "<br>";
        }
    }
    return $b;
}

if (isset($_POST['snt'])) {
    $snt = $_POST['snt'];
}
if (isset($_POST['btn'])) {
    echo test($snt);
}

?>