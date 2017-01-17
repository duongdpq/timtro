@extends('layouts.master')

@section('main')
   
        @include('helpers.headers.standard')

    <div class="main">
        @yield('main-top')

        <div class="container">
            <div class="row">
                <div class="content col-sm-8 col-md-9">
                    @yield('content')
                </div><!-- /.content -->

                <div class="sidebar col-sm-4 col-md-3">
                    @yield('sidebar')
                </div><!-- /.sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        @yield('main-bottom')
    </div><!-- /.main -->
        @include('helpers.footers.3columns')
@stop
