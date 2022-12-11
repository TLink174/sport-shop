<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductService
{
    private Product $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function create($request)
    {
        $productCreated = $this->product->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'id_category' => $request->id_category,
        ]);
        return $productCreated;
    }
    public function update($request, $id)
    {
        $product = $this->product->find($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->id_category = $request->id_category;
        $product->save();
        return $product;
    }

    public function delete($id)
    {
        $product = $this->getById($id);
        $product->delete();
        return $product;
    }
    public function getAll()
    {
        return $this->product->all();
    }
    public function getByid($id)
    {
        return $this->product->find($id);
    }
    public function find($id)
    {
        return $this->product->find($id);
    }
}
