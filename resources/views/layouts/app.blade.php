<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles/layout.css')}}" rel="stylesheet">

    <title>Dona Rita Salgados</title>
  </head>
  <body id="top">
   
   <div class="container"> 

   {{-- header --}}
  

   {{-- conteudo --}}
   @yield('conteudo')
   
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{asset('js/app.js') }}"></script>
    <script src="{{asset('js/scripts/jquery.min.js') }}"></script>
    <script src="{{asset('js/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{asset('js/scripts/jquery.mobilemenu.js') }}"></script>
   
  </body>
</html>

