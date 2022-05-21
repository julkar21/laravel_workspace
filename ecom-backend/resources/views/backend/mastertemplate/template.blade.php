<!DOCTYPE html>
<html lang="en">
  <head>
   @include('backend.includes.head')

   @include('backend.includes.css')
  </head>

  <body>

  @include('backend.includes.sidebar')

  @include('backend.includes.topbar')


  @include('backend.includes.rightbar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('content')
      
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

  @include('backend.includes.scripts')
  </body>
</html>
