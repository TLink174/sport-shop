<?php

namespace App\Http\Services;

use App\Models\CategoryProduct;
use Illuminate\Support\Str;

class CategoryProductService
{
    private CategoryProduct $categoryProduct;

    public function __construct(CategoryProduct $categoryProduct)
    {
        $this->categoryProduct = $categoryProduct;
    }

    public function create($request)
    {
        $categoryCreated = $this->categoryProduct->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => $request->image,
        ]);
        return $categoryCreated;
    }

    public function update($id, $request)
    {
        $categoryProduct = $this->categoryProduct->find($id);

        $categoryProduct->update([
            'name' => $request->name ?? $categoryProduct->name,
            'image' => $request->image ?? $categoryProduct->image,
            'description' => $request->description ?? $categoryProduct->description,
            'slug' => Str::slug($request->name) ?? $categoryProduct->slug
        ]);
        return $categoryProduct;
    }

    public function delete($id)
    {
        $categoryProduct = $this->getById($id);
        $categoryProduct->delete();
        return $categoryProduct;
    }

    public function getAll()
    {
        return $this->categoryProduct->all();
    }

    public function getByid($id)
    {
        return $this->categoryProduct->find($id);
    }

    public function find($id)
    {
        return $this->categoryProduct->find($id);
    }

    function findAllHaveSoftDeletes()
    {
        return $this->categoryProduct->findAllHaveSoftDeletes();
    }
    function getAllPaginate()
    {
        return $this->categoryProduct->paginate(10);
    }
    public function restore($id)
    {
        $categoryProduct = $this->categoryProduct->withTrashed()->find($id);

        if ($categoryProduct && $categoryProduct->trashed()) {
            $categoryProduct->restore();
        }
        $categoryProduct->restore();
    }
}
