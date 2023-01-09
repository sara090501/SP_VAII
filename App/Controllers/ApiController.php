<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;
use App\Models\Offer;

class ApiController extends AControllerBase
{
    public function suggestions(): ViewResponse
    {
        $offers = Offer::getAll();
        $names = array();
        foreach($offers as $offer) {
            $names[] = $offer->getName();
        }

        $q = $_REQUEST['q'];
        $suggestion = "";

        if ($q !== "") {
            $q = strtolower($q);
            $len = strlen($q);
            foreach($names as $offer) {
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

        if ($suggestion === "") {
            $suggestion = "No Suggestion";
        }

        return $this->html($suggestion);
    }

    public function index(): Response
    {
        return $this->html();
    }
}