<!DOCTYPE html> 
<html> 
<head> 
<title> Advanced Search </title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> 
</head> 
<body ng-app="myApp" ng-controller="ChatGPTController"> 
<div class="container"> 
<div class="mt-5 card"> 
<h3 class="p-3 card-header"> Advanced Search </h3> 
<div class="card-body"> 

<style>
    .what_span {
       background-color:black;color:white; 
    }
</style>
    
<form method="POST" action="/searchgpt"> 

    @csrf
    
<table style="width:80%">
    {{-- <tr>
        <td>
           
    <div class="form-group"> 
    <label><strong>What?</strong></label> 
    <input type="text" name="what" id="what_" class="form-control" ng-model="search.what" ng-keyup="onKeyUp('what')"/> 

    
        <div ng-bind="what_data">
          <b ng-repeat="item in what_data" class="what_span">@{{ item }} <br/></b> <br/>
        </div>
   
      
     
    </div> 

        </td>
        <td>
                
    <div class="form-group"> 
    <label><strong>Where?</strong></label> 
    <input type="text" name="where" id="where_" class="form-control" ng-model="search.where" ng-keyup="onKeyUp('where')"/> 

    <div ng-bind="where_data">
        <b ng-repeat="item in where_data">@{{ item }} <br/></b> 
    </div>

    </div> 



    
        </td>
    </tr>


    <tr> --}}
        <td>

            <div class="form-group"> 
                <label><strong>Search?</strong></label> 
                <input type="text" name="search" id="search_" class="form-control" ng-model="search.search" ng-keyup="onKeyUp('search')"/> 
            
                <div ng-bind="search_data">
                    <b ng-repeat="item in search_data">@{{ item }} <br/></b> 
                </div>
            
                </div> 

        </td>   

    </tr>








</table>    

<div class="mt-2 form-group"> 
<button type="submit" class="btn btn-success">Submit</button> 
</div> 
</form> 

@if(!empty($result)) 
<div class="mt-5"> 
<strong>Result:</strong><br/> 
{!! nl2br($result) !!} 
</div> 
@endif 

</div> 
</div> 
</div> 

{{-- <div>
    <button ng-click="getCompleteWhat()">Fetch Data</button>
    <pre>@{{ data | json }}</pre>
</div> --}}

</body> 

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

<script>
var app = angular.module('myApp', []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('@{').endSymbol('}');
});

app.controller('ChatGPTController', function($scope, $http) {
    $scope.search = { what: '', where: '' };
    // $scope.data ='';
    $scope.onKeyUp = function(field) {
        // console.log(field + ' changed: ', $scope.search[field]);

        if($scope.search[field].length>=3){
            // alert(field + ' input: ' + $scope.search[field]);

            if(field=="what") {
                $http.get("/complete_what/"+$scope.search[field]).then(function(response) {
                $scope.what_data = response.data;
                console.log($scope.what_data);
                // alert($scope.data);

                // $("#report_data").html(JSON.stringify($scope.data));

            }, function(error) {
                console.error('Error fetching data:', error);
            });

            }  else if(field=="search") {

                $http.get("/advanced_search/"+$scope.search[field]).then(function(response) {
                $scope.search_data = response.data;
                console.log($scope.search_data);
                // alert($scope.data);

                // $("#report_data").html(JSON.stringify($scope.data));

            }, function(error) {
                console.error('Error fetching data:', error);
            });

            } else {

                $http.get("/complete_what/"+$scope.search[field]).then(function(response) {
                $scope.where_data = response.data;
                console.log($scope.where_data);
                // alert($scope.data);

                // $("#report_data").html(JSON.stringify($scope.data));

            }, function(error) {
                console.error('Error fetching data:', error);
            });

            }
     

        }
        
    };

    $scope.getCompleteWhat = function() {
        $scope.apiUrl = '/complete_what/doctor'; // Replace with actual backend URL
        $scope.data = {};

        $http.get($scope.apiUrl).then(function(response) {
            $scope.data = response.data.split(",");
            console.log($scope.data);
        }, function(error) {
            console.error('Error fetching data:', error);
        });
    };






});
</script>

</html>
