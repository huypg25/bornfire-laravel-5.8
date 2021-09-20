<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\PostContract;
use App\Http\Controllers\BaseController;

class PostController extends BaseController
{
    /**
     * @var PostContract
     */
    protected $postRepository;

    /**
     * CategoryController constructor.
     * @param PostContract $postRepository
     */
    public function __construct(PostContract $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->postRepository->listPosts();

        $this->setPageTitle('Posts', 'List of all posts');
        return view('admin.posts.index', compact('posts'));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Posts', 'Create Post');
        return view('admin.posts.create');
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $post = $this->postRepository->createPost($params);

        if (!$post) {
            return $this->responseRedirectBack('Error occurred while creating post.', 'error', true, true);
        }
        return $this->responseRedirect('admin.posts.index', 'Post added successfully' ,'success',false, false);
    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post = $this->postRepository->findPostById($id);
        $this->setPageTitle('Post', 'Edit Post : '.$post->name);
        return view('admin.posts.edit', compact('post'));
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $post = $this->postRepository->updatePost($params);

        if (!$post) {
            return $this->responseRedirectBack('Error occurred while updating post.', 'error', true, true);
        }
//        return $this->responseRedirectBack('Post updated successfully' ,'success',false, false);
        return $this->responseRedirect('admin.posts.index', 'Post updated successfully' ,'success',false, false);

    }
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $post = $this->postRepository->deletePost($id);

        if (!$post) {
            return $this->responseRedirectBack('Error occurred while deleting post.', 'error', true, true);
        }
        return $this->responseRedirect('admin.posts.index', 'Post deleted successfully' ,'success',false, false);
    }
}
