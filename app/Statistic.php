<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    //
    protected $fillable = ['user_id', 'site_id', 'user_agent'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
