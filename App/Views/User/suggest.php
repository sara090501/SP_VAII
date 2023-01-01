<?php
$people[] = "Anna";
$people[] = "Ann";
$people[] = "Annita";
$people[] = "Molly";
$people[] = "Moll";
$people[] = "Mollie";
$people[] = "Steve";
$people[] = "Steven";
$people[] = "Stevenson";

$q = $_REQUEST['q'];
$suggestion = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                //already found someone, .= means appending
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;