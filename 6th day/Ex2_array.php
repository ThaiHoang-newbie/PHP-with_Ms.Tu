<style>
    table{
        border: black 1px solid;
    }
    tr, td{
        border: black 1px solid;
    }
</style>

<?php #Rendering data to table

$account = array(
    "hoang" => "hoang2011",
    "h@gmail.com" => "h2011"
);



echo "<table><tr><th>STT</th><th>Username</th><th>Pass</th></tr>";
$i = 1;
foreach ($account as $a => $b) {
    echo "<tr><td>$i</td><td>$a</td><td>$b</td></tr>";
    $i++;
}
;
echo "</table>";

?>