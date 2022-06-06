<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield("title")</title>

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Noto+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    @yield("head")
</head>

<body>

@include("home.header")

@section('slider')

@show

@yield('content')


@include("home.footer")

@yield('foot')

</body>
</html>
