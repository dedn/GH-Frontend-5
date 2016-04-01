<?php

    $myFile = 'tasks.json';
    $tasks = json_decode(file_get_contents($myFile), TRUE);
    $ids_array =array();


    $task = $_POST["data"];

    array_unshift($tasks, $task);


    file_put_contents($myFile, json_encode($tasks), LOCK_EX);

    echo '<li>'. $task .'<button id="remove"><i class="fa fa-times"></i></button>'.'</li>';




