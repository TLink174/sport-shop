<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use App\Http\Services\TagService;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{

    private BlogService $blogService;
    private CategoryService $categoryService;
    private TagService $tagService;

    public function __construct(BlogService $blogService, CategoryService $categoryService, TagService $tagService)
    {
        $this->blogService = $blogService;
        $this->categoryService = $categoryService;
        $this->tagService = $tagService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        $blogs = $this->blogService->getAllHasSoftDeletes()->paginate(10);
        return view('admin.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $tags = $this->tagService->getAll();
        $categories = $this->categoryService->getAll();
        return view('admin.pages.blog.create', compact(['categories','tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->blogService->create($request);
        $tags = $this->tagService->getAll();
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $blog = $this->blogService->findHasSoftDeletes($id);
        $tags = $this->tagService->getAll();
        $categories = $this->categoryService->getAll();
        return view('admin.pages.blog.edit', compact(['blog', 'categories', 'tags']));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id , UpdateCategoryRequest $request)
    {
        $this->blogService->update($id, $request);
        return redirect()->route('admin.blogs.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->blogService->delete($id);
        return redirect()->route('admin.blogs.index');
    }
    public function restore($id)
    {
        $this->blogService->restore($id);
        return redirect()->route('admin.blogs.index');
    }

}
