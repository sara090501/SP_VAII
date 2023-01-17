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

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $phoneNumber = $_POST['phoneNumber'];

            $registrable = true;
            $required = "Toto pole musí byť vyplnené!";

            if (empty($firstName)) {
                $registrable = false;
                $error['firstNameError'] = $required;
            } else if (!preg_match("/[A-Z ÁÉÍÓÚŽČŠ][a-z áéíóúžčš]/", $firstName)) {
                $registrable = false;
                $error['firstNameError'] = 'Zadali ste nesprávny formát mena!';
            }

            if (empty($lastName)) {
                $registrable = false;
                $error['lastNameError'] = $required;
            } else if (!preg_match("/[A-Z ÁÉÍÓÚŽČŠ][a-z áéíóúžčš]/", $lastName)) {
                $registrable = false;
                $error['lastNameError'] = 'Zadali ste nesprávny formát priezviska!';
            }

            if (empty($email)) {
                $registrable = false;
                $error['emailError'] = $required;
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $registrable = false;
                $error['emailError'] = 'Zadali ste nesprávny formát emailu!';
            }

            if (empty($login)) {
                $registrable = false;
                $error['loginError'] = $required;
            } else {
                $users = User::getAll();
                foreach ($users as $user) {
                    if ($login == $user->getLogin()) {
                        $registrable = false;
                        $error['loginError']  = 'Používaťel s danou prezývkou už existuje!';
                    }
                }
            }

            if (empty($password)) {
                $registrable = false;
                $error['passwordError'] = $required;
            } else if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/", $password)) {
                $registrable = false;
                $error['passwordError'] = 'Zadali ste nesprávny formát hesla!';
            }

            if (empty($phoneNumber)) {
                $registrable = false;
                $error['phoneNumberError'] = $required;
            } else if (!preg_match("/^[+]421[0-9]{9}$/", $phoneNumber)) {
                $registrable = false;
                $error['phoneNumberError'] = 'Zadali ste nesprávny formát telefónneho čísla!';
            }

            $user = new User();
            $user->setFirstName($data["firstName"]);
            $user->setLastName($data["lastName"]);
            $user->setEmail($data["email"]);
            $user->setLogin($data["login"]);
            $user->setPassword($data["password"]);
            $user->setPhoneNumber($data["phoneNumber"]);

            if ($registrable) {
                $password = password_hash($data["password"], PASSWORD_BCRYPT);
                $user->setPassword($password);
                $user->save();
                return $this->redirect("?c=user&a=succeedRegistration");
            } else {
                return $this->html($error);
            }
        }

        return $this->html();
    }

    public function succeedRegistration(): Response
    {
        return $this->html();
    }
}