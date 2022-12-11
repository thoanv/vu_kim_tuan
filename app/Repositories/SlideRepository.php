<?php
namespace App\Repositories;

use App\Models\Slide;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class SlideRepository extends AbstractRepository
{
    public function model(){
        return Slide::class;
    }
    public function getData($request)
    {
        $query = $this->model;
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%');
        }

        if($request->status == 0 && $request->status !=''){
            $query = $query->where('status', false);
        }
        if($request->status == 1){
            $query = $query->where('status', true);
        }

        return $query->orderBy('id', 'DESC')->paginate(20);
    }

    public function slides()
    {
        return $this->model->where('status', true)->orderBy('id', 'DESC')->get();
    }
}
