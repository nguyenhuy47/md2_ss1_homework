<?php

function getFile($path)
{
    $data = file_get_contents($path);// read file json
    $arr = json_decode($data);// convert json to array
    return $arr;
}

function saveData($arr, $user, $path)
{
    array_push($arr, $user);
    $newJson = json_encode($arr);
    file_put_contents($path, $newJson);
}
?>