<!DOCTYPE html>
<html lang="en">
    @include('partials.header')
    
    
   

    
<?php 

$backColor="#092f48";  //{{$backColor}};

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
     <a href="/"> <img src="{{URL::asset('logo.png')}}" style="height:60px;"/> </a>
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

{{--     
    <div class="col-md-2">
     
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
  <h4  style="color:#092f48!important;"><b  style="color:#092f48!important;">Select Industry</b></h4>

  
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

<style>
  .table-bordered td:nth-child(1) {
    font-weight: bold;
  }

  .table-bordered a{
    /* background-color: {{$backColor}};color:white;border-radius:5px;padding:4px; */
  }
</style>  

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <div class="col-md-6 more" >
     
      <!-------------------------------------------results--------------------------------------------------->
   
      @include('partials.xtra_menu')
      
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
           @if($company[0]->website) <tr ><td><b><span class="glyphicon glyphicon-map-globe"></span> Website:</b></td><td>  <a href="https://{{$company[0]->website}}"> {{$company[0]->website}} </a> </td></tr> @endif
           @if($company[0]->about_us) <tr><td><b><span class="glyphicon glyphicon-map-user"></span> About Us:</b></td>
            <td><div style="height:100px;overflow-y:scroll;width:100%;">{!!$company[0]->about_us!!}</div></td></tr> @endif
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

    
      @media screen and (max-width: 1592px), screen and (max-width: 1024px) {
    .mobile-only {
        display: none;
    }

    .tablet_view {
        font-size:13px;
    }

    .tablet_view button {
        font-size:13px;
    }
    
    }


      </style>  

   

@if(isset($page) && $page=="Gazette") 

<h4 style="color:{{$backColor}}"> <strong>Gauteng Government Gazette</strong> </h4>

<table class="table table-bordered tablet_view" style="inline-size:100%;">
  <tr style="background-color:{{$backColor}};color:white;">
     <th>JANUARY</th>
     <th>DATE</th>
  </tr>

  <tr>
    <td>
      <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g14">Gauteng Provincial Gazette dated 2025-01-10 number 8</button>
    </td>
    <td>2025-01-10</td>
  </tr>

  <tr>
    <td>
      <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g13">Gauteng Provincial Gazette dated 2025-01-08 number 7</button>
    </td>
    <td>2025-01-08</td>
  </tr>

  <tr>
    <td>
      <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g12">Gauteng Provincial Gazette dated 2025-01-08 number 5</button>
    </td>
    <td>2025-01-08</td>
  </tr>
 
  <tr>
   <td>
     <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g11">Gauteng Provincial Gazette dated 2025-01-01 number 1</button>
   </td>
   <td>2025-01-01</td>
 </tr>
</table> 

<br/>

<table class="table table-bordered tablet_view">
 <tr style="background-color:{{$backColor}};color:white;">
    <th>DECEMBER</th>
    <th>DATE</th>
 </tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g10">Gauteng Provincial Gazette dated 2024-12-23 number 470</button>
  </td>
  <td>2024-12-23</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g9">Gauteng Provincial Gazette dated 2024-12-23 number 469</button>
  </td>
  <td>2024-12-23</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g8">Gauteng Provincial Gazette dated 2024-12-25 number 468</button>
  </td>
  <td>2024-12-25</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g7">Gauteng Provincial Gazette dated 2024-12-20 number 467</button>
  </td>
  <td>2024-12-20</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g6">Gauteng Provincial Gazette dated 2024-12-20 number 466</button>
  </td>
  <td>2024-12-20</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g5">Gauteng Provincial Gazette dated 2024-12-20 number 465</button>
  </td>
  <td>2024-12-20</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g4">Gauteng Provincial Gazette dated 2024-12-19 number 464</button>
  </td>
  <td>2024-12-19</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g3">Gauteng Provincial Gazette dated 2024-12-18 number 463</button>
  </td>
  <td>2024-12-18</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g2">Gauteng Provincial Gazette dated 2024-12-13 number 462</button>
  </td>
  <td>2024-12-13</td>
</tr>

 <tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#g1">Gauteng Provincial Gazette dated 2024-12-13 number 461</button>
  </td>
  <td>2024-12-13</td>
</tr>

<tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#gg14">Gauteng Provincial Gazette dated 2024-12-09 number 454</button>
  </td>
  <td>2024-12-09</td>
</tr>


<tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#gg15">Gauteng Provincial Gazette dated 2024-12-06 number 450</button>
  </td>
  <td>2024-12-06</td>
</tr>


<tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#gg16">Gauteng Provincial Gazette dated 2024-12-06 number 448</button>
  </td>
  <td>2024-12-06</td>
</tr>

<tr>
  <td>
    <button type="button" class="btn btn-dafault btn-lg" data-toggle="modal" data-target="#gg17">Gauteng Provincial Gazette dated 2024-12-06 number 447</button>
  </td>
  <td>2024-12-06</td>
</tr>
</table>  


<div id="gg17" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-06-no-447.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="gg16" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-06-no-448.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="gg15" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-09-no-454.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="gg14" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-06-no-450.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>


<!-- Modals -->
<div id="g14" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2025/za-gp-provincial-gazette-dated-2025-01-10-no-8.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g13" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2025/za-gp-provincial-gazette-dated-2025-01-08-no-7.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>


<div id="g12" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2025/za-gp-provincial-gazette-dated-2025-01-08-no-5.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g11" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2025/za-gp-provincial-gazette-dated-2025-01-01-no-1.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>


<div id="g10" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-23-no-470.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g9" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-23-no-469.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g8" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-25-no-468.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>


<div id="g7" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-20-no-467.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-20-no-466.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-20-no-465.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-19-no-464.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>


<div id="g3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-18-no-463.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>


<div id="g2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-13-no-462.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<div id="g1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gazette</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://archive.gazettes.africa/archive/za-gp/2024/za-gp-provincial-gazette-dated-2024-12-13-no-461.pdf" style="width:100%;height:400px;"></iframe>
      </div>      
    </div>
  </div>
</div>

<!-- Modals -->

@endif


<style>
.but1 {
  background-color:{{$backColor}};color:white;border-radius:5px;
  padding:3px;padding-left:20px;
}

</style>  


@if(isset($page) && $page=="Tenders") 

<h4 style="color:{{$backColor}}"> <strong>Gauteng Government Tenders</strong> </h4>

<br/>

<table class="table table-bordered tenders">
  <tr style="background-color:{{$backColor}};color:white;">
     <th>CATEGORY</th>
     <th>DESCRIPTION</th>
     <th>ADVERTISED</th>
     <th>DOWNLOAD</th>
  </tr>
  <tr> 
    <td>Telecommunications</td>
    <td>APPOINTMENT OF A SERVICE PROVIDER TO SUPPLY AND DELIVER LONG RANGES 10G SFPPS FROM NORTHREN RING MPLS.</td>
    <td>13/01/2025</td>
    <td><a class="but1" style="color:white;" href="https://www.etenders.gov.za/home/Download/?blobName=603c6e37-a27d-4dbb-bce0-d56cfea2c937.pdf&downloadedFileName=RFQ11464%20_Supply%20and%20delivery%20of%20Long%20Range%20%2010G%20SFPP.pdf">DOWNLOAD</a></td>
  </tr>

  <tr> 
    <td>Services: Professional</td>
    <td>a) 3 DAYS ADVANCED SHE REPRESENTATIVE TRAINING b) 3 DAYS COMBINED LEVEL I & II FIRST AID TRAINING a) 3 DAYS FIRE FIGHTING LEVEL 2 TRAINING</td>
    <td>13/01/2025</td>
    <td><a  class="but1" style="color:white;" href="https://www.etenders.gov.za/home/Download/?blobName=48f27187-1317-47f0-8641-f6985df01a87.doc&downloadedFileName=OVI01REQ001070_20241113111643%20(1).doc">DOWNLOAD</a></td>
  </tr>

  <tr> 
    <td>Scientific research and development</td>
    <td>Egg incubator (Small): o Use as Incubator only and hold +/-300 eggs fitted with humidifier. o 36-38 ° C temperature o Automatic Egg Turning o Installation fee included Egg Incubator (BIG): o Use as Incubator only and hold +/-2000 eggs in the egg tray, fitted with humidifier. o Automatic Egg Turning o 36-38 ° C temperature o Installation fee included</td>
    <td>13/01/2025</td>
    <td><a class="but1" style="color:white;"  href="https://www.etenders.gov.za/home/Download/?blobName=7de7dbd0-9d1e-4cfb-9703-418a09b5d62a.doc&downloadedFileName=specifications.doc">DOWNLOAD</a></td>
  </tr>

  <tr> 
    <td>Information and communication</td>
    <td>SUPPLY AND DELIVERY OF VPN ROUTER, VPN ROUTER SOFTWARE AND ANNUAL MAINTENANCE AND SUPPORT</td>
    <td>13/01/2025</td>
    <td><a  class="but1" style="color:white;" href="https://www.etenders.gov.za/home/Download/?blobName=18fa8959-cd6b-4963-ba88-160a8fe2c603.doc&downloadedFileName=RFQ%20-%20NC0001-25.doc">DOWNLOAD</a></td>
  </tr>

  <tr> 
    <td>Supplies: General</td>
    <td>Supply and delivery of fourteen (14) Waikato Mark 5 Mechanical milk meters Maximum 29kg including Dovetail connectors. ARC-AP Irene</td>
    <td>13/01/2025</td>
    <td><a   class="but1" style="color:white;" href="https://www.etenders.gov.za/home/Download/?blobName=deea4737-6bab-4560-9b9c-9037478bef5e.pdf&downloadedFileName=API01REQ001646.pdf">DOWNLOAD</a></td>
  </tr>

  <tr> 
    <td>Supplies: Electrical Equipment</td>
    <td>REQUEST FOR QUOTATION –HOUSEHOLD</td>
    <td>13/01/2025</td>
    <td><a   class="but1" style="color:white;" href="https://www.etenders.gov.za/home/Download/?blobName=b659dd36-8a0b-41bf-aba1-524ac2ce9c76.pdf&downloadedFileName=RFQ-HOUSEHOLD.pdf">DOWNLOAD</a></td>
  </tr>




