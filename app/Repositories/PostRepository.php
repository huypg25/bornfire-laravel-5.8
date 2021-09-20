<?php
namespace App\Repositories;

use App\Contracts\PostContract;
use App\Models\Brand;
use App\Models\Post;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class CategoryRepository
 *
 * @package \App\Repositories
 */
class PostRepository extends BaseRepository implements PostContract
{
    use UploadAble;

    /**
     * CategoryRepository constructor.
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listPosts(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findPostById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Brand|mixed
     */
    public function createPost(array $params)
    {
        try {
            $collection = collect($params);

            $image = null;

            if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {
                $image = $this->uploadOne($params['image'], 'posts');
            }

            $merge = $collection->merge(compact('image'));

            $post = new Post($merge->all());

            $post->save();

            return $post;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updatePost(array $params)
    {
        $post = $this->findPostById($params['id']);
//        dd($post->image);
        $collection = collect($params)->except('_token');

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {

            if ($post->image != null) {
                $this->deleteOne($post->image);
            }

            $image = $this->uploadOne($params['image'], 'posts');
        }

        $merge = $collection->merge(compact('post'));

        $post->update($merge->all());

        return $post;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deletePost($id)
    {
        $post = $this->findPostById($id);

        if ($post->image != null) {
            $this->deleteOne($post->image);
        }

        $post->delete();

        return $post;
    }
}
