<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Post;
use App\Models\Review;

class ReviewController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }


    public function index(): Response
    {
        $review = Review::getAll();
        return $this->html($review);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["name"])) {
            $review = new Review();
            $review->setName($data["name"]);
            $review->setText($data["text"]);
            $review->save();
            return $this->redirect("?c=review");
        }
        return $this->html();
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $review = Review::getOne($id);
        if($review != null){
            $review->delete();
        }

        return $this->redirect("?c=review");
    }

}