<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$municipality[0]->name}} — Municipality Explorer — GovNews.co.za</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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

    <!-------------------------------------------------------- menu ---------------------------------------------------------->
    @include('partials.top')
    <!-------------------------------------------------------- menu ---------------------------------------------------------->

    <!-- Hero Section -->
    <section class="relative bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-35 mix-blend-overlay" style="background-image: url('/govnews_profiles/{{$province[0]->url}}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a] via-[#0f172a]/90 to-[#1e293b]/80"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-8 py-16 sm:py-20 flex flex-col sm:flex-row items-center gap-8 z-20">
            <div class="w-40 h-40 sm:w-52 sm:h-52 rounded-2xl bg-sky-600 border-4 border-white/15 shadow-2xl shrink-0 flex flex-col items-center justify-center p-6 text-center">
                <svg class="w-16 h-16 fill-white mb-3" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                <span class="text-white font-extrabold text-xs sm:text-sm uppercase tracking-wider leading-tight">{{$municipality[0]->name}}</span>
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-2 text-white">{{$municipality[0]->name}}</h1>
                <p class="text-base sm:text-lg text-slate-300 font-normal">A vibrant city. A brighter future.</p>
            </div>
        </div>
    </section>

    <!-- Sub Navigation Tabs -->
    <div class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center space-x-8 overflow-x-auto no-scrollbar">
            <a href="#" class="text-sky-600 border-b-2 border-sky-600 text-sm font-semibold py-4 whitespace-nowrap">Overview</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Mayor</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Municipal Manager</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Council</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Projects</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">News</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Tenders</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Events</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Contact</a>
        </div>
    </div>

    <!-- Main Content Grid Layout -->
    <div class="max-w-7xl mx-auto px-4 sm:px-8 my-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left Column: About Section (Spans 2 columns) -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-8 flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">About {{$municipality[0]->name}}</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        {{$municipality[0]->descr}}
                    </p>
                    <a href="#" class="inline-flex items-center space-x-2 bg-sky-600 hover:bg-sky-500 text-white font-semibold px-5 py-2.5 rounded-md text-sm transition shadow-sm">
                        <span>Visit Official Website</span>
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Column: Key Information Sidebar (Spans 1 column) -->
        <div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <h3 class="text-base font-bold text-slate-900 mb-4">Key Information</h3>
                <div class="space-y-1">
                    <div class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 text-sm font-medium">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-users text-xs"></i>
                        </div>
                        <div class="truncate"><span class="text-slate-400 font-normal">Population:</span> <span class="text-slate-900 font-semibold">3 769 000</span></div>
                    </div>
                    <div class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 text-sm font-medium">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-city text-xs"></i>
                        </div>
                        <div class="truncate"><span class="text-slate-400 font-normal">Municipal Type:</span> <span class="text-slate-900 font-semibold">Metro</span></div>
                    </div>
                    <div class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 text-sm font-medium">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-map-location-dot text-xs"></i>
                        </div>
                        <div class="truncate"><span class="text-slate-400 font-normal">Province:</span> <span class="text-slate-900 font-semibold">KwaZulu-Natal</span></div>
                    </div>
                    <div class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 text-sm font-medium">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-tie text-xs"></i>
                        </div>
                        <div class="truncate"><span class="text-slate-400 font-normal">Mayor:</span> <span class="text-slate-900 font-semibold">Cllr Cyril Xaba</span></div>
                    </div>
                    <div class="flex items-center space-x-3 py-2.5 text-slate-700 text-sm font-medium">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-gear text-xs"></i>
                        </div>
                        <div class="truncate"><span class="text-slate-400 font-normal">Municipal Manager:</span> <span class="text-slate-900 font-semibold">Musa Mbhele</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore Section Header -->
        <div class="lg:col-span-3 flex justify-between items-center mt-6 mb-2">
            <h2 class="text-xl font-extrabold text-slate-900">Explore {{$municipality[0]->name}}</h2>
        </div>

        <!-- Explore Cards Grid (4 columns responsive) -->
        <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            @foreach($Latest as $data)
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="h-32 overflow-hidden bg-slate-100">
                        <a href="/by_id/{{$data->id}}">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-300" src="{{$data->image}}" alt="Project image">
                        </a>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-2">
                            <a href="/by_id/{{$data->id}}" class="hover:text-sky-600 transition">{{ html_entity_decode(strip_tags(substr($data->excerpt, 0, 90))) }}...</a>
                        </h3>
                    </div>
                </div>
                <div class="px-4 pb-4 text-xs font-semibold text-sky-600 uppercase tracking-wide">{{$data->cat}}</div>
            </div>
            @endforeach
        </div>

    </div>

    <!-------------------------------------------------------- footer -------------------------------------------------------->
    @include('partials.bottom')
    <!-------------------------------------------------------- footer -------------------------------------------------------->

</body>
</html>