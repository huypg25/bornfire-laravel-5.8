<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\PostContract;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostContract $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function show($id)
    {
        $post = $this->postRepository->findPostById($id);

        dd($post);
    }
}
