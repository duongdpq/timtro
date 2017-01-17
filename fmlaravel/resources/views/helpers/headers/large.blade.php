<div class="header header-large">
    <div class="container">
        <div class="header-inner">
            <div class="header-top hidden-xs">
                <ul class="nav nav-pills social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="nav nav-pills">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div><!-- /.header-top -->

            <div class="header-main">
                <div class="header-title">
                    <a href="{{{ route('landing', null, false) }}}">
                        {{ HTML::image('assets/img/logo.png', 'Realsite') }}

                        <span>Realsite</span>
                    </a>
                </div><!-- /.header-title -->

                <div class="header-search">
                    <form method="post" action="?">
                        <div class="input-group">
                            <input type="text" placeholder="Search properties" class="form-control">

                            <span class="input-group-btn">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /.form-group -->
                    </form>
                </div><!-- /.header-search -->
            </div><!-- /.header-main -->

            <div class="header-navigation">
                @include('helpers.navigations.main', array(
                    'active' => 'home',
                ))
            </div><!-- /.header-navigation -->

            <a class="header-action" href="{{{ route('property-submit')}}}" title="Add New Property">
                <i class="fa fa-plus"></i>
            </a><!-- /.header-action -->
        </div><!-- /.header-inner -->
    </div><!-- /.container -->
</div><!-- /.header-->
