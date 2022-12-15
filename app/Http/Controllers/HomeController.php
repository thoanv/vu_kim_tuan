<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\SlideRepository as SlideRepo;
use App\Repositories\PostRepository as PostRepo;

class HomeController extends Controller
{
    protected $slideRepo;
    protected $postRepo;
    public function __construct(SlideRepo $slideRepo, PostRepo $postRepo)
    {
        $this->slideRepo = $slideRepo;
        $this->postRepo = $postRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = $this->slideRepo->slides();
        $posts = $this->postRepo->getPostByType();
        $tienIchs = $this->postRepo->getPostByType('tien_ich');
        return view('home', [
            'slides' => $slides,
            'posts'  => $posts,
            'tienIchs'  => $tienIchs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mails = $request->all();
        $mails['time'] = date('H:i d-m-Y', time());
        $send = dispatch(new SendEmail($mails));
        $result = response()->json($send);
        $response = [
            'success' => 200,
            'data' => true,
            'message' => ''
        ];
        return $this->sendResponse($response, 'Success.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = $this->postRepo->detail($slug);
        if(!$post) return abort(404);
        $relates = Post::where([['status', true], ['type', $post['type']], ['id', '<>', $post['id']]])->get();
        return view('detail', [
            'post' => $post,
            'relates' => $relates
        ]);
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
