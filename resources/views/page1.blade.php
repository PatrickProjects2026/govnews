<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOVNEWS.CO.ZA - Sharing Good News with Everyone!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        govBlue: '#004b87',
                        govDark: '#0a192f',
                        govGold: '#d97706',
                        govTeal: '#0ea5e9'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Custom scrollbar for category pills */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">


  
    <!-------------------------------------------------------- menu ---------------------------------------------------------->
 @include('partials.top')

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


<section class="relative bg-slate-900 text-white overflow-hidden">
        <!-- Background Image with Higher Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-85 mix-blend-overlay" style="background-image: url('/govnews_profiles/{{$province[0]->url}}');"></div>
        <!-- Lighter Gradient Overlay so it doesn't overshadow the image -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-8 pt-16 pb-20 sm:pt-24 sm:pb-28">
            <div class="max-w-2xl">
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">Government News</h1>
                <p class="text-lg sm:text-xl text-slate-200 mb-8 font-light">{{substr($province[0]->descr,0,150)}} ...</p>
                <a href="#" class="inline-flex items-center space-x-2 bg-sky-600 hover:bg-sky-500 text-white font-semibold px-6 py-3 rounded-md shadow-lg transition">
                    <span>Read Latest News</span>
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>

            <!-- 4 Icon Features -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16 pt-8 border-t border-white/10">

              <a href="/by_cat/Human Settlement">
                <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm p-3 rounded-lg border border-white/10">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0">
                        <i class="fa-solid fa-landmark text-xs"></i>
                    </div>
                    <span class="text-xs font-medium text-slate-100">Informed Government</span>
                </div>
              </a>

              <a href="/by_status/Programmes">
                <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm p-3 rounded-lg border border-white/10">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0">
                        <i class="fa-solid fa-users text-xs"></i>
                    </div>
                    <span class="text-xs font-medium text-slate-100">Stronger Communities</span>
                </div>
              </a>

              <a href="/by_status/Vacancies">
                <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm p-3 rounded-lg border border-white/10">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0">
                        <i class="fa-solid fa-briefcase text-xs"></i>
                    </div>
                    <span class="text-xs font-medium text-slate-100">More Opportunities</span>
                </div>
              </a>

          <a href="/by_status/Success">
                <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm p-3 rounded-lg border border-white/10">
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0">
                        <i class="fa-solid fa-shield-heart text-xs"></i>
                    </div>
                    <span class="text-xs font-medium text-slate-100">A Better South Africa</span>
                </div>
              </a>

            </div>
        </div>
    </section>

    

    <section class="max-w-7xl mx-auto px-4 sm:px-8 -mt-8 relative z-20 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-gradient-to-b from-[#0b2240] to-[#0a192f] text-white rounded-xl shadow-xl overflow-hidden flex flex-col justify-between border border-sky-500/30">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold mb-1">Premier's<br>Leadership Zone</h3>
                            <p class="text-xs text-slate-300 mt-2">{{substr($premier[0]->descr,0,150)}} ...</p>
                        </div>
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-sky-400/50 shrink-0 bg-slate-800">
                            <img src="/govnews_profiles/{{ $premier[0]->url }}" alt="Premier" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <a href="/premier/{{ $premier[0]->province }}" class="inline-flex items-center space-x-2 bg-sky-500 hover:bg-sky-400 text-white font-medium px-4 py-2 rounded text-xs transition shadow">
                        <span>Visit</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-gradient-to-b from-[#0b2240] to-[#0a192f] text-white rounded-xl shadow-xl overflow-hidden flex flex-col justify-between border border-sky-500/30">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold mb-1">Mayor's Corner</h3>
                            <p class="text-xs text-slate-300 mt-2">{{substr($mayor[0]->descr,0,150)}} ...</p>
                        </div>
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-sky-400/50 shrink-0 bg-slate-800">
                            <img src="/govnews_profiles/{{ $mayor[0]->url }}" alt="Mayor" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <a href="/mayor/{{ $premier[0]->province }}" class="inline-flex items-center space-x-2 bg-sky-500 hover:bg-sky-400 text-white font-medium px-4 py-2 rounded text-xs transition shadow">
                        <span>Visit</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-gradient-to-b from-[#0b2240] to-[#0a192f] text-white rounded-xl shadow-xl overflow-hidden flex flex-col justify-between border border-sky-500/30">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold mb-1">Municipal<br>Managers' Corner</h3>
                            <p class="text-xs text-slate-300 mt-2">{{substr($municipal[0]->descr,0,150)}} ...</p>
                        </div>
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-sky-400/50 shrink-0 bg-slate-800">
                            <img src="/govnews_profiles/{{ $municipal[0]->url }}" alt="Manager" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <a href="/municipal/{{ $premier[0]->province }}" class="inline-flex items-center space-x-2 bg-sky-500 hover:bg-sky-400 text-white font-medium px-4 py-2 rounded text-xs transition shadow">
                        <span>Visit</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


   
    <section class="max-w-7xl mx-auto px-4 sm:px-8 mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">Latest Government News</h2>
            <a href="/all" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center space-x-1">
                <span>View All News</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

        <!-- Category Filter Pills -->
        <div class="flex items-center space-x-2 overflow-x-auto no-scrollbar pb-4 mb-6 border-b border-slate-200">
            <a href="/all" class="bg-sky-600 text-white px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap shadow-sm">All</button>
            <a href="/by_cat/Immigration and Border Issues"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Immigration</a>
            <a href="/by_cat/Infrastructure and Planning"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Infrastructure</a>
            <a href="/by_cat/Gauteng Municipalities"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Municipal</a>
            <a href="/by_cat/Health"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Health</a>
            <a href="/by_cat/Education"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Education</a>
            <a href="/by_cat/Transport"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Transport</a>
            <a href="/by_cat/Mineral Resources"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Energy</a>
            <a href="/by_cat/Science and Technology"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Science</a>
            <a href="/by_cat/Safety and Security"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Safety</a>
            <a href="/by_cat/Agriculture, Land Reform and Rural Development"  class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200 px-4 py-1.5 rounded-full text-xs font-semibold whitespace-nowrap transition">Environment</a>
        </div>

        <!-- News Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- News Card 1 -->
            @foreach($Latest as $data)
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="h-40 overflow-hidden bg-slate-100">
    <a href="/by_id/{{$data->id}}"> <img src="{{$data->image}}" alt="PRASA Train" class="w-full h-full object-cover"> </a>
                    </div>
                    <div class="p-4">
    <a href="/by_id/{{$data->id}}"> <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">{{$data->cat}}</span> </a>
                        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-3">{{ html_entity_decode(strip_tags(substr($data->excerpt, 0, 90))) }}..</h3>
                    </div>
                </div>
                <div class="px-4 pb-4 text-xs text-slate-400">{{$data->status}}</div>
            </div>
            @endforeach

        
       {{-- 
             <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="h-40 overflow-hidden bg-slate-100">
                        <img src="https://placehold.co/600x400/0284c7/ffffff?text=Infrastructure" alt="Infrastructure" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">Infrastructure</span>
                        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-3">Major water infrastructure project breaks ground in KZN</h3>
                    </div>
                </div>
                <div class="px-4 pb-4 text-xs text-slate-400">4 hours ago</div>
            </div>

          
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="h-40 overflow-hidden bg-slate-100">
                        <img src="https://placehold.co/600x400/0284c7/ffffff?text=Digital+Learning" alt="Education" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">Education</span>
                        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-3">More schools to benefit from digital learning programme</h3>
                    </div>
                </div>
                <div class="px-4 pb-4 text-xs text-slate-400">6 hours ago</div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="h-40 overflow-hidden bg-slate-100">
                        <img src="https://placehold.co/600x400/0284c7/ffffff?text=Solar+Energy" alt="Energy" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">Energy</span>
                        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-3">Government opens new renewable energy bids</h3>
                    </div>
                </div>
                <div class="px-4 pb-4 text-xs text-slate-400">8 hours ago</div>
            </div> --}}


        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-8 mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Featured Leader -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Featured Leader</h3>
                    <div class="flex flex-col sm:flex-row gap-6 items-center sm:items-start">
                        <div class="w-40 h-48 rounded-xl overflow-hidden shadow-md shrink-0 bg-slate-200">
                            <img src="/govnews_profiles/{{$premier1[0]->url}}" alt="Premier Oscar Mabuyane" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="inline-block bg-sky-600 text-white text-[10px] font-bold px-2.5 py-1 rounded mb-2 uppercase tracking-wider">Featured Leader</span>
                            <h4 class="text-lg font-bold text-slate-900">{{$premier1[0]->name}}</h4>
                            <p class="text-xs font-semibold text-slate-500 mb-3">Premier of the {{$premier1[0]->province}}</p>
                            <p class="text-xs text-slate-600 leading-relaxed mb-4">{{substr($premier1[0]->descr,0,250)}} ...</p>
                            <a href="/mayor/{{$premier1[0]->province}}" class="inline-flex items-center space-x-2 bg-sky-600 hover:bg-sky-500 text-white font-medium px-4 py-2 rounded text-xs transition shadow-sm">
                                <span>View Profile</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Provincial Dashboard -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">Provincial Dashboard</h3>
                    <p class="text-xs text-slate-500 mb-4">Explore by Province</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
                        <!-- South Africa Map Placeholder Graphic -->
                        <div class="flex justify-center bg-slate-50 p-4 rounded-lg border border-slate-100">
                        <img src="govnews_profiles/samap.png"/>
                        </div>

                        <!-- Province List -->
                        <div class="space-y-2 text-xs">
                            <a href="/premier/Eastern Cape" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Eastern Cape</span>
                            </a>
                            <a href="/premier/Free State" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Free State</span>
                            </a>
                            <a href="/premier/Gauteng" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Gauteng</span>
                            </a>
                            <a href="/premier/KwaZulu-Natal" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">KwaZulu-Natal</span>
                            </a>
                            <a href="/premier/Limpopo" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Limpopo</span>
                            </a>
                            <a href="/premier/Mpumalanga" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Mpumalanga</span>
                            </a>
                            <a href="/premier/Northern Cape" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Northern Cape</span>
                            </a>
                            <a href="/premier/North West" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">North West</span>
                            </a>
                            <a href="/premier/Western Cape" class="flex items-center space-x-2 text-slate-700 hover:text-sky-600 transition p-1 rounded hover:bg-slate-50">
                                <i class="fa-solid fa-map-pin text-sky-600 w-4"></i>
                                <span class="font-medium">Western Cape</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>


    
    <!------------------------------------------------- section ---------------------------------------------------------->
<section class="max-w-7xl mx-auto px-4 sm:px-8 -mt-8 relative z-20 mb-12">
    <!-- 2-Column Grid: Left Column (60%) for Video, Right Column (40%) for Ebook -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-start">
        
        <!-- Left Column: Video (Span 3 columns out of 5 = 60%) -->
        <div class="lg:col-span-3 space-y-6">
            <section class="overflow-hidden bg-white rounded-lg shadow-md">
                <div class="relative">
                    <div class="video-container">
                        <iframe 
                            src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Femfulenilocalmunicipality%2Fvideos%2F1297454425781247%2F&show_text=false&width=560&autoplay=true&mute=1"
                            width="100%" 
                            height="355" 
                            style="border:none;overflow:hidden" 
                            scrolling="no" 
                            frameborder="0" 
                            allowfullscreen="true" 
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                        </iframe>
                    </div> 

                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white bg-gradient-to-t from-black to-transparent">
                    </div>
                </div>
            </section>
        </div> 

        <!-- Right Column: Ebook (Span 2 columns out of 5 = 40%) -->
        <div class="lg:col-span-2 flex flex-col overflow-hidden border border-gray-200 rounded-lg bg-white shadow-md">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

            <div class="w-full">
                <a href="#" download="">
                    <div class="bg-gray-700 text-white w-full border border-silver p-2.5 text-sm rounded-t-lg text-center hover:bg-gray-600 transition">
                        View Fullscreen
                    </div>
                </a>

                <div class="p-2">
                    <a href="https://govnews.co.za/public/GovernmentToday/" class="fbp-embed" data-fbp-lightbox="yes" data-fbp-width="100%" data-fbp-height="290px" data-fbp-method="site" data-fbp-version="2.11.1" style="max-width: 100%">Government Today</a>
                    <script async defer src="https://govnews.co.za/public/GovernmentToday/files/html/static/embed.js?uni=8bda925214606258d99f79afc2ad54ae"></script>
                </div>
            </div>
        </div>

    </div>
</section>
<!------------------------------------------------- section ---------------------------------------------------------->



    <section class="max-w-7xl mx-auto px-4 sm:px-8 mb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Tenders -->
          <a href="/by_status/Tenders">
            <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200 flex items-center space-x-4 hover:border-sky-500 transition">
                <div class="w-12 h-12 rounded-lg bg-sky-50 text-sky-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-calendar-days text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 text-sm">Tenders</h4>
                    <p class="text-xs text-slate-500">Find opportunities</p>
                </div>
            </div>
          </a>

            <!-- Events -->
          <a href="/by_status/Events">  
            <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200 flex items-center space-x-4 hover:border-sky-500 transition">
                <div class="w-12 h-12 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-calendar text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 text-sm">Events</h4>
                    <p class="text-xs text-slate-500">Government calendar</p>
                </div>
            </div>
          </a>  

            <!-- Public Notices -->
           <a href="/by_status/Programmes">  
            <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200 flex items-center space-x-4 hover:border-sky-500 transition">
                <div class="w-12 h-12 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-bullhorn text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 text-sm">Public Notices</h4>
                    <p class="text-xs text-slate-500">Official updates</p>
                </div>
            </div>
          </a>

            <!-- Government Directory -->
          <a href="/by_status/Press">  
            <div class="bg-white rounded-xl p-4 shadow-sm border border-slate-200 flex items-center space-x-4 hover:border-sky-500 transition">
                <div class="w-12 h-12 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-building-columns text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 text-sm">Government Directory</h4>
                    <p class="text-xs text-slate-500">Departments, municipalities</p>
                </div>
            </div>
          </a>

        </div>
    </section>


    <!-------------------------------------------------------- footer  -------------------------------------------------------->
 @include('partials.bottom')
 
    {{-- <footer class="bg-[#081225] text-white pt-12 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
          
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


</body>
</html>