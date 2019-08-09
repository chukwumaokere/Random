<?php

require_once 'Math/Combinatorics.php';
$combinatorics = new Math_Combinatorics;

$tanks = array('D.Va', 'Orisa', 'Reinhardt', 'Roadhog', 'Sigma', 'Winston', 'Wrecking Ball', 'Zarya');
$damages = array('Ashe','Bastion','Doomfist','Genji','Hanzo','Junkrat','McCree','Mei','Pharah','Reaper','Soldier 76','Sombra','Symmetra','Torbjorn','Tracer','Widowmaker');
$supports = array('Ana','Baptiste','Brigitte','Lucio','Mercy','Moira','Zenyatta');
$role_lock = false;

if ($role_lock) {
    $max_role = 2;
    $expected = 70560;
    $tanks_combo = $combinatorics->combinations($tanks, 2);
    $dps_combo = $combinatorics->combinations($damages, 2);
    $support_combo = $combinatorics->combinations($supports,2);

    $total_combos = sizeOf($tanks_combo) * sizeOf($dps_combo) * sizeOf($support_combo);
    var_dump($total_combos);
}
if (!$role_lock){
    $max_role = 0;
    $expected = 736281;
    $total_heroes = sizeOf($tanks) + sizeOf($damages) + sizeOf($supports);
    $hero_pool = array_merge($tanks, $damages, $supports);
    $total_combos = $combinatorics->combinations($hero_pool, 6);
    
    var_dump(sizeOf($total_combos));
}
