<?php

    $str = file_get_contents('tasks.json');
    $json = json_decode($str, true);

    foreach ($json as $task) {
        echo '<li>'. $task .'<button id="remove"><i class="fa fa-times"></i></button>'.'</li>';
}