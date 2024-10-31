<?php
$file = fopen("./server.json", "a+");
$read = json_decode(fgets($file));
fclose($file);
/*$read["user"] = array(
    "name" => "mihguel",
    "age" => 29,
    "gender" => "male_cisgender",
    "race" => "calcasian",
    "working" => false,
    "studying" => true,
    "married" => false,
    "dating" => true,
    "partner" => "amara",
    "email" => "mihguelaraujo@gmail.com"
);
echo "<pre>";
print_r($read->server);
echo "</pre>";
*/
$obj = NULL;
if (!$read->client) {
$obj = array(
    "server" => $_SERVER,
    "client" => array(
        "name" => "John",
        "device" => "tplink",
        "serial" => "3215868592472345",
        "mac" => "01:ab:cf:47:80:0a"
    )
);
} else {
    echo "Array client already created!";
}
echo "<pre>";
print_r($obj);
echo "</pre>";
$file = fopen("./server.json", "w+");
$JSON_DATA = json_encode($obj);
fwrite($file, $JSON_DATA);
fclose($file);
?>
