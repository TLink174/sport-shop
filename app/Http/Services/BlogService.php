<?php

namespace App\Http\Services;

use App\Models\Blog;
use Illuminate\Support\Str;

class BlogService
{
    private Blog $blog;
    private TagService $tagService;

    public function __construct(Blog $blog, TagService $tagService)
    {
        $this->blog = $blog;
        $this->tagService = $tagService;
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
       $blogCreated =   $this->blog->create([
            'title' => $request->title,
            'content' => $request->content,
            'id_category' => $request->id_category,
            'id_user' => auth()->user()->id,
            'slug' => Str::slug($request->title),
            'image_path' => $request->image_path,
            'status' => $request->status??2,
            'image_avatar' => $request->image_avatar??null,
            'description' => $request->description??null,
        ]);
        $tagIds = $this->tagService->createMultipleTags($request->tags);
        $blogCreated->tags()->attach($tagIds);
    }
    function getAllHasSoftDeletes()
    {
        return $this->blog->getAllHasSoftDeletes();
    }
    function findHasSoftDeletes($id)
    {
        return $this->blog->findHasSoftDeletes($id);
    }

    public function update($id, $request)
    {
        $blog = $this->blog->find($id);
        $blog->update([
            'title' => $request->title ?? $blog->title,
            'content' => $request->content ?? $blog->content,
            'id_category' => $request->id_category ?? $blog->id_category,
            'id_user' => auth()->user()->id,
            'slug' => Str::slug($request->title) ?? $blog->slug,
            'image_path' => $request->image_path ?? $blog->image_path,
            'status' => $request->status ?? $blog->status,
            'image_avatar' => $request->image_avatar ?? $blog->image_avatar,
            'description' => $request->description ?? $blog->description,
        ]);
        $tagIds = $this->tagService->createMultipleTags($request->tags);
        $blog->tags()->sync($tagIds);
        return $blog;
    }

    public function delete($id)
    {
        $blog = $this->blog->find($id);
        $blog->update([
            'status' => 3
        ]);
        $blog->delete();
    }

    public function restore($id)
    {
        $blog = $this->blog->withTrashed()->find($id);

        if ($blog && $blog->trashed()) {
            $blog->restore();
            $blog->update([
                'status' => 2
            ]);
        }
        $blog->restore();
    }
    public function getAllBlogPublic($limit)
    {
        return $this->blog->getAllBlogPublic($limit);
    }

    public function getBlogById($id)
    {
        return $this->getById($id);
    }


}
