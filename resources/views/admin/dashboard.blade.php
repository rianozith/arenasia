<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arenasia | </title>

    @yield('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/dashboard')}}" class="site_title"><i class="fa fa-soccer-ball-o"></i> <span>Arenasia</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{url('images/riano128.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.include.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            {{-- @include('admin.include.footerbutton') --}}
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.include.topnavigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @include('admin.include.toptiles')
          <!-- /top tiles -->


          {{-- isi kontent dengan class row--}}
          @yield('content')
          {{-- end isi kontent --}}

          


        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.include.footer')        
        <!-- /footer content -->
      </div>
    </div>

        @yield('js')
  </body>
</html>