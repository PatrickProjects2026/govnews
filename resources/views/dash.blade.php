<?php 

use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
$stats = new DashController();
$home  = new HomeController();


$keywords=$stats->keywords($cid);
$year=$year_;

// if($ses=="set"){
// $stats->increment_dashboard_views($cid);
// }

$company=$stats->get_company($cid);

$my_company=$company;

$statz=$stats->get_stats($cid,"".date("Y-m"));

$get_notify=$stats->get_notify($cid);

$hour=$stats->get_hour($cid);
$hour1=$stats->get_hour($cid);
$keywords=$stats->keywords($cid);
//$keywords2=$stats->keywords2($cid);



$performance2=$stats->performance($cid,$year);
$countries=$stats->countries($cid,$year);
$desk_mobile=$stats->desk_mobile($cid,$year);
$browser=$stats->browser($cid,$year);


//no need for the below objects
//$performance=$stats->performance($cid,date("Y"));
//$rating=$stats->get_rate($cid);
//$s_keywords=$stats->s_keywords($cid,date("Y"));
//$operating_sys=$stats->operating_sys($cid,date("Y"));
//$search_engine=$stats->search_engine($cid,date("Y"));
//$ebook=$stats->ebook($cid,date("Y"));

$client_messages=$stats->get_messages($cid);


$message_count=$stats->messages_count($cid);


$logo=$stats->get_logo($cid);
$user=$stats->get_user($company['email']);

// echo $user['status'];

$logo_url="https://signup.government.co.za/img/classified.png";
foreach($logo as $logo){
  // print_r($logo);
  $logo_url= $logo['url'];
}

$cdn_logo=$stats->cdn_logo($cid);
$cdn_logo=$cdn_logo[0];

if($logo_url){
  $logo_url=$logo_url;
}
else if($cdn_logo){
  $logo_url="http://cdn.adslive.com/".$cdn_logo;
}


$logo=$logo_url;

 
      // $logo="https://signup.government.co.za/img/classified.png";
      // if($my_company['logos']){
      //    $logo="https://cdn.adslive.com/".$my_company['logos'];
      // }
    

// echo $cdnlogo;

//$Favorite=$stats->my_stats($cid,"Favorite");
//$Like=$stats->my_stats($cid,"Like");

// $Views=$stats->my_stats($cid,"Views");

$Views=$stats->my_views($cid,$year);
$Gallery=$stats->my_gallery($cid);
$Doc=$stats->my_docs($cid);


$classified=$stats->classified($cid);
$viewpage_banners=$stats->viewpage_banners($cid);
$promo_banners=$stats->promo_banners($cid);

$full_banner=$stats->full_banner($cid);
$half_banner=$stats->half_banner($cid);
$quarter_banner=$stats->quarter_banner($cid);
$double_banner=$stats->double_banner($cid);


$get_products=$stats->get_products($cid);
//------------------------------------------------------  enquiries  ------------------------------------------
$get_enquiries=$stats->get_enquiries($cid);
$product_cats=$stats->product_cats("20");

// print_r($client_messages);



//------------------------------------------------------  enquiries  ------------------------------------------

// $my_company=$stats->company($cid);


?>

<script src="https://kit.fontawesome.com/f98a133843.js" crossorigin="anonymous"></script>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Stats Dashboard.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">


<script src="/js/angular.min.js"></script> 
<script src="/js/angular-route.min.js"></script> 
<script src="/js/jquery.js"></script>
<script src="/js/app.js"></script>	


<style>
  .ps__thumb-y{
    background-color:black!important;
  }
  </style>







<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
  p, a, li, b {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
  }
</style>


<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "Home.htm",
    controller:"mainContr"
  })
  .when("/Home", {
    templateUrl : "Home.htm",
    controller:"mainContr"
  })  
  .when("/Form", {
    templateUrl : "Form.htm",
    controller:"mainContr"
  }).when("/Artwork_V", {
    templateUrl : "Artwork_V.htm",
    controller:"mainContr"
  })
  .when("/Ad", {
    templateUrl : "Ad.htm",
    controller:"mainContr"
  })
  .when("/Hours", {
    templateUrl : "Hours.htm",
    controller:"mainContr"
  })  
  .when("/Details", {
    templateUrl : "Details.htm",
    controller:"mainContr"
  })  
  .when("/Ratings", {
    templateUrl : "Ratings.htm",
    controller:"mainContr"
  })  
  .when("/Social", {
    templateUrl : "Social.htm",
    controller:"mainContr"
  }).when("/Gallery", {
    templateUrl : "Gallery.htm",
    controller:"mainContr"
  }).when("/Products", {
    templateUrl : "Products.htm",
    controller:"mainContr"
  }).when("/Dox", {
    templateUrl : "Dox.htm",
    controller:"mainContr"
  }).when("/Performance", {
    templateUrl : "Performance.htm",
    controller:"mainContr"
  })  
  .when("/Enquiries", {
    templateUrl : "Performance.htm",
    controller:"mainContr"
  }).when("/Notification", {
    templateUrl : "Notification.htm",
    controller:"mainContr"
  }) 
  .when("/Artwork", {
    templateUrl : "Artwork.htm",
    controller:"mainContr"
  });
});



function toggleAccordion(button, id) {
  // Get the parent accordion
  var accordion = button.parentElement.parentElement;
  
 
  // Toggle the content display of the accordion
  var content = accordion.querySelector(".accordion-content");
  if (content.style.display === "block") {
    content.style.display = "none";
  } else {
    content.style.display = "block";

    // alert("there:"+id);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "mark_message_as_read.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText); // You can handle the response here
        } else {
          console.error("Error:", xhr.status);
        }
      }
    };
    xhr.send("message_id=" + id);

    console.log('The id is:'+ id);

  }
}


app.controller("mainContr",function($scope,$routeParams){


  $("#btn_reload").change(function(){
    let year=$("#btn_reload").val();
    let cid=$("#cid").val();
    // alert(year);
    window.location="/dash/"+cid+"/"+year+"#/Ratings";

  });

  


  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);



      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Views'],
['January',314],['February',300],['March',329],['April',299],['May',58],        
        ]);

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };


        
        var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart2'));
        chart2.draw(data, options);

       

      }


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Browser', 'Views'],
            ["Chrome",3734],["Safari",2222],["MS Edge",1753],["Other",981],["Ghost Browser",649],["Firefox",553],["Opera",509],
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


     
 

      

      
  
});




document.querySelector('title').textContent ="{{$my_company['name']}} - Stats Dashboard | Dotcom Africa ";

</script>
<style> 

.title {
  background-color: #5d5d5d; color: white;padding:3px;border-radius:0px 10px 10px 0px;
}

hr.line {
  border:solid 1px silver;
}

@media only screen and (max-width: 600px) {
  .navbar-nav{
    display:none;
  }
}


@media only screen and (max-width: 854px) {
  .windowsapple{
    display:none;
  }
}



</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>    

<!-- <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#Ad">Keywords</a></li>
      <li><a href="#Hours">Working Hours</a></li>
      <li><a href="#Ratings">Views </a></li> -->


</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<body  ng-app="myApp">


<div class="chat-box fixed-positioning">
  <div class="chat-header">
    <span style="width:75%;">Leave a message</span>
    <button>Show</button>
    <!-- <button id="cloze" style="margin-left:3px;">Close</button> -->
  </div>
  <div class="chat-content">
    <p class="chat-title">Want to upgrade your Advertisement package? Fill in this form and we will get back to you.</p>
    <form  class="chat-form" action="#" method="post">
      @csrf
      <div>
        <label for="name">Your Name <span>*</span></label>
        <input type="text" id="name" name="name" value="{{$my_company['name']}}" required>
      </div>
      <div>
        <label for="email">E-mail <span>*</span></label>
        <input type="email" id="email" name="email" value="{{$my_company['email']}}"  required>
      </div>
      <div>
        <label for="subject">Subject <span>*</span></label>
        <input type="text" id="subject" name="subject" value="Adslive Dashboard Enquiry" required>
      </div>
      <div>
        <label for="message">Message <span>*</span></label>
        <textarea name="message" id="message"></textarea>
      </div>
      <button type="submit" style="background-color:#092f48;color:black;" name="send_msg">Leave a message</button>
    </form>
      </div>
</div>  


<?php 


if(isset($_POST["send_msg"])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $message = [              
              'color'        =>"#0054a6",
              'site'         =>"Adslive™ ",
              'page'         =>'contact',
              'fullName'     =>$name,
              'email'        =>$email,
              'contactNumber'=>"0",
              'message'      =>$message
  ];

  $home->email_table($name,$email,$message,"patrick.c@dotcom.africa");


}

?>


<style> 
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: arial;
}

.fixed-positioning {
  position: fixed;
  bottom: 0;
  right: 0;
  z-index: 1;
}

.chat-box {
  width: 350px;
/*   border-radius: 3px; */
  box-shadow: -10px 10px 50px -10px rgba(0,0,0,0.4);
  background: #fff;
  overflow: hidden;
  z-index:99999 ;
}

.chat-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  color: #fff;
  background: #092f48;
}

.chat-header button {
  color:#fff;
  background: transparent;
  padding: 3px;
  border: 1px solid #fff;
  border-radius: 3px;
  cursor:pointer;
}

.chat-content {
  padding: 0 15px;
  max-height: 0;
  overflow: hidden;
  transition: 1s ease-in-out;
}

.chat-content.active {
  padding: 15px 15px;
}

.chat-title {
  margin-bottom: 15px;
  text-align: center;
}

.chat-form {
  padding: 15px;
}

.chat-box input,
.chat-box textarea,
.chat-box label,
.chat-box button[type=submit] {
  display: block;
  width: 100%
}

.chat-box input,
.chat-box textarea {
  padding: 10px 15px;
  border-radius: 3px;
  border: 1px solid #b7b5b5;
  margin-bottom: 15px;
}

.chat-box textarea {
  min-height: 50px;
}

.chat-box label {
  color: #928f8f;
  font-size: 13px;
  margin-bottom: 2px;
}

.chat-box label span {
  color: #f00;
}

.chat-box button[type=submit] {
  -webkit-appearance: none;
  border-radius: 2px;
  background-clip: padding-box;
  background-color: #aecf5f!important;
  box-shadow: 0 2px 0 rgba(0,0,0,.1), inset 0 -3px 0 rgba(129,163,48,.3);
  font-size: 14px;
  color: #fff;
  padding: 9px 6px 11px;
  width: 100%;
  border: 0;
  cursor: pointer;
}


