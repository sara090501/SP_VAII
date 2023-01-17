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
        $contacts = Contact::getAll();
        return $this->html($contacts);
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

    public function edit() {
        $id = $this->request()->getValue("id");
        $contact = Contact::getOne($id);
        $data = $this->request()->getPost();
        if($contact != null) {
            if(isset($data["name"])){ //isset ci existuje a empty ci ej zadane cosi
                $contact->setName($data["name"]);
                $contact->setEmail($data["email"]);
                $contact->setMessage($data["message"]);

                $name = $_POST['name'];

                if (empty($name) || !preg_match("/[A-Z][a-z]/", $name)) {
                    echo "<br><div class='center red-text'>Zadali ste nesprávny formát mena</div>";
                } else {
                    $contact->save();
                    return $this->redirect("?c=contact");
                }
            }
        }

        return $this->html($contact,"edit");
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $contact = Contact::getOne($id);
        if($contact != null){
            $contact->delete();
        }

        return $this->redirect("?c=contact");
    }
}