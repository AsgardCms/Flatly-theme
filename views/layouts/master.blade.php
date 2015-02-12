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
    {!! Theme::style('css/main.css') !!}
    <?php else: ?>
    {!! Theme::style('css/main.css') !!}
    <?php endif; ?>
</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

<?php if (App::environment() == 'local'): ?>
{!! Theme::script('js/all.js') !!}
<?php else: ?>
{!! Theme::script('js/all.js') !!}
<?php endif; ?>
@yield('scripts')
</body>
</html>
