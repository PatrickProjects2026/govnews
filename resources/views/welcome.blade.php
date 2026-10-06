<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

       {{ Request::segment(count(Request::segments())) ? ucfirst(str_replace('-', ' ', Request::segment(count(Request::segments())))) : 'Home' }} | Government News - Sharing Good News With Everyone 

    </title>



    <link rel="icon" href="govivon.ico" type="image/x-icon">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5; /* Light gray background */
        }
        .container-main {
            max-width: 1280px; /* Max width for content */
        }
        /* Custom scrollbar for consistency */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .space-y-2 a {
            background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1));
            color:white;text-align: center;border-radius: 5px;
            height:30px;padding:3px;
        }

     /*Tailwind CSS */
    </style>

    <script src="https://unpkg.com/alpinejs@3.13.5/dist/cdn.min.js" defer></script>


</head>
<body class="text-gray-800">
  


    @include('partials.top')

    <!-------------------------------------------------------- menu ---------------------------------------------------------->
{{-- 
    <header class="w-full bg-[#0a192f] text-white text-xs py-2 px-4 sm:px-8 flex justify-between items-center">
        <div class="hidden sm:block text-slate-400">South Africa's official digital news platform</div>
        <div class="flex items-center space-x-6 ml-auto">
            <a href="#" class="hover:text-sky-400 transition">About</a>
            <a href="#" class="hover:text-sky-400 transition">Contact</a>
            <a href="#" class="hover:text-sky-400 transition">Login</a>
            <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white font-medium px-3.5 py-1.5 rounded transition shadow-sm">Sign Up</a>
        </div>
    </header>

    <div class="bg-white border-b border-slate-200 py-4 px-4 sm:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <div class="flex items-center space-x-1">
                <div class="w-2 h-10 bg-sky-500 rounded-sm"></div>
                <div class="w-2 h-10 bg-amber-500 rounded-sm"></div>
                <div class="w-2 h-10 bg-emerald-600 rounded-sm"></div>
            </div>
            <div>
                <a href="#" class="text-2xl font-extrabold tracking-tight text-slate-900 flex items-center">
                    GOVNEWS<span class="text-sky-600">.CO.ZA</span>
                </a>
                <p class="text-[10px] text-slate-500 font-medium tracking-wide">Sharing Good News with Everyone!</p>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="w-full md:w-96 relative">
            <input type="text" placeholder="Search GovNews..." class="w-full bg-slate-100 border border-slate-300 rounded-md py-2 pl-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition">
            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 hover:text-sky-600 transition">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </button>
        </div>
    </div>


    <nav class="bg-[#0b2240] text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center overflow-x-auto no-scrollbar py-3 space-x-6 text-xs font-bold uppercase tracking-wider">
            <a href="/" class="text-sky-400 border-b-2 border-sky-400 pb-1 whitespace-nowrap">Home</a>
            <a href="/by_status/News" class="hover:text-sky-300 transition whitespace-nowrap">News</a>
            <a href="/" class="hover:text-sky-300 transition whitespace-nowrap">National</a>
            <a href="/mayor/KwaZulu-Natal" class="hover:text-sky-300 transition whitespace-nowrap">Provincial</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Local Government</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">State Entities</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Parliament</a>
            <a href="/by_status/Tenders" class="hover:text-sky-300 transition whitespace-nowrap">Tenders</a>
            <a href="/by_status/Events" class="hover:text-sky-300 transition whitespace-nowrap">Events</a>
            <a href="/by_status/Videos" class="hover:text-sky-300 transition whitespace-nowrap">Videos</a>
            
        </div>
    </nav> --}}


    <!-------------------------------------------------------- menu ---------------------------------------------------------->



{{-- 
<div  style="position:fixed!important;z-index: 1002;color:white;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1));width:100%;top:0;">


   
    <div class="flex items-center justify-between mx-auto container-main">

    <div class="flex items-center space-x-2" style="width:100%;padding-left:15px!important;padding-right:15px!important;">


        <table style="width:100%;">
            <tr>
                <td  style="width:90%">
  <div  style="font-size:11px;color:white;width:100%;text-align:left;float:left;">  Customer Support: 0861 DOT COM (368 266) | Powered by: <a href="https://www.dotcomafrica.com/">Dotcom Africa (Pty) Ltd</a> </div>

                </td>
                <td  style="width:5%">
    <a href="/advertise" class="relative inline-flex items-center gap-2 group text-white">
        <svg class="w-5 h-5 text-white transition duration-300 group-hover:text-gray-200"
            fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
        </svg>
        Advertise
    </a>
                </td>
                <td style="width:5%">
    <a href="https://www.dotcomafrica.com/">        
    <img src="https://medicaldirectory.co.za/images/dotcom_africa_logo.svg" style="margin-left:4px;margin:4px;;height:40px;background-color:white;"/>
    </a>
                </td>
            </tr>
        </table>    

    


    </div>

</div>


</div> --}}



