<?php

namespace Xilouet\Laraxel\Contracts;

use Illuminate\Foundation\Http\FormRequest;

interface CrudServiceInterface
{
    public function index();

    public function store(array $request);

    public function find($id);

    public function update($id, array $request);

    public function delete($id);
}