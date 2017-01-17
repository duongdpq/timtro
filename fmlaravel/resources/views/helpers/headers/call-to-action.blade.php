<div class="header header-standard header-call-to-action-wrapper">
    <div class="relative">
        <div class="blur header-background overflow-hidden"></div>

        <div class="header-background-inner">

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

                    <div class="header-call-to-action">
                        <h1>Real Estate Material Design Template</h1>
                        <h2>
                            Ut aliquam sed mauris id sodales. Nulla suscipit, tellus et posuere ornare, lectus tellus volutpat odio, quis laoreet mi enim quis arcu. Curabitur at commodo turpis, at tempus tellus. Duis non quam ut lorem hendrerit dapibus sit amet id quam.
                        </h2>

                        <div class="buttons">
                            <a href="#" class="btn btn-lg">The agents</a>
                            <a href="#" class="btn btn-lg">The agencies</a>
                            <a href="#" class="btn btn-lg">The users</a>
                        </div><!-- /.buttons -->
                    </div><!-- /.header-call-to-action -->
                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-background-inner-->
    </div><!-- /.relative -->
</div><!-- /.header-->
