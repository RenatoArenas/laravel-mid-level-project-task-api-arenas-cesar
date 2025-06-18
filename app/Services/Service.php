<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Service
{
    protected Model $model;

    public function setModel(Model $model)
    {
        $this->model = $model;

        return $this;
    }

    public function getModel()
    {
        return $this->model;
    }
}