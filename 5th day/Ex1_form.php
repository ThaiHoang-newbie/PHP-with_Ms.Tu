<?php # Cho 1 mảng gồm n phần tử là các số nguyên, 
# hãy in ra màn hình số lớn nhất và nhỏ nhất của mảng. Cho biết vị trí của các phần tử đó

// Max
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
// Min
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}

$array = array(1, 2, 3, 4, 5);

echo(getMax($array));
echo("\n");
echo(getMin($array));
?>
