<form method="POST" action="">
    Number 1:
    <input type="number" name="num1">
    Number 2:
    <input type="number" name="num2">

    <input type="submit" name="btn">
</form>

<?php
if (isset($_POST["btn"])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    echo "Sum: $a + $b = " . $a + $b;
};
?>

<form method="POST" action="">
    Name:
    <input type="text" name="name">
    
    <input type="submit" name="btn1">
</form>

<?php
if (isset($_POST["btn1"])) {
    $name = $_POST['name'];

    echo "Hello $name";
};
?>