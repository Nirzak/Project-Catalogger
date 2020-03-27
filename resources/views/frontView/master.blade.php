<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Project Directory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('css')
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  @include('frontView.inc.header')

  @yield('mainContent')
  
  @include('frontView.inc.footer')
  </div>
    @yield('js')
  </body>
</html>