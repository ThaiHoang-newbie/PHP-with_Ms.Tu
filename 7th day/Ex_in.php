<?php
session_start();
$user = array(
    'dung' => '123',
    'sam' => '123',
    'no' => '123',
    'higt' => '123'
);

$_SESSION["mang"] = $user;

?>
<input type="submit" value="Save" name="btn_save">
<?php 
if (isset($_POST["btn_save"])){
    header("Location: Ex_out.php");
}

