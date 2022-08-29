<?php

namespace App\Http\Services;

use App\Models\Blog;
use Illuminate\Support\Str;

class BlogService
{
    private Blog $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }
    function getAllPaginate()
    {
        return $this->blog->paginate(10);
    }
    function getAll()
    {
        return $this->blog->all();
    }
    function getById($id)
    {
        return $this->blog->find($id);
    }
    function create($request)
    {
        $this->blog->create([
            'title' => $request->title,
            'content' => $request->content,
            'id_category' => $request->id_category,
            'id_user' => auth()->user()->id,
            'slug' => Str::slug($request->title),
            'image_path' => $request->image_path,
            'status' => $request->status??1,
            'image_avatar' => $request->image_avatar??null,
            'description' => $request->description??null,
        ]);
    }
    function getAllHasSoftDeletes()
    {
        return $this->blog->getAllHasSoftDeletes();
    }
    function findHasSoftDeletes($id)
    {
        return $this->blog->findHasSoftDeletes($id);
    }


}
