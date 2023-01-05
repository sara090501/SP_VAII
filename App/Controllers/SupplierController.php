<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Supplier;

class SupplierController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }


    public function index(): Response
    {
        $suppliers = Supplier::getAll();
        return $this->html($suppliers);
    }
}