<?php
use App\Controllers\OfferController;

$people[] = "Anna";
$people[] = "Ann";
$people[] = "Annita";
$people[] = "Molly";
$people[] = "Moll";
$people[] = "Mollie";
$people[] = "Steve";
$people[] = "Steven";
$people[] = "Stevenson";

//$offerController = new OfferController();
//$offers = $offerController->offerNames();

$q = $_REQUEST['q'];
$suggestion = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $offer) {
        if (stristr($q, substr($offer, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $offer;
            } else {
                //already found someone, .= means appending
                $suggestion .= ", $offer";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;