</style>

<script> 

let chatBox = document.querySelector(".chat-box");
let toggleButton = document.querySelector(".chat-header button")
let chatContent = document.querySelector(".chat-content");

toggleButton.addEventListener('click', () => {
  if (chatContent.style.maxHeight){
    chatContent.style.maxHeight = null;
    chatContent.classList.remove('active');
    toggleButton.innerText = "Show"
  } else {
    chatContent.style.maxHeight = (chatContent.scrollHeight + 30) + "px";
    chatContent.classList.add('active');
    toggleButton.innerText = "Hide"
  } 
})


function myClick(message){
//alert('hi');
//document.getElementById('showhide').click();
//console.log('showhide clicked');


let chatBox = document.querySelector(".chat-box");
let toggleButton = document.querySelector(".chat-header button")
let chatContent = document.querySelector(".chat-content");


  
    chatContent.classList.remove('active');
    toggleButton.innerText = "Show"
    chatContent.style.maxHeight = 10 + "px";


    function waitOneSecond(callback) {
  setTimeout(callback, 1000); // 1000 milliseconds = 1 second
}



waitOneSecond(function() {
  
  chatContent.style.maxHeight = (chatContent.scrollHeight + 30) + "px";
  chatContent.classList.add('active');
  toggleButton.innerText = "Hide";
  document.getElementById('subject').value=message;
});



}


myClick('Adslive Directory Enquiry');


</script>


    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow"  style="background-color:#092f48;">
            <div class="app-header__logo" style="background-color:#092f48;">
                
            <!-- <div class="logo-src"></div> -->
            <!-- <span class="glyphicon glyphicon-home"></span>&nbsp;  -->

            <style> 
            .hidee{
                visibility:hidden;
            }
@media screen and (max-width: 992px) {
    .hidee{
        visibility:visible;
    }
}
            </style>

