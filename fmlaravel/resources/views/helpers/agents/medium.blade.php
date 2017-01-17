<div class="row">
    @for ($i = 0; $i < 2; $i++)
    <div class="col-sm-12 col-md-6">
        <div class="agent-medium">
            <a class="agent-medium-image" href="#">
                <img src="{{{ URL::asset('assets/img/tmp/agents/male.jpg') }}}" alt="">
            </a><!-- /.agent-medium-image -->

            <div class="agent-medium-content">
                <h2 class="agent-medium-title">Caelan Sinclair</h2>
                <div class="agent-medium-subtitle">13 properties</div><!-- /.agent-medium-subtitle -->
                <hr>
                <ul>
                    <li><i class="fa fa-phone"></i> 0123 123 123</li>
                    <li><i class="fa fa-at"></i> <a href="">E-mail address</a></li>
                    <li><i class="fa fa-globe"></i> <a href="http://example.com">example.com</a></li>
                </ul>
            </div><!-- /.agent-medium-content -->
        </div><!-- /.agent-medium -->
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="agent-medium">
            <a class="agent-medium-image" href="#">
                <img src="{{{ URL::asset('assets/img/tmp/agents/female.jpg') }}}" alt="">
            </a><!-- /.agent-medium-image -->

            <div class="agent-medium-content">
                <h2 class="agent-medium-title">Caelan Sinclair</h2>
                <div class="agent-medium-subtitle">13 properties</div><!-- /.agent-medium-subtitle -->
                <hr>
                <ul>
                    <li><i class="fa fa-phone"></i> 0123 123 123</li>
                    <li><i class="fa fa-at"></i> <a href="">E-mail address</a></li>
                    <li><i class="fa fa-globe"></i> <a href="http://example.com">example.com</a></li>
                </ul>
            </div><!-- /.agent-medium-content -->
        </div><!-- /.agent-medium -->
    </div>
    @endfor
</div><!-- /.row -->
