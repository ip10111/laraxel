<?php

namespace Xilouet\Laraxel\Abstracts;

use Xilouet\Laraxel\Contracts\BaseRepositoryInterface;

abstract class AbstractRepository implements BaseRepositoryInterface 
{
    protected $model;
    
    public function all($start=0, $limit=20, $order='id', $dir='DESC')
    {
        return $this->model->offset($start)->limit($limit)->orderBy($order,$dir)
            ->paginate($limit);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function find(array $where, $start=0, $limit=20, $order='id', $dir='desc')
    {
        $model = $this->model;
        
        // $this->addSearch($model, $where);
        $model->where(['name', 'LIKE', '%siap%']);

        dd($model->offset($start)->limit($limit)->orderBy($order,$dir)->get());

        return $model->offset($start)->limit($limit)->orderBy($order,$dir)->get();
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->fill( $data )->save();
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    protected function getModel()
    {
        return $this->model;
    }

    public function total($filter=null)
    {
        $model = $this->model;

        if (isset($filter)) $this->addSearch($model, $filter);
        
        return $model->count();
    }

    protected function addSearch(&$model, $where)
    {
        $first = true;
        
        foreach ($where as $field => $search) {
            if ($first === true) {
                $model->where($field,'LIKE',"%{$search}%");
                $first = false;
                continue;
            } 
            $model->orwhere('name','LIKE',"%{$search}%");
        }

    }

}