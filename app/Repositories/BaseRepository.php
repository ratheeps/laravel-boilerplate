<?php


namespace App\Repositories;

use App\Contracts\Repositories\Repository;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements Repository
{
    /** @var Model */
    protected $model;

    /**
     * @param Model $model
     */
    public function setModel(Model $model){
        $this->model = $model;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->on()->find($id);
    }

    /**
     * @param array $values
     * @return mixed
     */
    public function create(array $values)
    {
        return $this->model->create($values);
    }

    /**
     * @param $id
     * @param array $values
     * @return mixed
     */
    public function update($id, array $values)
    {
        return $this->model->on()->find($id)->update($values);
    }

    /**
     * @param $id
     * @return bool|mixed|null
     * @throws \Exception
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    /**
     * @return Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function dataTableList()
    {
        return datatables()->of($this->model->query())->toJson();
    }
}