{{-- https://www.adslive.com/assets/images/identity.png --}}

           <a href="#Home"> <img src="/adslive-white.png" style="height:40px;margin-left:20px;"/> </a>

                <div class="ml-auto header__pane">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic hidee" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav hidee">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <!-- <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button> -->
                </span>
            </div>    <div class="app-header__content" style="background-color:#e7f9f1;">
                <div class="app-header-left">

                <p style="color:#092f48;font-size:15px;font-weight:600;line-height:20px;">WELCOME TO YOUR DASHBOARD  </p>
                    <!-- <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div> -->
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <!-- <a href="#Ratings" class="nav-link"> -->
                                <!-- <span class="glyphicon glyphicon-stats"></span> -->
                               <!-- <span style="font-size:23px;"> LSF Brokers</span> -->
                            <!-- </a> -->
                        </li>
                        <!-- <li class="btn-group nav-item">
                            <a href="#Hours" class="nav-link">
                                <span class="glyphicon glyphicon-briefcase"></span>
                                Hours
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#Ad" class="nav-link">
                                <span class="glyphicon glyphicon-wrench"></span>
                                Settings
                            </a>
                        </li> -->
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="pr-0 header-btn-lg">
                        <div class="p-0 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <!-- <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""> -->
                                            {{-- <span class="glyphicon glyphicon-user"></span> --}}
                                            <!-- <i class="ml-2 fa fa-angle-down opacity-8"></i> -->
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="#Home" tabindex="0" class="dropdown-item" >Home</a>
                                            <a href="#Ad" tabindex="0" class="dropdown-item">Update Keywords</a>
                                            <a href="#Social" tabindex="0" class="dropdown-item">Update Social Media</a>
                                            <a href="#Gallery" tabindex="0" class="dropdown-item">Upload Gallery</a>
                                            <a href="#Dox" tabindex="0" class="dropdown-item">Upload Documents</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="#Ratings" tabindex="0" class="dropdown-item">STATISTICS</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="ml-3 widget-content-left header-user-info">
                                    <div class="widget-heading">
                                                                       </div>
                                    <div class="widget-subheading">
                                                                        </div>
                                </div> --}}
                                <div class="ml-3 widget-content-right ">

                                 <a type="button" class="btn btn-default btn-sm"  href="#/Home">
                                    <span class="glyphicon glyphicon-user"></span> {{$my_company['name']}}    
                                 </a>

                                 <a type="button" class="btn btn-default btn-sm" href="#/Enquiries"> 
                                    <span class="glyphicon glyphicon-envelope"></span>  Customer Enquiries <span class="badge">{{mysqli_num_rows($get_enquiries)}}</span>
                                 </a>

                                  <a type="button" class="btn btn-default btn-sm"  href="#/Notification">
                                    <span class="glyphicon glyphicon-comment"></span> Notifications  <span class="badge">{{count($get_notify);}}</span>
                                  </a>

                                  <a type="button" class="btn btn-default btn-sm" href="/register_login">
                                    <span class="glyphicon glyphicon-off"></span> Logout 
                                  </a>

                                <!-- show-toastr-example -->
                                    {{-- <a href="https://signup.government.co.za/sign_in.php?ref=lsf@wol.co.za" class="p-1 btn-shadow btn btn-primary btn-sm ">
                                        <span class="glyphicon glyphicon-off"></span>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning" style="visibility:hidden;">
                <i class="glyphicon glyphicon-cog"></i>
            </button>

            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">

                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="p-0 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="mr-3 widget-content-left">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="p-0 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="mr-3 widget-content-left">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="p-0 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="mr-3 widget-content-left">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="ml-auto btn-pill btn-shadow btn-wide btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                       
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="ml-auto btn-pill btn-shadow btn-wide active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo" style="background-color:#092f48;">
                        <div class="logo-src"></div>
                        <div class="ml-auto header__pane">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar " style="background-color:#092f48 ;">

<style> 
.vertical-nav-menu li  {
  height:40px;;border-radius: 5px;
}
.vertical-nav-menu  a li {
  padding-top:10px;padding-bottom:5px;padding-left:20px;
}

.vertical-nav-menu li b {
  font-size:12px;
    color:white;
    font-weight:350;
    text-transform:UPPERCASE;
}


.vertical-nav-menu li:hover   {
background-color:#e7f9f1;color:black;
}
.vertical-nav-menu li:hover  a {
background-color:#e7f9f1;color:black;

}
.vertical-nav-menu li:hover b {
    color:black;
}
</style>

                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <!-- <li class="app-sidebar__heading">Dashboard</li> -->
<a href="#Home" class="" style="text-decoration:none;">   <li>                               
<b>    <span class="glyphicon glyphicon-th"></span>
Home </b>
</li> </a> 



<a href="#Artwork_V" class="" style="text-decoration:none;"> <li>
<b>    <span class="glyphicon glyphicon-picture"></span>
View Artwork </b>
</li>  </a>


                              <!-- <li class="app-sidebar__heading">STATS</li> -->
 <a href="#Ratings" style="text-decoration:none;"><li>
<b>  <span class="glyphicon glyphicon-signal"></span>
View Stats Performance  </b>
</li></a> 

                                <!-- <li class="app-sidebar__heading">AD KEYWORDS</li> -->
<a href="#Ad" style="text-decoration:none;">   <li>
<b>  <span class="glyphicon glyphicon-list-alt"></span>
Advert Keywords </b>
</li>    </a>
                                    
                            
                                <!-- <li class="app-sidebar__heading">BUSINESS HOURS</li> -->
<a href="#Hours" style="text-decoration:none;">   <li>
<b> <span class="glyphicon glyphicon-time"></span>
Operating Hours </b>
</li></a> 

                                <!-- <li class="app-sidebar__heading">SOCIAL MEDIA</li> -->
<a href="#Social" style="text-decoration:none;"> <li>                                  
<b>   <span class="glyphicon glyphicon-comment"></span>
Update Social Links  </b>                                
</li>    </a>  
                                <!-- <li class="app-sidebar__heading">GALLERY</li> -->
<a href="#Gallery" style="text-decoration:none;"> <li>                                    
<b>  <span class="glyphicon glyphicon-picture"></span>
Upload Gallery  </b>  <span class="red-dot">  {{mysqli_num_rows($Gallery);}} </span>                          
</li>  </a> 
                                <!-- <li class="app-sidebar__heading">DOCUMENTS</li> -->
<a href="#Dox"style="text-decoration:none;">  <li>
<b>   <span class="glyphicon glyphicon-file"></span>
Upload Documents  </b>    <span class="red-dot">  {{mysqli_num_rows($Doc);}} </span>
</li>    </a> 

<a href="#Products"style="text-decoration:none;">  <li>
   <b>   <span class="glyphicon glyphicon-file"></span>
   Products  </b>   <span class="red-dot">  {{mysqli_num_rows($get_products);}} </span>
   </li>    </a> 

  

  


<a href="#Enquiries" style="text-decoration:none;">
  <li>
    <b><span class="glyphicon glyphicon-file"></span> &nbsp; Customer Enquiries </b>
          <span class="red-dot">  {{mysqli_num_rows($get_enquiries);}} </span>
      </li>
</a>

<a href="/company/{{$my_company['id']}}"style="text-decoration:none;" target="_blank">  <li>
<b>   <span class="glyphicon glyphicon-file"></span>
View Listing  </b>
</li>    </a> 
    
               

<style>

.red-dot {
  width: 15px;
  height: 15px;
  background-color: orange;
  border-radius: 50%;
  display: inline-block;
  margin-left: 5px; /* Adjust this margin as needed */
  font-size:12px;
  color:white;
  text-align:center;
  margin-left:auto;
  margin-right:20px;

  float:right;
}

  .vas a{
color:white;
  }
</style>


                            </ul>
                        </div>


                        <a class="refer"  href="https://government.co.za/home/company/{{$my_company['id']}}" target="_blank" style='display:block;text-align:left; margin-left:35px;margin-bottom:-10px;'> <img  src="https://signup.medicaldirectory.co.za/images/view_listing.png" style='width:150px;margin-left:auto; margin-right:auto;'/> </a>
                        <a class="refer" style='display:block;text-align:left;margin-top:20px;margin-left:35px;margin-bottom:-10px;'> <img  onclick="myClick('Submit listing to Google')" src="https://signup.medicaldirectory.co.za/images/submit_listing.png" style='width:150px;margin-left:auto; margin-right:auto;'/> </a>
                        <a class="refer" style='display:block;text-align:left;margin-top:20px;margin-left:35px;margin-bottom:-10px;'> <img  onclick="myClick('Boost Listing on Google')" src="https://signup.medicaldirectory.co.za/images/boost_listing.png" style='width:150px;margin-left:auto; margin-right:auto;'/> </a>
                       <a class="refer" style='display:block;text-align:left;margin-top:20px;margin-left:35px;margin-bottom:20px;'> <img  onclick="myClick('Download Certificate')" src="https://signup.government.co.za/images/DOWNLOAD-CERTIFICATE.jpg" style='width:150px;margin-left:auto; margin-right:auto;margin-bottom:20px;border-radius:10px;'/> </a>

                       

                      <div class="vas" style="margin-left:35px;color:white;font-size:12px;">
                 <h5 style="font-weight:bold;">Value-Added Services:</h5>
                       <ul style="margin-left:20px;">
                       <a href="" onclick="myClick('Create Website')" ><li>Create Website</li></a>
                       <a href="" onclick="myClick('Register website address')" ><li>Register website address</li></a>
                       <a href="" onclick="myClick('Create digital business card')" ><li>Create digital business card</li></a>
                       <a href="" onclick="myClick('Create QR code')" ><li>Create QR code</li></a>
                       <a href="" onclick="myClick('Create social media page')" ><li>Create social media page</li></a>
                       <a href="" onclick="myClick('Send bulk message')" ><li>Send bulk message</li></a>
                       <a href="" onclick="myClick('Advertising Tips')" ><li>Advertising Tips</li></a>
                      </ul>
                      </div>




                      <div  class="vas" style="margin-left:35px;margin-top:20px;color:white;font-size:12px;">
                         <h5 style="font-weight:bold;">Need Help?</h5>
                      <a href="tel:+27113336000" style="text-decoration:none;"> <span class="glyphicon glyphicon-phone-alt"></span> &nbsp; +27 11 333 6000 </a><br/>
                      <a href="mailto:yes@adslive.com" style="text-decoration:none;"> <span class="glyphicon glyphicon-envelope"></span> &nbsp; yes@adslive.com </a><br/>
                      <a href="https://www.adslive.com" style="text-decoration:none;"> <span class="glyphicon glyphicon-globe"></span> &nbsp; www.adslive.com</a><br/>




                      </div>

                      <div style="display:inline-block;color:white;margin-left: 35px;margin-top:20px;">

                      <a href="https://www.facebook.com/DotcomAfrica/"><img src="https://signup.medicaldirectory.co.za/assets/images/facebook-white.svg" alt="" style="width:15x;height:15px;margin-right:10px; "></a>
                      <img src="https://signup.medicaldirectory.co.za/assets/images/instagram-white.svg" alt="" style="width:15px;height:15px;margin-right:10px; ">
                      <a href="https://www.youtube.com/channel/UC6Fs_OAAloWYVNZs-mYrIYA" ><img src="https://signup.medicaldirectory.co.za/assets/images/youtube-white.svg" alt="" style="width:15px;height:15px;margin-right:10px; "></a>
                      <p style="color:white;display:inline;">#dotcomafrica</p>

                      </div>







                    </div>
                </div>    
                
                <div class="app-main__outer">
                    <div class="app-main__inner" style="background-color:#e7f9f1;">

                  
                <div ng-view></div>




                    <div class="app-wrapper-footer" >
                        <div class="app-footer" style="background-color:#777;">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                        <a href="https://dotcomafrica.com" target="_blank"><img src="https://www.dotcomafrica.com/images/dotcom_africa_small_logo.svg" style="height:40px;"/></a>

                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="app-footer-middle">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="tel:+27113336000" class="nav-link">
                                            <small class="glyphicon glyphicon-earphone"></small>
                                            +27 11 333 6000
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="mailto:info@dotcom.africa" class="nav-link">
                                            <small class="glyphicon glyphicon-envelope"></small>
                                            info@dotcom.africa
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://dotcomafrica.com" target="_blank"class="nav-link">
                                            <small class="glyphicon glyphicon-globe"></small>
                                            www.dotcomafrica.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
                  
                  
                  
                  
                  </div>


                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script></body>
</html>


<script type="text/ng-template" id="Form.htm">


<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                    </div>
                                    <div>WELCOME {{$my_company['name']}}                                        <div class="page-title-subheading"> {{$my_company['address']}}                                   </div>
                                    </div>
                                </div>


                             


                        </div>  
<br/>

<div class="row">
                      
                     
                        </div>
                 

<div class="mb-3 card " style="padding:10px;">

<center>


<div class="alert alert-success" role="alert">
View Your Product
</div>







<div class="topbuttonsholder">
<a class="btn btn-xs btn-success" href="https://mediakit.government.co.za/" target="_blank"> <i class="glyphicon glyphicon-book" aria-hidden="true"></i>  View MediaKit</a>
<a class="btn btn-xs btn-success" href="https://government.co.za/about" target="_blank"><i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>   Watch Video</a>             
<a class="btn btn-xs btn-success" href="https://government.co.za/digitalcopy/#page=2" target="_blank"><i class=" glyphicon glyphicon-eye-open" aria-hidden="true"></i>   View 2021/2022 Publication</a>             
<!-- <a class="btn btn-xs btn-primary" href=""><i class="fa fa-download" aria-hidden="true"></i> Download PDF Form</a>              -->
<a class="btn btn-xs btn-success" href="https://government.co.za" target="_blank"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i>   Web Search</a>             
</div>

<br/>
<div class="alert alert-dark" role="alert">
  Your Form has been moved or dont exist.
</div>


</center>

</script>

<script type="text/ng-template" id="Artwork_V.htm">
<div class="mb-3 card " style="padding:10px;">




<center>

<div  style="margin-top:10px;background-color:#092f48;width:835px;padding:10px;color:white;">
<b>BANNER ADS</b>
</div>
<br/><br/>

<table style="width:400px;height:900px;" >
<tr>
<td> 
   <span style="color:#092f48"> <b>Classified Banner</b> (300px X 250px) </span>

<img src="<?php echo $classified; ?>" style="width:260px;height:250px;border:solid 2px silver;"  class="art_table"/>
</td>
<td style="padding-left:3px;"> 
<span style="color:#092f48"> <b>View Page Advert</b> (468px X 60px ) </span>

<img src="<?php echo $viewpage_banners; ?>" style="height:70px;border:solid 2px silver;margin-bottom:5px;"   class="art_table"/> <br/>

<span style="color:#092f48"> <b>Promotional Banner</b> (1125px X 345px) </span>

<img src="<?php echo $promo_banners; ?>" style="height:156px;width:100%;border:solid 2px silver;"   class="art_table"/>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr >
    <td colspan="2" style="margin-top:3px;background-color:#092f48;">

    <div style="background-image:url('https://signup.government.co.za/img/PAGE.png');height:600px;  background-repeat: no-repeat;background-size: 100% 100%;  background-position: center; ">

      <table style="width:100%;" > 
         <tr>
         <td>
         <img src="<?php echo $full_banner; ?>" class="art_table" style="margin-top:46px;margin-left:5px;height:auto;width:392px;height:524px;border:solid 1px silver;margin-bottom:5px;" /> <br/>
         </td>
         <td>
         <img src="<?php echo $half_banner; ?>" class="art_table" style="height:250px;width:390px;margin-right:34px;margin-top:36px;margin-left:5px;" /><br/>
         
         <img src="<?php echo $quarter_banner; ?>" class="art_table" style="height:250px;margin-top:16px;float:right;margin-right:30px;" />
         </td>
         </tr>
         </table>


</div>

<br/><br/><br/><br/>

    <table>
<tr>
<td>
<p style="color:white;font-size:11px;text-align:center;">Double Page Advert</p>
<img src="<?php echo $double_banner; ?>" class="art_table" style="margin-left:5px;width: 790px;margin-top:16px;float:left;margin-right:30px;" >
<p style="color:white;font-size:11px;text-align:center;">Double Page Advert</p>
</td>
</tr>
</table>

<!--------------------------------- POPUP ----------------------------------------->
<div style="position:absolute;background-color:white;top:2%;width:600px;height:auto;border:solid 1px silver;z-index:999;margin-left:100px;" class="card pop1"> 

<div class="alert alert-dark" role="alert" style="width:100%;">
Classified Banner Stats
  <span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;float:right;" ></span>
</div>

<center>
   <img src="<?php echo $classified; ?>" style="width:auto;height:300px;border:solid 1px silver;" />
   </center>
   
   <?php if($classified=="https://signup.government.co.za/img/classified.png"){ ?>
       <div class="alert alert-danger" role="alert" style="width:100%;"> Not Available on your Package </div>
   <?php } else {?>   
       <div id="curve_chart" style="width:100%; height: 300px"></div>
   <?php } ?>
   
</div>
<br/><br/>

<!--------------------------------- POPUP ----------------------------------------->

<!--------------------------------- POPUP ----------------------------------------->
<div style="position:absolute;background-color:white;top:2%;width:600px;height:auto;border:solid 1px silver;z-index:999;margin-left:100px;" class="card pop2"> 

<div class="alert alert-dark" role="alert" style="width:100%;">
Viewpage Banner Stats
  <span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;float:right;" onclick="hide_pop('pop2')"></span>
</div>


<center>
<img src="img/viewpage.png" style="width:90%;height:auto;border:solid 1px silver;" />
</center>
    <div class="alert alert-danger" role="alert" style="width:100%;"> Not Available on your Package </div>

</div>
<br/><br/>

<!--------------------------------- POPUP ----------------------------------------->

<!--------------------------------- POPUP ----------------------------------------->
<div style="position:absolute;background-color:white;top:2%;width:600px;height:auto;border:solid 1px silver;z-index:999;margin-left:100px;" class="card pop3"> 

<div class="alert alert-dark" role="alert" style="width:100%;">
Promo Banner Stats
  <span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;float:right;" onclick="hide_pop('pop3')"></span>
</div>

<center>
<img src="img/promo.png" style="width:90%;height:auto;border:solid 1px silver;" />
</center>

    <div class="alert alert-danger" role="alert" style="width:100%;"> Not Available on your Package </div>

</div>
<br/><br/>

<!--------------------------------- POPUP ----------------------------------------->



<!--------------------------------- POPUP ----------------------------------------->
<div style="position:absolute;background-color:white;top:2%;width:600px;height:auto;border:solid 1px silver;z-index:999;margin-left:100px;" class="card pop4"> 

<div class="alert alert-dark" role="alert" style="width:100%;">
Full Banner Stats
  <span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;float:right;" onclick="hide_pop('pop4')"></span>
</div>

<center>
<img src="img/full.png" style="width:90%;height:auto;border:solid 1px silver;" />
</center>

    <div class="alert alert-danger" role="alert" style="width:100%;"> Not Available on your Package </div>

</div>
<br/><br/>

<!--------------------------------- POPUP ----------------------------------------->



<!--------------------------------- POPUP ----------------------------------------->
<div style="position:absolute;background-color:white;top:2%;width:600px;height:auto;border:solid 1px silver;z-index:999;margin-left:100px;" class="card pop5"> 

<div class="alert alert-dark" role="alert" style="width:100%;">
Half Banner Stats
  <span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;float:right;" onclick="hide_pop('pop5')"></span>
</div>

<center>
<img src="img/half.png" style="width:90%;height:auto;border:solid 1px silver;" />
</center>

    <div class="alert alert-danger" role="alert" style="width:100%;"> Not Available on your Package </div>

</div>
<br/><br/>

<!--------------------------------- POPUP ----------------------------------------->




<!--------------------------------- POPUP ----------------------------------------->
<div style="position:absolute;background-color:white;top:2%;width:600px;height:auto;border:solid 1px silver;z-index:999;margin-left:100px;" class="card pop6"> 

<div class="alert alert-dark" role="alert" style="width:100%;">
Quater Banner Stats
  <span class="glyphicon glyphicon-remove-circle" style="cursor:pointer;float:right;" onclick="hide_pop('pop6')"></span>
</div>

<center>
<img src="" style="width:50%;height:auto;border:solid 1px silver;" />
</center>

   
<div id="curve_chart6" style="width:100%; height: 300px"></div>

</div>
<br/><br/>

<!--------------------------------- POPUP ----------------------------------------->





    </td>
</tr>
</table>
</script>






<style> 
.art_table {
    /* border:solid 10px silver; */
}

.art_table:hover {
    /* border:solid 10px red;  */
    cursor:pointer;
}

.pop1 {
    visibility:hidden;
}

.pop2 {
    visibility:hidden;
}
.pop3 {
    visibility:hidden;
}
.pop4 {
    visibility:hidden;
}
.pop5 {
    visibility:hidden;
}
.pop6 {
    visibility:hidden;
}
</style>

<script> 
function hide_pop(pop){
    $("."+pop).css("visibility","hidden");
}
function show_pop(pop){
    $("."+pop).css("visibility","visible");
}
</script>






<script type="text/ng-template" id="Products.htm">

   <div class="app-page-title">
                               <div class="page-title-wrapper">
                                   <div class="page-title-heading">
                                       <div class="page-title-icon">
                                          <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                       </div>
                                       <div>WELCOME {{$my_company['name']}} <div class="page-title-subheading">{{$my_company['address']}}                                      </div>
                                       </div>
                                   </div>
   
      </div>  
   <br/>
   
   <div class="row">
  
      <div class="col-md-12">

       
<style>
  .product-card {
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    margin-bottom: 20px;
    transition: all 0.2s ease;
  }

  .product-card:hover {
    transform: translateY(-4px);
  }

  .product-image {
    height: 180px;
    object-fit: cover;
    width: 100%;
  }

  .product-body {
    padding: 15px;
  }

  .product-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
  }

  .product-status {
    font-size: 0.85rem;
    color: #888;
  }

  .product-price {
    font-weight: bold;
    color: #28a745;
  }
</style>


<div class="container mt-4">
  <div class="row">
    


    @if(mysqli_num_rows($get_products)>0)

    <!-- Product card (repeat this in loop) -->
    <?php  while ($row = mysqli_fetch_assoc($get_products)) : ?>
    <div class="col-md-3">
      <div class="product-card">
        <img src="/<?php echo $row['url']; ?>" alt="Product Image" class="product-image">
        <div class="product-body">
          <div class="product-title"><?php echo htmlspecialchars($row['name']); ?></div>

<div class="mb-1"><?php echo htmlspecialchars(substr($row['descr'],0,10)); ?></div>          
<input type="checkbox" ng-model="isVisible{{$row['id']}}" /> More Details

<div ng-show="isVisible{{$row['id']}}">
  <div class="mb-1"><?php echo htmlspecialchars($row['descr']); ?></div>
</div>
          
          <div class="mb-1 product-price">R<?php echo htmlspecialchars($row['price']); ?></div>
          <div class="mb-1">Quantity: <?php echo htmlspecialchars($row['quantity']); ?></div>
          <div class="product-status">Status:  <?php echo htmlspecialchars($row['status']); ?></div>

        </div>
      </div>
    </div>



    <!-- /Product card -->
    <?php endwhile; ?>

    @else

    <p>
      <b>NO PRODUCTS ADDED </b> 
      <br/>Please add products for sale on the following form.
    </p>
    @endif 



  </div>
</div>

      





      </div>
    <div class="col-md-12" >
   
   <!------------------------------------------------ form -------------------------------------------------------->
   


   <form action="#" method="post" enctype="multipart/form-data" style="width:90%;border:solid 1px silver;border-radius:5px;margin-bottom:10px;">
      @csrf



<div class="container mt-4">
    <div class="mb-3">
      <label for="productId" class="form-label">Thumbnail</label>
      <input type="file" class="form-control" id="productId" name="fileToUpload1" style="width:90%;" required>
    </div>

    <div class="mb-3">
      <label for="productName" class="form-label">Name</label>
      <input type="text" class="form-control" id="productName" name="name" style="width:90%;" required>
    </div>

    <div class="mb-3">
      <label for="productDescr" class="form-label">Description</label>
      <textarea class="form-control" id="productDescr" name="descr" rows="3" style="width:90%;" required></textarea>
    </div>

    <div class="mb-3">
      <label for="productPrice" class="form-label">Price</label>
      <input type="number" class="form-control" id="productPrice" name="price" step="0.01" style="width:90%;" required>
    </div>

    <div class="mb-3">
      <label for="productQty" class="form-label">Quantity</label>
      <input type="number" class="form-control" id="productQty" name="quantity"  style="width:90%;" value="0" required>
    </div>

    <div class="mb-3">
      <label for="productStatus" class="form-label">Product Category</label>
      <select class="form-select form-control" id="productStatus" name="cat" style="width:90%;" required>
        <option value="">Select Category</option>
        @foreach($product_cats as $cat)
        <option value="{{ $cat['name'] }}">{{ $cat['name'] }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="productStatus" class="form-label">Status</label>
      <select class="form-select form-control" id="productStatus" name="status" style="width:90%;" required>
        <option value="">Select status</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
        <option value="archived">Archived</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary" name="add_photo1" style="margin-bottom:10px;">Save Product</button>
  
    <br/>
</div>


   </form>
   
   <!------------------------------------------------ form -------------------------------------------------------->
   
   </div>
   
   </div>
   
   </script>

   

<?php 

if(isset($_POST["add_photo1"])){



$target_dir = "products/";
$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
} else {
  // echo "Sorry, there was an error uploading your file.";
}
$cname    = $company['name'];
$name     = $_POST["name"];
$descr    = $_POST["descr"];
$price    = $_POST["price"];
$quantity = $_POST["quantity"];
$status   = $_POST["status"];
$cat      = $_POST["cat"];

$stats->add_product($cid,$target_file,$name,$descr,$price,$quantity,$status,$cat);

// echo "<script>";
// echo "location.reload();";
// echo "</script>";

echo '<center><div class="alert alert-primary" role="alert"> Product Photo Uploaded Successfully. </div> </center>';

   $stats->notify($cid,"Product Photo Uploaded Successfully.");  


}

?>


<script type="text/ng-template" id="Gallery.htm">





<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                    </div>
                                    <div>WELCOME {{$my_company['name']}}                                       <div class="page-title-subheading">{{$my_company['address']}}                                      </div>
                                    </div>
                                </div>


                             


                        </div>  
<br/>

<div class="row">
                   
                     
                        </div>
                 
<div class="mb-3 card " style="padding:10px;">

<table style="width:80%;">
<tr>
    <td> <h4><span class="glyphicon glyphicon-camera" ></span>UPLOAD GALLERY</h4></td>
    <td> <a href="#Artwork" style="color:#222"><h4 style="float:right;"><span class="glyphicon glyphicon-camera" ></span>UPLOAD LOGO</h4></a></td>
</tr>
</table>

<hr/>




<center>

   <div>
   <?php  
   //print_r($Gallery);
   
   foreach($Gallery as $pic){
      $rid=$pic['id'];
   echo '<div class="col-md-3">';   
   echo '<table style="height:200px;width:220px;margin:10px;display:inline;border:solid 1px silver;"><tr><td>';
   echo '<a href="delete-gallery-item.php?rid='.$rid.'&cid='.$cid.' "> <div style="background-color:red;width:20px;height:20px;color:white;text-align:center;position:relative;top:20px;left:0px;box-shadow: 1px 1px 5px black;cursor:pointer;">X</div></a>';
   echo '<img src="/'.$pic['url'].'" style="width:220px;height:180px;border:solid 1px silver;"/>';
   echo '</td></tr><tr><td style="background-color:#337ab7;margin-top:-8px;text-align:center;color:white;">';
   echo $pic['name'];
   echo '</td></tr></table>';
   echo '</div>';
   }
   
   ?>
   <br/><br/>
   </div>
</center>


 <!-- <p class="title"> <span class="glyphicon glyphicon-menu-right"></span> Welcome to your gallery page.</p> -->

<hr/>
 <div style="padding:10px;padding-top:3px;">


<!------------------------------------------------ form -------------------------------------------------------->

<form action="#" method="post" enctype="multipart/form-data" style="width:100%;">
   @csrf
<input type="text" name="name" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:40%;margin:3px;" placeholder="File Name"/>
<input type="file" name="fileToUpload" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:40%;margin:3px;" /><br/>

<input type="submit" value="Upload Now" onclick="alert('Image will be live once approved')" name="add_photo" style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:81%;margin:3px;cursor:pointer"/> <br/>
<b id="upload_rep"></b><br/>

</form>

<!------------------------------------------------ form -------------------------------------------------------->

</div>

</div>

</script>




<?php 

if(isset($_POST["add_photo"])){


$name=$_POST["name"];
$target_dir = "gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
} else {
  // echo "Sorry, there was an error uploading your file.";
}
$cname=$company['name'];
$stats->add_gallery($cid,$name,$cname,$target_file);

// echo "<script>";
// echo "location.reload();";
// echo "</script>";

echo '<center><div class="alert alert-primary" role="alert"> Gallery Photo Uploaded Successfully. </div> </center>';

$stats->notify($cid,"Gallery Photo Uploaded Successfully.");  


}

