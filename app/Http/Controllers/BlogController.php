<?php

namespace App\Http\Controllers;

use App\Examples\RepositoryPattern\Interfaces\BlogRepositoryInterface;
use App\Http\Resources\BlogResource;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    private BlogRepositoryInterface $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            data: [
                'data' => BlogResource::collection($this->blogRepository->getAll())
            ]
        );
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $attributes = $request->only(['title', 'description', 'content', 'user_id']);
        $attributes['slug'] = Str::slug($attributes['title']);

        return response()->json(
            data: ['data' => $this->blogRepository->createBlog($attributes)],
            status: Response::HTTP_CREATED
        );
    }

    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->route('id');
        return response()->json(
            data: ['data' => $this->blogRepository->getBlog($id)]
        );
    }

    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->route('id');
        $attributes = $request->only(['title', 'description', 'content']);
        return response()->json(
            data: ['data' => $this->blogRepository->updateBlog($id, $attributes)]
        );
    }

    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->route('id');
        $this->blogRepository->deleteBlog($id);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
