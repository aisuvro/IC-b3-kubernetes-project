<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{ $title ?? env('APP_NAME') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/src/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/src/assets/img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" href="{{url('/')}}/src/assets/img/favicon/favicon.ico">

    <!-- Stylesheets -->
    <link href="{{url('/')}}/src/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{url('/')}}/src/assets/css/style.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    {{ $slot }}
<!-- JavaScripts -->
<script src="{{url('/')}}/src/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>