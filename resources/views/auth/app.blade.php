
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') </title>
{{--    <title>INSPINIA | Login</title>--}}

{{--    <link href="css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}



<link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
<link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

{{--    <link href="css/animate.css" rel="stylesheet">--}}
{{--    <link href="css/style.css" rel="stylesheet">--}}

</head>

<body class="gray-bg">
<!-- Main view  -->
@yield('content')



<!-- Mainly scripts -->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show
</body>

</html>

