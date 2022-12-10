<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepository as PostRepo;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $view = 'admin.posts';
    protected $route = 'posts';
    protected $postRepo;
    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo = $postRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = [];
        return view($this->view.'.index', [
            'posts' => $posts,
            'request'  => $request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view($this->view.'.create', [
            'post' => $post,
            'view' => $this->view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'avatar' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);
        $data = $request->only('name', 'avatar', 'description', 'content', 'type');
        $post = $this->postRepo->create($data);
        $data = [];
        $data['slug'] = Str::slug($request->name).'-'.$post['id'];
        $this->postRepo->update($data, $post['id']);
        return redirect(route($this->route.'.index'))->with('success',  'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
