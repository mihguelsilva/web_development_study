<?php
$file = fopen("./server.json", "a+");
$read = json_decode(fgets($file));
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
);*/
echo "<pre>";
print_r($read);
echo "</pre>";

?>
