<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Post;

class PostController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }


    public function index(): Response
    {
        $posts = Post::getAll();
        return $this->html($posts);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["title"])) {
            $post = new Post();
            $post->setTitle($data["title"]);
            $post->setText($data["text"]);
            $post->save();
            return $this->redirect("?c=post");
        }
        return $this->html();
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $post = Post::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=post");
    }

    public function edit(): Response
    {
        $id = $this->request()->getValue("id");
        $post = Post::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->html($post, "add");
    }
}