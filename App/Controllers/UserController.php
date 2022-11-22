<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\User;

class UserController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    /**
     * @throws \Exception
     */
    public function registration(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["firstName"])) {
            $user = new User();
            $user->setFirstName($data["firstName"]);
            $user->setLastName($data["lastName"]);
            $user->setEmail($data["email"]);
            $user->setPhoneNumber($data["phoneNumber"]);

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phoneNumber'];

            if (!preg_match("/[A-Z ÁÉÍÓÚŽČŠ][a-z áéíóúžčš]/", $firstName)) {
                echo "<br><div class='center red-text'>Zadali ste nesprávny formát mena</div>";
            } else if (!preg_match("/[A-Z ÁÉÍÓÚŽČŠ][a-z áéíóúžčš]/", $lastName)) {
                echo "<br><div class='center red-text'>Zadali ste nesprávny formát priezviska</div>";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<br><div class='center red-text'>Zadali ste zlý email</div>";
            } else if (!preg_match("/^[+]421[0-9]{9}$/", $phoneNumber)) {
                echo "<br><div class='center red-text'>Zadali ste zlé telefónne číslo</div>";
            } else {
                $user->save();
                return $this->redirect("?c=user&a=succeedRegistration");
            }
        }

        return $this->html();
    }

    public function succeedRegistration(): Response
    {
        return $this->html();
    }

}