?>




<script type="text/ng-template" id="Dox.htm">




<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                    </div>
                                    <div>WELCOME {{$my_company['name']}}                                        <div class="page-title-subheading">{{$my_company['address']}}                                       </div>
                                    </div>
                                </div>


                          


                        </div>  
<br/>

<div class="row">
                       
                     
                        </div>
                 
<div class="card"  style="padding:10px;">

 <h4><span class="glyphicon glyphicon-camera" ></span>UPLOAD DOCUMENTS</h4>
 <!-- <p class="title"> <span class="glyphicon glyphicon-menu-right"></span> Welcome to your documents page.</p> -->


 <div style="padding:10px;">

<?php  

foreach($Doc as $pic){

echo '
<a  href="/'.$pic['url'].'" target="_blank" class="btn btn-primary" style="width:99%;text-align:left;margin-bottom:2px;">
 <span class="badge badge-light" style="float:left;"> <img src="https://toppng.com/uploads/preview/pdf-icon-11549528510ilxx4eex38.png" style="height:10px;width:10px;"/> </span>
 <span style="padding-left:10px;">'.$pic['name'].'</span>

</a>';
}

?>

<hr/>
<!------------------------------------------------ form -------------------------------------------------------->

<form action="#" method="post" enctype="multipart/form-data">
   @csrf
