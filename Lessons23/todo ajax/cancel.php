<?php
$myFile = 'tasks.json';
$tasks = json_decode(file_get_contents($myFile), TRUE);

$id = $_POST["id"];

foreach($tasks as $key => &$item){
    if ($id == $item['id']){
        unset($tasks[$key]);
    }
}

file_put_contents($myFile, json_encode($tasks), LOCK_EX);
