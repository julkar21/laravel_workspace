<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bracket.css')}}">
  </head>

  <body>

    @yield('body')

    <script src="{{ asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{ asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

  </body>
</html>
