<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
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
        dd(json_encode($this->data->GetAllStatisticUser()));
        $this->data->GetStatisticRangeTime();
        return view('home', ['data' => $this->data->GetAllStatisticUser()]);
    }
}
