
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>
    @yield('title')
    </title>
</head>
<body>
<main role="main" class="container">
    @include('layouts.partials.header')
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/movies/create">Create movie</a>         
        </nav>
        
      </div>
      <div class="row">
        <div class="col-md-8 blog-main">       
        @yield('storyline')
   </div>
        <aside>
        @include('layouts.partials.sidebar')
        </aside>
          </div>      
        @include('layouts.partials.footer')
        </main>
    </body>
</html>
    