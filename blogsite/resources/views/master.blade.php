<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/examples/blog/blog.css">
</head>
<body>
    
    @include('partials.navbar')


    
    
    <main class="container">
      
        @yield('slider')
        <div class="row g-5">

        <div class="col-md-8">
            @yield('content')
        </div>
    
        <div class="col-md-4">
            @include('partials.sidebar')
        </div>
    
    </main>
    
    @include('partials.footer')
  </body>
</html>