{{-- 

<header class="px-4 py-4 bg-white shadow-sm md:px-8" style="position:fixed!important;z-index: 1000;width:100%;background-color:white;">

        <div class="flex items-center justify-between mx-auto container-main" style="margin-top:37px;padding-left:15px!important;padding-right:15px!important;">
    
            <div class="flex items-center space-x-2">
                
              <a href="/">  <img src="/govnews.png" alt="GOVNEWS Logo" class="rounded-full0" style="height:60px;width:auto;"> </a>
            </div>

           

          
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      const input = document.getElementById("find_news");
      const text = "Search for News...";
      let index = 0;

      function type() {
        if (index <= text.length) {
          input.setAttribute("placeholder", text.substring(0, index));
          index++;
          setTimeout(type, 100); 
        } else {
          index = 0;
          setTimeout(type, 2000); 
        }
      }

      type();
    });
  </script>

<div class="relative flex-grow hidden mx-4 md:block group" style="inline-size:100%!important;margin-left:40px;margin-right:40px;">
   

  <input type="text" id="find_news" 
       class="custom-placeholder w-full py-2.5 pl-12 pr-4 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white text-gray-800 shadow-sm transition duration-300 ease-in-out hover:shadow-md"
       placeholder="">



    <svg class="absolute w-5 h-5 text-blue-400 left-4 top-1/2 transform -translate-y-1/2 pointer-events-none transition duration-300 group-hover:text-blue-500"
         fill="none" stroke="currentColor" viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
</div>


<style>



.custom-placeholder::placeholder {
    color: #399bd6;
    opacity: 1;
}

@keyframes flash {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.4; }
}

.animate-flash::placeholder {
    animation: flash 1.4s ease-in-out infinite;
}
</style>


            <div class="items-center hidden space-x-4 md:flex">

     <a href="tel:0861 368 266" title="Call us"
   style="
       display: inline-flex;
       align-items: center;
       justify-content: center;
       width: 48px;
       height: 48px;
       background-color: #399bd6;
       border-radius: 50%;
       text-decoration: none;
   "
      onmouseover="this.style.boxShadow='0 0 10px 4px rgba(57, 155, 214, 0.4)'"
   onmouseout="this.style.boxShadow='none'"
   >
    <svg xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="white"
         width="24"
         height="24">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
    </svg>
</a>

            
          
       <a href="mailto:info@govnews.co.za" title="Email us"
   style="
       display: inline-flex;
       align-items: center;
       justify-content: center;
       width: 48px;
       height: 48px;
       background-color: #399bd6;
       border-radius: 50%;
       text-decoration: none;
   "
      onmouseover="this.style.boxShadow='0 0 10px 4px rgba(57, 155, 214, 0.4)'"
   onmouseout="this.style.boxShadow='none'"
   >
    <svg xmlns="http://www.w3.org/2000/svg"
         fill="none"
         stroke="white"
         viewBox="0 0 24 24"
         width="24"
         height="24">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
        </path>
    </svg>
</a>


            </div>

           
            <button id="mobile-menu-button" class="p-2 rounded-md md:hidden focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header> --}}




     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Attach keypress event listener to the input field using jQuery
    $('#find_news').on('keypress', function(event) {
        if (event.key === 'Enter') {
            let txt = $(this).val().trim();
            if (txt !== "") {
                window.location = "/find_news/" + encodeURIComponent(txt);
            } else {
                alert("Enter Search phrase.");
            }
        }
    });
});
</script>


    <!-- Top Navigation Bar -->

    <style>
        .menu_hover:hover{
            background-color: #399bd6;
        }

       .grid img {
        transition: transform 0.5s ease-in-out;
        }

       .grid img:hover {
        transform: scale(1.1);
        }

    </style>

     </nav>



{{--     
    <nav class="px-4 py-2 text-white bg-gray-700 shadow-md md:px-8"  style="position:fixed!important;z-index: 1000;width:100%;top:120px;">
        <div class="flex flex-wrap justify-between mx-auto text-sm container-main" style="padding-left:15px!important;padding-right:15px!important;">

 
<a href="/by_status/Events" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600" style="padding-left:0px;">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;padding-left:0px;margin-left:0px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> 
Events/Entertainment</a>

            <a href="/by_status/Programmes" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> Government programmes</a>

            <a href="/by_status/Press" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> Press Release</a>  
          

            <a href="/by_status/Success" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> Success Stories</a>

  <a href="/by_status/Tenders" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> Tenders</a>
       <a href="/by_status/Vacancies" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> Vacancies</a>
            <a href="/by_status/Videos" class=" menu_hover px-3 py-1 transition-colors duration-200 rounded-md hover:bg-gray-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5" style="float:left;padding-right:0px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" style="padding-right:0px;"/>
</svg> Videos</a>
        </div>

    </nav> --}}





    <!-- Main Content Area -->
    <main class="grid grid-cols-1 gap-6 p-4 mx-auto container-main md:grid-cols-3" style="padding-top:10px;">
        <!-- Left Column: Featured News & Browse More -->

        <!-- <div class="space-y-6 md:col-span-2">1</div>
        <div class="space-y-6 md:col-span-1">2</div>

        <div class="space-y-6 md:col-span-1">1</div>
        <div class="space-y-6 md:col-span-2">2</div> -->

         <!-- md:grid-cols-4 gap-4 -->


