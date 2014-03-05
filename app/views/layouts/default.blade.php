<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comment board for bootstrap</title>
    @include('_partials._asset_css')
    @include('_partials._asset_ie')
    @yield('asset-css')
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Cover</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Home</a></li>
              </ul>
            </div>
          </div>
          @include('_partials/_noty_contain')
          <div class="inner cover">
            @yield('main')
          </div>

        </div>

      </div>

    </div>
    @include('_partials._asset_js')
    @yield('asset-js')
  </body>
</html>
