<?php

namespace App\Http\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    private Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    function getAllPaginate()
    {
        return $this->category->paginate(10);
    }

    function getAll()
    {
        return $this->category->all();
    }

    function getById($id)
    {
        return $this->category->find($id);
    }

    function create($request)
    {
        return $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id ?? 0,
            'status' => $request->status ?? 1,
            'description' => $request->description ?? null,
            'image_path' => $request->image_path ?? null,
            'slug' => Str::slug($request->name)
        ]);
    }

    function update($id, $request)
    {
        $category = $this->category->find($id);
        $category->update([
            'name' => $request->name ?? $category->name,
            'parent_id' => $request->parent_id ?? $category->parent_id,
            'status' => $request->status ?? $category->status,
            'image_path' => $request->image_path ?? $category->image_path,
            'description' => $request->description ?? $category->description,
            'slug' => Str::slug($request->name) ?? $category->slug
        ]);
        return $category;
    }

    function delete($id)
    {
        $category = $this->category->find($id);
        $category->update([
            'status' => 3
        ]);
        $category->delete();
    }

    function findAllHaveSoftDeletes()
    {
        return $this->category->findAllHaveSoftDeletes();
    }

    public function restore($id)
    {
        $category = $this->category->withTrashed()->find($id);

        if ($category && $category->trashed()) {
            $category->restore();
            $category->update([
                'status' => 1
            ]);
        }
        $category->restore();
    }

    public function getAllCategoryPublic(int $int)
    {
        return $this->category->where('status', 1)->paginate($int);
    }


}
