@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">История просмотров</h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($data['count_all_time'])
                            <p>Name: {{$data['name']}}</p>
                            <p>Email: {{$data['email']}}</p>
                            <p>Всего просмотров: {{$data['count_all_time']}}</p>

                            <prop-component datas="{{json_encode($data['data'])}}"></prop-component>


                          {{--  <table class="table table-striped">
                                <tr>
                                    <th>Site ID</th>
                                    <th>User Agent</th>
                                    <th>Date/Time</th>
                                </tr>
                                @foreach($data['data'] as $k => $v)
                                    <tr>
                                        <th>{{$v['site_id']}}</th>
                                        <th>{{$v['user_agent']}}</th>
                                        <th>{{$v['date_show']}}</th>
                                    </tr>
                                @endforeach
                            </table>--}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
