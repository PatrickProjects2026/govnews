<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-------------------------------------------------------- menu ---------------------------------------------------------->

<!-- Top Bar -->
<header class="w-full bg-[#0a192f] text-white text-xs py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 flex justify-between items-center">
        <div class="hidden sm:block text-slate-400">  Powered by: <a href="https://mrbrand.co.za/">Mr Brand™</a> </div>
        <div class="flex items-center space-x-6 ml-auto">
            {{-- <a href="#" class="hover:text-sky-400 transition">About</a>
            <a href="#" class="hover:text-sky-400 transition">Contact</a>
            <a href="#" class="hover:text-sky-400 transition">Login</a>
            <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white font-medium px-3.5 py-1.5 rounded transition shadow-sm">Sign Up</a> --}}
             Customer Support: 011 333 6000 

        </div>
    </div>
</header>

<!-- Logo and Search Bar Section -->
<div class="bg-white border-b border-slate-200 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <div>
               <a href="/"> <img src="/govnews.png" style="height:40px;"/> </a>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="w-full md:w-96 relative">
            <input type="text" id="find_news" placeholder="Search GovNews..." class="w-full bg-slate-100 border border-slate-300 rounded-md py-2 pl-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition">
            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-500 hover:text-sky-600 transition">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </button>
        </div>
    </div>
</div>

<!-- Navigation Links Bar -->
<nav class="bg-[#0b2240] text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center overflow-x-auto no-scrollbar py-3 space-x-6 text-xs font-bold uppercase tracking-wider">
        <a href="/" class="text-sky-400 border-b-2 border-sky-400 pb-1 whitespace-nowrap">Home</a>
        <a href="/by_status/News" class="hover:text-sky-300 transition whitespace-nowrap">News</a>
        <a href="/" class="hover:text-sky-300 transition whitespace-nowrap">National</a>
        <a href="/premier/KwaZulu-Natal" class="hover:text-sky-300 transition whitespace-nowrap">Provincial</a>
        <a href="#" class="hover:text-sky-300 transition whitespace-nowrap">Local Government</a>
        <a href="/by_cat/Transport" class="hover:text-sky-300 transition whitespace-nowrap">Transport </a>
        <a href="/by_cat/Human Settlement" class="hover:text-sky-300 transition whitespace-nowrap">Housing</a>
        <a href="/by_status/Tenders" class="hover:text-sky-300 transition whitespace-nowrap">Tenders</a>
        <a href="/by_status/Events" class="hover:text-sky-300 transition whitespace-nowrap">Events</a>
        <a href="/by_status/Videos" class="hover:text-sky-300 transition whitespace-nowrap">Videos</a>
    </div>
</nav>

<!-------------------------------------------------------- menu ---------------------------------------------------------->

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
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