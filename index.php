<?php error_reporting(-1);
//В массиве А(N) найти номер элемента, сумма которого со следующим за ним элементом максимальна,
// и номер элемента, сумма которого с предыдущим элементом минимальна. 
$A = [1, 7, 4, 9, 8, 23, 17, 22, -100, 7];
$countelem = 2; //количество искомых максимумов

echo("A(N):<br>");
print_r($A);
$max = max_summ($A);
$min = min_summ($A);
echo("<br>В данном массиве, номер элемента, сумма которого со следующим за ним значением максимальна - {$max}. Номер элемента, сумма которого с предыдущим элементом минимальна - {$min}");




function max_summ($array){
    $maxn = null;
    $maxv = null;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] + $array[$i+1] > $maxv){
            $maxv = $array[$i] + $array[$i+1];
            $maxn = $i;
        }
    }
    return $maxn;
}

function min_summ($array){
    $minn = 1;
    $minv = $array[0] + $array[1];
    for($i = 1; $i < count($array); $i++){
        if($array[$i] + $array[$i-1] < $minv){
            $minv = $array[$i] + $array[$i-1];
            $minn = $i;
        }
    }
    return $minn;
}