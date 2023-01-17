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

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["company"])) {

            $company = $_POST['company'];
            $country = $_POST['country'];

            $addable = true;
            $required = "Toto pole musí byť vyplnené!";

            if (empty($company)) {
                $addable = false;
                $error['companyError'] = $required;
            }

            if (empty($country)) {
                $addable = false;
                $error['countryError'] = $required;
            }

            $supplier = new Supplier();
            $supplier->setCompany($data["company"]);
            $supplier->setCountry($data["country"]);
            $supplier->setSlogan($data["slogan"]);

            if ($addable) {
                $supplier->save();
                return $this->redirect("?c=supplier");
            } else {
                return $this->html($error);
            }
        }
        return $this->html();
    }
}