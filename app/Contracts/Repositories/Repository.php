<?php


namespace App\Contracts\Repositories;


interface Repository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param array $values
     * @return mixed
     */
    public function create(array $values);

    /**
     * @param $id
     * @param array $values
     * @return mixed
     */
    public function update($id, array $values);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function all();

    /**
     * @return mixed
     */
    public function dataTableList();
}
