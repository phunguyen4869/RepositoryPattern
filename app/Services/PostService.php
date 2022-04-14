<?php
namespace App\Services;

class PostService
{
    public function getPostsCount($data)
    {
        return count($data);
    }
}
