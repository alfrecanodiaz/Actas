<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet" type='text/css'>
    {!! Theme::style('css/bootstrap.min.css') !!}
    {!! Theme::style('css/bootstrap-responsive.min.css') !!}
    {!! Theme::style('css/font-awesome.css') !!}
    {!! Theme::style('css/style.css') !!}
    {!! Theme::style('css/pages/dashboard.css') !!}

    @yield('style')
</head>
<body>

@include('partials.navigation')

@yield('content')

@include('partials.footer')

{!! Theme::script('js/jquery-1.7.2.min.js') !!}
{!! Theme::script('js/excanvas.min.js') !!}
{!! Theme::script('js/chart.min.js') !!}
{!! Theme::script('js/bootstrap.js') !!}
{!! Theme::script('js/full-calendar/fullcalendar.min.js') !!}
{!! Theme::script('js/base.js') !!}

@yield('scripts')

	</div>
</div>

</body>
</html>
