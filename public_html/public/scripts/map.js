var app = angular.module('app', ['vsGoogleAutocomplete']);

app.controller('mapCtrl', function($scope, $http) {
    $scope.options = {
      types: ['(cities)'],
      componentRestrictions: { country: 'UA' }
    }
    
    $scope.init = function() {
        $scope.regionCenters = [{}];
        $http.post('centers')
            .then(function(response) {
                    $scope.regionCenters  = response.data;
        })
        
    }
    
    
    $scope.showMap = function(center) {    
        
        $scope.centername = center.name + ', Украина';
        
        var mapOptions = {
                zoom: 14,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false, //zoom on scroll
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var container = $('.gmap')[0];
        var map = new google.maps.Map(container, mapOptions);        
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var directionsService = new google.maps.DirectionsService();
        
    
        var request = {
            origin: $scope.place, //start
            destination: $scope.centername, //finish
            travelMode: 'DRIVING'
        };
        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
            }
        });
        directionsDisplay.setMap(map);  
    }
    
       
});