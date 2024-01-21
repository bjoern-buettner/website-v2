<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdateBlogPostRequest;
use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Inertia\Response;
use Throwable;

class BlogController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->authorizeResource(Blog::class, 'blog');
    }

    public function index(): Response
    {
        return Inertia::render(
            'Blog/Index',
            [
                'blogs' => Blog::query()->orderBy('created_at')->get()
            ]
        );
    }

    public function create(): Response
    {
        return Inertia::render('Blog/Create');
    }

    public function store(StoreBlogPostRequest $request)
    {
        //
    }

    public function show(Blog $blog): Response
    {
        return Inertia::render(
            'Blog/Show',
            [
                'blog' => $blog
            ]
        );
    }

    public function edit(Blog $blog): Response
    {
        return Inertia::render('Blog/Edit', ['blog' => $blog]);
    }

    public function update(UpdateBlogPostRequest $request, Blog $blog)
    {
        //
    }

    /**
     * @throws Throwable
     */
    public function destroy(Blog $blog): void
    {
        $blog->deleteOrFail();
    }

    public function forceDelete(Blog $blog): void
    {
        $blog->forceDelete();
    }
}
