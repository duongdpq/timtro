<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>

<link href="{{ url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ url('public/admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{ url('public/admin/css/styles.css')}}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
            @include('flash::message')
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form  action="{{ route('admin-login') }}" role="form" method="POST" >
                    {!! csrf_field() !!}
                        <fieldset>
                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}">
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <input type="submit" class="btn btn-primary btn-submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->    
    
        

    <script src="{{ url('public/admin/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ url('public/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('public/admin/js/chart.min.js')}}"></script>
    <script src="{{ url('public/admin/js/chart-data.js')}}"></script>
    <script src="{{ url('public/admin/js/easypiechart.js')}}"></script>
    <script src="{{ url('public/admin/js/easypiechart-data.js')}}"></script>
    <script src="{{ url('public/admin/js/bootstrap-datepicker.js')}}"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>  
    <script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script> 
</body>

</html>
