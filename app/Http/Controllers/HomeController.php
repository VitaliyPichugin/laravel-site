<?php

namespace App\Http\Controllers;

use App\Repositories\Show\ShowStatistic;

class HomeController extends Controller
{
    private $data;

    public function __construct(ShowStatistic $stat)
    {
        $this->data = $stat;

        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function getAjax()
    {
        return $this->data->GetAllStatisticUser(\Auth::user());
    }
}