<!------------------------------------------------- section 1 --------------------------------------------------------->        
  <style>
    .video-container {
      position: relative;
      /* padding-bottom: 56.25%; 16:9 ratio */
      padding-bottom:40%;
      padding-top: 24px;
      /* height: 0; */
      block-size: 300px!important;
    }
    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
   
      border: 0;
    }
  </style>

{{-- {{print_r($News) }} --}}
<!-- 
    span-2 = cols2/3 
class="space-y-6 md:col-span-2"
-->      


 <div class="space-y-6 md:col-span-2" >
     <section class="overflow-hidden bg-white rounded-lg shadow-md">
                <div class="relative">

                  {{-- <a href="/by_id/{{$News[0]->id}}"> <img src="{{$News[0]->image}}" alt="Featured News" class="object-cover w-full h-auto" style="height:450px;"> </a> --}}

                    {{-- {{print_r($videos[0])}} --}}
                    <div class="video-container" >
                           {{-- <iframe 
                                src="https://www.youtube.com/embed/<?php echo htmlspecialchars($videos[0]->url); ?>?autoplay=1&mute=1"
                                allow="autoplay; encrypted-media"
                                allowfullscreen>
                            </iframe> --}}

<iframe 
    src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Femfulenilocalmunicipality%2Fvideos%2F1297454425781247%2F&show_text=false&width=560&autoplay=true&mute=1"
    width="100%" 
    height="315" 
    style="border:none;overflow:hidden" 
    scrolling="no" 
    frameborder="0" 
    allowfullscreen="true" 
    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
</iframe>


                    </div> 

                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white bg-gradient-to-t from-black to-transparent">
                        {{-- <h2 class="mb-2 text-2xl font-bold">{{$videos[0]->name}}</h2>
                        <p class="text-sm">{{$videos[0]->about_us}}</p> --}}
                    </div>
                </div>
     </section>

 </div> 
 


<div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div style="width:98%;float:left;">
    <a href="#" download="">
    <div style="background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1));; color:white; width:100%; border:medium solid silver; padding:10px; font-size:17px; border-radius:8px 8px 0 0; text-align:center;"><i class="fa-sharp fa-regular fa-download" aria-hidden="true"></i> View Publication (Fullscreen)</div>
    </a>

<a href="https://govnews.co.za/public/GovernmentToday/" class="fbp-embed"  data-fbp-lightbox="yes" data-fbp-width="640px" data-fbp-height="290px"  data-fbp-method="site"   data-fbp-version="2.11.1"   style="max-width: 100%">Government Today</a><script async defer src="https://govnews.co.za/public/GovernmentToday/files/html/static/embed.js?uni=8bda925214606258d99f79afc2ad54ae"></script>




</div>


 </div>


 <!-- gap = margin , cols = cols -->  

 <!------------------------------------------------- section 1 --------------------------------------------------------->        

  <!------------------------------------------------- section 2 --------------------------------------------------------->        


 
        <div class="space-y-6 md:col-span-1">
<aside class="p-4 bg-white rounded-lg shadow-md">
<h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6">  
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>
Browse More</h3>
                <ul class="space-y-2">
                    <li><a href="/by_cat/Business" class="menu_hover block text-blue-600 ">Business & Trade</a></li>                      
                    <li><a href="/by_cat/Sport and Recreation" class="menu_hover block text-blue-600 ">Sport and Recreation</a></li>                                 
                    <li><a href="/by_cat/Health" class="menu_hover block text-blue-600 ">Health & Fitness</a></li>                    
                    <li><a href="/by_cat/Safety and Security" class="menu_hover block text-blue-600 ">Safety & Security</a></li> 
                    <li><a href="/by_cat/Agriculture, Land Reform and Rural Development" class="menu_hover block text-blue-600 ">Agriculture & Land Reform </a></li>                                      
                    <li><a href="/by_cat/Transport" class="menu_hover block text-blue-600 ">Transport & Tours</a></li>
                    
                    <li><a href="/by_cat/Water Affairs and Sanitation" class="menu_hover block text-blue-600 ">Water & Sanitation</a></li>
                    <li><a href="/by_cat/Employment and Labour" class="menu_hover block text-blue-600 ">Employment & Labour</a></li>
                    <li><a href="/by_cat/Human Settlement" class="menu_hover block text-blue-600 ">Human Settlement</a></li>
                    <li><a href="/by_cat/Mineral Resources" class="menu_hover block text-blue-600 ">Mineral Resources</a></li>
                    <li><a href="/by_cat/Immigration and Border Issues" class="menu_hover block text-blue-600 ">Immigration & Border Issues</a></li>
                    <li><a href="/by_cat/Science and Technology" class="menu_hover block text-blue-600 ">Science & Technology</a></li>  
                </ul>
            </aside>
        </div>

         
      
        
        <div class="space-y-6 md:col-span-2">

            
            <!-- Business News Section -->
            <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Education News</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Business News Card 1 -->
                      @foreach ($Education as $news)
                      <a href="/by_id/{{$news->id}}">
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                         <img src="{{$news->image}}" alt="Business News" class="object-cover w-full h-32"> 
                        <div class="p-3">
                           <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>
                    </a>
                    @endforeach
                    
