<?php

namespace App\Repositories\Support;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use DateTime;

abstract class AbstractRepository implements InterfaceRepository
{
    const PAGE_SIZE = 30;

    /**
     * @var App
     */
    private $app;


    /**
     * @var
     */
    protected $model;

    /**
     * AbstractRepository constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());
        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }

    /**
     * @param Request $request
     * @param bool $toArray
     * @param array $with
     * @return mixed
     */
    public function all($request, $toArray = false, $with = [])
    {
        $orderBy = is_null($request->get('order_by')) ? 'id' : $request->get('order_by');
        $orderArr = explode(',', $orderBy);
        $sortBy = in_array($request->get('sort_by'), ['asc', 'desc']) ? $request->get('sort_by') : 'desc';
        $searchBy = $request->get('search_by');
        $searchText = $request->get('search_text');
        $searchDate = $request->get('search_date');
        $data = $this->model;

        if (sizeof($with) > 0) {
            $withParams = '';
            foreach ($with as $key => $value) {
                $withParams .= $value;
                if ($key < sizeof($with) - 1) {
                    $withParams .= ',';
                }
            }
            $data = $data->with($withParams);
        }


        foreach ($orderArr as $order) {
            $data = $data->orderBy($order, $sortBy);
        }

        if (!empty($searchBy)) {
            $data = $data->where($searchBy, 'LIKE', "%$searchText%");
        }

        if (!empty($searchDate) && $searchDate != 'all') {
            if ($searchDate == '-1 days') {
                $data = $data->whereBetween('created_at', [(new DateTime('NOW'))->modify($searchDate)->format('Y-m-d 00:00:00'), (new DateTime('NOW'))->modify($searchDate)->format('Y-m-d 23:59:59')]);

            } else {
                $data = $data->whereBetween('created_at', [(new DateTime('NOW'))->modify($searchDate)->format('Y-m-d 00:00:00'), date('Y-m-d 23:59:59', time())]);
            }
        }


        if ($toArray === null) {
            return $data;
        }

        if ($toArray) {
            return $data->paginate(self::PAGE_SIZE)->getCollection()->toArray();
        }

        return $data->paginate(self::PAGE_SIZE);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 20, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }
}
