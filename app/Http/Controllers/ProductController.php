<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

       return view('apps-invoices-list', compact('products'));
    }
}