</table>  

@endif


@if(isset($page) && $page=="Terms") 
 


  <div class="container0" style="margin-top:30px">
    <h5 style="color:#009963"> <strong>Terms and Conditions</strong> </h5>
    <div>
      <div>
      <ol style="display: grid;text-align:justify;">
          					
        <li>	This application is subject to credit clearance and orders acceptance by the publisher LeadsBank (Pty) Ltd</li>
<li>	All sums payable to LeadsBank should be made in accordance with LeadsBank’s Financial Terms &amp; Conditions which are: Unless a customer has applied for and been accepted as a credit account customer, LeadsBank will provide services only on a pre-payment basis, with receipt of payment prior to the booking being confirmed. All Advertisements are accepted on the basis that they will be paid for at the prevailing rates set out herein by no later than the date of publication.</li>
<li>	Materials for any Advertisement must adhere to LeadsBank’s technical specifications and be delivered to LeadsBank within the applicable timeframes</li>
<li>	LeadsBank may, without any responsibility to the Advertiser, reject, cancel or require any Advertisement to be amended that it considers unsuitable or contrary to these Terms and remove, not print, suspend or change the position of any such Advertisement.</li>
<li>	All advertising amounts are excluding VAT</li>
<li>	The Publisher shall be under no liability whatsoever by reason of error, including any translation error, for which it may be responsible in any advertisement beyond liability to give the advertiser or advertising agency credit for as much of the space occupied by the advertisement as is materially affected by the error; and its obligation to give such credit shall not apply to more than one incorrect insertion under any contract or order unless it is notified of the inaccuracy prior to the deadline for repetition of the insertion.</li>
<li>	The Publisher does not guarantee any given level of circulation or readership for an advertisement.</li>
<li>	The advertiser or its agency assume liability for all content [including text representation and illustrations] of advertisements published and also assume responsibility for any claims arising thereof made against The Publisher, including costs associated with defending against such a claim.</li>
<li>	All positions are at the option of The Publisher. In no event will adjustments, reinstatements or refunds be made because of the position and/or section in which an advertisement has been published. The Publisher will seek to comply with position requests and other stipulations that appear on insertion orders, but cannot guarantee that they will be followed. Payment of a premium position fee does not guarantee positioning. In the event that The Publisher is unable to provide the requested positioning, the premium position fee will be refunded. Customer service representatives and Account Managers are not authorized to modify this provision or to guarantee positioning on behalf of The Publisher. Misclassification of classified ads is not permitted.</li>
<li>	The Publisher shall be under no liability for its failure for any cause to insert an advertisement.</li>
<li>	The Publisher reserves the right to convert all advertisements published in print, digital and audio-text formats, including the right to publish such advertisements electronically on the Internet and other alternate publications.</li>
<li>  Barter Agreement - All Barter agreements are valid for a period of 12 months with advertisers. Please note that for the second term of the agreement a cash payment will required. Please note cancellation of barter agreements will follow our standard cancellation policy which is in effect amounting to 75% of the agreement value.</li>
<li>	The advertiser or advertising agency shall pay the cost of composition of advertisements set but not used.</li>
<li>  This contract takes effect as of the signing of this contract and will remain in effect for a minimum of 24 months</li>
<li>  The Advertiser and its agency may not resell any advertising or advertising space unless authorized to do so in writing.</li>
<li>	Charges for changes [not corrections] from original layout and copy will be based on current composition rates.</li>
<li>	A 75% cancellation fee of the total amount will apply to all cancellations. All cancellation fees are paid upfront and immediately.</li>
<li>	The Publisher will not be responsible for errors appearing in advertisements that are placed too late for proofs to be submitted or for errors due to delivery of printing materials past publishing deadlines from the advertiser or advertising agency or from a third party designated by the advertiser or advertising agency as a source for printing material.</li>
<li>	Advertisers are responsible for checking the accuracy of the proofs they request. The advertiser should carefully check the entire ad proof, including areas in which changes or corrections were not requested.</li>
<li>	All orders are firm and are not subject to cancellation unless agreed upon by both parties.</li>
<li>	The signatory declares that he/she has the authorization to sign for and place advertisements on behalf of the client and is aware of the costs for such advertisements.</li>
<li>	Entry types not selected will be processed by default for the lowest pricing option.</li>
<li>	All Advertising contracts are automatically renewed and must be cancelled in writing at least two months before the term ends. A valid cancellation will only be applicable upon receipt of a cancellation reference number.</li>
<li>  All cancellations are required on a company letterhead prior to its renewal.</li>
<li>	Cancellations or changes cannot be guaranteed in classified advertising between the time the ad is ordered and the initial publication.In the event that the advertiser has multiple agreements with the publisher ,each agreement is be terminated individually</li>
<li>  Multi-insertion orders will be accepted only when in writing. Cancellation of multi-insertion orders must be confirmed in writing.</li>
<li>	The Publisher does not assume any liability for the return of printing material in connection with advertising unless a specific written request is received to hold such material subject to order for a period not exceeding 30 days.</li>
<li>	In the event that the advertiser does not provide new content for the renewal, the existing advert/content will be advertised for another year.</li>
<li>	Claims for errors must be made within 30 days following publication date.</li>
<li>	On advertising where a debit order is allowed, monthly accounts are due and payable on or before the fifteenth [15th] of the month following the booking. When any part of an account for advertising becomes delinquent, then the entire amount owed shall become due and payable and The Publisher may refuse to publish further advertising. In this event, the advertiser or agency shall pay for advertising space actually used according to the rate earned at the time of the delinquency.</li>
<li>	Extension of credit to advertising agencies is based on the agency’s acceptance of sole liability for all advertising placed by it and billed to its account. No endorsement, statement or disclaimer on any insertion order, cheque or letter shall act as an accord or settlement, or as a waiver of this condition unless and until it is accepted by The Publisher by a separate written agreement signed by a duly authorized representative of The Publisher. In the event of nonpayment of any agency account, prior to referring said account for third party collections, The Publisher reserves the right to contact the agency’s client(s), as disclosed principal(s), for payment. If the outstanding balance is still not settled, The Publisher may proceed with collections against both the agency and its client(s). No such action on the part of The Publisher shall relieve the agency of liability for the debt.</li>
<li>	Payment of all undisputed invoices must be made within The Publishers terms. All outstanding accounts will attract an interest fee of not less than 1% per month and is usually calculated at the prime lending rate plus 3% per annum.</li>
<li>	There will be a ZAR500.00 charge for any cheque not honored by the bank and for debit order payments that do not go through. Returned cheque/s and debit orders must be replaced with internet transfer funds within 48 hours of notification. The Publisher reserves the right to withhold further advertising pending receipt of replacement funds.</li>
<li>	In the event an account is referred to a third party for collection, advertiser agrees to pay collection and/or attorney fees, as well as court costs incurred to effect collection.</li>
<li>	Payment of account is not dependent upon receipt of invoices, either physical or electronic.</li>
<li>	Incorrect rates that do not correspond to the rate card will be regarded as clerical errors and the advertisements will be published and charged at the applicable rates in effect at the time of publication.</li>
<li>	A complimentary design and maintenance service are included with each solution. Any complimentary products will be processed upon receipt of payment.</li>
<li>	All artwork proof sheets need to be attended to as soon as possible and returned within a 7-day period. Kindly inform the publisher in writing if an extension period is required</li>
              
        </ol>
        <p><a style="color:#009963" href="mailto:copyright@dotcom.africa">copyright@leadsbank.co.za</a></p>
      </div>
    </div>
  </div>




