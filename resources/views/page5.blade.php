<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipal Managers’ Corner — GovNews.co.za</title>
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
        /* Custom scrollbar for category pills / sub-nav */
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
            <img class="w-40 h-40 sm:w-52 sm:h-52 rounded-full object-cover border-4 border-white/15 shadow-2xl shrink-0 bg-slate-800" src="/govnews_profiles/{{$municipal[0]->url}}" alt="Municipal Manager Portrait">
            <div class="text-center sm:text-left">
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-2 text-white">Municipal Managers’ Corner</h1>
                <p class="text-base sm:text-lg text-slate-300 font-normal">Practical knowledge. Better governance. Stronger municipalities.</p>
            </div>
        </div>
    </section>

    <!-- Sub Navigation Tabs -->
    <div class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center space-x-8 overflow-x-auto no-scrollbar">
            <a href="#" class="text-sky-600 border-b-2 border-sky-600 text-sm font-semibold py-4 whitespace-nowrap">Overview</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">MFMA &amp; Treasury</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Grants</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Audit Advice</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Legal &amp; Governance</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Case Studies</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Templates</a>
            <a href="#" class="text-slate-600 hover:text-sky-600 border-b-2 border-transparent text-sm font-semibold py-4 whitespace-nowrap transition">Events</a>
        </div>
    </div>

    <!-- Main Content Grid Layout -->
    <div class="max-w-7xl mx-auto px-4 sm:px-8 my-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left Column: Intro Box (Spans 2 columns) -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-8 flex flex-col justify-between">
                <div class="intro-box">
                    <h2 class="text-2xl font-bold text-slate-900 mb-3">Supporting Municipal Managers to deliver.</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        {{$municipal[0]->descr}}
                    </p>
                    <a href="#" class="inline-flex items-center space-x-2 bg-sky-600 hover:bg-sky-500 text-white font-semibold px-5 py-2.5 rounded-md text-sm transition shadow-sm">
                        <span>Join the Network</span>
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Column: Popular Resources Sidebar (Spans 1 column) -->
        <div>
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
                <h3 class="text-base font-bold text-slate-900 mb-4">Popular Resources</h3>
                <div class="space-y-1">
                    <a href="#" class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 hover:text-sky-600 text-sm font-medium transition">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-file-lines text-xs"></i>
                        </div>
                        <span>Latest MFMA Circulars</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 hover:text-sky-600 text-sm font-medium transition">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-coins text-xs"></i>
                        </div>
                        <span>Grant Funding Alerts</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 hover:text-sky-600 text-sm font-medium transition">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-calendar-check text-xs"></i>
                        </div>
                        <span>Compliance Calendar</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 py-2.5 border-b border-slate-100 text-slate-700 hover:text-sky-600 text-sm font-medium transition">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-toolbox text-xs"></i>
                        </div>
                        <span>Templates &amp; Tools</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 py-2.5 text-slate-700 hover:text-sky-600 text-sm font-medium transition">
                        <div class="w-8 h-8 bg-sky-50 rounded text-sky-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-scale-balanced text-xs"></i>
                        </div>
                        <span>Legal &amp; Governance Q&amp;A</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Latest News Section Header -->
        <div class="lg:col-span-3 flex justify-between items-center mt-6 mb-2">
            <h2 class="text-xl font-extrabold text-slate-900">Latest from Municipal Managers’ Corner</h2>
            <a href="/by_prov/{{$province[0]->name}}" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center space-x-1">
                <span>View All</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

        <!-- Latest News Cards Grid (3 columns) -->
        <div class="lg:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            @foreach($Latest as $data)
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="h-44 overflow-hidden bg-slate-100">
                        <a href="/by_id/{{$data->id}}">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-300" src="{{$data->image}}" alt="News image">
                        </a>
                    </div>
                    <div class="p-5">
                        <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider block mb-1.5">{{$data->cat}}</span>
                        <h3 class="font-bold text-slate-900 text-sm leading-snug mb-3">
                            <a href="/by_id/{{$data->id}}" class="hover:text-sky-600 transition">{{ html_entity_decode(strip_tags(substr($data->excerpt, 0, 90))) }}...</a>
                        </h3>
                    </div>
                </div>
                <div class="px-5 pb-5 text-xs text-slate-400 font-medium">{{$data->status}}</div>
            </div>
            @endforeach
        </div>

    </div>

    <!-------------------------------------------------------- footer -------------------------------------------------------->
    @include('partials.bottom')
    <!-------------------------------------------------------- footer -------------------------------------------------------->

</body>
</html>