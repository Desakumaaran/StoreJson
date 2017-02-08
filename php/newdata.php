<?php
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$id = uniqid();
$str = file_get_contents('results.json');
$array = json_decode($str, true);
$array[$id] = array(
    'name' => $name,
    'pwd' => $pwd
);


$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($array));

?>
