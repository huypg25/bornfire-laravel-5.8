<?php
namespace App\Contracts;

/**
 * Interface BrandContract
 * @package App\Contracts
 */
interface PostContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listPosts(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findPostById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createPost(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updatePost(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deletePost($id);
}