<input type="text" name="name" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:40%;margin:3px;" placeholder="File Name"/>
<input type="file" name="fileToUpload" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:40%;margin:3px;" /><br/>

<input type="submit" value="Upload Now" name="add_doc" style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:81%;margin:3px;cursor:pointer"/> <br/>
<b id="upload_rep"></b><br/>

</form>

<!------------------------------------------------ form -------------------------------------------------------->

</div>

</div>

</script>




<?php 

if(isset($_POST["add_doc"])){


$name=$_POST["name"];
$target_dir = "documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
} else {
  // echo "Sorry, there was an error uploading your file.";
}
$stats->add_doc($cid,$name,$target_file);

// echo "<script>";
// echo "location.reload();";
// echo "</script>";

echo '<center><div class="alert alert-primary" role="alert"> Document Uploaded Successfully. </div> </center>';
$msg_="Document Uploaded Successfully.";
echo '<script>alert("Document Uploaded Successfully.");</script>';  

$stats->notify($cid,"Document Uploaded Successfully.");  

}

?>



<script type="text/ng-template" id="Home.htm">



                  


<div class="row">
 <div class="col-md-12 col-lg-12">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .tags{
    padding-top:10px;
    padding-bottom:10px;
    padding-left:15px;
    padding-right:15px;
color: white !important;
font-size:13px;
border-radius:10px;
width:auto;
max-width:200px;
font-weight:bold;

  }
  a:hover{
    text-decoration:none;
  }

  .download_software :hover{
    background-color:#cc9658!important;
  }

  .tags:hover, .refer:hover{
cursor: pointer;
  }

  </style>


@if(isset($msg_))
<div class="alert alert-primary" style="font-weight:bold;width:100%;">Report</div>
<br/><br/>
@endif


<div class="mb-3 card" style="box-shadow:none; background-color:#e7f9f1!important;padding:0;margin:0; display:flex;flex-direction:row;justify-content:space-between;background-color:none!important;" >                                  


<a class='tags' style='background-color:#092f48;' href="#Enquiries">  <i class="fa fa-comments" aria-hidden="true"></i> Enquiries  &nbsp; <span class="red-dot">  {{mysqli_num_rows($get_enquiries)}} </span> </a>

<a class='tags' style='background-color:#ec431c;' href='#Ratings' ><i class="fa fa-history" aria-hidden="true"></i>

View History</a>
<a href='https://www.government.co.za/digitalcopy/index.html' class='tags' style='background-color:#004290;'><i class="fa fa-book" aria-hidden="true"></i>
 View eBook</a>



</div>




<div class="mb-3 card" style="border-radius:10px;" >                                  
<div class="card-body" style="padding-top:0;margin-top:0;background-color:#092f48;border-radius:10px;display:flex;justify-content:space-between;height:200px;">

<div style="width:30%;height:250px; padding:20px;">
<img src="https://signup.government.co.za/assets/images/windows and mac.png" style="height:135px;">
</div>

<div style="width:40%; height:250px;color:white;padding:20px;">
<p style='font-weight:400px;font-size:13px;'>GOVERNMENT DESKTOP APPLICATION</p>
<ul style='margin-left:15px;font-size:12px;'>
  
<li> Windows / IOS compatible</li>
<li> Perfect for sales leads</li>
<li> Purely offline, no internet / Wi-Fi</li>
<li> Search, sort and add favourites</li>
<li> Export leads onto excel</li>
<li> Access to marketing tools / specials</li>
<li> 250k active software users</li>

</ul>

</div>

<div style="width:30.3%; height:250px;padding:20px;text-align:center;margin-top:40px;">

<a class='download_software' style='padding:10px 20px 10px 20px ;background-color:#d2900c;border-radius:10px; color:white;display:block;text-decoration;' href="https://government.co.za/govsoftware">DOWNLOAD SOFTWARE</a><br>
<a style='color:white; display:block;text-decoration:none;' href='https://government.co.za'>www.government.co.za</a>


</div>





</div>
</div>




<!-- _________________________________________________________________________________________________________________ -->
<style>
  .social_links_home{

width:220px;
height:160px;
float:right;

display:inline-block;
padding:30px;
}


.logo_name{
width:200px;
height:160px;
float:left;

display:inline-block;
}

</style>
<div class="mb-4 card" style="box-shadow:none; background-color:#e7f9f1!important;padding:0;margin:0; background-color:none!important;display:flex;flex-direction:row;justify-content:space-between;" >                                  



<div class="logo_name">
<img src="{{$logo}}"  style="border:solid 1px silver;border-radius: 10px;width: 160px; height:119px;"/>    
<br/>

<p style="color:#2a2e31;font-size:17px;font-weight:700;line-height:20px;margin-top:10px;width:80%;">{{$my_company['name']}}</p>
</div>



<div class="social_links_home" style="position:relative;bottom:0;padding:0;padding-top:70px;padding-right:40px;">
<p style="color:#2a2e31;font-size:13px;font-weight:600;line-height:20px;margin-top:10px;">Social Media</p>

<div style="width:100%; display:flex; justify-content:space-between; flex-direction:row;">
<img src="https://signup.medicaldirectory.co.za/assets/images/facebook.svg" alt="" style="width:35px;height:35px; ">
<img src="https://signup.medicaldirectory.co.za/assets/images/twitter.svg" alt="" style="width:35px;height:35px; ">
<img src="https://signup.medicaldirectory.co.za/assets/images/instagram.svg" alt="" style="width:35px;height:35px; ">
<img src="https://signup.medicaldirectory.co.za/assets/images/youtube.svg" alt="" style="width:35px;height:35px; ">
</div>

</div>









</div>


<!-- _______________________________________________________________________________________________________________ -->



 <div class="row">





                            <div class="col-md-12 col-lg-12 clientdetails">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                         <span style="margin-left:19px;"> Details</span>
                                        </div>
                                        <div class="btn-actions-pane-right">
                                            <div class="nav">
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content card-body">
                                      
                                    <form action="#" method="post">

                                       @csrf



              <div class="row">
                <br/>
                <div class="col-sm-3">
                  <p class="mb-0 details">Business Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="name" value="{{$my_company['name']}}"></p>
                </div>
              </div>

             

            
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 details">Address 1</p> 
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="address" value="{{$my_company['address']}}"></p>
                </div>
              </div>


             

             

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 details">Telephone</p> 
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="telephone" value="{{$my_company['telephone']}}"></p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 details">Mobile</p> 
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="mobile" value="{{$my_company['mobile']}}"></p>
                </div>
              </div>


              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 details">Fax</p> 
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="fax" value="{{$my_company['fax']}}"></p>
                </div>
              </div>


            
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 details">Email Address</p> 
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="email" value="{{$my_company['email']}}"></p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 details">Website</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0 text-muted"><input type="text" class="form-control" name="website" value="{{$my_company['website']}}"></p>
                </div>
              </div>

            
             
             

             


              <div class="row">
              
                <div class="col-sm-12">

                


                <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0"></p>
                </div>
                <div class="col-sm-9" style="padding:5px;">


                <input type="hidden" class="form-control" name="cid" value="76688227">

                
                <input type="Submit" name="save_details" value="Update Details" style="background-color:#092f48;margin-left:0;border:none" class="btn btn-primary" onclick="alert('Changes will be made live once approved')">

            <!-- <a  href="https://medicaldirectory.co.za/home/company/76688227" class="btn btn-primary" style="background-color:#29ade4;margin-left:0;" >View Listing</a> -->
           
                </div>
              </div>

            <br/>

                </div>
              </div>
              

</form>
        <a href="" name="middle" id="middle"></a>                                
                                    </div>
                                </div>
                            </div>
                        </div>


<!-- added by shelden -->


<style>
  .clientdetails .row{
    margin:10px;
  }

  .details{
    font-weight:bold;
  }
  </style>
<div class="row">




<div class="col-md-12  col-lg-12" id="location">
<div class="mb-3 card">
<div class="card-header-tab card-header">
<div class="card-header-title">Location</div>
</div>
<div class="tab-content card-body">
<div class="mapouter">
<div class="gmap_canvas"><iframe style="width:100%;height: 250px;" id="gmap_canvas" src="https://maps.google.com/maps?q={{$my_company['address']}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>   <style>.mapouter{position:relative;text-align:right;height:250px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:100%;}</style></div></div>
</div>
</div>
</div>


</div>


<!-- ________________________________________________ -->

            

                        
<!------------------------------------------------------------------------->


