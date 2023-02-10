<form method="POST" action="">
    Num1:
    <input type="text" name="d">
    Num2:
    <input type="text" name="r">

    <input type="submit" name="btn1">
</form>

<?php #Ve hinh chu nhat bang cac dau * khi cho chieu dai va rong truoc
if (isset($_POST["btn1"])) {
    $d = $_POST['d'];
    $r = $_POST['r'];

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
}
;

?>