{{--                     
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+2" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Volkswagen deal offers hope for Eastern Cape as Mercedes</h4>
                            <p class="text-xs text-gray-500">Isolezwe - 9 July</p>
                        </div>
                    </div>
             --}}

                    
                </div>
            </section>
        </div>
        

        </div>

    <!------------------------------------------------- section 2 --------------------------------------------------------->        
     

    <!------------------------------------------------- section 3 --------------------------------------------------------->        
     
     <div class="space-y-6 md:col-span-2">
          <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Business News</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                  
                  @foreach ($Business as $news)
                   <a href="/by_id/{{$news->id}}"> 
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                       <img src="{{$news->image}}" alt="Business News" class="object-cover w-full h-32"> 
                        <div class="p-3">
                              <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>
                    </a>
                  @endforeach  
               
{{--                   
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+2" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Volkswagen deal offers hope for Eastern Cape as Mercedes</h4>
                            <p class="text-xs text-gray-500">Isolezwe - 9 July</p>
                        </div>
                    </div>
                 
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+3" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">P10 to assessing winning South African GP bid after major..</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                 
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+4" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Internet access: a basic need that can't be overlooked.</h4>
                            <p class="text-xs text-gray-500">Daily Sun - 9 July</p>
                        </div>
                    </div>
           
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+5" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Volkswagen deal offers hope for Eastern Cape as Mercedes</h4>
                            <p class="text-xs text-gray-500">Isolezwe - 9 July</p>
                        </div>
                    </div>
               
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+6" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">P10 to assessing winning South African GP bid after major..</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                     --}}
                </div>
            </section>
     </div>
     <div class="space-y-6 md:col-span-1">
             <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Health News</h3>
                <div class="space-y-4">
             
                @foreach ($Health as $news)
                <a href="/by_id/{{$news->id}}"> 
                    <div class="flex items-center space-x-3 " style="margin-block-end:31px!important;">
                   <a href="/by_id/{{$news->id}}">      <img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md" style="min-width:100px;"> </a>
                        <div>
                     <a href="/by_id/{{$news->id}}">       <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4> </a>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>
                </a>
              @endforeach    
   
{{--                 
                    <div class="flex items-center space-x-3"  style="margin-block-end:10px!important;">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art2" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the top 1% spend their money,How the top 1% spend,spend their money,How the top 1% spend  </h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
           
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art3" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the two-pot system is benefiting the poor,spend their money,How the top 1% spend </h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art3" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the two-pot system is benefiting the poor,spend their money,How the top 1% spend </h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div> --}}
                    

                </div>
            </section>
     </div>

    <!------------------------------------------------- section 3 --------------------------------------------------------->        
     

    <!------------------------------------------------- section 4--------------------------------------------------------->        
     

<div class="space-y-6 md:col-span-2">
    <section class="overflow-hidden bg-white rounded-lg shadow-md">
        <div id="slideshow-container" class="relative overflow-hidden h-[460px]">

            <a id="slide-link" href="#">
                <img id="slide-image" src="" alt="Featured News" class="object-cover w-full h-full">
            </a>

            <div class="absolute bottom-0 left-0 right-0 p-6 text-white bg-gradient-to-t from-black to-transparent">
                <h2 id="slide-title" class="mb-2 text-2xl font-bold" style="height:55px;"></h2>
                {{-- <p id="slide-time" class="text-sm"></p> --}}
                     {{-- <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4> --}}
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
            </div>

        </div>
    </section>

