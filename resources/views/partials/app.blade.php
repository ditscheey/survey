<!DOCTYPE html>
<html @yield('head-style')>
<head>
    @section('title')<title>Survey-X</title>@show
    <link rel="stylesheet" href="{{ elixir("css/all.css") }}" />
    <script src="{{ elixir("js/all.js") }}"></script>
    @yield('head')
</head>
<body>
@yield('header')
@if($errors->has('page'))
    <div class="uk-container uk-container-center">
        <div class="uk-alert uk-alert-danger">
            <a href="" class="uk-alert-close uk-close"></a>
            <p>{{$errors->first('page')}}</p>
        </div>
    </div>
@endif
<div class="uk-grid">
    <div class="uk-width-1-4 uk-conatiner-center">
            <div class="uk-panel uk-panel-box uk-margin-large-left uk-margin-bottom">
                <ul class="uk-nav uk-nav-side" data-uk-nav>
                    @yield('sidenav')
                </ul>
            </div>
    </div>
    <div class="uk-width-3-4">@yield('content')</div>
</div>

@yield('footer')
</body>
