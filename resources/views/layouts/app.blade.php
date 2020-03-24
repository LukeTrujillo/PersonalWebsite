<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luke Trujillo</title>


        <script src="/js/app.js"></script>
        <link href="/css/app.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body id="fixed-background">
        <!--wrapper-->
        <div id="wrapper">
          @component("components.businesscard")
          @endcomponent
          <div class="container" id="main-page">
            @yield("content")
          </div>
        </div>
    </body>
</html>
