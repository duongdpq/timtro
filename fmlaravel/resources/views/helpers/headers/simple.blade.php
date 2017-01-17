<div class="header header-minimal primary">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-main">
                    <div class="header-title">
                        <a href="{{{ route('landing', null, false) }}}">
                            {{ HTML::image('assets/img/logo.png', 'Realsite') }}

                            <span>Realsite</span>
                        </a>
                    </div><!-- /.header-title -->

                    <div class="header-navigation">
                        @include('helpers.navigations.main', array(
                            'active' => 'home',
                        ))
                    </div><!-- /.header-navigation -->
                </div><!-- /.header-main -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</div><!-- /.header-->
