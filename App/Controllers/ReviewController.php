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
        $review = Post::getAll();
        return $this->html($review);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["title"])) {
            $review = new Post();
            $review->setTitle($data["title"]);
            $review->setText($data["text"]);
            $review->save();
            return $this->redirect("?c=review");
        }
        return $this->html();
    }

}