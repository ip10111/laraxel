<?php

namespace Xilouet\Laraxel\Contracts;

interface BaseRepositoryInterface
{
    public function all();

    public function store(array $data);
    
    public function find(array $id);
    
    public function update($id, array $data);
    
    public function delete($id);
}