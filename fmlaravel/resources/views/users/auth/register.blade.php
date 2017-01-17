@extends('layouts.no-sidebar')

@section('title')
Register
@stop

@section('content')
<div class="col-sm-4 col-sm-offset-4">
    <h2 class="page-header center">Register Form</h2>

    <div class="box">
        <form method="post" action="?">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail">
            </div><!-- /.form-group -->

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div><!-- /.form-group -->

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Retype Password">
            </div><!-- /.form-group -->

            <button type="submit" class="btn">Register</button>
        </form>
    </div><!-- /.box -->
</div><!-- /.col-* -->
@stop