<div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="mb-3 card widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Keywords </div>
                                                <div class="widget-subheading">Your added keywords</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <a class="btn btn-default btn-sm" href="#Ad" style="font-size:11px;"> <span class="glyphicon glyphicon-plus"></span> View All Keywords</a>
                                            </div>
                                            
                                        </div>
                                <br/>        
                                        <table style="width:100%;">

                                          <?php


                                          foreach($keywords as $word){
                                            $word=$word['tags'];
                                          }
                                          $arrword=explode(',',$word);

                                          $num= count($arrword);
                                          if($num>7) { $num=7; }
                                          
                                          for ($x = 0; $x < $num; $x++) {
                                            echo '<tr><td style="width:95%;">';
                                            echo '<b style="background-color:#3a5f8b;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;text-align:center;">'.$arrword[$x].'</b>';
                                            echo '</td><td  style="width:5%;">';
                                            echo '<a type="hidden" name="todelete" href=""><img style="margin-left:5px;width:30px;height:30px;"src="https://government.co.za/stats/yes.png"></a>';
                                          
                                            
                                            echo '</td> </tr>';
                                            
                                          }
                                          
                                          ?>
                                          
                              </table>

                                    </div>
                                    
                                
                                </div>
                              
                             
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mb-3 card widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Operating Hours</div>
                                                <div class="widget-subheading">Update Working Hours</div>
                                            </div>
                                            <div class="widget-content-right">
                                            <a class="btn btn-default btn-sm" href="#Hours" style="font-size:11px;"> <span class="glyphicon glyphicon-plus"></span> Add More</a>
                                           
                                            </div>
                                        </div>
                                        

                                        <table style="width:100%;">
                                          <tr><td>
                                          <br/>
                                          <?php
                                          //print_r($hour);
                                          $hour1=explode(",",$hour1[0]);
                                          for($i=0;$i<count($hour1);$i++){
                                          if($hour1[$i]){
                                          echo '<b style="background-color:#3a5f8b;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;text-align:center;">'.$hour1[$i].'</b>';
                                          }
                                          
                                          }
                                          ?>
                                          
                                          
                                          </td></tr>
                                          </table>


                                    </div>
                                 
                                </div>
                          
                            </div>

                            <div class="col-md-6 col-xl-4">
                              <div class="mb-3 card widget-content">
                                  <div class="widget-content-outer">
                                      <div class="widget-content-wrapper">
                                          <div class="widget-content-left">
                                              <div class="widget-heading">Documents</div>
                                              <div class="widget-subheading">Upload Your Documents</div>
                                          </div>
                                          <div class="widget-content-right">
                                          <a class="btn btn-default btn-sm" href="#Dox" style="font-size:11px;"> <span class="glyphicon glyphicon-plus"></span> Add More</a>
                                         
                                          </div>
                                      </div>
                                      

                                      <table style="width:100%;">
                                        <tr><td>
                                        <br/>
                                    
                                        <?php  

foreach($Doc as $pic){

echo '
<a  href="/'.$pic['url'].'" target="_blank" class="btn btn-primary" style="width:99%;text-align:left;margin-bottom:2px;">
 <span class="badge badge-light" style="float:left;"> <img src="https://toppng.com/uploads/preview/pdf-icon-11549528510ilxx4eex38.png" style="height:10px;width:10px;"/> </span>
 <span style="padding-left:10px;">'.$pic['name'].'</span>

</a>';
}

?>
                                        
                                        </td></tr>
                                        </table>


                                  </div>
                               
                              </div>
                        
                          </div>

                        
                      
        </div> <!------------------------------------------------------------------------->


        <div class="row">
            <div class="card" style="width:98%;margin-left:10px;">
                  <a class="btn btn-default btn-sm" href="#Gallery" style="font-size:11px;width:110px;margin:3px;"> <span class="glyphicon glyphicon-plus"></span> Update Gallery</a>
                                        
       
                  <br/>
<center>
<?php  
//print_r($Gallery);

foreach($Gallery as $pic){
   $rid=$pic['id'];
echo '<div class="col-md-3" style="margin-bottom:10px;">';   
echo '<a href="#/Gallery"><table style="height:200px;width:220px;margin:10px;display:inline;border:solid 1px silver;"><tr><td>';
echo '<a href="delete-gallery-item.php?rid='.$rid.'&cid='.$cid.' "> <div style="background-color:red;width:20px;height:20px;color:white;text-align:center;position:relative;top:20px;left:0px;box-shadow: 1px 1px 5px black;cursor:pointer;">X</div></a>';
echo '<img src="/'.$pic['url'].'" style="width:220px;height:180px;border:solid 1px silver;"/>';
echo '</td></tr><tr><td style="background-color:#337ab7;margin-top:-8px;text-align:center;color:white;">';
echo $pic['name'];
echo '</td></tr></table></a>';
echo '</div>';
}

?>
<br/><br/><br/>
</div>
</center>

</div>





</script>

 

<?php 

if(isset($_POST["save_details"])){
 
  $cid=$_POST["cid"];
 $name=$_POST["name"];
 $email=$_POST["email"];
 $old_mobile=$_POST["mobile"];
 $old_telephone=$_POST["telephone"];
 $old_fax=$_POST["fax"];
 $website=$_POST["website"];
 $address=$_POST["address"];
                   
 
 $mobile = str_replace(' ', '', $old_mobile);
 $telephone = str_replace(' ', '', $old_telephone);
 $fax = str_replace(' ', '', $old_fax);
 


$datetime=date("Y-m-d h:i:s A");
 $stats->tempupdate($cid,$name,$email,$mobile,$telephone,$fax,$website,$address,$datetime);
 
 //echo $cid."<br/>".$name."<br/>".$email."<br/>".$mobile."<br/>".$telephone."<br/>".$fax."<br/>".$website."<br/>".$address;

 $stats->notify($cid,"The company info has been added, will be updated after approval.");  
 $msg_="The company info has been added, will be updated after approval.";
 
}


// if(isset($_POST["save_details"])){






//   //$stats->save_temp_details($cid);
// // echo"<script>";
// // echo"window.alert('posted');";
// // echo"</script>";
// }







?>





<script type="text/ng-template" id="Ad.htm">




<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                    </div>
                                    <div>WELCOME {{$my_company['name']}}                                       <div class="page-title-subheading">{{$my_company['address']}}                                     </div>
                                    </div>
                                </div>


                          


                        </div>  
<br/>

<div class="row">
                          
                     
                        </div>
                 
<div class="mb-3 card widget-content">
 

  


   <table style="width:100%;">


      <?php
      
      foreach($keywords as $word){
        $word=$word['tags'];
      
      }
      $arrword=explode(',',$word);
      
      for ($x = 0; $x < count($arrword); $x++) {
        echo '<tr><td style="width:95%;">';
        echo '<b style="background-color:#3a5f8b;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;text-align:center;">'.$arrword[$x].'</b>';
        echo '</td><td  style="width:5%;">';
        echo '<a type="hidden" name="todelete" onclick="alert(\'We have received your request to delete a keyword. Changes will be made live once approved\')" href="deltempkeywords.php?ref='.$cid.'&delete='.$arrword[$x].'"><img style="margin-left:5px;width:30px;height:30px;"src="https://government.co.za/stats/no.png"></a>';
      
        
        echo '</td> </tr>';
        
      }
      
      ?>
      
      
      
      
      </table>



</div>



<form method="post" action="#" class="mb-3 card widget-content">
   @csrf
<br/><br/>
<table style="width:100%;">
<tr>
<td colspan="2"><input type="text"  ng-model="keywords" name="keywords" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Keyword"/></td>
<!-- <td><input type="text" ng-model="location" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:150px;margin:3px;" placeholder="Country/Region/City"/></td> -->
</tr>
<tr>
    <td  colspan="2">
      <input type="hidden" name="cid" value="{{$my_company['id']}} "/>
<input type="submit" name="addnow" onclick="alert('We have received your request to add a keyword. Changes will be made live once approved')"value="Add Now" style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;"/> 
<!-- <a style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;text-align:center;border:solid 1px black;" name="toadd" href="addkeywords.php?ref='.$cid.'&toadd='.$add.'"> Add now</a> -->

</td>
</tr>
<tr>
    <td  colspan="2">
    <p><b style="margin:3px;">Free Listings support only 4 keywords.</b></p>
   </td>
</tr>  
</table>



<br/><br/>


<b id="word_rep"></b><br/>
</form>
<br/>

</script>

<?php 

if(isset($_POST["addnow"])){
//  $word=implode(', ', $keywords).",".$_POST["keywords"];

// Run the SQL query to fetch tags for the company
// $keywords = mysqli_query($conn, "SELECT name FROM tags WHERE company_id = $ref");
if($_POST['keywords']){


$keywords1 = [];

// Loop through the result set to extract tag names
while ($row = mysqli_fetch_assoc($keywords)) {
    $keywords1[] = $row['name'];
}

// Add the new keyword from user input
$word = implode(', ', $keywords1);
if (!empty($_POST['keywords'])) {
    $word .= ', ' . htmlspecialchars($_POST['keywords'], ENT_QUOTES);
}

// Show result in a safe JavaScript alert
// echo '<script>alert("' . addslashes($word) . '");</script>';


 $stats->word($cid,$word,"Durban");

// echo "<script>";
// echo "location.reload();";
// echo "</script>";

$stats->notify($cid,"Keywords Added, will show after approval.");  
$msg_="Keywords Added, will show after approval.";

} else {

echo '<script>alert("Please Add the a keyword.");</script>';

}



}

?>


<script type="text/ng-template" id="Hours.htm">



<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                    </div>
                                    <div>WELCOME {{$my_company['name']}}                                        <div class="page-title-subheading">{{$my_company['address']}}                                    </div>
                                    </div>
                                </div>


                              


                        </div>  
<br/>

<div class="row">
                          
                     
                        </div>
                 
<div class="mb-3 card widget-content">

<table style="width:100%;">
 <tr><td>
 <br/>

 <?php

$hour=explode(",",$hour[0]);
for($i=0;$i<count($hour);$i++){
if($hour[$i]){
echo '<b style="background-color:#3a5f8b;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;text-align:center;">'.$hour[$i].'</b>';
}

}
?>

<br/>
 </td></tr>
 <tr><td>
 

 <form action="#" method="post">

   @csrf

