<?php 

$amount="0";

if(isset(Session::get('user')[0]->company)){
    $amount="1995";
} else {
    $amount="0";
}

// print_r(Session::get('user'));

// echo Session::get('user')[0]->company;

?>


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
  <div id="logo"></div>
  
  <div class="row" style="margin-top:10px;">
    <div class="col-md-3">
      <a href="/"> <img src="{{URL::asset('logo.png')}}" style="height:40px;margin-top:0px;" /> </a>
    </div>
    <div class="col-md-7">
     
      <div class="menu">
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
     </div>
 


    </div>
    <div class="col-md-2">
     
     {{-- <div class="weather">
       <center>
         <table style="height: 10px !important;">
          <tr>
            <td style="padding-top:7px;">
              <b style="font-size:19px;margin-right:5px;"> <span class="glyphicon glyphicon-shopping-cart"   style="font-size:14px;"></span> R{{$amount}} </b>
            </td>
            <td>|</td>
            <td style="padding-top:7px;">
              <b style="font-size:19px;margin-left:5px;" id="time_">08:52</b>

  
              
            </td>
          </tr>
         </table>
        </center>
     </div> --}}

    </div>
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

      function getWeather(){
        let weather = $(".temp").text(); // Get text of the selected elements
        console.log(weather); // Log the content for debugging
        alert(weather); // Show the text content in an alert
      }


      // setTimeout(getWeather,3000);

</script>


<hr/>


   <!-------------------------Header------------------------->


