<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    <?php if (App::environment() == 'local'): ?>
    {!! Theme::style('css/dist/bootstrap.min.css') !!}
    {!! Theme::style('css/dist/prism.css') !!}
    {!! Theme::style('css/dist/bootswatch.css') !!}
    <?php else: ?>
    {!! Theme::style('css/dist/dist/all.min.css') !!}
    <?php endif; ?>
</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

<?php if (App::environment() == 'local'): ?>
{!! Theme::script('js/dist/jquery.min.js') !!}
{!! Theme::script('js/bootstrap.min.js') !!}
{!! Theme::script('js/prism.js') !!}
<?php else: ?>
{!! Theme::script('js/dist/all.min.js') !!}
<?php endif; ?>
@yield('scripts')
</body>
</html>
