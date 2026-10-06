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
  @include('partials.menu')
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
  <!-- <h4  style="color:{{$backColor}};"><b>Select Industry</b></h4> -->

  
  <div class="row">
    <div class="col-md-3">

    @include('partials.leftsidebar')
      


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

      .tablet_view {
        font-size:13px;
    }

    .tablet_view button {
        font-size:13px;
    }

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



@if(isset($page) && $page=="News"  || $page=="Vacancies"  || $page=="Events"  || $page=="Articles") 

<div class="row">
@foreach ($News as $row)


<div class="col-md-4">

<div class="thumbnail"  style="height:405px;">
      <img alt="300x200" src="{{$row->image}}" style="width: 300px; height: 150px;">
      <div class="caption">
      <b style="height:10px;">{{substr($row->title,0,30)}}</b>
      
      
     
      <p style="max-height:140px;margin-block-start:10px">
      
      
      {!!substr($row->excerpt,0,110)!!}
      
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
      <h4 class="modal-title"> <b> {{$row->title}} </b></h4>
   </div>
   <div class="modal-body">
      <img alt="300x200" src="{{$row->image}}" style="width:100%; height:auto;"> <br/><br/>
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
   <p style="margin-block-start:5px;"> <a href="/company/{{$row->id}}" class="btn btn-primary btn-block" style="color:white;"><span class="badge badge-important"></span> View Listing</a>
   
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

      <style>
    @media (max-width: 1024px) {

     .feature_class {
        width:100px;
     }



      
      }
  
  
</style> 

      <div class="col-md-3 ">

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