</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {

    const slides = [
        @foreach($Sport0 as $item)
            {
                id: {{ $item->id }},
                image: "{{ $item->image }}",
                title: {!! json_encode($item->title) !!},
                time: {!! json_encode($item->time) !!}
            }@if (!$loop->last),@endif
        @endforeach
    ];

    let current = 0;
    const total = slides.length;

    // Show first slide immediately
    showSlide(current);

    // Rotate through slides every 4 seconds
    setInterval(function() {
        if(current<2) { current++; } else { current=0; }

        // alert(current);
        showSlide(current);
    }, 4000);

    function showSlide(index) {
        //let ind=Math.floor(Math.random() * 3);
        const slide = slides[index];

        $('#slide-image').attr('src',slide.image );
        // Update title, time, and link
        $('#slide-title').text(slide.title).fadeIn(200);
        $('#slide-time').text(slide.time).fadeIn(200);
        $('#slide-link').attr('href', `/by_id/${slide.id}`);
    }

});
</script>






        
        <div class="space-y-8 md:col-span-1">

    

                   <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
      
                    
 <div class="grid grid-cols-3 gap-2 md:grid-cols-2">

                    @foreach ($Latest as $news)
                     <a href="/by_id/{{$news->id}}"> 
                      <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg" style="background-color:white;">
                        <img src="{{$news->image}}" alt="Sports News" class="object-cover w-full h-32" > 
                        <div class="p-3 bg-white">
                            <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:65px;">{{$news->title}}</h4>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                      </div>
                     </a>
                    @endforeach                 

 </div>


                    </div>


        </div>

    <!------------------------------------------------- section 4 --------------------------------------------------------->        
     


   <!------------------------------------------------- section 5 --------------------------------------------------------->        
     
