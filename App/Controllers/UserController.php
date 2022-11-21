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
            $user->save();
            return $this->redirect("?c=user&a=succeedRegistration");
        }

        return $this->html();
    }

}