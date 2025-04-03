<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function store(Request $request)
{
    $product = Product::create($request->all());
    return response()->json($product, 201);
}

}
