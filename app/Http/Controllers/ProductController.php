<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Product $products): View
    {
        return view('welcome', [
            'products' => $products->all()
        ]);
    }
}
