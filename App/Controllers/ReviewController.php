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

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function review(): Response
    {

        return $this->html();
    }

    public function index(): Response
    {
        $reviews = Review::getAll();
        return $this->html($reviews);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["title"])) {
            $review = new Review();
            $review->setTitle($data["title"]);
            $review->setText($data["text"]);
            $review->save();
            return $this->redirect("?c=review");
        }
        return $this->html();
    }

}