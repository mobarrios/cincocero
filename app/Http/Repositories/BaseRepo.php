<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:39
 */

namespace App\Http\Repositories;


abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($datos)
    {

        //return $this->model->create($datos->request->all());

        $model = new $this->model();
        $model->fill($datos->all());
        $model->save();

        //$this->createCustom($datos);

        return $model;

    }

    public function edit($id, $datos)
    {

        $model = $this->model->find($id);
        $model->fill($datos->all());
        $model->save();
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();
    }

    public function ListAll()
    {
        $qry = $this->model->all();
        return $qry;
    }
}