<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta charset=utf-8">
    <title>TO DO LIST</title>
</head>
<body>
<table border="1" width="80%" bgcolor="#ffe4c4">
    <caption>TO DO LIST</caption>
    <tr>
        <th>Task</th>
        <th>Done?</th>
    </tr>
<?php

    $file = fopen("C:\wamp64\www\Project1\structure.json", 'r');
    $data = fread($file, filesize("C:\wamp64\www\Project1\structure.json"));
    $array = json_decode($data, true);
    fclose($file);
     for($a = 0; $a < (count($array)); $a++) {
            echo "<tr>" . "<td>" . $array[$a]["task"] . "</td>" . '<td><a href="mark.php?id=' . $a . '">' . $array[$a]["done?"] . "</a></td>" . '<td><a href="delete.php?id=' . $a . '">' . "Delete" . "</a></td></tr>";

     }


?>
</table>
<form action='add.php?task="task"' method="get">
    <div>
        <br><label for="task">Add task</label>
        <input type="text" name="task">
        <p><input type="submit"></p>
    </div>
</form>
</body>
