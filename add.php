<?php

    $inp = file_get_contents('C:\wamp64\www\Project1\structure.json');
    $temp_array = json_decode($inp);
    $array_size = count($temp_array);

    $new_array = array (
        "id" => $array_size,
        "task" => htmlspecialchars($_GET["task"]),
        "done?" => "No"
    );

    var_dump($new_array);

    array_push($temp_array, $new_array);
    $json_array = json_encode($temp_array);
    file_put_contents("C:\wamp64\www\Project1\structure.json", $json_array);

    if (isset($_SERVER["HTTP_REFERER"])) {
     header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
