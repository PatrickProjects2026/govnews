<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>

       {{ Request::segment(count(Request::segments())) ? ucfirst(str_replace('-', ' ', Request::segment(count(Request::segments())))) : 'Home' }} | Government News - Sharing Good News With Everyone 

    </title>

     <link rel="icon" href="/govivon.ico" type="image/x-icon">

     
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
</head>
<body class="text-gray-800">
    <!-- Header Section -->

    
 @include('partials.top')

    
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



<script>
    document.addEventListener("DOMContentLoaded", function () {
      const input = document.getElementById("find_news");
      const text = "Search for News...";
      let index = 0;

      function type() {
        if (index <= text.length) {
          input.setAttribute("placeholder", text.substring(0, index));
          index++;
          setTimeout(type, 100); // Typing speed (in ms)
        } else {
          index = 0;
          setTimeout(type, 2000); // Delay before repeating
        }
      }

      type();
    });
  </script>
     

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
    <main class="grid grid-cols-1 gap-6 p-4 mx-auto container-main md:grid-cols-3" style="padding-top:20px;">
        <!-- Left Column: Featured News & Browse More -->

        <!-- <div class="space-y-6 md:col-span-2">1</div>
        <div class="space-y-6 md:col-span-1">2</div>

        <div class="space-y-6 md:col-span-1">1</div>
        <div class="space-y-6 md:col-span-2">2</div> -->

         <!-- md:grid-cols-4 gap-4 -->


<!------------------------------------------------- section 1 --------------------------------------------------------->        

{{-- {{print_r($News) }} --}}
<!-- span-2 = cols2/3 -->       

@if($page!=="Videos" )

 <div class="space-y-6 md:col-span-3">
     <section class="overflow-hidden bg-white rounded-lg shadow-md">
                <div class="relative">
                    <img src="{{$ByCat[0]->image}}" alt="Featured News" class="object-cover w-full h-auto" style="height:450px;">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white bg-gradient-to-t from-black to-transparent">
                        <h2 class="mb-2 text-2xl font-bold">{{$ByCat[0]->title}}</h2>
                        {{-- <p class="text-sm">{{$ByCat[0]->time}}</p> --}}
                    </div>
                </div>
     </section>
 </div> 

@endif 
 
 
<!-- span-2 = cols2/3 -->   

 <!-- gap = margin , cols = cols -->       
 {{-- <div class="grid grid-cols-3 gap-2 md:grid-cols-2">

                    @foreach ($Latest as $news)
                    
                      <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">
                        <img src="{{$news->image}}" alt="Sports News" class="object-cover w-full h-32" >
                        <div class="p-3 bg-white">
                            <h4 class="mb-1 text-sm font-medium line-clamp-2" style="height:45px;">{{$news->title}}</h4>
                            <p class="text-xs text-gray-500">{{$news->time}}</p>
                        </div>
                      </div>

                    @endforeach
                  


 </div> --}}
 <!-- gap = margin , cols = cols -->  

 <!------------------------------------------------- section 1 --------------------------------------------------------->        

  <!------------------------------------------------- section 2 --------------------------------------------------------->        


 
     
 
        <div class="space-y-6 md:col-span-1">
<aside class="p-4 bg-white rounded-lg shadow-md">
<h3 class="pb-2 mb-4 text-lg font-semibold border-b" style="color:#399bd6">  
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

            
<aside class="p-4 bg-white rounded-lg shadow-md">
<h3 class="pb-2 mb-4 text-lg font-semibold border-b" style="color:#399bd6">  
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>
Provinces</h3>
                <ul class="space-y-2">
                    <li><a href="/by_prov/Eastern Cape" class="menu_hover block text-blue-600 ">Eastern Cape</a></li>                      
                    <li><a href="/by_prov/Free State" class="menu_hover block text-blue-600 ">Free State</a></li>                                 
                    <li><a href="/by_prov/Gauteng" class="menu_hover block text-blue-600 ">Gauteng</a></li>                    
                    <li><a href="/by_prov/KwaZulu-Natal" class="menu_hover block text-blue-600 ">KwaZulu-Natal</a></li> 
                    <li><a href="/by_prov/Limpopo" class="menu_hover block text-blue-600 ">Limpopo</a></li>                                      
                    <li><a href="/by_prov/Mpumalanga" class="menu_hover block text-blue-600 ">Mpumalanga</a></li>                    
                    <li><a href="/by_prov/North West" class="menu_hover block text-blue-600 ">North West</a></li>
                    <li><a href="/by_prov/Northern Cape" class="menu_hover block text-blue-600 ">Northern Cape</a></li>
                    <li><a href="/by_prov/Western Cape" class="menu_hover block text-blue-600 ">Western Cape</a></li> 
                </ul>
            </aside>


            

            
<style>
    .listing-widget-container {
  display: flex;
  flex-direction: column;
  width: 100%;
  /* max-width: 320px; */
  background-color: #ffffff;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  border-radius:10px;margin-top:5px;
}

