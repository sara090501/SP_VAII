<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;
use App\Models\Supplier;

class SupplierController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    /**
     * Vráti index html
     * @return Response
     */
    public function index(): ViewResponse
    {
        return $this->html();
    }

    public function suppliers() : ViewResponse
    {
        $suppliers = Supplier::getAll();
        $names = array();
        foreach($suppliers as $offer) {
            $names[] = $offer->getCompany();
        }

        return $this->html($names);
    }
}