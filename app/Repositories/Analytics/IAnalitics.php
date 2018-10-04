<?php

namespace App\Repositories\Analytics;


interface IAnalitics
{
    public function getAll();

    public function getById($id);

    public function create(array $attr);

    public function update($id, array $attr);

    public function delete($id);
}