@extends('layouts.master')

@section('main')
        @include('helpers.headers.standard')

    <div class="main">
        @yield('main-top')

        <div class="container">
            <div class="content">
                @yield('content')
            </div><!-- /.content -->
        </div><!-- /.container -->

        @yield('main-bottom')
    </div><!-- /.main -->
            @include('helpers.footers.3columns')
@stop
