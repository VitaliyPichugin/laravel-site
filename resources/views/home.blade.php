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
                        <div id="app">
                            <header >
                                <nav class="nav">
                                    <button  @click="switchView('table')" class="btn btn-info switch-view" >View 1</button>
                                    <button  @click="switchView('grid')" class="btn btn-info switch-view" >View 2</button>
                                </nav>
                            </header>

                           <ajax-grid-component></ajax-grid-component>
                          {{-- <ajax-table-component></ajax-table-component>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
<script>
    import AjaxGridComponent from "../js/components/AjaxGridComponent";
    export default {
        components: {AjaxGridComponent}
    }
</script>--}}
