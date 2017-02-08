<?php
$id = $_POST['id'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$str = file_get_contents('results.json');
$array = json_decode($str, true);
foreach ($array as $k => $v) {
    echo $k;
    // IF THE TITLE MATCHES THE SIGNAL STRING
    if ($k == $id)
    {
    $array[$id] = array(
    'name' => $name,
    'pwd' => $pwd
);
    }
}
$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($array));

?>
