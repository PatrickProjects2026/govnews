<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor's Corner — Municipality Page (Example)</title>
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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

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
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Home</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">News</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">National</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Provincial</a>
            <a href="#" class="text-sky-400 border-b-2 border-sky-400 pb-1 whitespace-nowrap">Local Government</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">State Entities</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Parliament</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Tenders</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Events</a>
            <a href="#" class="hover:text-sky-300 transition whitespace-nowrap flex items-center space-x-1"><span>More</span> <i class="fa-solid fa-chevron-down text-[10px]"></i></a>
        </div>
    </nav> --}}



    <section class="relative bg-slate-900 text-white overflow-hidden py-16 sm:py-24">
        <!-- Background Landscape Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-40 mix-blend-overlay" style="background-image: url('/govnews_profiles/{{$province[0]->url}}');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-8 flex items-center">
            <!-- White Overlay Card on Left -->
            <div class="bg-white text-slate-900 p-6 sm:p-8 rounded-xl shadow-2xl max-w-md w-full border border-slate-200">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-16 h-16 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center shrink-0 p-2 shadow-inner">
                        <!-- City of Cape Town emblem representation -->
                        <div class="relative w-12 h-12 rounded-full border-2 border-sky-500 flex items-center justify-center">
                            <div class="absolute w-8 h-8 rounded-full border-2 border-amber-500"></div>
                            <div class="absolute w-4 h-4 rounded-full bg-emerald-600"></div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-base sm:text-lg font-black text-slate-900 leading-tight uppercase tracking-tight">Province of<br>{{$province[0]->province}}</h2>
                    </div>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Mayor's Corner</h1>
                <p class="text-[11px] text-slate-400 mt-2 font-medium tracking-wide">Progress & Priorities: Cape Town</p>
            </div>
        </div>
    </section>

    <div class="bg-white border-b border-slate-200 shadow-sm sticky top-[48px] z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center overflow-x-auto no-scrollbar space-x-8 text-xs font-semibold py-3">
            <a href="#" class="text-sky-600 border-b-2 border-sky-600 pb-3 -mb-3 whitespace-nowrap">Overview</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Mayor</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Vision</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Achievements</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Projects</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">News</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Events</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Media</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Contact</a>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Left/Center Column: Mayor Profile Card -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col md:flex-row gap-8 items-center md:items-start">
                <div class="w-64 h-80 rounded-xl overflow-hidden shadow-md shrink-0 bg-slate-100">
                    <img src="/govnews_profiles/{{$mayor[0]->url}}" alt="Mayor Geordin Hill-Lewis" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col justify-between h-full py-2">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-1">Mayor {{$mayor[0]->name}}</h2>
                        <p class="text-xs font-semibold text-slate-500 mb-4">Executive Mayor of the {{$mayor[0]->province}}</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">{{$mayor[0]->descr}}</p>
                    </div>
                    <div>
                        <a href="#" class="inline-flex items-center space-x-2 bg-sky-600 hover:bg-sky-500 text-white font-medium px-5 py-2.5 rounded-md text-xs transition shadow-sm">
                            <span>Read Full Profile</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar: Quick Links -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <h3 class="text-xl font-bold text-slate-900 mb-4">Quick Links</h3>
                <div class="space-y-3">
                    <a href="/by_status/Press" class="flex items-center space-x-3 p-3 bg-slate-50 hover:bg-sky-50 hover:border-sky-200 border border-slate-100 rounded-lg transition text-slate-700 hover:text-sky-600 text-xs font-semibold">
                        <div class="w-8 h-8 rounded bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-globe text-xs"></i>
                        </div>
                        <span>Municipal Press</span>
                    </a>
                    <a href="/by_prov/{{$province[0]->name}}" class="flex items-center space-x-3 p-3 bg-slate-50 hover:bg-sky-50 hover:border-sky-200 border border-slate-100 rounded-lg transition text-slate-700 hover:text-sky-600 text-xs font-semibold">
                        <div class="w-8 h-8 rounded bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-building-columns text-xs"></i>
                        </div>
                        <span>Council Updates</span>
                    </a>
                    <a href="/by_status/Tenders" class="flex items-center space-x-3 p-3 bg-slate-50 hover:bg-sky-50 hover:border-sky-200 border border-slate-100 rounded-lg transition text-slate-700 hover:text-sky-600 text-xs font-semibold">
                        <div class="w-8 h-8 rounded bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-file-contract text-xs"></i>
                        </div>
                        <span>Tenders</span>
                    </a>
                    <a href="/by_status/Vacancies" class="flex items-center space-x-3 p-3 bg-slate-50 hover:bg-sky-50 hover:border-sky-200 border border-slate-100 rounded-lg transition text-slate-700 hover:text-sky-600 text-xs font-semibold">
                        <div class="w-8 h-8 rounded bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-briefcase text-xs"></i>
                        </div>
                        <span>Vacancies</span>
                    </a>
                    <a href="/by_status/Events" class="flex items-center space-x-3 p-3 bg-slate-50 hover:bg-sky-50 hover:border-sky-200 border border-slate-100 rounded-lg transition text-slate-700 hover:text-sky-600 text-xs font-semibold">
                        <div class="w-8 h-8 rounded bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-address-book text-xs"></i>
                        </div>
                        <span>Events</span>
                    </a>
                    <a href="/by_cat/Sport%20and%20Recreation" class="flex items-center space-x-3 p-3 bg-slate-50 hover:bg-sky-50 hover:border-sky-200 border border-slate-100 rounded-lg transition text-slate-700 hover:text-sky-600 text-xs font-semibold">
                        <div class="w-8 h-8 rounded bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-map text-xs"></i>
                        </div>
                        <span>Sports</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-extrabold text-slate-900">Latest from Mayor's Corner</h3>
            </div>

            <!-- 3 News Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- News Card 1 -->

                @foreach($Latest as $data)
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
         <a href="/by_id/{{$data->id}}"> <img src="{{$data->image}}" alt="Hospital Inspection" class="w-full h-full object-cover"> </a>
                        </div>
                        <div class="p-5">
                            <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">{{$data->cat}}</span>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug mb-3">{{ html_entity_decode(strip_tags(substr($data->excerpt, 0, 90))) }}...</h4>
                        </div>
                    </div>
                    <div class="px-5 pb-5 text-xs text-slate-400">3 days ago</div>
                </div>
                @endforeach

{{--                 
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="https://placehold.co/600x400/0284c7/ffffff?text=Water+Resilience" alt="Water Resilience" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">Service Delivery</span>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug mb-3">City expands water resilience programme</h4>
                        </div>
                    </div>
                    <div class="px-5 pb-5 text-xs text-slate-400">2 days ago</div>
                </div>

                
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="https://placehold.co/600x400/0284c7/ffffff?text=Khayelitsha+Facility" alt="Community Facility" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">Community</span>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug mb-3">New community facility opens in Khayelitsha</h4>
                        </div>
                    </div>
                    <div class="px-5 pb-5 text-xs text-slate-400">4 days ago</div>
                </div>


                
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="https://placehold.co/600x400/0284c7/ffffff?text=MyCiTi+Bus" alt="Public Transport" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1">Infrastructure</span>
                            <h4 class="font-bold text-slate-900 text-sm leading-snug mb-3">Cape Town advances public transport upgrades</h4>
                        </div>
                    </div>
                    <div class="px-5 pb-5 text-xs text-slate-400">1 week ago</div>
                </div> --}}


            </div>
        </div>
    </main>




    {{-- <footer class="bg-[#081225] text-white pt-12 pb-8 border-t border-slate-800">
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


   @include('partials.bottom') 


</body>
</html>