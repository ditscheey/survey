@extends('partials.app')
@section('head-style')
    style="background: url({{asset('img/pattern.png')}});"
@stop
@section('header')
    @include('partials.nav')
@stop
@section('sidenav')
    <li><a href="{{route('customer.show', $customer)}}">Zurück zu Übersicht</a></li>
    <li><a href="{{route('customer.iteration.index', $customer)}}">Alle Iterationen</a></li>
    <li><a href="{{route('customer.iteration.facility.index', [$customer, $iteration])}}">Alle Standorte</a></li>
    <li><a href="{{route('customer.iteration.facility.group.index', [$customer, $iteration, $facility])}}">Alle Gruppen</a></li>
    <li><a href="{{route('customer.iteration.facility.group.child.index', [$customer, $iteration, $facility, $group])}}">Alle Kinder</a></li>
    <li class="uk-parent">
        <a href="#">Hilfe zu diesem Fenster</a>
        <ul class="uk-nav-sub">
            <li><p></p></li>
        </ul>
    </li>
@stop
@section('content')
    <div class="uk-container uk-container-center">
        <form class="uk-panel uk-panel-box uk-form" method="POST" action="{{route('customer.iteration.facility.group.child.store', [$customer, $iteration, $facility, $group])}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <fieldset>
                <legend>Neues Kind</legend>
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <input class="uk-width-1-1 uk-form-large" type="text" name="name" placeholder="Name">
                        <p class="uk-form-help-block uk-text-danger">{{$errors->first('name')}}</p>
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-width-1-1 uk-form-large" type="email" name="email" placeholder="Email-Adresse">
                        <p class="uk-form-help-block uk-text-danger">{{$errors->first('email')}}</p>
                    </div>
                </div>
            </fieldset>
            <div class="uk-form-row uk-margin-top">
                <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Erstellen</button>
            </div>
        </form>
@stop