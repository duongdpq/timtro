<div class="header header-standard">
   <div class="header-topbar">
       <div class="container">
           <div class="header-topbar-left">
               <ol class="breadcrumb">
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Properties</a></li>
                   <li class="active">Wardrobe Street</li>
               </ol>
           </div><!-- /.header-topbar-left -->

           <div class="header-topbar-right">
               <ul class="header-topbar-links">
                   <li><a href="#"><img src="{{ URL::asset('assets/img/flags/fr.png') }}" alt="French"> French</a></li>
                   <li><a href="#"><img src="{{ URL::asset('assets/img/flags/de.png') }}" alt="Deutsch"> Deutsch</a></li>
               </ul><!-- /.header-topbar-links -->

               <ul class="header-topbar-social ml30">
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               </ul><!-- /.header-topbar-social -->
           </div><!-- /.header-topbar-right -->
       </div><!-- /.container -->
   </div><!-- /.header-topbar -->

   <div class="container">
       <div class="header-inner">
           <div class="header-main">
               <div class="header-title">
                   <a href="#">
                       {{ HTML::image('assets/img/logo.png', 'TimTro') }}

                       <span>TimTro</span>
                   </a>
               </div><!-- /.header-title -->

               <div class="header-navigation">
                   @include('helpers.navigations.main', array(
                       'active' => 'home',
                   ))
               </div><!-- /.header-navigation -->
           </div><!-- /.header-main -->

           <a class="header-action" href="" title="Add New Property">
               <i class="fa fa-plus"></i>
           </a><!-- /.header-action -->
       </div><!-- /.header-inner -->
   </div><!-- /.container -->
</div><!-- /.header-->
