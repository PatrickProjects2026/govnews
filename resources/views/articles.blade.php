<!DOCTYPE html>
<html lang="en">
    @include('partials.header')
    
    
   

    
<?php 

$backColor="#0054a6";  //{{$backColor}};

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

  @media (max-width: 768px) {
  
        .container {
            /* padding-right:20px; */
            margin-right:5px;
        }
  
  
  }
  
</style>




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




        <body>

        <div class="container"   ng-app="Home" ng-controller="HomeController">

        <br/>

        
  <!-------------------------Header------------------------->
  <div id="logo"></div>
  <!-------------------------Header------------------------->

  <div class="row" style="margin-top:10px;">
    <div class="col-md-3">
     <a href="/"> <img src="{{URL::asset('logo.png')}}" style="height:40px;"/> </a>
    </div>
    <div class="col-md-9">
     
    
         
     <div class="menu">
      <a href="/search_sub/3/Business"> <span class="glyphicon glyphicon-home"></span> &nbsp; Home</a>
      <a href="/Pages/News"> <span class="glyphicon glyphicon-film"></span> &nbsp; News and Media</a>
      <a href="/Gazette">          <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Gazette</a>     
      <a href="/Tenders" >         <span class="glyphicon glyphicon-folder-close"></span> &nbsp; Tenders</a>       
      <a href="/Pages/Vacancies">              <span class="glyphicon glyphicon-folder-open"></span> &nbsp; Vacancies</a>           
      <a href="/contact" class="download" style="color: white;"> <span class="glyphicon glyphicon-phone"></span> Contact Us </a>
    </div>

    <div class="mobile_menu">
     <a href="/Pages/News"> <span class="glyphicon glyphicon-home"></span> &nbsp; Home</a>
     <a href="/search_sub/3/Business"> <span class="glyphicon glyphicon-home"></span> &nbsp; News and Media</a>
     <a href="/Gazette">          <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Gazette</a>     
     <a href="/Tenders" >         <span class="glyphicon glyphicon-folder-close"></span> &nbsp; Tenders</a>       
     <a href="/Pages/Vacancies">              <span class="glyphicon glyphicon-folder-open"></span> &nbsp; Vacancies</a>           
     <a href="/contact" >         <span class="glyphicon glyphicon-phone"></span> Contact Us </a>
   </div>
 


    </div>
    
    {{-- <div class="col-md-2">
     
     <div class="weather">
       <center>
         <table style="height: 10px !important;">
          <tr>
            <td style="padding-top:7px;">
              <b style="font-size:19px;margin-right:5px;"> <span class="glyphicon glyphicon-shopping-cart"  style="font-size:14px;"></span> R{{$amount}} </b>
            </td>
            <td>|</td>
            <td style="padding-top:7px;">
              <b style="font-size:19px;margin-left:5px;" id="time_">08:52</b>

              <!-- <table  style="height: 10px !important;margin-left:5px;">
                <tr><td> <b style="font-size:19px;">08:52</b></td></tr>
                <tr><td> <span style="font-size:9px;margin-top:-15px;">Thu, 30 Oct</span></td></tr>
              </table> -->
              
            </td>
          </tr>
         </table>
        </center>
     </div>

    </div> --}}


    
 </div>

 

 
<script>
  function updateTime() {
          const now = new Date();
          const hours = String(now.getHours()).padStart(2, '0');
          const minutes = String(now.getMinutes()).padStart(2, '0');
          const currentTime = `${hours}:${minutes}`;
          
          document.getElementById('time_').textContent = currentTime;
          // alert(currentTime);
      }

      // Update time every minute, 60000
      updateTime();
      setInterval(updateTime, 6000);
</script>



