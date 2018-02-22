<?php

//if ($_POST['info'] == "getTime") 
$info = $_POST['info'];
$info();

function getTime() {
    $date = date("d-m-Y");
    $heure = date("H:i:s");
    echo "Nous sommes le " . $date . " et il est " . $heure;
}

//getTime();
function getHDD() {
    $diskLibre = round(disk_free_space('/') / 1073741824, 2);
    $diskTotal = round(disk_total_space('/') / 1073741824, 2);
    $diskOccupe = $diskTotal - $diskLibre;

    echo $diskOccupe . ' GO espace occupé et ' . $diskTotal . ' GO espace total';
}

function get_server_memory_usage() {

    $free = shell_exec('free');
    $free = (string) trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2] / $mem[1] * 100;

    echo round($memory_usage, 2) . ' % de mémoire utilisée<br>';
    echo round($mem[1] / 1048576, 2) . ' GO de mémoire totale<br>';
    echo round($mem[2] / 1048576, 2) . ' GO de mémoire utilisée';
}

function getLinuxDistrib() {
    echo 'operating system:' . php_uname('v');
}

function dossier() {
    $dossier_nom = shell_exec('ls /var/www');
    //$files = scandir($dossier_nom);
    echo "<pre>${dossier_nom}</pre>";
}

function get_memory() {

    $free = shell_exec('free');
    $free = (string) trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2] / $mem[1] * 100;

    echo round($memory_usage, 2);
}

//graphiques

function get_memory2() {

    $free = shell_exec('free');
    $free = (string) trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2] / $mem[1] * 100;

    echo round($mem[1] / 1048576, 2);
}

function get_memory3() {

    $free = shell_exec('free');
    $free = (string) trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2] / $mem[1] * 100;

    echo round($mem[2] / 1048576, 2);
}
?>
  


