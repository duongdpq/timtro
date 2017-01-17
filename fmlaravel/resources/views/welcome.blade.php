@extends('layouts.sidebar')

@section('title')
    Search Header
@stop

@section('main-top')
@include('helpers/properties/map')
@stop

@section('main-bottom')
<div class="container">
    @include('helpers/misc/partners')
</div>
@stop

@section('content')
@include('...helpers.properties.box', array(
'title' => 'Recent Properties',
))

@include('helpers.misc.promotion')

@include('helpers.properties.carousel')

@include('helpers.misc.features-3-cols-icons')

@stop

@section('sidebar')
@include('helpers.agents.widget-best')

@include('helpers.misc.widget-newsletter')

@include('helpers.misc.widget-menu')

@include('helpers.properties.widget-recent')
@stop


