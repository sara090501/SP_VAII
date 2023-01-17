<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\Offer;

class OfferController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        $offer = Offer::getAll();
        return $this->html($offer);
    }

    /**
     * Vráti zoznam všetkých ponúk
     * @return JsonResponse
     * @throws \Exception
     */
    public function offers() : JsonResponse
    {
        return $this->json(['offers' => Offer::getAll()]);
    }

    public static function offerNames() : JsonResponse
    {
        $names = array();
        $offers = Offer::getAll();
        foreach($offers as $offer) {
            $names[] = $offer->getName();
        }
        return new JsonResponse($names);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["name"])) {

            $name = $_POST['name'];
            $price = $_POST['price'];

            $addable = true;
            $required = "Toto pole musí byť vyplnené!";

            if (empty($name)) {
                $addable = false;
                $error['nameError'] = $required;
            } else if (!preg_match("/[A-Z][a-z]/", $name)) {
                $addable = false;
                $error['nameError'] = 'Zadali ste nesprávny formát mena!';
            }

            if (!(is_float($price)) && empty($price)) {
                $addable = false;
                $error['priceError'] = $required;
            } else if (!preg_match("/^([1-9][0-9]*|0)(\.[0-9]{1,2})?$/", $price)) {
                $addable = false;
                $error['priceError'] = 'Zadali ste nesprávny formát ceny!';
            }

            $offer = new Offer();
            $offer->setName($data["name"]);
            $offer->setDescription($data["description"]);
            $offer->setImgpath($data["imgpath"]);
            $offer->setPrice($data["price"]);

            if ($addable) {
                $offer->save();
                return $this->redirect("?c=offer");
            } else {
                return $this->html($error);
            }
        }
        return $this->html();
    }

    public function edit(): Response
    {
        $id = $this->request()->getValue("id");
        $offer = Offer::getOne($id);
        $data = $this->request()->getPost();
        if($offer != null) {
            if(isset($data["name"])){ //isset ci existuje a empty ci ej zadane cosi
                $offer->setName($data["name"]);
                $offer->setDescription($data["description"]);
                $offer->setImgpath($data["imgpath"]);
                $offer->setPrice($data["price"]);

                $name = $_POST['name'];
                $price = $_POST['price'];


                if (empty($name) || !preg_match("/[A-Z][a-z]/", $name)) {
                    echo "<br><div class='center red-text'>Zadali ste nesprávny formát mena</div>";
                } else if (empty($price) || !preg_match("/^([1-9][0-9]*|0)(\.[0-9]{1,2})?$/", $price)) {
                    echo "<br><div class='center red-text'>Zadali ste nesprávny formát ceny</div>";
                } else {
                    $offer->save();
                    return $this->redirect("?c=offer");
                }
            }
        }

        return $this->html($offer,"edit");
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $offer = Offer::getOne($id);
        if($offer != null){
            $offer->delete();
        }

        return $this->redirect("?c=offer");
    }
}