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
    function create(Request $request)
    {
        $this->blog->create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'slug' => Str::slug($request->title)
        ]);
    }


}