@endif



    @if(isset($page) && $page==="Add")

   
    @if(isset($msg))
    <div class="alert alert-success"> {{$msg}}  </div>
    @endif


    <h3>REGISTER</h3>

    <div> Please complete the following form to register your business on the LEADSBANK™ of South Africa.</div>
    <br/>
     {{-- <hr class="my-4"> --}}

    <form class="feedback_form" action="contact" method="POST">
      @csrf
      <!-- Personal Information -->
      <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="fullName" placeholder="Enter your full name" required>
      </div>
      
      <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
          <label for="contactNumber" class="form-label">Your Contact Number</label>
          <input type="tel" class="form-control" name="contactNumber" placeholder="Enter your contact number" required>
      </div>

     
      <br/><br/>

      <!-- Business Information -->
      <h4>Business Information</h4>
      
       <hr class="my-4"> <br/>
      
      <div class="mb-3">
          <label for="businessName" class="form-label">Business Name</label>
          <input type="text" class="form-control" name="businessName" placeholder="Enter business name" required>
      </div>

      <div class="mb-3">
          <label for="streetAddress" class="form-label">Street Address</label>
          <input type="text" class="form-control" name="streetAddress" placeholder="Enter street address" required>
      </div>

      <div class="mb-3">
          <label for="telephone" class="form-label">Telephone Number</label>
          <input type="text" class="form-control" name="telephone" placeholder="Enter telephone number" required>
      </div>

      <div class="mb-3">
          <label for="mobileNumber" class="form-label">Mobile Number</label>
          <input type="text" class="form-control" name="mobileNumber" placeholder="Enter mobile number" >
      </div>

      <div class="mb-3">
          <label for="website" class="form-label">Website</label>
          <input type="text" class="form-control" name="website" placeholder="Enter website URL">
      </div>

      <br/><br/>
      <!-- Submit Button -->
      <button type="submit" class="mt-3 btn btn-primary" name="add">Submit Your Information</button>

      <br/><br/>
  </form>
   
    @endif

  


    @if(isset($page) && $page=="Contact")

   
      @if(isset($msg))
        <div class="alert alert-success"> {{$msg}}  </div>
      @endif
    

    <h3>CONTACT US</h3>
    <br/>

    <div> Please complete the following form to reach out to us, we will reply ASAP.</div>
    <br/>
   

    <form  class="feedback_form" action="/contact" method="post">
      @csrf
      <!-- Personal Information -->
      <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="fullName" placeholder="Enter your full name" required>
      </div>
      
      <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
          <label for="contactNumber" class="form-label">Your Contact Number</label>
          <input type="text" class="form-control" name="contactNumber" placeholder="Enter your contact number" required>
      </div>

     
      <div class="mb-3">
        <label for="contactNumber" class="form-label">Leave Us A Message</label>
        <textarea type="text" class="form-control" name="message" placeholder="Enter your contact number" rows="3" required></textarea>
    </div>
      

      <br/>
      <!-- Submit Button -->
      <button type="submit" name="contact_us" class="mt-3 btn btn-primary">Submit Your Information</button>

      <br/><br/>
  </form>

  <br/>
   
    @endif
    
    
  

 <br/>
 
    <div> 


      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
      
      
      
      
      <style>
      
      .ad_search{
              padding:10px;margin:0px;width:98%;border:solid 1px silver;
          }
      
          .ad_search select {
              height:30px;border:solid 1px silver;padding-left:10px;
          }
      </style>
      
      
      @if(isset($page) && $page!=="Terms" && $page!=="Tenders"  && $page!=="Gazette") 
      
      <div ng-controller="HomeController" class="ng-scope">
      
      
           <!------------------------------- advanced filers ------------------------------------>
           <div class="ad_search">
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
      
      
          </div>  
      <!------------------------------- advanced filters ------------------------------------>
          <br>
      
      
      
          
          <br>
 
      
          
      </div>

      
      @endif
      
      
      
      </div>




      <!-------------------------------------------------------data table------------------------------------------------------>

     
     
           <table id="companiesHome2" class="table table-bordered table-striped" ng-controller="HomeController">
            <thead>
                <tr>
                    <th>Logos</th>
                    <th>Company Name</th>
                    <th>Contacts</th>
                </tr>
            </thead>
            <tbody>
  
            </tbody>
        </table>
      
        
        @if(isset($page) && $page!=="Terms" && $page!=="Tenders"  && $page!=="Gazette") 
          <table id="companiesTable" class="table table-bordered table-striped"  style="font-size:12px;">
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
                                  {{ $company->telephone }}
                              </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>

        
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
                                        "pageLength": 2,         // Number of rows per page
                                        "lengthMenu": [2, 10, 25, 50, 100],
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
              "pageLength": 3,         // Number of rows per page
              "lengthMenu": [3, 10, 25, 50, 100],
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
       
      
      <a href="/company/{{$by_class_one->company_id}}">
        <img src="https://cdn.adslive.com/{{$by_class_one->url}}" style="height:240px;width:100%;margin-bottom:5px;" class="shadow"/>
        </a>

        <br/>
       

       
    
        <br/>
  <h4  style="color:{{$backColor}};"><b>Featured Classifieds</b></h4>

  
  @foreach ($random_class as $rand)
  <a href="/company/{{$rand->company_id}}">   <img src="https://cdn.adslive.com/{{$rand->url}}" style="height: 240px;width:100%;margin-bottom:20px;"  class="shadow"/>  </a> 

  <br/>

  @endforeach


      


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
