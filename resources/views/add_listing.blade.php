<!DOCTYPE html>
<html lang="en">
    @include('partials.header')
    
    
   

    
<?php 

$backColor="#2d8644";  //{{$backColor}};

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

   


<style>
.but1 {
  background-color:{{$backColor}};color:white;border-radius:5px;
  padding:3px;padding-left:20px;
}

</style>  




<!----------------------------------------------------------------------------- form ----------------------------------------------------------------------------------->


   
@if(isset($msg))
    <div class="alert alert-success"> {{$msg}}  </div>
    @endif


    <h3>REGISTER</h3>

    <div> Please complete the following form to register your business on the Gauteng Government Online™ of South Africa.</div>
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

  

<!----------------------------------------------------------------------------- form ----------------------------------------------------------------------------------->

  <br/> 
 <br/>



 
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


 
    <div> 

     
      
      
      
      </div>




     

      
     

      

      


      </div>

      <div class="col-md-3" style="margin-top:0px;">
      

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
