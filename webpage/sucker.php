<?php
if (isset($_REQUEST["student"]) and isset($_REQUEST["cardtype"])) {
    $student = $_REQUEST["student"];
    $course = $_REQUEST["course"];
    $card = $_REQUEST["card"];
    $cardType = $_REQUEST["cardtype"];

    if (($student == "" or $card == "") or $cardType == "") {
        include "sorry.php";
    } else {
        $newData = $student . ";" . $course . ";" . $card . ";" . $cardType . "\n";
        file_put_contents("suckers.txt", $newData, FILE_APPEND);
        $allSuckers = file_get_contents("suckers.txt");
        include "allsuckers.php";
    }
} else {
    include "sorry.php";
}





