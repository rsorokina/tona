<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title>Tona</title>
        <meta name="description" content="Tona Test">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
        
    </head>
    <body>
        @yield('content')
    
        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bower_components/angular/angular.min.js')}}"></script>
        
        <!-- Google Maps JavaScript API -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>        
        <!-- vsGoogleAutocomplete -->
        <script src="{{asset('bower_components/vs-google-autocomplete/dist/vs-google-autocomplete.js')}}"></script>        
        <!-- validator for autocomplete -->
        <script src="{{asset('bower_components/vs-google-autocomplete/dist/vs-autocomplete-validator.js')}}"></script>
        
        <script src="{{asset('scripts/map.js')}}"></script>
    </body>
</html>