<br/> <br/>

 <div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-6">
     
     <div class="search" ng-Controller="HomeController">
 
         <table style="width:100%;margin-top:-4px;">
           <tr>
             <td style="width:30px"> <span class="glyphicon glyphicon-search" style="font-size:25px;margin-left:5px;"></span> </td>
             <td> <input type="text" placeholder="Search" id="whatQuery3" name="what" > </td>
             <td> <button ng-click="search_back()">Search</button></td>
           </tr>
         </table>
   
         <div id="whatSuggestions" class="suggestions ">    
         
          <table style="margin-top:0px;z-index:999999;width:100%;">
            <tr ng-repeat="suggest in Items">
                <td><a class="j-link" href="/search_sub/1/@{{suggest.name}}"><span class="glyphicon glyphicon-chevron-right"></span> @{{suggest.name}}</a></td>
            </tr>
            
            <tr ng-if="Items.length==0"><td>Did you mean: </td></tr>
            <tr ng-if="Items.length==0" ng-repeat="Meant in Meant">
              
              <td class="meaning">             
             
              <a class="j-link click_back suggestWhat" ng-click="click_back(Meant)" style="cursor:pointer"> <span class="glyphicon glyphicon-chevron-right"></span>  @{{Meant}}</a> 
          
        
            </td>
            </tr>  
          </table>
        </div>

     </div>

   </div>
   <div class="col-md-3"></div>
 </div>

   <!-------------------------Header------------------------->




        <!-------------------------Header------------------------->

        <br/> <br/>


  
        <style>
  
          .cat table td:nth-child(1){
           width:50px;
          }
          
        
          .cat table td:nth-child(2){
            /* border:solid 1px silver; */
            width:200px; 
          }
          
          </style>      



  <!------------------------------------------ads-------------------------------------------------->
  <h4  style="color:{{$backColor}};"><b>Select Industry</b></h4>

  
  <div class="row">
    <div class="col-md-3">


      
      @foreach ($categories_government as $catz)
        
      <div class="cat">
        <a href="/company_by_cat/{{$catz->id}}">
        <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:46px;"/> <span class="glyphicon glyphicon-{{$catz->icon}}"></span> </td><td style="">{{$catz->name}}</td> <!-- <td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td> --></tr></table>     
        </a>
      </div>
      
      @endforeach

      
{{-- 
      
      <div class="cat">
        <a href="/search/1">
        <table><tr><td> <img src="{{URL::asset('indu.png')}}"/></td><td style="">Agriculture and animals</td><td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td></tr></table>     
        </a>
      </div>

      <div class="cat">
        <a href="/search/2">
        <table><tr><td> <img src="{{URL::asset('wholes.png')}}"/></td><td style="">Arts and Culture</td><td style="text-align:right;padding-right:10px;">45{{rand(20,90)}}</td></tr></table>     
        </a>
      </div>

      <div class="cat">
        <a href="/search/3">
        <table><tr><td> <img src="{{URL::asset('moto.png')}}"/></td><td style="">Education</td><td style="text-align:right;padding-right:10px;">70{{rand(20,90)}}</td></tr></table>     
        </a>
      </div>

      <div class="cat">
           <a href="/search/4">
        <table><tr><td> <img src="{{URL::asset('comm.png')}}"/></td><td style="">Funding and grants</td><td  style="text-align:right;padding-right:10px;">32{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/5">
        <table><tr><td> <img src="{{URL::asset('med.png')}}"/></td><td style="">Healthcare</td><td  style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/6">
        <table><tr><td> <img src="{{URL::asset('commu.png')}}"/></td><td style="">Housing and property</td><td  style="text-align:right;padding-right:10px;">10{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/7">
        <table><tr><td> <img src="{{URL::asset('corp.png')}}"/></td><td style="">Infrastructure and Planning</td><td style="text-align:right;padding-right:10px;">54{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/8">
        <table><tr><td> <img src="{{URL::asset('indu.png')}}"/></td><td style="">Jobs and skills development</td><td style="text-align:right;padding-right:10px;">12{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/9">
        <table><tr><td> <img src="{{URL::asset('home.png')}}"/></td><td style="">Public Safety and Law</td><td style="text-align:right;padding-right:10px;">45{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/10">
        <table><tr><td> <img src="{{URL::asset('ret.png')}}"/></td><td style="">Social Services</td><td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/11">
        <table><tr><td> <img src="{{URL::asset('ass.png')}}"/></td><td style="">Sport and Recreation</td><td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

      <div class="cat">
        <a href="/search/12">
        <table><tr><td> <img src="{{URL::asset('age.png')}}"/></td><td style="">Gauteng Municipalities </td><td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td></tr></table>     
      </a>
      </div>

       --}}
      
      <br/><br/>
      <h4  style="color:{{$backColor}};"><b>Related Videos</b></h4>

     
      <a href="/company/{{$videos[0]->id}}" style="color:black;text-decoration:none;">
      <div class="video_">   <!------------------------------------------------------- video ------------------------------------------------------>
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
      </div>   <!------------------------------------------------------- video ------------------------------------------------------>
      </a>
      
      <a href="/company/{{$videos[1]->id}}" style="color:black;text-decoration:none;">
      <div class="shadow video_ point">   <!------------------------------------------------------- video ------------------------------------------------------>
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
       </div>   <!------------------------------------------------------- video ------------------------------------------------------>
      </a>

      <a href="/company/{{$videos[2]->id}}" style="color:black;text-decoration:none;">
       <div class="shadow video_ point">   <!------------------------------------------------------- video ------------------------------------------------------>
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
       </div>   <!------------------------------------------------------- video ------------------------------------------------------>
      </a>
      
      
      
      {{-- <img src="{{URL::asset('videos.png')}}" style="width:100%;" class="shadow point"/> --}}

      <br/>
      <h4  style="color:{{$backColor}};"><b>Popular Ebooks</b></h4>

      <div class="ebooks_">
          <table>
            <tr>
              <td><a href="https://medicaldirectory.co.za/digitalcopy/index.html" target="_blank"><img src="{{URL::asset('ebook1.png')}}" style="width:100%;"  class="shadow point" /><br/><b>Medical</b></a></td>
              <td><a href="https://government.co.bw/" target="_blank"><img src="{{URL::asset('ebook2.png')}}" style="width:100%;"  class="shadow point" /><br/><b>Botswana</b></a></td>
            </tr>
            <tr>
              <td><a href="https://eswatinigov.net/" target="_blank"><img src="{{URL::asset('ebook3.png')}}" style="width:100%;"  class="shadow point" /><br/><b>eSwatini</b></a></td>
              <td><a href="https://government.co.za/" target="_blank"><img src="{{URL::asset('ebook4.png')}}" style="width:100%;"  class="shadow point" /><br/><b>South Africa</b></a></td>
            </tr>
          </table>
      </div>
        
      {{-- <img src="{{URL::asset('ebooks.png')}}" style="width:100%;"  class="shadow point" /> --}}

    </div>

    <style> 
      hr { 
        border-bottom:solid 1px silver;margin:3px;

      }
      .more a{
        color:#222;padding-right:30px;
      }

      .company_table td {
        padding:5px;
      }
    </style>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <div class="col-md-6 more" >
     
      <!-------------------------------------------results--------------------------------------------------->
  
      
      @include('partials.xtra_menu')
      
      <!-------------------------------------------results--------------------------------------------------->
      
    <hr/>

    <br/><br/>

   
    @if(isset($company[0]))
    
    <div class="row">
      <div class="col-md-3"> <img src="https://cdn.adslive.com/{{$company[0]->logos}}" style="width:200px;border:solid 1px silver;border-radius:10px;margin:5px;"/> </div>
      <div class="col-md-9"></div>
    </div>  

    <div class="row">
      <div class="col-md-12">
        
        <br/>
        <b style="font-size:16px;color:{{$backColor}}">{{$company[0]->name}}</b>

        <br/><br/>

        <table style="width:100%;" class="company_table">
           <tr><td style="width:20%;"><b><span class="glyphicon glyphicon-phone"></span> Phone:</b></td><td> <a href="tel:{{$company[0]->telephone}}">  {{$company[0]->telephone}}</td></tr>
           <tr><td><b><span class="glyphicon glyphicon-envelope"></span> Email:</b></td><td> <a href="mailto:{{$company[0]->email}}"> {{$company[0]->email}} </a> </td></tr>
           <tr><td><b><span class="glyphicon glyphicon-map-marker"></span> Address:</b></td><td>{{$company[0]->address}}</td></tr>
           @if($company[0]->website) <tr ><td><b><span class="glyphicon glyphicon-map-globe"></span> Website:</b></td><td>  <a href="{{$company[0]->website}}"> {{$company[0]->website}} </a> </td></tr> @endif
           @if($company[0]->about_us) <tr><td><b><span class="glyphicon glyphicon-map-user"></span> About Us:</b></td>
            <td><div style="height:100px;overflow-y:scroll;width:100%;">{{$company[0]->about_us}}</div></td></tr> @endif
        </table>

        <br/>

        @if(isset($banner[0]))       
         <a href="https://{{$company[0]->website}}" target="_blank">  <img src="https://cdn.adslive.com/{{$banner[0]->url}}" style="width:100%;border:solid 1px silver;margin-bottom:10px;border-radius:10px;"/> </a>
        @endif

      
        @if(isset($company_video[0]))  
         <iframe           
            src="https://www.youtube.com/embed/{{$company_video[0]->url}}" style="width:100%;border-radius:10px;"
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
        @endif
        

        <iframe src="https://maps.google.com/maps?q=<?php echo str_replace(" ","%20",$company[0]->address); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="150" style="border:solid 1px silver;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
     
        
        <br/>

     </div>  
    </div>  
    
    @endif



    <style>
      .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px;
      }
  
      .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6;
      }
      </style>  



<div class="row">
@foreach ($News as $row)


<div class="col-md-4">

<div class="thumbnail"  style="height:335px;">
      <img alt="300x200" src="{{$row->image}}" style="width: 300px; height: 140px;">
      <div class="caption">
      <b style="height:10px;">{{substr($row->title,0,30)}}</b>
      
     
      <p style="max-height:110px;margin-top:10px;">
      
      
      {!!substr($row->excerpt,0,60)!!}
      
      
      <p style="position: absolute;bottom:4px;"><button style="padding-left:5px;padding-right:5px;font-size:12px;min-width:100px;" type="button"  data-toggle="modal" data-target="#myModal{{$row->id}}" class="btn btn-primary btn-block"><span class="badge badge-important"></span> {{$row->time}}</button> <br/></p>

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





@if(isset($page) && $page=="Articles") 

<div class="row">
@foreach ($News as $row)


<div class="col-md-4">

<div class="thumbnail" style="height:385px;">
      <img alt="300x200" src="{{$row->image}}" style="width: 300px; height: 200px;">
      <div class="caption">
      <b style="height:10px;">{{substr($row->title,0,30)}}</b>
      <p style="max-height:110px;">
      
      
      {!!substr($row->excerpt,0,60)!!}
      
      
      </p>
      <p><button type="button"  data-toggle="modal" data-target="#myModal{{$row->id}}" class="btn btn-primary btn-block"><span class="badge badge-important"></span> {{$row->time}}</button>
   
   <br>

   </p>

      </div>
   </div>




   
   <!-- Modal -->
   <div class="modal fade" id="myModal{{$row->id}}" role="dialog">
   <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"> {{$row->title}}</h4>
   </div>
   <div class="modal-body">
      <img alt="300x200" src="{{$row->image}}" style="width:100%; height:auto;"> <br/>
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

@endif
    
    
  

@if(isset($page) && $page=="Events") 

<div class="row">
@foreach ($News as $row)


<div class="col-md-4">

<div class="thumbnail"  style="height:385px;">
      <img alt="300x200" src="{{$row->image}}" style="width: 300px; height: 200px;">
      <div class="caption">
      <b style="height:10px;">{{substr($row->title,0,30)}}</b>
      <p style="max-height:110px;">
      
      
      {!!substr($row->excerpt,0,60)!!}
      
      
      </p>
      <p><button type="button"  data-toggle="modal" data-target="#myModal{{$row->id}}" class="btn btn-primary btn-block"><span class="badge badge-important"></span> {{$row->time}}</button>
   
   <br>

   </p>

      </div>
   </div>




   
   <!-- Modal -->
   <div class="modal fade" id="myModal{{$row->id}}" role="dialog">
   <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"> {{$row->title}}</h4>
   </div>
   <div class="modal-body">
      <img alt="300x200" src="{{$row->image}}" style="width:100%; height:auto;"> <br/>
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

@endif



 

@if(isset($page) && $page=="Videos") 

<div class="row">
@foreach ($videos2 as $row)


<div class="col-md-6">

<div class="thumbnail">
      <!-- <img alt="300x200" src="{{$row->url}}" style="width: 300px; height: 200px;"> -->
       <iframe style="width:100%; height: 200px;" src="https://www.youtube.com/embed/{{$row->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   
      <div class="caption">
      <b style="height:10px;">{{substr($row->name,0,30)}}</b>
      
     
   <br>
   <p> <a href="/company/{{$row->id}}" class="btn btn-primary btn-block" style="color:white;"><span class="badge badge-important"></span> View Listing</a>
   
   </p>

      </div>
   </div>



</div>

@endforeach

</div>

@endif
    
        
          
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


              $('#companiesTable').hide();  
              $("#companiesTable_wrapper").hide();
  
                  $http.get("/advanced_search/" + alphabet + "/" + category + "/" + province+ "/" + date+ "/" + limit)
                      .then(function(response) {
                        

                        // alert("Hello");
                        
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
        <td> <a style="color:{{$backColor}}; font-weight:bold" 
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
        $("#whatQuery3").val(text);
       }

       $scope.search_back=function(){
        let text=$("#whatQuery3").val();
        window.location='/search_sub/1/'+text;
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
  
      $("#whatQuery3").keyup(function() {
  
       
        
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
          $('#companiesTable').DataTable({
              "pageLength": 5,         // Number of rows per page
              "lengthMenu": [5, 10, 25, 50, 100],
              "ordering": true,        // Enable sorting
              "searching": true,       // Enable search box
              "responsive": true       // Make the table responsive
          });
      });
      </script>
      
   
      

      
      <!-------------------------------------------------------data table------------------------------------------------------>


      

      {{-- <table class="table table-bordered">
        <tr><th>Logo</th><th>Company Name</th><th>Contacts</th></tr>
      
            

        @foreach ($companies as $company)
        <tr>
          <td><img class="shadow_point" style="height:auto;width:120px;border:solid 1px silver;" src="http://cdn.adslive.com/{{ $company->logos }}" alt="Alcari 326 Cc Logo" width="50"></td>
          <td><a style="color:{{$backColor}}; font-weight:bold" href="https://government.co.za/home/company/704025">{{ $company->name }}</a></td>
          <td><a style="color:#706e6e" href="tel:+27 16 985 3154">{{ $company->telephone }}</a></td>
        </tr>

        @endforeach
          
       
      </table> --}}


      <!-------------------------------------------results--------------------------------------------------->
      </div>

      <div class="col-md-3 images">
       
        <a href="/company/{{$by_class[0]->company_id}}">
        <img src="https://cdn.adslive.com/{{$by_class[0]->url}}" style="height:240px;width:100%;margin-bottom:5px;" class="shadow"/>
        </a>
        
        <br/>
        <b style="color:{{$backColor}}">{{$by_class[0]->name}}</b>
       
      <p style="height:130px;margin-top:10px;text-align:left;">
          {{ strlen($by_class[0]->about_us) > 220 ? substr($by_class[0]->about_us, 0, 220) . '...' : $by_class[0]->about_us }}
      </p>
      

        <table style="width:100%;text-align:left;">
          <tr><td><span class="glyphicon glyphicon-earphone"></span> &nbsp; <b style="color:{{$backColor}}">Phone</b></td> <td><b>:  {{strlen($by_class[0]->telephone) > 15 ? substr($by_class[0]->telephone, 0, 15) . '...' : $by_class[0]->telephone}}</b></td></tr>
          <tr><td><span class="glyphicon glyphicon-globe"></span> &nbsp; <b style="color:{{$backColor}}">Website</b></td> <td><b>:  {{strlen($by_class[0]->website) > 15 ? substr($by_class[0]->website, 0, 15) . '...' : $by_class[0]->website}}</b></td></tr>
        </table>

       

        <hr/>
        <center>
   <img src="{{URL::asset('social.png')}}" style="border:none;height:50px;"/>
      </center>
        <hr/>
        
        <br/>
        <h4  style="color:{{$backColor}};"><b>Related Searches</b></h4>

       
        <table style="width:100%">
          <tr><td> <a href="/company/{{$logos[0]->id}}"> <img src="https://cdn.adslive.com/{{$logos[0]->logos}}" style="width:95%;height:81px;"  class="shadow"/> </a> </td>
            <td> <a href="/company/{{$logos[1]->id}}"> <img src="https://cdn.adslive.com/{{$logos[1]->logos}}"  class="shadow" style="width:95%;height:81px;"/> </a> </td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td> <a href="/company/{{$logos[2]->id}}"> <img src="https://cdn.adslive.com/{{$logos[2]->logos}}" style="width:95%;height:81px;"  class="shadow"/> </a> </td>
            <td> <a href="/company/{{$logos[3]->id}}"> <img src="https://cdn.adslive.com/{{$logos[3]->logos}}"  class="shadow" style="width:95%;height:81px;"/> </a></td></tr>
        </table>
        
        <br/>
        <h4  style="color:{{$backColor}};"><b>Classified Banners</b></h4>
        <a href="/company/{{$classes[0]->company_id}}">   <img src="https://cdn.adslive.com/{{$classes[0]->url}}" style="height: 240px;width:100%;margin-bottom:20px;"  class="shadow"/>  </a>

        <br/><br/>

        <a href="/company/{{$classes[1]->company_id}}">   <img src="https://cdn.adslive.com/{{$classes[1]->url}}" style="height: 240px;width:100%;margin-bottom:20px;"  class="shadow"/>  </a>
  
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
