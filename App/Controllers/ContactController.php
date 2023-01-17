<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Contact;

class ContactController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */

    public function index(): Response
    {
        return $this->html();
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["name"])) {
            $contact = new Contact();
            $contact->setName($data["name"]);
            $contact->setEmail($data["email"]);
            $contact->setMessage($data["message"]);

            $name = $_POST['name'];


            if (!preg_match("/[A-Z][a-z]/", $name)) {
                $data['error'] = 'Zadali ste nesprávny formát mena!';
                return $this->html($data);
            } else {
                $contact->save();
                return $this->redirect("?c=contact");
            }
        }
        return $this->html();
    }
}