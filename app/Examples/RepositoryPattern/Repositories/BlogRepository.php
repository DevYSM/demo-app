<?php

namespace App\Examples\RepositoryPattern\Repositories;

use App\Examples\RepositoryPattern\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;

class BlogRepository implements BlogRepositoryInterface
{

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return Blog::all();
    }

    public function getBlog($id): Blog
    {
        return Blog::findOrFail($id);
    }

    public function deleteBlog($id)
    {
        Blog::destroy($id);
    }

    public function createBlog(array $attributes)
    {
        return Blog::create($attributes);
    }

    public function updateBlog($id, array $attributes): bool
    {
        return Blog::findOrFail($id)->update($attributes);
    }
}
