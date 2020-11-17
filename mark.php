<?php

    $inp = file_get_contents('C:\wamp64\www\Project1\structure.json');
    $temp_array = json_decode($inp, true);
    $tmp = (int)htmlspecialchars($_GET["id"]);
    $temp_array[$tmp]["done?"] = "Yes";
    $json_array = json_encode($temp_array);
    file_put_contents("C:\wamp64\www\Project1\structure.json", $json_array);

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

