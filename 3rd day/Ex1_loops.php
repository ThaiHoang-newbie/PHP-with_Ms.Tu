<form method="post">
    <?php
    $n = $_POST["txtn"];
    echo "Nhap n: $n <br>";
    ?>
</form>

<?php # Bang cuu chuong

$n = 7;
for ($j = 1; $j <= 10; $j++) {
    echo "$n x $n = " . ($j * $n);
    echo "<br>";
}
?>