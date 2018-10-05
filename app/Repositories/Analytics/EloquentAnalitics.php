<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 02.10.18
 * Time: 17:08
 */

namespace App\Repositories\Analytics;

use App\Statistic;

class EloquentAnalitics implements IAnalitics
{
    public function getAll()
    {
        return Statistic::all();
    }

    public function getById($id)
    {
        return Statistic::findById($id);
    }

    public function create(array $attr)
    {
        try {
            Statistic::create($attr);
        } catch(\Throwable $e) {
            return false;
        }

        return true;
    }

    public function update($id, array $attr)
    {
        return Statistic::findOrFail($id)
            ->update($attr);
    }

    public function delete($id)
    {
        Statistic::findOrFail($id)
            ->delete();
   }
}