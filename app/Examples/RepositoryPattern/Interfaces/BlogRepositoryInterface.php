<?php

namespace App\Examples\RepositoryPattern\Interfaces;

interface BlogRepositoryInterface
{
    public function getAll();
    
    public function getBlog($id);

    public function deleteBlog($id);

    public function createBlog(array $attributes);

    public function updateBlog($id, array $attributes);

}
