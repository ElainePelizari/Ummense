 
@extends('layouts.app')

@section('content')
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Produtos</div>

                    <div class="panel-body table-responsive">
                        <router-view name="productsIndex"></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection