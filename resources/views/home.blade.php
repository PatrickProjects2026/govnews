<!DOCTYPE html>
<html lang="en">
    @include('partials.header')

    
<?php 

$backColor="#0054a6";  //#00a1d4;

$amount="0";

if(isset(Session::get('user')[0]->company)){
    $amount="1995";
} else {
    $amount="0";
}

// print_r(Session::get('user'));

// echo Session::get('user')[0]->company;

?>

<style>

/* Refine the scope to only target DataTables pagination buttons */
.dataTables_wrapper .dataTables_paginate .paginate_button {
  padding: 0; /* Remove inner spacing */
  width: 30px; /* Set a fixed width */
  height: 25px; /* Optional: Set a consistent height */
  font-size: 12px; /* Optional: Adjust font size for readability */
  text-align: center; /* Center align the text */
  line-height: 25px; /* Match line-height to height for centering */
  border: 1px solid #ddd; /* Add a border for better visibility */
  border-radius: 4px; /* Optional: Rounded corners */
  background-color: #f9f9f9; /* Light background */
  color: #333; /* Text color */
  margin: 2px; /* Space between buttons */
}



</style>
    
        <body>

        <div class="container" ng-app="Home" ng-controller="HomeController">

        <br/>


        

<button type="button" class="btn btn-default btn-sm mobile_icon" id="mobile_icon" onclick="menu()">
<span class="glyphicon glyphicon-menu-hamburger"></span>  
</button>

<button onclick="menu()" style="opacity:0;">
.
</button>  

<script>
  function menu(){
  // alert("click") ;
  $(".mobile_menu").slideToggle(); 
  }
</script>  

        

  <!-------------------------Header------------------------->
  @include('partials.menu')
  <!-------------------------Header------------------------->

        
        <!------------------------------------  slide 1 ------------------------------------->
        @include('partials.slide')
        <!------------------------------------  slide 1 ------------------------------------->

        <!-------------------------Header------------------------->

        <br/> <br/>
  
  <style>
  
  .cat table td:nth-child(1){
   width:60px;
  }
  

  .cat table td:nth-child(2){
    /* border:solid 1px silver; */
    width:200px; 
  }
  
  </style>


  <!------------------------------------------ads-------------------------------------------------->


  <div class="row">
    <div class="col-md-3">

      <h4  style="color:{{$backColor}}"><b>Select Industry</b></h4>
       
      @foreach ($categories_government as $catz)
        
      <div class="cat">
        <a href="/company_by_cat/{{$catz->id}}">
        <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:49px;"/> <span class="glyphicon glyphicon-{{$catz->icon}}"></span> </td><td style="">{{$catz->name}}</td> <!-- <td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td> --></tr></table>     
        </a>
      </div>
      
      @endforeach
      
      


    <br/>
  <h4><a href="/Pages/Videos"  style="color:{{$backColor}}"> <b>  Find a Business </b> </a> </h4>
  <br/>
    @foreach ($biz_cats as $catz)

    <div class="cat" style="width:100%;">
        <a href="/company_bybiz_category/{{$catz->id}}">
        <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:49px;"/> <span class="glyphicon glyphicon-{{$catz->icon}}"></span> </td><td style="">{{$catz->name}}</td> <!-- <td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td> --></tr></table>     
        </a>
    </div>
  


  @endforeach
 

      

    </div>

    <style> 
      hr { 
        border-bottom:solid 1px silver;margin:3px;

      }
      .more a{
        color:#222;padding-right:30px;
      }
    </style>

    <div class="col-md-6 more"  >
     
      <!-------------------------------------------results--------------------------------------------------->
      @include('partials.xtra_menu')

    <hr/>

 <br/>

  

