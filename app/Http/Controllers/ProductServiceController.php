<?php

namespace App\Http\Controllers;

use App\Models\ProductService;
use App\Models\SelhozProduct;

class ProductServiceController extends Controller
{
    public function index()
    {
        $productServices = ProductService::query()->orderBy('id', 'desc')->get();
        $agriculturalProducts = SelhozProduct::query()->orderBy('id', 'desc')->get();

        return view('product-services.index', [
            'productServices' => $productServices,
            'agriculturalProducts' => $agriculturalProducts,
        ]);
    }

    public function show(string $slug)
    {
        $productService = ProductService::query()->where('slug', $slug)->firstOrFail();

        return view('product-services.show', [
            'productService' => $productService,
        ]);
    }

    public function show_selhoz(string $slug)
    {
        $productService = SelhozProduct::query()->where('slug', $slug)->firstOrFail();

        return view('product-services.show', [
            'productService' => $productService,
        ]);
    }
}
