<?php

include 'class/Storage.php'
include 'class/SessionStorage.php';

$storage = new SessionStorage('map');


if(isset($_GET['newFigures'])) {
    $storage->save(
        '');
    echo $storage->load();
    }
if(isset($_GET['getFigures']))
    echo $storage->load();

if(isset($_GET['moveFigure']))
{
    $frCoord = $_GET['frCoord'];
    $toCoord = $_GET['toCoord'];
    $figures = $storage->load();
    $figure = $figures[$frCoord];
    $figures[$frCoord] = '1';
    $figures[$toCoord] = $figure;
    $storage->save($figures);
    echo $storage->load();
}

    