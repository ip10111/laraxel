<?php

namespace Xilouet\Laraxel\Abstracts;

use Xilouet\Laraxel\Contracts\CrudServiceInterface;

abstract class AbstractService implements CrudServiceInterface
{
    protected $repository;

    public function index()
    {
        return $this->repository->all();
    }

    public function store(array $data)
    {
        return $this->repository->store($data);
    }

    public function find($id)
    {
        if (! is_array($id)) $data = [$id];
        return $this->repository->find($id);
    }

    public function update($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}