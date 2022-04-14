<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getPostPerPage();

    /**
     * @return string
     */
    public function getModel();

    /**
     * @return mixed
     */
    public function getAll();
}
