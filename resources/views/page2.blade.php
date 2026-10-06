<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier's Leadership Zone — Province Page (Example)</title>
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




    <section class="relative bg-slate-900 text-white overflow-hidden py-16 sm:py-24">
        <!-- Background Landscape Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-40 mix-blend-overlay" style="background-image: url('/govnews_profiles/{{$province[0]->url}}');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900  to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Left: Premier Portrait overlapping hero -->
            <div class="flex items-center space-x-6">
                {{-- <div class="w-40 sm:w-56 h-48 sm:h-64 rounded-xl overflow-hidden border-4 border-white/20 shadow-2xl bg-slate-800 shrink-0">
                    <img src="/govnews_profiles/{{$premier1[0]->url}}" alt="Premier Oscar Mabuyane" class="w-full h-full object-cover">
                </div> --}}
            </div>

            <!-- Center/Right: Coat of arms & Titles -->
            <div class="flex-1 text-center md:text-left flex flex-col md:flex-row items-center gap-6">
                <!-- Eastern Cape Coat of Arms Badge Graphic -->
                <div class="w-24 h-24 bg-amber-500/20 border-2 border-amber-400/60 rounded-xl flex items-center justify-center p-2 shadow-lg backdrop-blur-sm shrink-0">
                    <div class="text-center">
                        <i class="fa-solid fa-shield-halved text-3xl text-amber-400 mb-1"></i>
                        <div class="text-[9px] font-bold uppercase tracking-wider text-amber-200">{{$province[0]->name}}</div>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight mb-3">{{$province[0]->name}}<br>Premier's Leadership Zone </h1>
                    <p class="text-sm sm:text-base text-slate-200 font-light">A platform for the Premier's vision, priorities and progress.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white border-b border-slate-200 shadow-sm sticky top-[48px] z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center overflow-x-auto no-scrollbar space-x-8 text-xs font-semibold py-3">
            <a href="#" class="text-sky-600 border-b-2 border-sky-600 pb-3 -mb-3 whitespace-nowrap">Overview</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Premier</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Vision</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Interviews</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Infrastructure</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Investment</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Performance</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Media</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 transition whitespace-nowrap">Events </a>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Left Card: Premier Profile -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-between">
                <div>
                    <div class="w-full h-72 rounded-xl overflow-hidden shadow-md mb-6 bg-slate-100">
                        <img src="/govnews_profiles/{{$premier1[0]->url}}" alt="Premier Oscar Mabuyane" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 mb-1">{{$premier1[0]->name}}</h2>
                    <p class="text-xs font-semibold text-slate-500 mb-4">Premier of the {{$premier1[0]->province}}</p>
                    <p class="text-xs text-slate-600 leading-relaxed mb-6">{{$premier1[0]->descr}}</p>
                </div>
                <div>
                    <a href="#" class="inline-flex items-center space-x-2 bg-sky-600 hover:bg-sky-500 text-white font-medium px-5 py-2.5 rounded-md text-xs transition shadow-sm">
                        <span>Read Biography</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Right Card: Province in Numbers (Takes 2 cols) -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-6">Province in Numbers</h3>

                    <div class="space-y-4">
                        <!-- Stat 1 -->
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-landmark text-sm"></i>
                                </div>
                                <span class="text-sm font-bold text-slate-700">{{$province[0]->Mun}} Municipalities</span>
                            </div>
                            <span class="text-xs font-semibold text-slate-400">Local Government</span>
                        </div>

                        <!-- Stat 2 -->
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-users text-sm"></i>
                                </div>
                                <span class="text-sm font-bold text-slate-700">{{$province[0]->Pop}} million <span class="font-normal text-slate-500">Population</span></span>
                            </div>
                            <span class="text-xs font-semibold text-slate-400">Demographics</span>
                        </div>

                        <!-- Stat 3 -->
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-chart-pie text-sm"></i>
                                </div>
                                <span class="text-sm font-bold text-slate-700">R{{$province[0]->Gdp}}  <span class="font-normal text-slate-500">GDP</span></span>
                            </div>
                            <span class="text-xs font-semibold text-slate-400">Economy</span>
                        </div>

                        <!-- Stat 4 -->
                        <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-building-ngo text-sm"></i>
                                </div>
                                <span class="text-sm font-bold text-slate-700">R{{$province[0]->Inf}} billion <span class="font-normal text-slate-500">Infrastructure Investment</span></span>
                            </div>
                            <span class="text-xs font-semibold text-slate-400">Development</span>
                        </div>
                        

                             <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">Provincial Dashboard</h3>
                    <p class="text-xs text-slate-500 mb-4">Explore by Province</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
                        <!-- South Africa Map Placeholder Graphic -->
                        <div class="flex justify-center bg-slate-50 p-4 rounded-lg border border-slate-100">
                        <img src="/govnews_profiles/samap.png"/>
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



                </div>
            </div>
        </div>

        <div class="mb-16">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-extrabold text-slate-900">Latest from the Premier's Leadership Zone</h3>
                <a href="#" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center space-x-1">
                    <span>View All Provincial Content</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
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