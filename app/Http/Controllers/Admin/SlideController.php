<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Repositories\SlideRepository as SlideRepo;

class SlideController extends Controller
{
    protected $view = 'admin.slides';
    protected $route = 'slides';
    protected $slideRepo;
    public function __construct(SlideRepo $slideRepo)
    {
        $this->slideRepo = $slideRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $slides = $this->slideRepo->getData($request);
        return view($this->view.'.index', [
            'slides' => $slides,
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
        $slide = new Slide();
        return view($this->view.'.create', [
            'slide' => $slide,
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
        ]);
        $data = $request->only('name', 'avatar');
        $post = $this->slideRepo->create($data);
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
    public function edit(Slide $slide)
    {
        return view($this->view.'.update', [
            'slide' => $slide,
            'view' => $this->view,
        ]);
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
        $request->validate([
            'name' => 'required',
            'avatar' => 'required',
        ]);
        $data = $request->only('name', 'avatar');
        $post = $this->slideRepo->update($data, $id);
        return redirect(route($this->route.'.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->back()->with('success','Xóa thành công');
    }
}
