<?php #Tìm USCLN
# USCLN(a, b) = USCLN(a mod b, b)
# BSCNN(a, b) = (a * b) / UCSLN(a, b)

function USCLN($a, $b)
{
    if ($b == 0)
        return $a;
    return USCLN($b, $a % $b);
}

function BSCNN($a, $b)
{
    return ($a * $b) / USCLN($a, $b);
}

?>

<form method="POST" action="">
    Num1:
    <input type="text" name="n1">
    Num2:
    <input type="text" name="n2">

    <input type="submit" name="btn1">
</form>

<?php
if (isset($_POST["btn1"])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];

    echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
    echo ("BSCNN của $a và $b là: " . BSCNN($a, $b));
}
;
?>