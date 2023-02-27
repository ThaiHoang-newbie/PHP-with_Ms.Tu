<!DOCTYPE html>
<html>
<style>
    td#brd {
        border: 1px solid black;
        width: 50px;
    }
</style>

</html>


<?php
session_start();

$mang = $_SESSION["mang"];

if (isset($_SESSION["mang"])) {
    foreach ($mang as $a => $b) { ?>

        <table method="POST">
            <tr>
                <td id="brd"><?php echo $a ?></td>
                <td id="brd"><?php echo $b ?></td>
                <td><input type="submit" name="btn_delete" value="Delete">
                    <input type="hidden" name="index" value="
            <?php
            array_splice($mang, $a);
            ?>">
                </td>
            </tr>
        </table>

<?php
    }
}
?>