.listing-row-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid #f1f5f9;
  text-decoration: none;
  color: inherit;
  transition: background-color 0.15s ease-in-out;
}

.listing-row-item:last-child {
  border-bottom: none;
}

.listing-row-item:hover {
  background-color: #f8fafc;
}

/* Thumbnail Styling */
.listing-thumb {
  width: 64px;
  height: 64px;
  min-width: 64px;
  border-radius: 12px; /* Smooth rounded corners */
  object-fit: cover;
  background-color: #e2e8f0;margin-left:10px;
}

/* Details Section */
.listing-details {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden; /* Enables text truncation */
}

/* Bold Truncated Title */
.listing-title {
  font-size: 0.9rem;
  font-weight: 700;
  color: #1e293b;
  margin: 0 0 2px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Secondary Location/Subtext */
.listing-subtext {
  font-size: 0.78rem;
  color: #8492a6;
  margin: 0 0 4px 0;
  line-height: 1.25;
  display: -webkit-box;
  -webkit-line-clamp: 2; /* Limits text to 2 lines */
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Bold Emerald Price */
.listing-price {
  font-size: 0.9rem;
  font-weight: 800;
  color: #10b981; /* Emerald Green */
  margin: 0;
}
</style>


@if($page=="Videos")
<br/>
  <div class="listing-widget-container">
  @foreach($Transport as $key => $value)
    
  <a href="/by_id/{{$value->id}}" class="listing-row-item">
    <img src="{{$value->image}}" alt="Volkswagen Golf" class="listing-thumb" />
    <div class="listing-details">
      <h5 class="listing-title">{{$value->title}}</h5>
      <p class="listing-subtext">{{substr($value->excerpt,0,150)}}..</p>
      <span class="listing-price">{{$value->cat}}</span>
    </div>
  </a>

   @endforeach
</div>
@endif

            
        </div>

          <style>
    .video-container {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 ratio */
      padding-top: 25px;
      height: 0;
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
        
        <div class="space-y-6 md:col-span-2">

            
            <!-- Business News Section -->
            <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>{{ $page }} </h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Business News Card 1 -->


                    
                      @foreach ($ByCat as $news)
           
                    <div class="flex flex-col overflow-hidden border border-gray-200 rounded-lg">

                        @if($page=="Videos")
                            
                        <div class="video-container">
                            <iframe
                            src="https://www.youtube.com/embed/<?php echo htmlspecialchars($news->image); ?>"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                            </iframe>
                        </div> 
                       @else 
                        
                       <a href="/by_id/{{$news->id}}"> 
                        <img src="{{$news->image}}" alt="Business News" class="object-cover w-full h-32"> 
                       </a>
                       
                       @endif
                       
                        <div class="p-3">
                          <a href="/by_id/{{$news->id}}">    <h4 class="mb-1 text-sm font-medium line-clamp-2" style="height:55px;">{{$news->title}}</h4></a>
                            {{-- <p class="text-xs text-gray-500">{{$news->time}}</p> --}}
                        </div>
                    </div>

          
                    @endforeach
    

                    
                </div>
            </section>





        </div>



        

        

        </div>

    <!------------------------------------------------- section 2 --------------------------------------------------------->        
     

   <!------------------------------------------------- section 5 --------------------------------------------------------->        
{{--      
<div class="space-y-6 md:col-span-1">
    
    <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Security News</h3>
                <div class="space-y-4">
                 
                    @foreach ($Security as $news)
                    <div class="flex items-center space-x-3">
                        <img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">{{$news->title}}</h4>
                            <p class="text-xs text-gray-500">{{$news->time}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </section>

</div>

  
<div class="space-y-6 md:col-span-1">
    
    <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Agriculture News</h3>
                <div class="space-y-4">

                    @foreach ($Agriculture as $news)
                    <div class="flex items-center space-x-3">
                        <img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">{{$news->title}}</h4>
                            <p class="text-xs text-gray-500">{{$news->time}}</p>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </section>

</div>

  
<div class="space-y-6 md:col-span-1">
    
    <section class="p-4 bg-white rounded-lg shadow-md">
                <h3 class="pb-2 mb-4 text-lg font-semibold border-b"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" style="float:left;margin-top:5px;">
<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>Transport News</h3>
                <div class="space-y-4">

                    @foreach ($Transport as $news)
                    <div class="flex items-center space-x-3">
                        <img src="{{$news->image}}" alt="Article Image" class="object-cover w-20 h-20 rounded-md">
                        <div>
                            <h4 class="text-sm font-medium line-clamp-2">{{$news->title}}</h4>
                            <p class="text-xs text-gray-500">{{$news->time}}</p>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </section>

</div> --}}

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
    </main>




 @include('partials.bottom')



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
                <li><a href="/by_status/Events" class="menu_hover"><? echo $icon_ ;?> Events</a></li>
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
</body>
</html>
