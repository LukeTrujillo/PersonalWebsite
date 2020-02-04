<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <script src="/js/app.js"></script>
        <link href="/css/app.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      @component("components.banner")
      @endcomponent
      @component("components.navbar")
      @endcomponent
      @component("components.jumbotron")
      @endcomponent


      <div class="container-bg">
        <div class="container">
          @yield("content")
        </div>
      </div>

    </body>
</html>
