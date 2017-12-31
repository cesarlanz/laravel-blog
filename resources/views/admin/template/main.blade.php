<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Default') | Panel de Administración</title>

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/chosen/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css') }}" rel="stylesheet">

  </head>
  <body>
    @include('admin.template.partials.nav')
    <section>
      @include('flash::message')
      @include('admin.template.partials.errors')
      @yield('content')
    </section>


    <script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>

    @yield('js')

  </body>
</html>