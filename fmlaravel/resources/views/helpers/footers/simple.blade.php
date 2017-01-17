<div id="footer" class="footer footer-simple">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-inner">
                <div class="row">
                    <div class="widget col-sm-3">
                        <h2>Headers</h2>

                        <nav>
                            <ul class="nav nav-stacked">
                                <li><a href="{{{ str_replace('/', '', route('header-google-map', null, false)) }}}">Google Map</a></li>
                                <li><a href="{{{ str_replace('/', '', route('header-search', null, false)) }}}">Search Property</a></li>
                                <li><a href="{{{ str_replace('/', '', route('header-chart', null, false)) }}}">NVD3 Chart</a></li>
                                <li><a href="{{{ str_replace('/', '', route('header-call-to-action', null, false)) }}}">Call to Action</a></li>
                                <li><a href="{{{ str_replace('/', '', route('header-simple', null, false)) }}}">Simple &amp; Minimal</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="widget col-sm-3">
                        <h2>Footers</h2>

                        <nav>
                            <ul class="nav nav-stacked">
                                <li><a href="{{{ str_replace('/', '', route('footer-minimal', null, false)) }}}#footer">Minimal</a></li>
                                <li><a href="{{{ str_replace('/', '', route('footer-navigation', null, false)) }}}#footer">Navigation</a></li>
                                <li><a href="{{{ str_replace('/', '', route('footer-simple', null, false)) }}}#footer">Simple</a></li>
                                <li><a href="{{{ str_replace('/', '', route('footer-4columns', null, false)) }}}#footer">4 Columns</a></li>
                                <li><a href="{{{ str_replace('/', '', route('footer-3columns', null, false)) }}}#footer">3 Columns</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="widget col-sm-3">
                        <h2>Properties</h2>

                        <nav>
                            <ul class="nav nav-stacked">
                                <li><a href="{{{ str_replace('/', '', route('property-detail', null, false)) }}}">Detail Page</a></li>
                                <li><a href="{{{ str_replace('/', '', route('property-row', null, false)) }}}">Row Display</a></li>
                                <li><a href="{{{ str_replace('/', '', route('property-grid', null, false)) }}}">Grid</a></li>
                                <li><a href="{{{ str_replace('/', '', route('property-table', null, false)) }}}">Table Listing</a></li>
                                <li><a href="{{{ str_replace('/', '', route('property-medium', null, false)) }}}">Medium Size</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="widget col-sm-3">
                        <h2>Admin</h2>

                        <nav>
                            <ul class="nav nav-stacked">
                                <li><a href="{{{ str_replace('/', '', route('admin-login', null, false)) }}}">Login</a></li>
                                <li><a href="{{{ str_replace('/', '', route('admin-dashboard', null, false)) }}}">Dashboard</a></li>
                                <li><a href="{{{ str_replace('/', '', route('admin-property-browser', null, false)) }}}">Property Browser</a></li>
                                <li><a href="{{{ str_replace('/', '', route('admin-map', null, false)) }}}">Google Map</a></li>
                                <li><a href="{{{ str_replace('/', '', route('admin-people', null, false)) }}}">People</a></li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.footer-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="footer-bottom-left">
                    &copy; <?php echo date('Y'); ?> Realsite - Material Real Esteate Template. All rights reserved.
                </div><!-- /.footer-bottom-left -->

                <div class="footer-bottom-right">
                    Created by <a href="http://byaviators.com">Aviators</a>
                </div><!-- /.footer-bottom-right -->
            </div><!-- /.footer-bottom-inner -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</div><!-- /.footer -->
