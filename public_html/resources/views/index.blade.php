@extends('layouts.master')

@section('content')
<div class="container">

        <!-- start: Block Map -->
            <div ng-controller="mapCtrl">
                <h2>Maps Directions</h2>
                <div class="row">
                    <div class="col-md-4">
                        <form>
                            <input 
                                vs-google-autocomplete="options"
                                vs-autocomplete-validator
                     
                                ng-model="place"
                                
                                type="text" 
                                class="form-control"  
                                name="place"
                                
                            />
                            
                        </form>
                    </div>
                    <div class="col-md-8" ng-init="init()">
                        <div class="help-block"><b>From: </b>@{{place}}</div>
                        <div class="help-block"><b>To: </b><span ng-bind="centername"></span></div>
                    </div>
                </div>
                <br /><br />
                <div class="row" ng-show="place">
                    <div class="col-md-12">
                        
                        <div class="row">
                            <div class="col-md-6" ng-repeat="(key, center) in regionCenters">
                                <a href="" ng-click="showMap(center)">из @{{place}} @{{ center.to }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br />
                <div class="row" ng-show="centername" >
                    <div class="col-md-12 gmap" style="height: 400px;"></div>
                </div>
            
            </div>
            <br /><br />
         <!-- end: Block - Map -->   
         </div>
@endsection