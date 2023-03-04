<?php
session_start();
?>

<form action="" method="POST">
    <table>

        <tr>
            <td colspan="2">
                <input type="text" name="title" placeholder="Input title">
            </td>
        </tr>

        <tr>
            <td>
                <input type="number" name="oldprice" placeholder="Old price">
            </td>
            <td>
                <input type="number" name="price" placeholder="Price">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="text" name="img" placeholder="Images" accept=".jpg">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="btn" value="save">
            </td>
        </tr>

    </table>
</form>

<?php
session_start();
?>


<?php
if (isset($_POST["title"]) || isset($_POST["oldprice"]) || isset($_POST["price"]) || isset($_POST["img"])) {
    $_SESSION["title"] = $_POST["title"];
    $_SESSION["oldprice"] = $_POST["oldprice"];
    $_SESSION["price"] = $_POST["price"];
    $_SESSION["img"] = $_POST["img"];
}

if (isset($_POST["btn"])) {
    header("location: http://localhost/PHP-with_Ms.Tu/Mid%20term%201/Ex2.php");
}

?>