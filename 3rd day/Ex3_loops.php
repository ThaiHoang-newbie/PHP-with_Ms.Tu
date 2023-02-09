<?php #Tìm USCLN
# USCLN(a, b) = USCLN(a mod b, b)
# BSCNN(a, b) = (a * b) / UCSLN(a, b)

function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
 
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}

 

$a = rand(3,10);
$b = rand(3,10);


echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b));


?>