<select name="days" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:49%;margin:3px;" >
<option value="MONDAY" selected>MONDAY</option><option value="TUESDAY">TUESDAY</option><option value="WEDNESDAY">WEDNESDAY</option><option value="THURSDAY">THURSDAY</option>
<option value="FRIDAY">FRIDAY</option><option value="SATURDAY">SATURDAY</option><option value="SUNDAY">SUNDAY</option>
</select>

<select name="times" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:49%;margin:3px;" >
<option value="6AM-6PM" selected>6AM-6PM</option><option value="7AM-5PM">7AM-5PM</option><option value="7AM-4PM">7AM-4PM</option><option value="8AM-4PM">8AM-4PM</option>
<option value="9AM-5PM">9AM-5PM</option><option value="12AM-6PM">12AM-6PM</option><option value="12AM-7PM">12AM-7PM</option><option value="CLOSED">CLOSED</option>
</select>
<br/><br/>
<input type="hidden" value="{{$my_company['id']}}" name="cid">

<input type="submit" value="Add Now" name="add_hours" style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:99%;margin:3px;"/> <br/><br/>
<b id="hour_rep"></b><br/><br/>




</form>


</td></tr>
</table>



</div>
</script>



<?php  

if(isset($_POST["add_hours"])){
    $days=$_POST["days"];
    $times=$_POST["times"];
    $cid=$_POST["cid"];
    $time=$days.":".$times;
        
    //$hours=$stats->get_hour($cid);


   // $hours=$stats->get_hour($my_company['id']);
   //$parts = array_filter(explode(",", $hours)); // removes empty values
   //$time=$time.",".$hours[0];

   $stats->hour($cid,$time);  

   // echo "<div style='padding-left:400px'>".print_r($hours)."</div>";
   $stats->notify($cid,"Opperating hours added.");  
   $msg_="Opperating hours added.";
}
    
   


?>




<script type="text/ng-template" id="Details.htm">
<h2>Details</h2>
<p class="title"> <span class="glyphicon glyphicon-menu-right"></span> Welcome to Details Page.</p>

 

</script>

<script> 





</script>


<script type="text/ng-template" id="Ratings.htm">




<div class="row">


   <!--
<span style="margin-left:20px;background-color:white;width:96%;border-radius:0px;">
<div class="col-md-4" style="text-align:left;">
        <img src="img/google_ana.png" style="height:50px;"/>
        </div>

<div class="col-md-4" style="text-align:left;font-size:30px;">
<a href="https://government.co.za/" target="_blank" style="color:#746c5e;">government.co.za </a>
</div>

<div class="col-md-4" style="text-align:right;">
 <img src="img/log.png" style="height:40px;"/> <br/>Log Out &nbsp;&nbsp; 
</div>

</span>
-->




<br/><br/>



<span style="margin-left:20px;background-color:white;border:solid 1px silver;width:96%;border-radius:0px;">
<div class="col-md-12" style="text-align:left;">

<table style="width:100%;">
<tr>
    <td>
 
     
    <img src="{{$logo}}"  style="border:solid 1px silver;width: 150px;height:100px;margin:15px;"/>    
    </td>
    <td style="padding-left:20px;width:58%;">
        <b style="color:#092f48;">{{$my_company['name']}}</b><br/>
        <b style="color:#746c5e;">Listing Statistics</b>
    </td>
    <td>


        <div style="border:solid 1px #222;border-radius:10px;padding:10px;background-color:#092f48;color:white;margin-left:20px;margin-right:20px;">
   
         <?php if($user['date']){ 
             //echo user['date']; 
             echo "01/01/".$year_;
         } else { echo "01/01/".$year_; } echo " - ".date("d/m/").$year_; ?>   
      </div>
    </td>
</tr>
</table>

</div>

</div>

</span>

<br/>

<div style="margin-left:5px;border:solid 1px silver;background-color:white;width:98.5%;border-radius:0px;padding:5px;height:auto;">
<br/>
<div style="text-align:center;width:97.5%;background-color:#746c5e;margin-left:15px;border-radius:10px;color:white;padding:5px;"> <span class="glyphicon glyphicon-stats"></span> Listing Hits 

<div style="display:inline-block;">
       <select style="padding:2px;color:white;background-color:#092f48;border:none;border-radius:4px;" id="btn_reload">
         <option value="2017" <?php if($year=="2017"){ echo 'selected="selected"';}?>>2017</option> 
         <option value="2018" <?php if($year=="2018"){ echo 'selected="selected"';}?>>2018</option> 
         <option value="2019" <?php if($year=="2019"){ echo 'selected="selected"';}?>>2019</option> 
         <option value="2020" <?php if($year=="2020"){ echo 'selected="selected"';}?>>2020</option> 
         <option value="2021" <?php if($year=="2021"){ echo 'selected="selected"';}?>>2021</option> 
         <option value="2022" <?php if($year=="2022"){ echo 'selected="selected"';}?>>2022</option> 
         <option value="2023" <?php if($year=="2023"){ echo 'selected="selected"';}?>>2023</option> 
         <option value="2024" <?php if($year=="2024"){ echo 'selected="selected"';}?>>2024</option> 
         <option value="2025" <?php if($year=="2025"){ echo 'selected="selected"';}?>>2025</option> 
       </select>
      </div>

</div>


<div style="width:97.5%;margin-left:15px;">

<div class="row"><!------------------------------ ROW ------------------------------------->
<!-- <b>Unique Visitors</b> -->
<div class="col-md-4">
    <br/>

<!-- <b>TOTAL VIEWS</b>     -->
<!-- <div style='padding:2px;border-radius:8px;background-color:#092f48;width:45px;text-align:center;color:white;float:right;margin-right:10px;'>1300</div>  -->
<br/>

<div style='width:100%!important;margin-top:45px;'><img src='https://signup.government.co.za/img/total.png' style='height:30px;width:30px;margin-bottom:4px;'/> 
      <div style='width:120px;display:inline-block;padding-bottom:2px;'> Total Hits</div> 
        <div style='padding:4px;border-radius:8px;background-color:#092f48;min-width:45px;text-align:center;color:white;float:right;margin-right:25px;'><?php echo $Views['views'];?></div> </div><br/>




        <?php 

        //print_r($countries);
        $other=0;
        while($row = $countries->fetch_array(MYSQLI_ASSOC)) {
        
              if($row["country"]=="South Africa"){
              echo "<div style='width:100%!important;'><img src='https://signup.government.co.za/img/national.png' style='height:30px;width:30px;margin-bottom:4px;'/> 
              <div style='width:120px;display:inline-block;padding-bottom:2px;'> ".$row["country"]."</div> 
                <div style='padding:3px;border-radius:8px;background-color:#092f48;min-width:45px;text-align:center;color:white;float:right;margin-right:25px;'>". round($row["total"])."</div> </div><br/>";
              }
              else {
                $other+=$row["total"];
              }
        
            }
        
        ?>

<div style='width:100%!important;'><img src='https://signup.government.co.za/img/international.png' style='height:30px;width:30px;margin-bottom:4px;'/>    
   <div style='width:120px;display:inline-block;padding-bottom:2px;'> International</div> 
        <div style='padding:3px;border-radius:8px;background-color:#092f48;min-width:45px;text-align:center;color:white;float:right;margin-right:25px;'>368</div> </div><br/>


</div>
<div class="col-md-8" style="text-align:center;">




  
<div id="curve_chart2" style="width:620px; height: 280px;float:right;"></div>

</div>
</div> <!------------------------------ ROW ------------------------------------->

<table style="width:100%;">
<tr>
<td style="40%'">



</td>
<td style="80%'">

</td>
</tr>
</table>



<?php 
//print_r($desk_mobile);

$mobile=0;
$desktop=0;
foreach($desk_mobile as $phone)
{
    //print_r($phone);
    //echo $phone['desk_mobile'];
    if($phone['desk_mobile']=="Desktop"){
        $desktop=$phone['total'];
    }

    if($phone['desk_mobile']=="Mobile"){
        $mobile=$phone['total'];
    }


   

    $total=intval($desktop)+intval($mobile);
    //echo $total;
}

$temp=0;

if($desktop>$mobile)
{  
$temp=$desktop;
$desktop=$mobile;
$mobile=$temp;
}



?>


<div style="text-align:center;width:100%;background-color:#746c5e;border-radius:10px;color:white;padding:5px;margin-bottom: 30px;margin-top:30px;"> <span class="glyphicon glyphicon-stats"></span> All-Time Device Usage & Browser Statistics </div>

<div class="row"> <!------------------------------ ROW ------------------------------------->
<div class="col-md-4">
<table style="width:125%;">
        <tr>
          <td>
            <img src="https://signup.government.co.za/img/desktop.png" style="height:100px;"/><br/>
            <span style="margin-left:10px;">
            <b>  <?php echo $desktop ?> Desktop</b>
            </span>
          </td>
          <td>
            <img src="https://signup.government.co.za/img/mobile.png" style="height:100px;"/><br/>
            <span>
              <b><?php echo $mobile ?>  Mobile</b>
            </span>
          </td>
        </tr>
      </table>
</div>
<div class="col-md-8">



    <div id="piechart" style="width: 600px; height: 150px;"></div>




</div>
</div> <!------------------------------ ROW ------------------------------------->

</div>

</div>



   </div>


 </div>


</div>


</script>












<script type="text/ng-template" id="Social.htm">



<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <a href="#Home"> <span class="glyphicon glyphicon-menu-right"></span> </a>
                                    </div>
                                    <div>WELCOME {{$my_company['name']}}                                       <div class="page-title-subheading">{{$my_company['address']}}                                   </div>
                                    </div>
                                </div>


                             


                        </div>  
<br/>

<div class="row">
                       
                     
                        </div>
                 
<div class="mb-3 card " style="padding:10px;">
<h4><span class="glyphicon glyphicon-comment"></span> SOCIAL MEDIA</h4>
<p class="title"> <span class="glyphicon glyphicon-menu-right"></span> Please update your Social Media.</p>

 
<!-----START----->
<table>
   <tr><td>
   <input type="text" value="<?php echo $company['facebook']; ?>" id="facebook_link" style="width:20px;visibility:hidden;display:inline;"/>
   </td>
   <td>
   <input type="text" value="<?php echo $company['twitter']; ?>" id="twitter_link" style="width:20px;visibility:hidden;display:inline;"/>
   </td>
   <td>
   <input type="text" value="<?php echo $company['youtube']; ?>" id="youtube_link" style="width:20px;visibility:hidden;display:inline;"/>
   </td>
   <td>
   <input type="text" value="<?php echo $company['linkedin']; ?>" id="linkedin_link" style="width:20px;visibility:hidden;display:inline;"/>
   </td>
   <td>
   <input type="text" value="<?php echo $company['instagram']; ?>" id="instagram_link" style="width:20px;visibility:hidden;display:inline;"/>
   </td>
   </table>





