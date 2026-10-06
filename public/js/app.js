         var mainApp = angular.module("mainApp", ['ngRoute']);
        
		  mainApp.config(['$routeProvider', function($routeProvider) {
            $routeProvider.
            
            when('/viewCountry/:id', {
               templateUrl: 'collections/2.html',
               controller: 'ViewCountryController'
            }).            
            when('/viewStudents', {
               templateUrl: 'collections/2.html',
               controller: 'HomeController'
            }).            
            when('/Home', {
               templateUrl: 'collections/0.html',
               controller: 'HomeController'
            }).            
            when('/viewCompany/:id', {
               templateUrl: 'collections/viewCompany.html',
               controller: 'CompanyController'
            }).            
            when('/viewService/:id', {
               templateUrl: 'collections/viewService.html',
               controller: 'ServiceController'
            }).            
            when('/viewPublic/:id', {
               templateUrl: 'collections/viewPublic.html',
               controller: 'PublicController'
            }).            
            when('/viewReg/:code/:country', {
               templateUrl: 'collections/viewReg.html',
               controller: 'RegController'
            }).            
            when('/viewCity/:region/:country', {
               templateUrl: 'collections/viewCity.html',
               controller: 'CityController'
            }).             
            when('/viewCat/:id', {
               templateUrl: 'collections/viewCat.html',
               controller: 'CatController'
            }).             
            when('/viewPub/:id', {
               templateUrl: 'collections/viewPub.html',
               controller: 'PubController'
            }).            
            when('/viewType/:id', {
               templateUrl: 'collections/viewType.html',
               controller: 'TypeController'
            }).            
            when('/Search', {
               templateUrl: 'collections/Search.html',
               controller: 'SearchController'
            }).             
            when('/Stats', {
               templateUrl: 'collections/Stats.html',
               controller: 'StatsController'
            }).             
            when('/Companies', {
               templateUrl: 'collections/table.html',
               controller: 'CompanyController'
            }).             
            when('/Register', {
               templateUrl: 'back/register1.html',
               controller: 'LoginController'
            }).          
            otherwise({
               //redirectTo: 'collections/0.html'
			 //templateUrl: 'Home.htm',
			   templateUrl: 'collections/0.html',
               controller: 'HomeController'
            });
         }]);
		  
	 mainApp.filter('startFrom', function() {
        return function(input, start) {
         if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
       }
     });
	 
		  
         
         mainApp.controller('ViewCountryController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
			 var country=$routeParams.id;   
			 $scope.country=country;
			   $http.get("db/countries.php").then(function (response) {
				  
				  $scope.countries = response.data.records;
		
				  
			  });
			 
			  $http.get("db/regions2.php?id="+country).then(function (response) {
				  
				 $scope.regions = response.data.records;

			  });
			 
			   $http.get("db/cities2.php?id="+country).then(function (response) {
				  
				 $scope.cities = response.data.records;

			  });  
			 
			 $http.get("https://restcountries.eu/rest/v2/alpha/"+country).then(function (response) {
				  
				 $scope.lang = response.data;
				 
				 
				 $scope.name=response.data.name;
				 $scope.population=response.data.population;
				 $scope.area=response.data.area;
				 
				 $scope.currencies=response.data.currencies;
				 $scope.languages=response.data.languages;

			  });
			 
         }); 
		  
		  mainApp.controller('UserController', function($scope, $http,$routeParams) {
            $scope.message = "Check if the Listing already exist.";
			
			$scope.facebook=$("#facebook_link").val();
			$scope.twitter=$("#twitter_link").val();
			$scope.youtube=$("#youtube_link").val();
			$scope.linkedin=$("#linkedin_link").val();
			$scope.instagram=$("#instagram_link").val();

			  $scope.check = function() {
				 let checkno=$scope.checkno;
										 
				 if(!checkno){
				  //alert(checkno);
				  $scope.company="Please type telephone number.";
				 }
				 else {
					  $http.get("db/ng-controller.php?m=check&ref="+checkno).then(function (response) {				  
				  $scope.company = response.data;	
				  
				  if($scope.company===""){  $scope.company="Company not found";}
							  
			     });
				 }
				
			  }

			$scope.upload=function(){
				$("#upload_rep").html("Please contact us to upgrade your profile.");	
			}

			$scope.new_hour = function(ref) {

			let timez=$scope.days+":"+$scope.times;
			$http.get("db/ng-controller.php?m=hour&ref="+ref+"&time="+timez).then(function (response) {
			}		);	
			$("#hour_rep").html(timez);		location.reload();						  
			//alert(timez);			
			}

			$scope.new_keyword = function(ref) {

			$http.get("db/ng-controller.php?m=word&ref="+ref+"&keyword="+$scope.keywords+"&location="+$scope.location).then(function (response) {
			});	
			$("#word_rep").html($scope.keywords+" in "+$scope.location);	location.reload();						  
			//alert(timez);			
			}

			$scope.social = function(ref) {
				//alert(ref+"-"+$scope.facebook);
				$http.get("db/ng-controller.php?m=social&ref="+ref+"&facebook="+$scope.facebook+"&twitter="+$scope.twitter+"&youtube="+$scope.youtube+"&linkedin="+$scope.linkedin+"&instagram="+$scope.instagram).then(function (response) {
				});	
				$("#social_rep").html("Added "+$scope.facebook+" and other social links."); location.reload();	
						  
				//alert(timez);			
			}
			  
			    $scope.rate = function(no,ref) {
				//  alert(no);
				 $http.get("db/ng-controller.php?m=rate&ref="+ref+"&star="+no).then(function (response) {				  
				  $scope.ratings = response.data;	
				  let star= $scope.ratings.substring(0, $scope.ratings.indexOf(",")); 
				  let reviews= $scope.ratings.substring($scope.ratings.indexOf(",")+1); 
		 

				 $("#review_rep").html(star+" Star,"+reviews+" Reviews");		location.reload();		  
			     });
			  }
			  
			  
			  
			  
			
			 $scope.params = $routeParams;
			 var region=$routeParams.code;   
			 var country=$routeParams.country;   
			 $scope.region=region;
			   $http.get("db/regions.php").then(function (response) {
				  
				  $scope.regions = response.data.records;
		
				
			  });
			 

			   $http.get("db/cities3.php?id="+region+"&c="+country).then(function (response) {
				  
				 $scope.cities = response.data.records;

			  });
			 
         });  
		  
		  mainApp.controller('CityController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
			 var region=$routeParams.region;   
			 var country=$routeParams.country;   
			 $scope.region=region;
			   
			  $http.get("db/cities0.php").then(function (response) {
				  
				 $scope.cities = response.data.records;

			  });
			  
			  $http.get("db/regions3.php?id="+region+"&country="+country).then(function (response) {
				  
				  $scope.regions = response.data.records;
		
				
			  });
			 

			   $http.get("db/countries2.php?id="+country).then(function (response) {
				  
				 $scope.countries = response.data.records;

			  });
			 
         }); 
		 
		   mainApp.controller('CatController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
			 var id=$routeParams.id;   
			 //var country=$routeParams.country;   
			 $scope.cat=id;
			   
			  $http.get("db/categories.php").then(function (response) {
				  
				 $scope.categories = response.data.records;

			  });
			  

			   $http.get("db/companies1.php?id="+id).then(function (response) {
				  
				 $scope.companies = response.data.records;

			  });
			 
         }); 
		  
	mainApp.controller('PubController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
			 var id=$routeParams.id;   
			 //var country=$routeParams.country;   
			 $scope.cat=id;
			   
			  $http.get("db/sectors.php").then(function (response) {
				  
				 $scope.sectors = response.data.records;

			  });
			  

			   $http.get("db/companies2.php?id="+id).then(function (response) {
				  
				 $scope.companies = response.data.records;

			  });
			 
         });   
		 
		  	mainApp.controller('TypeController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
			 var id=$routeParams.id;   
			 //var country=$routeParams.country;   
			 $scope.cat=id;
			   
			  $http.get("db/biztypes.php").then(function (response) {
				  
				 $scope.biztypes = response.data.records;

			  });
			  

			   $http.get("db/companies3.php?id="+id).then(function (response) {
				  
				 $scope.companies = response.data.records;

			  });
			 
         });  
		  
		  mainApp.controller('SearchController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
	
			   $http.get("db/companies.php").then(function (response) {
				  
				 $scope.companies = response.data.records;

			  });
			  
			   $http.get("db/biztypes.php").then(function (response) {
				  
				 $scope.biztypes = response.data.records;

			  });
			  
			  $http.get("db/sectors.php").then(function (response) {
				  
				 $scope.sectors = response.data.records;

			  });
			  
			  $http.get("db/categories.php").then(function (response) {
				  
				 $scope.categories = response.data.records;

			  });
			  
			 $http.get("db/regions.php").then(function (response) {
				  
				  $scope.regions = response.data.records;
		
				
			  });
			  
			  
			  
			 
         });   
		  

   mainApp.controller('StatsController', function($scope, $http,$routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			 $scope.params = $routeParams;
	
			   $http.get("db/companies.php").then(function (response) {
				  
				 $scope.companies = response.data.records;

			  });
			  
			   $http.get("db/biztypes.php").then(function (response) {
				  
				 $scope.biztypes = response.data.records;

			  });
			  
			  $http.get("db/sectors.php").then(function (response) {
				  
				 $scope.sectors = response.data.records;

			  });
			  
			  $http.get("db/categories.php").then(function (response) {
				  
				 $scope.categories = response.data.records;

			  });
			  
			 $http.get("db/regions.php").then(function (response) {
				  
				  $scope.regions = response.data.records;
		
				
			  });
			  
			  
			  
			 
         });   
		  
		  mainApp.controller('CompanyController',  function($scope, $http, $routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			$scope.params = $routeParams;
			var company=$routeParams.id;   
			 
			$scope.id=$routeParams.id; 
			$scope.hasservices=false;  
			$scope.hasprojects=false;  
			 $http.get("db/companies.php").then(function (response) {
				  
				 $scope.companies = response.data.records;
				   
				  angular.forEach($scope.companies, function(value, key){
                  if(value.id == $routeParams.id){
			 
				   $scope.name=value.name;				  
				   $scope.email=value.email;				  
				   $scope.contact=value.contact;				  
				   $scope.website=value.website;				  
				   $scope.about=value.about;				  
				   $scope.email=value.email;				  
				   $scope.address=value.address;				 		  
				   $scope.facebook=value.facebook;				  
				   $scope.twitter=value.twitter;				  
				   $scope.google=value.google;				  
				   $scope.instagram=value.instagram;				  
				   $scope.youtube=value.youtube;				  
				   $scope.logo=value.logo;				  
				   $scope.ad1=value.ad1;				  
                   //alert(value.youtube+" ");
				   
				  }
                 });
				 
				 
	
				  
			  });  
			  
			  	  
			 $http.get("db/services2.php?id="+company).then(function (response) {
				  
				 $scope.services = response.data.records;
				
				 $scope.hasservices= $scope.services.length;
				 
		  $("#myTable1").DataTable( {
            pagingType: "full_numbers",
            processing : true,
            data: 	 $scope.services,
            order: [[ 0, "desc" ]],
            columns:
         [
          { data:null, render: function ( data, type, row ) {
               return "<a href='#viewService/"+data.id+"'><img src='"+data.url+"' style='height:50px;width:100px;' ></a>";
            }},
          { data: "name" },
          { data: "description" },
          { data: "value" }
		
         ]
      } );  

			  });
			   
	
			 $http.get("db/projects2.php?id="+company).then(function (response) {
				  		
				 $scope.projects = response.data.records;
			
				 $scope.hasprojects= $scope.projects.length;			
			  });
			  
			  
         });
		  
		  
		  mainApp.controller('ServiceController',  function($scope, $http, $routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			$scope.params = $routeParams;
			var service=$routeParams.id;   
			 
			 $scope.id=$routeParams.id; 
     
			 $http.get("db/services.php").then(function (response) {
				  
				 $scope.services = response.data.records;
				   
				  angular.forEach($scope.services, function(value, key){
                  if(value.id === service){
			 
				   $scope.name=value.name;				  
				   $scope.value=value.value;				  
				   $scope.biz=value.biz;				  
				   $scope.candidate=value.candidate;				  
				   $scope.description=value.description;				  
				   $scope.url=value.url;				  
				   $scope.status=value.status;
				  }
                 });	 

//		 $("#myTable11").DataTable( {
//            pagingType: "full_numbers",
//            processing : true,
//            data: 	 $scope.services,
//            order: [[ 0, "desc" ]],
//            columns:
//         [
//          { data:null, render: function ( data, type, row ) {
//               return "<a href='#viewService/"+data.id+"'><img src='"+data.url+"' style='height:50px;width:100px;' ></a>";
//            }},
//          { data: "name" },
//          { data: "description" },
//          { data: "value" }
//		
//         ]
//      } ); 
	
			  });  
	  
			  
         });  
		  
	 mainApp.controller('PublicController',  function($scope, $http, $routeParams) {
            $scope.message = "This page will be used to display add student form";
			 
			$scope.params = $routeParams;
			var public=$routeParams.id;   
			 
			$scope.id=$routeParams.id; 
  
			 $http.get("db/public.php").then(function (response) {
				  
				 $scope.public = response.data.records;
				   
				  angular.forEach($scope.public, function(value, key){
                  if(value.id === public){
			 
				   $scope.name=value.name;				  
				   $scope.value=value.value;				  
				   $scope.biz=value.biz;				  
				   $scope.candidate=value.candidate;				  
				   $scope.description=value.description;				  
				   $scope.url=value.url;				  
				   $scope.status=value.status;
				  }
                 });
				 
				 			 
		  $("#myTable2").DataTable( {
            pagingType: "full_numbers",
            processing : true,
            data: 	  $scope.public,
            order: [[ 0, "desc" ]],
            columns:
         [
          { data:null, render: function ( data, type, row ) {
               return "<a href='#viewPublic/"+data.id+"'><img src='"+data.url+"' style='height:50px;width:100px;' ></a>";
            }},
          { data: "name" },
          { data: "description" },
          { data: "value" }
		
         ]
      } );  
				  
			  });  

			  
         });
         
         mainApp.controller('ViewStudentsController', function($scope, $http) {
            $scope.message = "This page will be used to display all the students";
			  
			 $http.get("db/currencies.php").then(function (response) {
				  
				  $scope.currencies = response.data.records;
				 // alert("hello student");
							  
			  });
         });
		  
		 mainApp.controller('LoginController', function($scope, $http) {
            $scope.message = "This page will be used to display all the students";
			  

		
			 $http.get("db/age.php").then(function (response) {
				  
				  $scope.age = response.data.records;
				 
							  
			  });	
			 
			$http.get("db/race.php").then(function (response) {
				  
				  $scope.race = response.data.records;
				 
							  
			  });
			 
			 $scope.email="";
			 $scope.password="";
			 $scope.error = '';
			   $scope.Login = function() {
				   
				  	 
				   
      if($scope.email ==='' || $scope.password==='') {
		  
		          $scope.error = "Enter username/password !";
      
      } else {
		  
		  
		  	  $http.get("db/Login.php?email="+$scope.email+"&password="+$scope.password+"").then(function (response) {
		
				  $scope.profile = response.data.records;
				  	 
				  if($scope.profile.length===0)
					  {
						   $scope.error = "Wrong username/password !";
					  }
				  else if($scope.profile[0].status==="Business")
					  {
						 window.location="back/index.html";
					
					  }
				  if($scope.profile[0].status==="Candidate")
					  {
						  window.location="back/index.html"; 
					  }
							  
			  });
 

     }   
    };
		
		   $scope.Register = function() {

$http.get("db/Register.php?fullname="+$scope.fullname+"&username="+$scope.username+"&password="+$scope.password+"&contact="+$scope.contact+"&agegroup="+$scope.agegroup+"&racegroup="+$scope.racegroup+"&status="+$scope.status).then(function (response) {
		
				  $scope.profile = response.data.records;
				  var index= $scope.profile.length; 
                
				  if(index==0)
					  {
						   $("#report").html("Error on registration");
						   $scope.error="Error on registration";
					  }
				  else
					  {
						 $("#report").html("Success on registration, now login");
					     $scope.error="Success on registration, now login";
					  }
						  
			  });

    };
    
     // });
		  
         });
		 
		 mainApp.controller('HomeController', function($scope,$http) {
            $scope.message = "Welcome Home";
			 
		    $scope.start=0; $scope.limit=10;
			  
			
			 $http.get("db/currencies.php").then(function (response) {
				  
				  $scope.currencies = response.data.records;
				 
							  
			  }); 
			 
			  $http.get("db/countries.php").then(function (response) {
				  
				  $scope.countries = response.data.records;
				  
				  angular.forEach($scope.countries, function(value, key){
                  if(value.iso === "ZA"){
					  				  
                   //alert(value.name+" "+value.iso3+" "+value.phonecode);
				  
				  }
                 });
				  
			  }); 
			 
			   $http.get("db/categories.php").then(function (response) {
				  
				  $scope.categories = response.data.records;
				  
			  });  
			 
			 $http.get("db/public.php").then(function (response) {
				  
				  $scope.publications = response.data.records;
				  
			  });  
			
			 $http.get("db/ads.php").then(function (response) {
				  
				  $scope.ads = response.data.records;
				  
			  });
			 
			 $http.get("db/cities.php").then(function (response) {
				  
				  $scope.cities = response.data.records;
				  
			  }); 
			 
			   $http.get("db/sectors.php").then(function (response) {
				  
				  $scope.sectors = response.data.records;
				  
			  });   
			 
			 $http.get("db/services.php").then(function (response) {
				  
				  $scope.services = response.data.records;
				  
			  }); 
			 
			   
			 
			 $http.get("db/regions.php").then(function (response) {

				  $scope.regions = response.data.records;
			  });
			 
			  $http.get("db/biztypes.php").then(function (response) {

				  $scope.biztypes = response.data.records;
			  });
			 
			 $http.get("db/companies.php").then(function (response) {
				  
				 $scope.companies = response.data.records;
				   
				  angular.forEach($scope.companies, function(value, key){
                  if(value.status === "default"){
				   $scope.email=value.email;				  
				   $scope.address=value.address;				  
				   $scope.website=value.website;				  
				   $scope.contact=value.contact;				  
				   $scope.facebook=value.facebook;				  
				   $scope.twitter=value.twitter;				  
				   $scope.google=value.google;				  
				   $scope.instagram=value.instagram;				  
				   $scope.youtube=value.youtube;				  
				   $scope.logo=value.logo;				  
                   //alert(value.youtube+" ");
				   
				  }
                 });
				  
			  });  
			 
			
			 
         });
		  
		
