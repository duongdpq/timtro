@extends('layouts.sidebar')

@section('title')
    Submit Property
@stop

@section('content')
    <h1 class="page-header">Đăng tin mới</h1>

    @include('helpers/properties/submit')
@stop

@section('sidebar')
    @include('helpers/properties/widget-enquire')

    @include('helpers/agents/widget-best')

    @include('helpers/misc/widget-newsletter')

    @include('helpers/misc/widget-filter')
@stop

