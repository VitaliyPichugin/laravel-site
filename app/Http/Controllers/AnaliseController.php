<?php

namespace App\Http\Controllers;

use App\Repositories\Analytics\IAnalitics;
use App\User;
use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    private $analitics;

    public function __construct(IAnalitics $analitics)
    {
        $this->middleware('auth');

        $this->analitics = $analitics;
    }

    public function execute(Request $request, User $user, $site=null){

        $data_create = [
            'user_id' => $user->id,
            'site_id' => $site,
            'user_agent' => $request->userAgent()
        ];

        $this->analitics->create($data_create);
    }
}
