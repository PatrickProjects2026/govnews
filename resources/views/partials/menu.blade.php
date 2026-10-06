<?php 

$backColor="#0054a6";  //#0386ae

$amount="0";

if(isset(Session::get('user')[0]->company)){
    $amount="1995";
} else {
    $amount="0";
}

// print_r(Session::get('user'));

// echo Session::get('user')[0]->company;

?>



<!------------------------------------------------------- menu --------------------------------------------------------------->

<style>
.mobile_icon:hover {
  /* background-color:red; */
}

@media (max-width: 768px) {
   
  .mobile_icon:hover {
  /* background-color:red; */
}

.mobile_icon:active {
  /* background-color:red; */
}

}

.fixed_{
  position:fixed;width:100%;z-index:999;
  top:0px;left:0px;right:0px;
  padding-left:10%;padding-right:10%;padding-bottom: 10px;margin-bottom:400px;
  background-color:white;
  box-shadow: 0 2px 2px #092f48;

  /* border-bottom:solid 1px #092f48; */

}


</style>  



<div class="fixed_ ">


{{-- 
<button type="button" class="btn btn-default btn-sm mobile_icon" id="mobile_icon" onclick="menu()">
  <span class="glyphicon glyphicon-menu-hamburger"></span>  
</button>

<button onclick="menu()" style="opacity:0;">
.
</button>   --}}

<script>
    function menu(){
          // alert("click") ;
          $(".mobile_menu").slideToggle(); 
    }
</script>  


<!------------------------------------------------------- menu --------------------------------------------------------------->