<div class="space-y-6 md:col-span-1">
    
    <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Security News</h3>
                <div class="space-y-4">
                 
                    @foreach ($Security as $news)
                    <a href="/by_id/{{$news->id}}"> 
                    <div class="flex items-center space-x-3">
                      <a href="/by_id/{{$news->id}}">   <img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md"  style="min-width:100px;">  </a>
                        <div>
        <a href="/by_id/{{$news->id}}">      <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4> </a>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>
                    </a>
                    @endforeach
{{--         
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art2" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the top 1% spend their money</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                  
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art3" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the two-pot system is benefiting the poor</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div> --}}
                    
                </div>
            </section>

</div>

  
<div class="space-y-6 md:col-span-1">
    
    <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Agriculture News</h3>
                <div class="space-y-4">

                    @foreach ($Agriculture as $news)
                     <a href="/by_id/{{$news->id}}">
                    <div class="flex items-center space-x-3">
                    <a href="/by_id/{{$news->id}}"><img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md"  style="min-width:100px;"> </a>
                        <div>
                  <a href="/by_id/{{$news->id}}">            <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4> </a>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>
                    </a>
                    @endforeach
                    
{{--                  
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art1" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">Zimbabwe's richest man and the world's richest man</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
        
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art2" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the top 1% spend their money</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                  
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art3" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the two-pot system is benefiting the poor</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>                 --}}

                </div>
            </section>

</div>

  
<div class="space-y-6 md:col-span-1">
    
    <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"   style="color:#399bd6"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Transport News</h3>
                <div class="space-y-4">

                    @foreach ($Transport as $news)
                     <a href="/by_id/{{$news->id}}"> 
                    <div class="flex items-center space-x-3">
                     <a href="/by_id/{{$news->id}}">    <img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md"  style="min-width:100px;"> </a>
                        <div>
                   <a href="/by_id/{{$news->id}}">   <h4 class="mb-1 text-sm font-medium line-clamp-3" style="height:55px;">{{$news->title}}</h4> </a>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>
                     </a>
                    @endforeach

                  
{{--                   
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art1" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">Zimbabwe's richest man and the world's richest man</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
        
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art2" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the top 1% spend their money</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                  
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art3" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the two-pot system is benefiting the poor</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div> --}}
                    
                </div>
            </section>

</div>

   <!------------------------------------------------- section 5 --------------------------------------------------------->        
     



     

        <div class="space-y-6 md:col-span-2">


          



            <!-- Featured News Section -->

            <!-- <section class="overflow-hidden bg-white rounded-lg shadow-md">
                <div class="relative">
                    <img src="https://placehold.co/1200x600/cccccc/ffffff?text=Featured+News+Image" alt="Featured News" class="object-cover w-full h-auto">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white bg-gradient-to-t from-black to-transparent">
                        <h2 class="mb-2 text-2xl font-bold">Cape Town police confiscate 300 weapons in their first day of the search.</h2>
                        <p class="text-sm">4 July 2025</p>
                    </div>
                </div>
            </section> -->

            

            <!-- Sports News Section -->
            <!-- <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b">Sports News</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                 
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/e0e0e0/000000?text=Sports+Image+1" alt="Sports News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Rugby heroes celebrate their victory</h4>
                            <p class="text-xs text-gray-500">MSN - 4 July</p>
                        </div>
                    </div>
                   
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/e0e0e0/000000?text=Sports+Image+2" alt="Sports News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">South Africa celebrate victory after a big match on Saturday</h4>
                            <p class="text-xs text-gray-500">MSN - 4 July</p>
                        </div>
                    </div>
                  
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/e0e0e0/000000?text=Sports+Image+3" alt="Sports News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Banyana Banyana make history on debut</h4>
                            <p class="text-xs text-gray-500">MSN - 4 July</p>
                        </div>
                    </div>
                
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/e0e0e0/000000?text=Sports+Image+4" alt="Sports News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Prudence Sekgodisa left footprints where no other.</h4>
                            <p class="text-xs text-gray-500">MSN - 4 July</p>
                        </div>
                    </div>
                </div>
            </section> -->





            <!-- Business News Section -->
            <!-- <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b">Business News</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+1" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Internet access: a basic need that can't be overlooked.</h4>
                            <p class="text-xs text-gray-500">Daily Sun - 9 July</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+2" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Volkswagen deal offers hope for Eastern Cape as Mercedes</h4>
                            <p class="text-xs text-gray-500">Isolezwe - 9 July</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+3" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">P10 to assessing winning South African GP bid after major..</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                  
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+4" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Internet access: a basic need that can't be overlooked.</h4>
                            <p class="text-xs text-gray-500">Daily Sun - 9 July</p>
                        </div>
                    </div>
                   
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+5" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">Volkswagen deal offers hope for Eastern Cape as Mercedes</h4>
                            <p class="text-xs text-gray-500">Isolezwe - 9 July</p>
                        </div>
                    </div>
          
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/d0d0d0/000000?text=Business+Image+6" alt="Business News" class="object-cover w-full h-32">
                        <div class="p-3">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2">P10 to assessing winning South African GP bid after major..</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                </div>
            </section>
             -->


        </div>
        

        <!-- Right Column: Smaller News Cards & Sidebar -->
        <div class="space-y-6 md:col-span-1">
            <!-- Top Right News Card 1 -->
            <!-- <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img src="https://placehold.co/600x300/e0e0e0/000000?text=Top+Right+News+1" alt="News Image" class="object-cover w-full h-40">
                <div class="p-4">
                    <h4 class="mb-2 text-lg font-semibold">South Africa celebrate victory after a big match on Saturday</h4>
                    <p class="text-sm text-gray-500">MSN - 4 July</p>
                </div>
            </div> -->

            <!-- Top Right News Card 2 -->
            <!-- <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img src="https://placehold.co/600x300/e0e0e0/000000?text=Top+Right+News+2" alt="News Image" class="object-cover w-full h-40">
                <div class="p-4">
                    <h4 class="mb-2 text-lg font-semibold">Warning of the floods around the country</h4>
                    <p class="text-sm text-gray-500">MSN - 4 July</p>
                </div>
            </div> -->

            <!-- Top Right News Card 3 -->
            <!-- <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img src="https://placehold.co/600x300/e0e0e0/000000?text=Top+Right+News+3" alt="News Image" class="object-cover w-full h-40">
                <div class="p-4">
                    <h4 class="mb-2 text-lg font-semibold">Banyana Banyana make history on debut</h4>
                    <p class="text-sm text-gray-500">MSN - 4 July</p>
                </div>
            </div> -->

            <!-- Browse More Sidebar -->
            <!-- <aside class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b">Browse More</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="block text-blue-600 hover:underline">Provinces</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Cities</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Business</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Money</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Sports</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Shopping</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Videos</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Health</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Entertainment</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Year Books</a></li>
                    <li><a href="#" class="block text-blue-600 hover:underline">Campaigns</a></li>
                </ul>
            </aside> -->

            <!-- More Articles Section -->

            <!-- <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b">More Articles</h3>
                <div class="space-y-4">
                 
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art1" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">Zimbabwe's richest man and the world's richest man</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
        
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art2" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the top 1% spend their money</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                  
                    <div class="flex items-center space-x-3">
                        <img src="https://placehold.co/80x80/c0c0c0/000000?text=Art3" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">How the two-pot system is benefiting the poor</h4>
                            <p class="text-xs text-gray-500">MSN - 9 July</p>
                        </div>
                    </div>
                </div>
            </section> -->

            
        </div>

        

          <!-- @foreach($promos as $promo) 
                <a href="https://{{$promo->website}}" target="blank_"> <img src="https://cdn.adslive.com/{{$promo->url}}" style="border-radius:10px;border:solid 1px silver;height:180px;width:auto;"/>   </a>       
          @endforeach -->



    </main>

    <!-- Footer Section -->
{{--     
    <footer class="px-4 py-8 mt-8 text-white bg-gray-800 md:px-8">
        <div class="grid grid-cols-1 gap-8 mx-auto container-main md:grid-cols-3">

            <div>
                <div class="flex items-center mb-4 space-x-2">
                  
                  <img src="/govnews.png" alt="GOVNEWS" class="rounded-full" style="height:40px;">
                </div>
                <p class="mb-2 text-sm">We deliver essential updates, business intelligence, lifestyle content, and career opportunities directly to you.</p>
                <div class="space-y-1 text-sm">
                            <p>
                     
                   <strong> <a href="mailto:info@govnews.co.za"> <svg style="float:left" class="w-6 h-6 text-gray-600 cursor-pointer hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg></a> &nbsp; Info:</strong> <a href="mailto:info@govnews.co.za">info@govnews.co.za </a></p>

                    <p><strong> <a href="tel:+27 11 333 6000"> <svg  style="float:left" class="w-6 h-6 text-gray-600 cursor-pointer hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg></a>  &nbsp; Tel:</strong> <a href="tel:+27 11 333 6000">+27 11 333 6000 </a> </p>
                </div>
            </div>

            
            <div>
                <h4 class="mb-4 text-lg font-semibold">Provinces</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/by_prov/Eastern Cape" class="hover:underline">Eastern Cape</a></li>
                    <li><a href="/by_prov/Free State" class="hover:underline">Free State</a></li>
                    <li><a href="/by_prov/Gauteng" class="hover:underline">Gauteng</a></li>
                    <li><a href="/by_prov/KwaZulu-Natal" class="hover:underline">KwaZulu-Natal</a></li>
                </ul>
            </div>

    
            <div >
                <h4 class="mb-4 text-lg font-semibold">Provinces</h4> 
                <ul class="space-y-2 text-sm">
                    <li><a href="/by_prov/Limpopo" class="hover:underline">Limpopo</a></li>
                    <li><a href="/by_prov/Mpumalanga" class="hover:underline">Mpumalanga</a></li>
                    <li><a href="/by_prov/North West" class="hover:underline">North West</a></li>
                    <li><a href="/by_prov/Northern Cape" class="hover:underline">Northern Cape</a></li>
       
                </ul>
            </div>

            <div>
                <h4 class="mb-4 text-lg font-semibold">Provinces</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/by_prov/Limpopo" class="hover:underline">Limpopo</a></li>
                    <li><a href="/by_prov/Mpumalanga" class="hover:underline">Mpumalanga</a></li>
                    <li><a href="/by_prov/North West" class="hover:underline">North West</a></li>
                    <li><a href="/by_prov/Northern Cape" class="hover:underline">Northern Cape</a></li>
                </ul>
            </div>

        </div>
        <div class="mt-8 text-xs text-center text-gray-500">
            &copy; 2025 GOVNEWS&trade; . All rights reserved - powered by <a href="https://www.dotcomafrica.com/">Dotcom Africa </a>
        </div>
    </footer> --}}




     @include('partials.bottom');

    <!-------------------------------------------------------- footer  -------------------------------------------------------->
{{-- 
    <footer class="bg-[#081225] text-white pt-12 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Logo & Copyright -->
            <div class="flex items-center space-x-3">
                <div class="flex items-center space-x-1">
                    <div class="w-2 h-8 bg-sky-500 rounded-sm"></div>
                    <div class="w-2 h-8 bg-amber-500 rounded-sm"></div>
                    <div class="w-2 h-8 bg-emerald-600 rounded-sm"></div>
                </div>
                <div>
                    <span class="text-xl font-extrabold tracking-tight text-white">
                        GOVNEWS<span class="text-sky-500">.CO.ZA</span>
                    </span>
                    <p class="text-[10px] text-slate-400">Sharing Good News with Everyone!</p>
                </div>
            </div>

            <!-- Platform Description -->
            <div class="text-center text-xs text-slate-400 max-w-md">
                South Africa's digital communication platform for every sphere of government.
            </div>

            <!-- Social Media & Links -->
            <div class="flex flex-col sm:flex-row items-center gap-6">
                <div class="flex items-center space-x-3 text-xs text-slate-300">
                    <a href="#" class="hover:text-sky-400 transition">About</a>
                    <a href="#" class="hover:text-sky-400 transition">Contact</a>
                    <a href="#" class="hover:text-sky-400 transition">Advertise</a>
                    <a href="#" class="hover:text-sky-400 transition">Privacy</a>
                    <a href="#" class="hover:text-sky-400 transition">Terms</a>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="#" class="w-8 h-8 rounded bg-slate-800 hover:bg-sky-600 text-white flex items-center justify-center transition"><i class="fa-brands fa-linkedin-in text-xs"></i></a>
                    <a href="#" class="w-8 h-8 rounded bg-slate-800 hover:bg-sky-600 text-white flex items-center justify-center transition"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                    <a href="#" class="w-8 h-8 rounded bg-slate-800 hover:bg-sky-600 text-white flex items-center justify-center transition"><i class="fa-brands fa-x-twitter text-xs"></i></a>
                    <a href="#" class="w-8 h-8 rounded bg-slate-800 hover:bg-sky-600 text-white flex items-center justify-center transition"><i class="fa-brands fa-youtube text-xs"></i></a>
                </div>
            </div>
        </div>
    </footer> --}}

     <!-------------------------------------------------------- footer  -------------------------------------------------------->

{{-- 

    <footer class="px-4 py-8 mt-8 text-white bg-gray-800 md:px-8" >

        @php 
$globe_='<svg style="float:left;margin-right:5px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
</svg>
';

$icon_='<svg  style="float:left;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>&nbsp;
';

        @endphp


    <div class="grid grid-cols-1 gap-8 mx-auto container-main md:grid-cols-4">
        <div style="padding-left:18px!important;">
            <div class="flex items-center mb-4 space-x-2">
                <img src="/govnews2.png" alt="GOVNEWS" class="rounded-full0" style="height:40px;">
            </div>
            <p class="mb-2 text-sm">We deliver essential updates, business intelligence, lifestyle content, and career opportunities directly to you.</p>
            <div class="space-y-1 text-sm">
                <p>
                    <strong> <a href="mailto:info@govnews.co.za" style="float:left"> <svg  class="w-4 h-4 text-gray-600 cursor-pointer hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg></a> &nbsp; </strong> <a href="mailto:info@govnews.co.za">info@govnews.co.za </a></p>

                          <p>
                    <strong> <a href="mailto:info@govnews.co.za" style="float:left"> <svg  class="w-4 h-4 text-gray-600 cursor-pointer hover:text-gray-800 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                </svg></a> &nbsp; </strong> <a href="tel:+27 11 333 6000">+27 11 333 6000 </a></p>

          
            </div>
        </div>

          <div >
            <h4 class="mb-4 text-lg font-semibold"   style="color:#399bd6">Quick Access</h4> <ul class="space-y-2 text-sm">
                <li><a href="by_status/Events" class="menu_hover"><? echo $icon_ ;?> Events</a></li>
                <li><a href="/by_status/Tenders" class="menu_hover"><? echo $icon_ ;?> Tenders</a></li>
                <li><a href="/by_status/Vacancies" class="menu_hover"><? echo $icon_ ;?> Vacancies</a></li>
                <li><a href="/by_status/Videos" class="menu_hover"><? echo $icon_ ;?> Videos</a></li>
            </ul>
        </div>


        <div>
            <h4 class="mb-4 text-lg font-semibold"    style="color:#399bd6">Provinces</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/by_prov/Eastern Cape" class="menu_hover"><? echo $globe_ ;?>  Eastern Cape</a></li>
                <li><a href="/by_prov/Free State" class="menu_hover"><? echo $globe_ ;?> Free State</a></li>
                <li><a href="/by_prov/Gauteng" class="menu_hover"><? echo $globe_ ;?> Gauteng</a></li>
                <li><a href="/by_prov/KwaZulu-Natal" class="menu_hover"><? echo $globe_ ;?> KwaZulu-Natal</a></li>
            </ul>
        </div>

      
        <div>
            <h4 class="mb-4 text-lg font-semibold"   style="color:#399bd6">Provinces</h4> <ul class="space-y-2 text-sm">
                <li><a href="/by_prov/Limpopo" class="menu_hover"><? echo $globe_ ;?> Limpopo</a></li>
                <li><a href="/by_prov/Mpumalanga" class="menu_hover"><? echo $globe_ ;?> Mpumalanga</a></li>
                <li><a href="/by_prov/North West" class="menu_hover"><? echo $globe_ ;?> North West</a></li>
                <li><a href="/by_prov/Northern Cape" class="menu_hover"> <? echo $globe_ ;?> Northern Cape</a></li>
            </ul>
        </div>

    </div>
    <div class="mt-8 text-xs text-center text-gray-500">
        &copy; {{date("Y")}} Government News&trade; . All rights reserved - powered by <a href="https://www.dotcomafrica.com/">Dotcom Africa </a>
    </div>
</footer> --}}


    <!-- JavaScript for Mobile Menu (if needed) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const topNavBar = document.querySelector('nav'); // Assuming this is the element to toggle

            // This is a placeholder for actual mobile menu functionality.
            // The wireframe doesn't show an open/closed state, so this is a basic example.
            mobileMenuButton.addEventListener('click', () => {
                // In a real app, you'd toggle classes to show/hide a mobile menu overlay
                // For this static wireframe, we'll just log a message.
                console.log('Mobile menu button clicked!');
                // Example: topNavBar.classList.toggle('hidden'); // This would hide/show the top nav
            });
        });
    </script>


<script src="https://studio.dotcom.africa/widget.js?v=2.17" data-character="dot-the-bot" data-token="MEJQc5qoKyNWnKGSSDg5qXOcAUryB93HmdL4DQBXo3dBAZ4bWKQWScHbRMHgGmDb" data-mode="floating" data-position="bottom-right" data-accent="#22d3ee" data-launcher-label="Chat with Dot the Bot" data-launcher-display="icon" data-auto-open="false" defer></script>



</body>
</html>
