<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\CategoryContract;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
public  function index(){
    $categories = $this->categoryRepository->listCategories();
    return view('site.pages.homepage', compact('categories'));
}
    public function show($slug)
    {
        $category = $this->categoryRepository->findBySlug($slug);

        dd($category);
        // return view('site.pages.category', compact('category')); we will add this in the next post
    }
}
