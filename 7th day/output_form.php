<style>
    tr, td{
        border: 1px solid black;
    }
</style>

<?php
session_start();
?>


<tr>
    <?php 
            $n = 0;

        if (isset($_SESSION["ar"])) {
            $n = count($_SESSION["ar"]);
            echo $n;
        }
        for ($i = 0; $i < $n; $i++){?>
            <td><?php echo $_SESSION["ar"][$i]["sp"]?></td>
            <td><?php echo $_SESSION["ar"][$i]["gt"]?></td>
            <td><?php echo $_SESSION["ar"][$i]["mt"]?></td>
            <td><?php echo $_SESSION["ar"][$i]["ha"]?></td>
            <br>    
    <?php } ?>

</tr>


<a href= "http://localhost/PHP-with_Ms.Tu/7th%20day/input_form.php">Nhập tiếp</a>