{{--  
    <h4  style="margin-bottom:20px;color:{{$backColor}};"><b>More {{$main_cat}} </b></h4>
   
    <div class="row">
    <?php $num=0; ?>
    @foreach($sub_cat as $cat_)
      @if($num<6)
        <?php $num++; ?>
         <div class="col-md-6">
          <div class="cat">
            <a href="/search_sub/{{$cat}}/{{$cat_->name}}">
            <table><tr><td> <img src="{{URL::asset('indu.png')}}"/></td><td style="width:68%">  {{$cat_->name}}</td><td style="text-align:right;padding-right:10px;">{{rand(251,500)}}</td></tr></table>     
            </a>
          </div>
        </div>
      @endif
    @endforeach
       

    </div>   --}}

   



    
    <h4  style="margin-bottom:20px;color:{{$backColor}};"><b>Featured {{$main_cat}} </b></h4>


    <div> 


      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
      
      
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
      
      <style>
      
          .ad_search{
              padding:10px;margin:0px;width:98%;border:solid 1px silver;
          }
      
          .ad_search select {
              height:30px;border:solid 1px silver;padding-left:10px;
          }
      </style>
      
      
      


      
      
      <div class="ng-scope">
      
      
           <!------------------------------- advanced filers ------------------------------------>
           {{-- <div class="ad_search">
              <div>
                
      
                    <select ng-model="category" ng-change="search(alphabet,category,province,date,limit)" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                        <option value="0" selected="selected"> ⯆ CATEGORY </option>
                        <option ng-repeat="cat in cats" value="@{{cat.id}}" class="ng-binding ng-scope"> @{{cat.name}} </option>                      
                    </select>
      
                    <select ng-model="province" ng-change="search(alphabet,category,province,date,limit)" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                      <option value="0" selected="selected"> ⯆ PROVINCE </option>
                      <option value="3238"> Eastern Cape </option>
                      <option value="3239"> Free State </option>
                      <option value="3240"> Gauteng  </option>
                      <option value="3243"> KwaZulu Natal  </option>
                      <option value="3244"> Limpopo  </option>
                      <option value="3245"> Mpumalanga  </option>
                      <option value="3246"> North West  </option>
                      <option value="3247"> Northern Cape  </option>
                      <option value="3251"> Western Cape  </option>
                  </select>
                    
                
                   
                    <select ng-model="alphabet" ng-change="search(alphabet,category,province,date,limit)" class="ng-pristine ng-valid ng-not-empty ng-touched">
                      <option value="0" selected="selected"> ⯆  A-Z </option>
                      <option value="A"> A </option>
                      <option value="B"> B </option>
                      <option value="C"> C </option>
                      <option value="D"> D </option>
                      <option value="E"> E </option>
                      <option value="F"> F </option>
                      <option value="G"> G </option>
                      <option value="H"> H </option>
                      <option value="I"> I </option>
                      <option value="J"> J </option>
                      <option value="K"> K </option>
                      <option value="L"> L </option>
                      <option value="M"> M </option>
                      <option value="N"> N </option>
                      <option value="O"> O </option>
                      <option value="P"> P </option>
                      <option value="Q"> Q </option>
                      <option value="R"> R </option>
                      <option value="S"> S </option>
                      <option value="T"> T </option>
                      <option value="U"> U </option>
                      <option value="V"> V </option>
                      <option value="W"> W </option>
                      <option value="X"> X </option>
                      <option value="Y"> Y </option>
                      <option value="Z"> Z </option>
                    </select>
              
      
              </div>
      
      
          </div>   --}}
      <!------------------------------- advanced filters ------------------------------------>
          <br>
      
      
      
          
          <br>
 
      
          
      </div>


      
      
      
      </div>




      <!-------------------------------------------------------data table------------------------------------------------------>

     
     
          {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
          <!-- Include DataTables CSS -->
          {{-- <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"> --}}
     
      
      {{-- <div class="container mt-4"> --}}

        {{-- @{{companies}} --}}
        <table id="companiesHome2" class="table table-bordered table-striped" ng-app="Home" ng-controller="HomeController">
          <thead>
              <tr>
                  <th>Logos</th>
                  <th>Company Name</th>
                  <th>Contacts</th>
              </tr>
          </thead>
          <tbody>
              {{-- <tr ng-repeat="company in companies">
                  <td>
                      <img class="shadow_point" style="height:auto;width:120px;border:solid 1px silver;" 
                           ng-src="http://cdn.adslive.com/@{{ company.logos }}" 
                           alt="@{{ company.name }} Logo">
                  </td>
                  <td>
                      <a style="color:#00a1d4; font-weight:bold" 
                         href="/company/@{{ company.id }}">
                         @{{ company.name }}
                      </a>
                  </td>
                  <td>
                      <a style="color:#706e6e" href="tel:+27@{{ company.telephone }}">
                         @{{ company.telephone }}
                      </a>
                  </td>
              </tr> --}}
          </tbody>
      </table>
      

      
        
          <table id="companiesHome" class="table table-bordered table-striped" style="font-size:12px;">
              <thead>
                  <tr>
                      <th>Logo</th>
                      <th>Company Name</th>
                      <th>Contacts</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($companies as $company)
                      <tr>
                          <td>
                              <img class="shadow_point" style="height:auto;width:98px;border:solid 1px silver;" 
                                   src="http://cdn.adslive.com/{{ $company->logos }}" 
                                   alt="{{ $company->name }} Logo">
                          </td>
                          <td>
                              <a style="color:{{$backColor}}; font-weight:bold" 
                                 href="/company/{{ $company->id }}">
                                 {{ $company->name }}
                              </a>
                          </td>
                          <td>
                              <a style="color:#706e6e" href="tel:+27{{ $company->telephone }}">
                                {{ explode(",",$company->telephone)[0] }}
                              </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>

          
      {{-- </div> --}}


      

      
<script>
  var app = angular.module('Home', []);
  
  app.controller('HomeController', function($scope, $http) {

    $http.get("/cats")
              .then(function(response) {
              $scope.cats = response.data; 
    });
    
    // ----------------------------------------------------------- advanced search----------------------------------------------------------------
  
              $('#companiesHome2').hide(); 
         
              $scope.category  = '0';
              $scope.province  = '0';
              $scope.alphabet  = '0';
              $scope.date      = '0';
              $scope.limit     = '150';
              $scope.companies = [];
  
              $scope.search_title="";
  
              $scope.search = function(alphabet, category, province,date, limit) {


              $('#companiesHome').hide();  
              $("#companiesHome_wrapper").hide();
  
                  $http.get("/advanced_search/" + alphabet + "/" + category + "/" + province+ "/" + date+ "/" + limit)
                      .then(function(response) {
                        
                          $('#companiesHome2').show(); 
                          $scope.companies = response.data;

  const tableBody = document.querySelector("#companiesHome2 tbody");
  tableBody.innerHTML="";
  
  $scope.companies.forEach((company) => {
    const row = document.createElement("tr");

    row.innerHTML = `
        <td>
          <img class="shadow_point" style="height:auto;width:98px;border:solid 1px silver;" 
                                   src="http://cdn.adslive.com/${company.logos}" 
                                   alt="${company.name} Logo">
        </td>
        <td> <a style="color:#00a1d4; font-weight:bold" 
                         href="/company/${ company.id }">
                         ${ company.name }
                      </a></td>
        <td>  <a style="color:#706e6e" href="tel:+27${ company.telephone }">
                         ${ company.telephone }
        </a></td>
    `;

  
    tableBody.appendChild(row);
});

  
                          // Check if DataTable is already initialized
                          if ($.fn.DataTable.isDataTable('#companiesHome2')) {
                              // Destroy DataTable before reinitializing
                              $('#companiesHome2').DataTable().destroy();
                          }
  
                          // Reinitialize DataTable after AngularJS updates the DOM
                          setTimeout(function() {
                                        $('#companiesHome2').DataTable({
                                        "pageLength": 5,         // Number of rows per page
                                        "lengthMenu": [5, 10, 25, 50, 100],
                                        "ordering": true,        // Enable sorting
                                        "searching": true,       // Enable search box
                                        "responsive": true       // Make the table responsive
                                        });
                          }, 0);
                          
                      }).catch(function (error) {
                          console.error("Error fetching data:", error);
                          // alert("An error:"+error);
                      });
                      
              };









       $scope.click_back=function(text){
        // alert(text);
        $("#whatQuery2").val(text);
       }

       $scope.search_back=function(){
        let text=$("#whatQuery2").val();
        window.location='/search/'+text;
       }
      
      $("#whatSuggestions").hide();
      $("#whereSuggestions").hide();

      
  
      // Function to calculate Levenshtein distance
      function levenshtein(a, b) {
          var tmp, i, j, alen = a.length, blen = b.length, row, d = [];
          if (alen === 0) { return blen; }
          if (blen === 0) { return alen; }
          for (i = 0; i <= blen; i++) { d[i] = [i]; }
          for (j = 0; j <= alen; j++) { d[0][j] = j; }
          for (i = 1; i <= blen; i++) {
              row = d[i] = [i];
              for (j = 1; j <= alen; j++) {
                  tmp = (a[j - 1] === b[i - 1]) ? 0 : 1;
                  row[j] = Math.min(row[j - 1] + 1, Math.min(d[i - 1][j] + 1, d[i - 1][j - 1] + tmp));
              }
          }
          return row[alen];
      }
  
      // Function to get closest matches from dictionary
      function getClosestMatches(input, dictionary) {
          return dictionary.map(word => ({
              word,
              distance: levenshtein(input, word)
          })).sort((a, b) => a.distance - b.distance)
            .slice(0, 5)  // Limit to top 5 closest matches
            .map(item => item.word);
      }
  
      $("#whatQuery2").keyup(function() {
  
       
        
        // $("#whereSuggestions").hide();
  
          let text = $(this).val();
          if (text.length >= 3) {
             
            $("#whatSuggestions").show();
  
            // alert(text);
  
              $http.get('/get_cat/' + text)
                  .then(function(response) {
                      $scope.Items = response.data;
                  })
                  .catch(function(error) {
                      console.error('Error fetching:', error);
                  });
  
                  $http.get('/call_words/' + text)
                  .then(function(response) {
                     // $scope.Meant = response.data;
  
                      const matches = getClosestMatches(text, response.data);
                     // console.log('Auto-correct suggestions for "whatQuery":', matches);
                     $scope.Meant =matches;
  
                  })
                  .catch(function(error) {
                      console.error('Error fetching:', error);
                  });
  
              // Auto-correct suggestions
              // const matches = getClosestMatches(text, dictionary);
              // console.log('Auto-correct suggestions for "whatQuery":', matches);
              // Display suggestions to user if needed (e.g., update UI)
          }
      });
  
  
      
    // ----------------------------------------------------------- advanced search----------------------------------------------------------------
          
  
      
  
  
  
      
  
  
  });
  </script>
      
      
      
      <!-- Include jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Include DataTables JS -->
      <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
      
      <!-- Initialize DataTables -->
      <script>
      $(document).ready(function() {
          $('#companiesHome').DataTable({
            language: {
          paginate: {
            previous: "<<",
            next: ">>"
          }
        },
              "pageLength": 5,         // Number of rows per page
              "lengthMenu": [5, 10, 25, 50, 100],
              "ordering": true,        // Enable sorting
              "searching": true,       // Enable search box
              "responsive": true       // Make the table responsive
          });
      });
      </script>
      
   
      

      
      <!-------------------------------------------------------data table------------------------------------------------------>


      <hr/>
   

    <h4 style="margin-bottom:20px;color:{{$backColor}};"><b>Top {{$main_cat}} </b></h4>

    <div class="row images">

      @foreach ($top_companies as $company )        
        <div class="col-md-3"> <a href="/company/{{$company->id}}"> <img src="https://cdn.adslive.com/{{$company->logos}}" style="width:100%;height:81px;margin-bottom:20px;" class="shadow featured_logos"/> </a> </div>
      @endforeach
      
      {{-- <div class="col-md-3"> <img src="{{URL::asset('pix/logo1.jpg')}}" style="width:125px;height:81px;" class="shadow"/> </div>
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo2.jpg')}}" style="width:125px;height:81px;" class="shadow"/> </div>
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo3.png')}}" style="width:125px;height:81px;" class="shadow"/> </div>
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo3.png')}}" style="width:125px;height:81px;" class="shadow"/> </div> --}}
    </div>
{{-- <br/> --}}
    {{-- <div class="row images">
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo1.jpg')}}" style="width:125px;height:81px;" class="shadow"/> </div>
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo2.jpg')}}" style="width:125px;height:81px;" class="shadow"/> </div>
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo3.png')}}" style="width:125px;height:81px;" class="shadow"/> </div>
      <div class="col-md-3"> <img src="{{URL::asset('pix/logo3.png')}}" style="width:125px;height:81px;" class="shadow"/> </div>
    </div> --}}

    {{-- <br/> --}}
    <hr/>




     

 <h4  style="margin-bottom:20px;color:{{$backColor}};"><b>Government News </b></h4>

 
 <div class="row">
   @foreach ($News as $row)
   
   
   <div class="col-md-3">
   
   <div class="thumbnail"  style="height:320px;">
         <img alt="300x200" src="{{$row->image}}" style="width: 300px; height: 110px;" class="featured_news">
         <div class="caption">
         <b style="height:10px;">{{substr($row->title,0,30)}}</b>
         
        
         <p style="height:75px;margin-top:5px;">
         
         
         {!!substr($row->excerpt,0,40)!!}
         
         
         </p>
         <p style="position: absolute;bottom:4px;text-align:center;"><button style="padding-left:5px;padding-right:5px;font-size:10px;width:100%;" type="button"  data-toggle="modal" data-target="#myModal{{$row->id}}" class="btn btn-primary btn-block"><span class="badge badge-important"></span> {{$row->time}}</button> <br/></p>
   
         </div>
      </div>
   
   
   
   
      
      <!-- Modal -->
      <div class="modal fade" id="myModal{{$row->id}}" role="dialog">
      <div class="modal-dialog">
   
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"> <b> {{$row->title}} </b> </h4>
      </div>
      <div class="modal-body">
         <img alt="300x200" src="{{$row->image}}" style="width:100%; height:auto;"> <br/> <br/>
         <p>{!!$row->excerpt!!}</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </div>
   
      </div>
      </div>
   
   
   </div>
   
   @endforeach
   
   </div>
 
   

      

      {{-- <table class="table table-bordered">
        <tr><th>Logo</th><th>Company Name</th><th>Contacts</th></tr>
      
            

        @foreach ($companies as $company)
        <tr>
          <td><img class="shadow_point" style="height:auto;width:120px;border:solid 1px silver;" src="http://cdn.adslive.com/{{ $company->logos }}" alt="Alcari 326 Cc Logo" width="50"></td>
          <td><a style="color:#00a1d4; font-weight:bold" href="https://government.co.za/home/company/704025">{{ $company->name }}</a></td>
          <td><a style="color:#706e6e" href="tel:+27 16 985 3154">{{ $company->telephone }}</a></td>
        </tr>

        @endforeach
          
       
      </table> --}}


      <!-------------------------------------------results--------------------------------------------------->
      </div>

      <div class="col-md-3 ">
      
{{--       
      
        <a href="/company/{{$by_class[0]->company_id ?? ''}}">
        <img src="https://cdn.adslive.com/{{$by_class[0]->url ?? ''}}" style="height:240px;width:100%;margin-bottom:5px;" class="shadow"/>
        </a>

        <br/>
        <b style="color:{{$backColor}}">{{$by_class[0]->name ?? ''}}</b>
       
        <p style="height:130px;margin-top:10px;text-align:left;">
          {{ strlen($by_class[0]->about_us) > 220 ? substr($by_class[0]->about_us, 0, 220) . '...' : $by_class[0]->about_us }}
        </p>
      

        <table style="width:100%;text-align:left;">
          <tr><td><span class="glyphicon glyphicon-earphone"></span> &nbsp; <b style="color:{{$backColor}}">Phone</b></td> <td><b>:  {{strlen($by_class[0]->telephone) > 15 ? substr($by_class[0]->telephone, 0, 15) . '...' : $by_class[0]->telephone}}</b></td></tr>
          <tr><td><span class="glyphicon glyphicon-globe"></span> &nbsp; <b style="color:{{$backColor}}">Website</b></td> <td><b>:  {{strlen($by_class[0]->website) > 15 ? substr($by_class[0]->website, 0, 15) . '...' : $by_class[0]->website}}</b></td></tr>
        </table> 

       <br/>

        <hr/>
        <center>
   <img src="{{URL::asset('social.png')}}" style="border:none;height:50px;"/>
      </center>
        <hr/>


        --}}
        
        {{-- <br/>
        <h4  style="color:{{$backColor}};"><b>Related Searches</b></h4>

       
        <table style="width:100%">
          <tr><td> <a href="/company/{{$logos[0]->id}}"> <img src="https://cdn.adslive.com/{{$logos[0]->logos}}" style="width:95%;height:81px;"  class="shadow"/> </a> </td>
            <td> <a href="/company/{{$logos[1]->id}}"> <img src="https://cdn.adslive.com/{{$logos[1]->logos}}"  class="shadow" style="width:95%;height:81px;"/> </a> </td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td> <a href="/company/{{$logos[2]->id}}"> <img src="https://cdn.adslive.com/{{$logos[2]->logos}}" style="width:95%;height:81px;"  class="shadow"/> </a> </td>
            <td> <a href="/company/{{$logos[3]->id}}"> <img src="https://cdn.adslive.com/{{$logos[3]->logos}}"  class="shadow" style="width:95%;height:81px;"/> </a></td></tr>
        </table>
        
     --}}


        {{-- <h4  style="color:{{$backColor}};"><b>Classified Banners</b></h4>
        <a href="/company/{{$classes[0]->company_id}}">  <img src="https://cdn.adslive.com/{{$classes[0]->url}}" style="height: 240px;width:100%;margin-bottom:20px;"  class="shadow"/> </a>

        <br/> --}}
        
        {{-- <br/>

        <a href="/company/{{$classes[1]->company_id}}"> <img src="https://cdn.adslive.com/{{$classes[1]->url}}" style="height: 240px;width:100%;margin-bottom:20px;"  class="shadow"/> </a>
   --}}

{{--    
   <br/>
   <h4  style="color:{{$backColor}};"><b>Featured Videos</b></h4>

  
   <a href="/company/{{$videos[0]->id}}" style="color:black;text-decoration:none;">
   <div class="video_">   
    <table>
     <tr>
       <td>
         <span class="glyphicon glyphicon-facetime-video"></span>  <b> {{substr($videos[0]->name,0,18)}}</b> <br/>
         <p>{{ substr($videos[0]->about_us, 0, 20) }}</p>

       </td>
       <td>
         <iframe           
         src="https://www.youtube.com/embed/{{$videos[0]->url}}" 
         title="YouTube video player" 
         frameborder="0" 
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
         allowfullscreen>
     </iframe>
     
       </td>
     </tr>
   </table>       
   </div>   
   </a>
   
   <a href="/company/{{$videos[1]->id}}" style="color:black;text-decoration:none;">
   <div class="shadow video_ point">   
     <table>
      <tr>
        <td>
          <span class="glyphicon glyphicon-facetime-video"></span>  <b>  {{substr($videos[1]->name,0,18)}}</b> <br/>
          <p>{{ substr($videos[1]->about_us, 0, 20) }}</p>

        </td>
        <td>
          <iframe           
          src="https://www.youtube.com/embed/{{$videos[1]->url}}" 
          title="YouTube video player" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          allowfullscreen>
      </iframe>
      
        </td>
      </tr>
    </table>       
    </div>  
   </a>

   <a href="/company/{{$videos[2]->id}}" style="color:black;text-decoration:none;">
    <div class="shadow video_ point">  
     <table>
      <tr>
        <td>
          <span class="glyphicon glyphicon-facetime-video"></span>  <b>  {{substr($videos[2]->name,0,18)}}</b> <br/>
          <p>{{ substr($videos[2]->about_us, 0, 20) }}</p>

        </td>
        <td>
          <iframe           
          src="https://www.youtube.com/embed/{{$videos[2]->url}}" 
          title="YouTube video player" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          allowfullscreen>
      </iframe>
      
        </td>
      </tr>
    </table>       
    </div>   
   </a>

    --}}
{{-- 

   <br/>
     <h4  style="color:{{$backColor}};"><b>Popular Ebooks</b></h4>

     <div class="ebooks_" style="padding:0;margin:0;">
      <table>
        <tr>
          <td><a href="https://medicaldirectory.co.za/digitalcopy/index.html" target="_blank"><img src="{{URL::asset('ebook1.png')}}" style="width:90%;"  class="shadow point" /><br/><b>Medical</b></a></td>
          <td><a href="https://government.co.bw/" target="_blank"><img src="{{URL::asset('ebook2.png')}}" style="width:90%;"  class="shadow point" /><br/><b>Botswana</b></a></td>
        </tr>
        <tr>
          <td><a href="https://eswatinigov.net/" target="_blank"><img src="{{URL::asset('ebook3.png')}}" style="width:90%;"  class="shadow point" /><br/><b>eSwatini</b></a></td>
          <td><a href="https://government.co.za/" target="_blank"><img src="{{URL::asset('ebook4.png')}}" style="width:90%;"  class="shadow point" /><br/><b>South Africa</b></a></td>
        </tr>
      </table>
  </div>


  <br/>
  <h4  style="color:{{$backColor}};"><b>Featured Classifieds</b></h4>

  
  @foreach ($random_class as $rand)
  <a href="/company/{{$rand->company_id}}">   <img src="https://cdn.adslive.com/{{$rand->url}}" style="height: 240px;width:100%;margin-bottom:20px;"  class="shadow"/>  </a> 

  <br/>

  @endforeach


   --}}

   @include('partials.rightsidebar')
      </div>

    

  </div>  
  <!------------------------------------------cats-------------------------------------------------->
<br/>
  <!------------------------------------------ads-------------------------------------------------->


  
  <!------------------------------------------ads-------------------------------------------------->
 

</div>

@include('partials.footer')

</body>
</html>
