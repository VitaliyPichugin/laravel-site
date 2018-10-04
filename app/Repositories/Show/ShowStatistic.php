<?php

namespace App\Repositories\Show;


use App\User;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ShowStatistic
{
    private  $user;
    private $relation;

    public function __construct(User $usr)
    {
      $this->user = $usr;
    }

    public function GetAllStatisticUser()
    {
        $user = $this->user->find(Auth::id())->statistics();

        return $this->parseData($user->get());
    }

    public function GetStatisticRangeTime($subDay = 0)
    {
        $query = $this->user->newQuery();

        $today = $query->whereDay('created_at', '=', Carbon::now()
            ->subDay($subDay)
            ->format('d'))
            ->get();

        return $this->parseData($today);
    }

    private function parseData($data)
    {
        $stata = [];

        foreach ($data as $key => $val) {
            $stata[$key]['site_id'] = $val->site_id;
            $stata[$key]['user_agent'] = $val->user_agent;
            $stata[$key]['date_show'] = $val->created_at;
        }

        $data = [
            'name' => $this->user->name,
            'email' => $this->user->email,
            'data' => $stata,
            'count_all_time' => count($stata),
          //  'to_day' => $this->GetStatisticRangeTime(1)
        ];

        return $data;
    }

}