<style>
.cart {
  visibility: hidden;
  position: absolute;
  top: 35px;
  right: 0;
  width: 250px;
  background-color: #092f48;
  color: white;
  padding: 10px;
  border-radius: 5px;
  z-index: 999;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

.shop-wrapper:hover .cart {
  visibility: visible;
}

.cart-table {
  width: 100%;
  color: white;
  border-collapse: collapse;
  font-size: 14px;
  margin-bottom: 10px;
}

.cart-table th,
.cart-table td {
  border-bottom: 1px solid #ccc;
  padding: 5px;
  text-align: left;
}

.checkout-btn {
  background-color: #f39c12;
  border: none;
  color: white;
  padding: 6px 12px;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
}


</style>

  <!------------------------------------------row-------------------------------------------------->
  <div class="row" style="padding-top:20px;background-color:white;">
    <div class="col-md-3">
     <a href="/"> <img src="https://www.adslive.com/assets/images/identity.png" style="width:200px;"/><br/> </a>
    
    </div>
    <div class="col-md-9">

      <div class="row">
        <div class="col-md-7"><input type="text" placeholder="Search the website" class="form-control" id="searchText" style="border:solid 1px #092f48;"/></div>
        <div class="col-md-5">
          <a href="/" class="btn btn-default btn-sm" style="background-color:#092f48;color:white"><span class="glyphicon glyphicon-home"></span> Home</a>       
          <a href="/add" class="btn btn-default btn-sm" style="background-color:#092f48;color:white"><span class="glyphicon glyphicon-plus"></span> Post AD</a>             
         
          <div class="shop-wrapper" style="display: inline-block; position: relative;">
            <a href="/shop/Smartphones & Phones" class="btn btn-default btn-sm shop" style="background-color:#092f48;color:white">
              <span class="glyphicon glyphicon-shopping-cart"></span> Shop
            </a>
            
          
            <div class="cart">
@php
$cart = session('cart', []);
$settings = Session::get('user'); 
@endphp


              <table class="cart-table">
                <thead>
                  <tr>
                    <th>Name</th>                                       
                    <th>Qty</th>
                    <th>Price</th> 
                  </tr>
                </thead>
                <tbody>
<?php $total=0; ?>                 
@foreach($cart as $id => $item)
<tr>
  <td>{{substr($item['name'],0,10)}}</td>
  <td>({{ $item['quantity'] }})</td>
  <td>R{{$item['price']}}</td>
</tr>
<?php $total=$total + $item['price']; ?>
@endforeach

<tr><td>TOTAL</td><td></td><td>R{{$total}}</td></tr>

@if(isset($settings[0]->name))
<tr>
  <td><a href="/checkout/yes/{{$settings[0]->name}}/{{$total}}" class="checkout-btn">Clear</a></td>
  <td colspan="2"><a href="/checkout/no/{{$settings[0]->name}}/{{$total}}" class="checkout-btn" style="float:right;">Checkout</a></td>
</tr>
@else 

<tr>
  <td colspan="3">
   <center><b>Please Login to Checkout</b></center>
  </td>
</tr>
@endif
                </tbody>
              </table>

       
            </div>
          </div>
          
          
          <a href="/register_login" class="btn btn-default btn-sm" style="background-color:#092f48;color:white"><span class="glyphicon glyphicon-user"></span> Login</a>
        </div>
      </div>



 <br/>

    </div>
 </div>

 <!------------------------------------------row-------------------------------------------------->


 <script>
  $("#searchText").keypress(function (e) {
    if (e.which === 13) {

      let text=$("#searchText").val();
       // Count words
      let wordCount = text.split(/\s+/).length;

      if(text==="" || text ==="Please elaborate on your search"){
           $("#searchText").attr("placeholder","Please tell me what you looking for.");
      } 
      // else if(text.length < 5){
      //      $("#searchText").val("Please elaborate on your search");
      // }
      else if(wordCount >2){
          window.location="/advanced_search/"+text;
      } 
      else {
           window.location="/search_what/"+text;
      }      

    }
  });
 </script> 
 

<!-------------------------Header------------------------->






 <div id="logo"></div>
  
  <div class="row" style="margin-top:0px;">
    <div class="col-md-12">

      <table >
        <tr>
          <td>

            {{-- <a href="/"> <img src="{{URL::asset('logo.png')}}" style="height:40px;" /> </a> --}}

          </td>
          <td style="padding-left:10%;">

            
     {{-- <div class="menu" style="width:130%">
      <a href="/search_sub/3/Business"> <span class="glyphicon glyphicon-home"></span> &nbsp; Home</a>
      <a href="/Pages/News"> <span class="glyphicon glyphicon-film"></span> &nbsp; News and Media</a>
      <a href="/Pages/Gazette">          <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Gazette</a>     
      <a href="/Pages/Tenders" >         <span class="glyphicon glyphicon-folder-close"></span> &nbsp; Tenders</a>       
      <a href="/Pages/Vacancies">              <span class="glyphicon glyphicon-folder-open"></span> &nbsp; Vacancies</a>           
      <a href="/contact" class="download" style="color: white;"> <span class="glyphicon glyphicon-phone"></span> Contact Us </a>
    </div>

    <div class="mobile_menu">
     <a href="/search_sub/3/Business"> <span class="glyphicon glyphicon-home"></span> &nbsp; Home</a>
     <a href="/Pages/News"> <span class="glyphicon glyphicon-tasks"></span> &nbsp; News and Media</a>
     <a href="/Pages/Gazette">          <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Gazette</a>     
     <a href="/Pages/Tenders" >         <span class="glyphicon glyphicon-folder-close"></span> &nbsp; Tenders</a>       
     <a href="/Pages/Vacancies">              <span class="glyphicon glyphicon-folder-open"></span> &nbsp; Vacancies</a>           
     <a href="/contact" >         <span class="glyphicon glyphicon-phone"></span> Contact Us </a>
   </div> --}}

          </td>
        </tr>

        <tr>
          <td colspan="2" >

            <style>
              .search_report {
                inline-size:auto;block-size:auto;border:solid 1px silver;background-color:white;
                border-radius:0px 0px 10px 10px;padding:5px; position: absolute; 
              }
            </style>

            <center>
           
{{-- 
              <div >

                <div class="search" style="width:60%;margin-left:160px!important;">
                    <table style="width:100%;margin-top:-4px;">
                        <tr>
                            <td style="width:30px">
                                <span class="glyphicon glyphicon-search" style="font-size:25px;margin-left:5px;"></span>
                            </td>
                            <td>
                                <input type="text" placeholder="Search" id="whatQuery" name="what">
                            </td>
                            <td>
                                <button id="search_but">Search</button>
                            </td>
                        </tr>

                        <tr><td colspan="2">
                          <div id="search_report" 
                          style="  
                          inline-size:462px;block-size:auto;border:solid 1px silver;background-color:white;
                          border-radius:0px 0px 10px 10px;padding:5px;display:none;
                          " 
                          ></div>
                        </td></tr>
                    </table>    
                </div>
            
            
              </div> --}}


              <script>
                $(document).ready(function(){

                  

                    $("#search_but").click(function() {

                      $("#search_but").html(" Wait  <img src='https://www.icegif.com/wp-content/uploads/2023/07/icegif-1258.gif' style='block-size:10px;'/>");

                          let txt=$("#whatQuery").val();
                          let len=txt.length;

                          if(len<4){
                            $("#search_report").html("Please be more specific on your search.");
                          } else {
                            // window.location="/advanced_search/"+txt;
      $("#search_report").show();

      $.ajax({
        url: "/advanced_search/" + encodeURIComponent(txt), // API URL
        type: "GET", // Request type
        success: function(response) {
        console.log(response); // Log response
        $("#search_report").html(response);
        $("#search_but").html("Search");

      },
        error: function(error) {
        console.error("Error fetching data:", error);
        $("#search_report").html(error);
        $("#search_but").html("Search");
      }
      });

                          }

                         
                    });

                });
              </script>

            </center>

          </td>
        </tr>
      </table>  



    </div>

    

    

    
 </div>

 

 



</div>
   <!-------------------------Header------------------------->

   
   
   
<div style="height: 20px;"> </div>


  