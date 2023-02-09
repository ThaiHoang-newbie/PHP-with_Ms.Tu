<?php #Ve hinh chu nhat bang cac dau * khi cho chieu dai va rong truoc

$d = rand(3,10);
$r = rand(3, 10);
$sum = "";


for ($i = 0; $i < $r; $i++){
    for ($j = 0; $j < $d; $j++){
        echo "*";
    }
    echo "<br>";
    ;
};
if ($r == $d){
    echo "Đây là hình vuông với cạnh là $r";
}else if($r > $d){
    echo "Đây là hình chữ nhật với chiều dài là $r và chiều rộng là $d";
}else{
    echo "Đây là hình chữ nhật với chiều dài là $d và chiều rộng là $r";
}

?>