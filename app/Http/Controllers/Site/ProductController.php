<?php

namespace App\Http\Controllers\Site;

use App\Contracts\CategoryContract;
use App\Models\Category;
use Cart;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;

class ProductController extends Controller
{
    protected $productRepository;

    protected $attributeRepository;
    protected $categoryRepository;
    public function __construct(ProductContract $productRepository,
                                AttributeContract $attributeRepository ,
                                CategoryContract $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function show($slug)
    {

        $product = $this->productRepository->findProductBySlug($slug);
//   dd($product);

        $attributes = $this->attributeRepository->listAttributes();
        return view('site.pages.product', compact('product', 'attributes'));
    }

    public function addToCart(Request $request)
    {
        $product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty');

        Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }
}