<form action="#" method="post">
 @csrf
   <table style="width:100%;">
      <tr>
      <td><img src="https://signup.government.co.za/img/facebook.png" style="height:30px;" /></td>
      <td>
      <input type="text" name="facebook" value="<?php echo $company['facebook']; ?>" style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Facebook link (https://example)"/></td>
      </tr>
      <tr>
      <td><img src="https://signup.government.co.za/img/twitter.png" style="height:30px;"/></td>
      <td><input type="text"  name="twitter" value="<?php echo $company['twitter']; ?>" style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Twitter link (https://example)"/></td>
      </tr>
      <tr>
      <td><img src="https://signup.government.co.za/img/youtube.png" style="height:30px;"/></td>
      <td><input type="text"  name="youtube"  value="<?php echo $company['youtube']; ?>" style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Youtube link (https://example)"/></td>
      </tr>
      <tr>
      <td><img src="https://signup.government.co.za/img/linkedin.png" style="height:26px;"/></td>
      <td><input type="text"  name="linkedin" <?php echo $company['linkedin']; ?> style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="LinkedIn link (https://example)"/></td>
      </tr>
      <tr>
      <td><img src="https://signup.government.co.za/img/instagram.png" style="height:26px;"/></td>
      <td><input type="text"  name="instagram" value="<?php echo $company['instagram']; ?>" style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Instagram link (https://example)"/></td>
      </tr>
      <tr>
      <td><img src="https://signup.government.co.za/img/whatsapp.png" style="height:26px;"/></td>
      <td><input type="text"  name="whatsapp" value="<?php echo $company['mobile']; ?>" style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Whatsapp +2700-000-0000"/></td>
      </tr>
      <tr>
      <td><img src="https://signup.government.co.za/img/consult.png" style="height:26px;"/></td>
      <td><input type="text"  name="other" value="<?php echo $company['skype']; ?>" style="border:solid 1px silver;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="Other link (https://example)"/></td>
      </tr>
      </table>


<br/>
<input type="submit" value="Update Now" name="add_social" style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;"/> <br/>
<b id="social_rep"></b><br/><br/>

</form>
</div>
<!-----START----->
</script>




<?php 

if(isset($_POST["add_social"])){
 $facebook=$_POST["facebook"];
 $twitter=$_POST["twitter"];
 $youtube=$_POST["youtube"];
 $linkedin=$_POST["linkedin"];
 $instagram=$_POST["instagram"];
 $whatsapp=$_POST["whatsapp"];
 $other=$_POST["other"];


 $stats->social($cid,$facebook,$twitter,$youtube,$linkedin,$instagram,$whatsapp,$other);

 echo '<center><div class="alert alert-primary" role="alert"> Social Media Added. </div> </center>';

 $msg_="Social Media Added.";
 echo '<script>Alert("Social Media Added.");</script>';

}

?>




<script type="text/ng-template" id="Notification.htm">

   <div class="card" style="padding:10px;">

   <h4><span class="glyphicon glyphicon-comment" style="padding:10px;"></span> Notification</h4>

   <style>
      .notification-card {
        background-color: #f9f9f9;
        border-left: 4px solid #4CAF50;
        /* border: 1px solid silver; */
        padding: 16px 20px;
        margin: 10px 0;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: Arial, sans-serif;
      }
    
      .notification-message {
        font-size: 16px;
        color: #333;
      }
    
      .notification-date {
        font-size: 14px;
        color: #888;
        white-space: nowrap;
      }
    </style>
    
    

    
   @foreach ($get_notify as $note)

 

   <div class="notification-card">
      <div class="notification-message">
         {{ $note->name }}
      </div>
      <div class="notification-date">
         {{ $note->time }}
      </div>
    </div>
      
   @endforeach

   </div>


</script>   



<script type="text/ng-template" id="Performance.htm">
<style>
  .accordion {
    background-color: #f4f4f4;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  /* Style for the accordion title */
  .accordion-title {
    background-color: #ddd;
    color: #333;
    padding: 10px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  /* Style for the accordion content */
  .accordion-content {
    padding: 10px;
    display: none;
  }
  
  /* Style for the button */
  .view-more-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 5px 10px;
    cursor: pointer;
  }
</style>



 

 <style>
   .enquiry-container {
  width: 100%;
  /* max-width: 600px; */
  background: #f9f9f9;
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  font-family: sans-serif;
  margin: 10px auto;
}

.enquiry-header {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  color: #555;
  margin-bottom: 10px;
}

.message {
  font-size: 16px;
  color: #333;
  margin-bottom: 15px;
  line-height: 1.5;
}

.reply-section {
  display: flex;
  flex-direction: column;
}

.reply-text {
  resize: vertical;
  min-height: 40px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  margin-bottom: 10px;
  font-size: 14px;
}

.reply-button {
  align-self: flex-end;
  background-color: #007bff;
  color: white;
  padding: 8px 8px;
  font-size: 12px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.2s;
}

.reply-button:hover {
  background-color: #0056b3;
}

 </style>


<div class="card" style="padding:10px;">
   <h4><span class="glyphicon glyphicon-envelope" style="padding:10px;"></span> Customer Enquiries</h4>
   

  <?php 
      //print_r($get_enquiries);
  ?>

   
  @foreach($get_enquiries as $message)
  <?php 
         $id = $message['id']; 
         $to = "patrick.c@dotcom.africa";
         $from = $message['email'];
         $ogMessage=$message['message'] ;
         $companyname=$message['email'] ;
  ?>
  <div class="enquiry-container">
     <div class="enquiry-header">
       <span class="from">From: {{$message['email']}}</span>
       <span class="date">{{$message['date']}}</span>
     </div>
     <div class="message">
      {{$message['message']}}
     </div>
     <div class="reply-section">
       <textarea class="reply-text" name="replymessage" placeholder="Type your reply..." rows="2"></textarea>
       <button class="reply-button btn-s"  onclick="reply_to_client_email(this, '<?php echo $to;?>','<?php echo $from;?>','<?php echo $ogMessage;?>','<?php echo $companyname;?>')">Send Reply</button>
       <p id="emailstatus"></p>
     </div>
   </div>
   @endforeach

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   </div>
   
   
   
   
   
   
   </div> 
   <div>
   
   
   
     
       
   
   </div>
   
   
   
   
   
   
   </script>

<style>
.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    width:25%;margin-top: 5px;;
}

</style>





<script type="text/ng-template" id="Artwork.htm">

<?php //include("header2.php"); ?>

<div class="card" style="padding:10px;">
<h2><span class="glyphicon glyphicon-upload"></span> UPLOAD LOGO</h2>
<p class="title"> <span class="glyphicon glyphicon-menu-right"></span>This option is only available for special clients.</p>

</div>
<br/>
<div class="row">
                            <div class="col-md-6 col-xl-4">
                            <div class="card" style="padding:10px;">
                            <div class="" style="vertical-align:top;border:solid 1px silver;padding:10px;min-height:312px;vertical-align:middle;">
 
 <?php  
 if($logo_url){
 echo '<center>  <img src="'.$logo_url.'" style="width:300px;margin-top:0px;height:auto;margin-top:auto;"/></center>';
 }
 else {
 ?>
 <center><img src="https://government.co.za/assets/images/fl/logoph.jpg" style="margin-top:50px;"/></center>
 <?php }?>
 
 </div>  
</div>                       
                                </div>

                                
                            <div class="col-md-6 col-xl-8">
                            <div class="card" style="padding:10px;">
                            <div class="" style="vertical-align:top;border:solid 1px silver;padding:10px;min-height:300px;">
<!-- <b style="text-align:left;">Name</b><br/> -->
<input type="text" name="name" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" placeholder="File Name"/><br/>
<!-- <b style="text-align:left;">Description</b><br/> -->
<input type="text" name="descr" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;height:100px" placeholder="Description"/><br/>
<!-- <b style="text-align:left;">File</b><br/> -->
<input type="file" name="fileToUpload" style="border:solid 1px #5d5d5d;border-radius:10px;padding:6px;display:inline;width:100%;margin:3px;" /><br/><br/>
<input type="submit" value="Upload Now" name="add_logo" style="background-color:#5d5d5d;color:white;border-radius:10px;padding:6px;display:block;width:100%;margin:3px;cursor:pointer"/> <br/>
<b id="upload_rep"></b><br/>

</div>
</div>                                        
                            </div>

</div>



<!-----START----->

<form action="#" method="post" enctype="multipart/form-data">
<br/>


<center>
<div class="row" style="width:95%;">


</center>

</div>


</form>

</div>
<!-----START----->
</script>

<input type="text" value="<?php echo $cid; ?>" id="cid"/>



<?php 

if(isset($_POST["add_logo"])){

  if($logo_url){
          echo '<center><div class="alert alert-primary" role="alert"> Logo already uploaded. </div> </center>';
  }
  else {

$name=$_POST["name"];
$descr=$_POST["descr"];
// echo $name;
$target_dir = "logos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
} else {
  // echo "Sorry, there was an error uploading your file.";
}
$stats->add_logo($cid,$name,$descr,$target_file);

// echo "<script>";
// echo "location.reload();";
// echo "</script>";

echo '<center><div class="alert alert-primary" role="alert"> Logo uploaded successfully. </div> </center>';

  }


}

?>


<script>
  

function reply_to_client_email(sendreplybutton, to,from, ogMessage,companyname) {
var replymessage=sendreplybutton.previousElementSibling.value; 

 
  
  
  var message="test message";
  var params = "to=" + to + "&from=" + from + "&ogmessage=" + ogMessage+ "&message=" + replymessage + "&companyname=" + companyname ;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/reply_to_client_email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText); // You can handle the response here
          document.getElementById('emailstatus').innerText=xhr.responseText;

        } else {
          console.error("Error:", xhr.status);
        }
      }
    };

    xhr.send(params);
    console.log(replymessage);
   // console.log('The following parameters where sent'+ params);
  
}



</script>