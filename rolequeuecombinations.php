<?php

$tanks = array('D.Va', 'Orisa', 'Reinhardt', 'Roadhog', 'Sigma', 'Winston', 'Wrecking Ball', 'Zarya');
$damages = array('Ashe','Bastion','Doomfist','Genji','Hanzo','Junkrat','McCree','Mei','Pharah','Reapear','Soldier 76','Sombra','Symmetra','Torbjorn','Tracer','Widowmaker');
$supports = array('Ana','Baptiste','Brigitte','Lucio','Mercy','Moira','Zenyatta');

$role_lock = true;

if ($role_lock) {
    $max_role = 2;
    $expected = 70560;
    printCombination($tanks, $max_role);
}
if (!$role_lock){
    $expected = 736281;
    $max_role = 0;

}


function printCombination($arr, $r){ 
    // A temporary array to  
    // store all combination 
    // one by one 
    $data = array(); 
    $n = sizeOf($arr);
  
    // Print all combination  
    // using temprary array 'data[]' 
    combinationUtil($arr, $data, 0, $n - 1, 0, $r); 
}

function combinationUtil($arr, $data, $start, $end, $index, $r){ 
    // Current combination is ready  
    // to be printed, print it 
    if ($index == $r){ 
        for ($j = 0; $j < $r; $j++) 
            echo $data[$j]; 
        echo "\n"; 
        return; 
    } 
  
    // replace index with all 
    // possible elements. The 
    // condition "end-i+1 >=  
    // r-index" makes sure that  
    // including one element at 
    // index will make a combination  
    // with remaining elements at  
    // remaining positions 
    for ($i = $start; $i <= $end && $end - $i + 1 >= $r - $index; $i++) { 
        $data[$index] = ($arr[$i] . ", "); 
        combinationUtil($arr, $data, $i + 1, $end, $index + 1, $r); 
    } 
}  
