<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._nav')

    <div class="container">
      @include('partials._messages')
      @yield('content')
      @include('partials._footer')
    </div><!-- /.container -->

    @include('partials._javascripts')

    @yield('scripts')
  </body>
</html>