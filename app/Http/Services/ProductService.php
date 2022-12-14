<?php

namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Support\Str;


class ProductService
{
    private Product $product;
    private SizeService $sizeService;
    private ColorService $colorService;

    public function __construct(Product $product, SizeService $sizeService, ColorService $colorService)
    {
        $this->product = $product;
        $this->sizeService = $sizeService;
        $this->colorService = $colorService;

    }
    public function create($request)
    {

        $productCreated = $this->product->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'id_category' => $request->id_category,
        ]);
        $sizeIds = $this->sizeService->createMultipleSizes($request->sizes);
        $productCreated->sizes()->attach($sizeIds);
        $colorIds = $this->colorService->updateMultipleColors($request->colors);
        $productCreated->colors()->attach($colorIds);
    }
    public function update($request, $id)
    {

        $product = $this->product->find($id);
        $product->update([
            'name' => $request->name ?? $product->name,
            'slug' => Str::slug($request->name) ?? $product->slug,
            'description' => $request->description ?? $product->description,
            'price' => $request->price ?? $product->price,
            'image' => $request->image ?? $product->image,
            'id_category' => $request->id_category ?? $product->id_category,
        ]);
        $colorIds = $this->colorService->updateMultipleColors($request->colors);
        $product->colors()->sync($colorIds);
        $sizeIds = $this->sizeService->createMultipleSizes($request->sizes);
        $product->sizes()->sync($sizeIds);


        return $product;
    }

    public function delete($id)
    {
        $product = $this->getById($id);
        $product->delete();
        return $product;
    }
    function getAllHasSoftDeletes()
    {
        return $this->product->getAllHasSoftDeletes();
    }
    function findHasSoftDeletes($id)
    {
        return $this->product->findHasSoftDeletes($id);
    }
    public function getAllProductPublic($limit)
    {
        return $this->product->getAllProductPublic($limit);
    }
    public function getAll()
    {
        return $this->product->all();
    }
    public function getByid($id)
    {
        return $this->product->find($id);
    }
    public function restore($id)
    {
        $product = $this->product->withTrashed()->find($id);

        if ($product && $product->trashed()) {
            $product->restore();
        }
        $product->restore();
    }
    public function find($id)
    {
        return $this->product->find($id);
    }

}
