<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'NSIAF') }}</title>
    <!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h3>SISTEMA ADMINISTRATIVO</h3>
        </div>
        <section id="app"></section>

        <script>
        window.Laravel= <?php echo json_encode([
            'csrftoken' => csrf_token(),
        ]);?>
        </script>
        
        <script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>