<?php
namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class PostRepository extends AbstractRepository
{
    public function model(){
        return Post::class;
    }
    public function getData($request)
    {
        $query = $this->model;
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%')
                ->orWhere('phone', 'like', '%' . $request->name . '%')
                ->orWhere('code', $request->name);
        }
        if($request->type){
            $query = $query->where('type', $request->type);
        }
        if($request->status == 0 && $request->status !=''){
            $query = $query->where('status', false);
        }
        if($request->status == 1){
            $query = $query->where('status', true);
        }

        return $query->orderBy('id', 'DESC')->paginate(20);
    }

    public function getPostByType($tpe = 'bai_viet', $take = 4)
    {
        return $this->model->where([['status', true], ['type', $tpe]])->take($take)->get();
    }

    public function detail($slug)
    {
        return $this->model->where([['status', true], ['slug', $slug]])->first();
    }
}
