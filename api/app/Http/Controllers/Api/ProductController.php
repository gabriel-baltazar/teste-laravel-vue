<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
        return response()->json('Produto criado com sucesso');
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return response()->json('Produto Atualizado com sucesso');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json('Produto excluido com sucesso');
    }
}
