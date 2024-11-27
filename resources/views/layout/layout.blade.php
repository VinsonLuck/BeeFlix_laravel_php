<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <link rel="icon" href="{{asset('favicon.ico?v=2')}}" type="image/x-icon">
    <title>BeeFlix</title>
</head>
<body>
    @include('components.navbar')
    @yield('content')
</body>
</html>