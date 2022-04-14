<?php
namespace App\Repositories\Post;

use App\Models\Post;
use Illuminate\Support\Carbon;
use App\Repositories\EloquentRepository;
use App\Repositories\Post\PostRepositoryInterface;

class PostRepository extends EloquentRepository implements PostRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    /**
     * Get all posts
     * @return mixed
     */
    public function getAll()
    {
        return $this->_model->all();
    }

    /**
     * Get 10 posts per page
     * @return mixed
     */
    public function getPostPerPage()
    {
        return $this->_model->paginate(10);
    }
}
