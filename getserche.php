<?php

$a[] = "house";
$a[] = "store";
$a[] = "land";
$a[] = "Building";



$q = $_REQUEST["q"];

$ser = "";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($ser === "") {
                $ser = $name;
            } else {
                $ser .= ", $name";
            }
        }
    }
}


echo $ser === "" ? "no suggestion" : $ser;
?>