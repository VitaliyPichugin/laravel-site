<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 02.10.18
 * Time: 17:08
 */

namespace App\Repositories\Analytics;

use App\Statistic;
use Illuminate\Support\Facades\DB;

class EloquentAnalitics extends DB implements IAnalitics
{
    private $model;

    public function __construct(Statistic $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {

        return $this->model->all();
    }

    public function getById($id)
    {
        return Statistic::findById($id);
       // return $this->model->findById($id);
    }

    public function create(array $attr)
    {
        $this->model->fill($attr);

        if($this->model->save()) return true;
    }

    public function update($id, array $attr)
    {
        $res = $this->model->findOrFile($id);

        $res->update($attr);

        return $res;
    }

    public function delete($id)
    {
        $task = Statistic::findOrFail($id);
        $task->delete();

         return true;
    }
}