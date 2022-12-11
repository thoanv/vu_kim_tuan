<?php

namespace App\Http\Controllers;

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
        $tienIchs = $this->postRepo->getPostByType('tien_ich', 5);
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
        //
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
