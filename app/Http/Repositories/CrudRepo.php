<?php


namespace App\Http\Repositories;


use App\Entities\Crud;
use App\Http\Requests\CrudRequest;


class CrudRepo extends BaseRepo {

    public function getModel()
    {
         return new Crud();
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('profile')
            ->paginate($paginate);

        return $qry;
    }


    public function ListAll()
    {
        $qry = $this->model->all();
        return $qry;
    }

    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
                        [
                            'PRIMER DATO' =>    ['data' => 'data1','relation' => null],
                            'SEGUNDO DATO'  =>  ['data' => 'data2','relation' => null],
                            //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
                        ],
                     ];

        return $header;
    }

    public function Crear($data)
    {
        $this->model->create($data->all());
    }

    public function Editar($id = null , $data )
    {
        $qry =  $this->model->find($id);

        $qry->fill($data->all());
        $qry->save();
    }

    public function Borrar($id = null)
    {
        $this->model->find($id)->delete();
    }


    public function Rules()
    {

        return [
            'data1'   => 'required|max:5',
            'data2'   => 'required|max:10'
        ];
    }

}