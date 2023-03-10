<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProductsByCategoryId($id)
    {
        return Product::query()->where('category_id', $id)->orderBy('created_at')->get();
    }

    public function getProducts()
    {
        return Product::query()->orderBy('created_at')->get();
    }

    public function getProductInfoById($id)
    {
        return Product::query()->where('id',$id)->first();
    }
}
