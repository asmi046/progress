<?php

namespace App\Http\Controllers;

use App\Models\ProductService;

class ProductServiceController extends Controller
{
    public function index()
    {
        $productServices = ProductService::query()->orderBy('id', 'desc')->get();

        return view('product-services.index', ['productServices' => $productServices]);
    }

    public function show(string $slug)
    {
        $productService = ProductService::query()->where('slug', $slug)->firstOrFail();

        return view('product-services.show', ['productService' => $productService]);
    }
}
