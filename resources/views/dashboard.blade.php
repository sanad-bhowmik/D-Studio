<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Dashboard | DSTUDIO</title>

</head>
<style>
    .scroller {
        scrollbar-color: #a0aec0 #141b2a;
        scrollbar-width: none !important;
    }

    .scroller::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    .scroller::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #141b2a;
    }

    .scroller::-webkit-scrollbar-thumb {
        background: #181818;
        border-radius: 100vh;
        border: 1px solid #181818;
    }

    .scroller::-webkit-scrollbar-thumb:hover {
        background: #a0aec0;
    }

    .scrollerlight {
        scrollbar-color: #cfcfcf #ffffff;
        scrollbar-width: none !important;
    }

    .scrollerlight::-webkit-scrollbar {
        width: 2px;
        height: 6px;
    }

    .scrollerlight::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #ffffff;
    }

    .scrollerlight::-webkit-scrollbar-thumb {
        background: #cecece;
        border-radius: 100vh;
        border: 1px solid #cecece;
    }

    .scrollerlight::-webkit-scrollbar-thumb:hover {
        background: #cecece;
    }
</style>

<body>
    <div class="md:flex">

        @include('partials.sidebar')


        <!-- content -->
        <div class="flex-1 flex-col flex">
            @include('partials.navDash')

            <main class="bg-[#f3f3f9] mb-auto flex-grow">
                <div class="bg-gray-100 min-h-screen flex flex-col p-6">
                    <!-- Dashboard Widgets (Grid Layout) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Total Users Widget -->
                        <div
                            class="bg-gradient-to-t from-red-700 via-rose-600 to-pink-500 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-300 hover:scale-105">
                            <h3 class="text-xl font-semibold text-white">Given Ideas</h3>
                            <div class="mt-3">
                                <span class="text-white text-3xl">{{ $totalIdeas }}</span>
                                <!-- Displaying the total count -->
                            </div>
                        </div>


                        <!-- New Registrations Widget -->
                        <div
                            class="bg-gradient-to-tr from-green-400 via-emerald-500 to-green-700 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-300 hover:scale-105">
                            <h3 class="text-xl font-semibold text-white">Active Product</h3>
                            <div class="mt-3">
                                <span class="text-white text-3xl">{{ $todaysIdeas }}</span>
                                <!-- Displaying today's idea count -->
                            </div>
                            <div class="mt-3 text-white text-sm">
                                <!-- Displaying today's date -->
                                {{ \Carbon\Carbon::today()->format('F j, Y') }}
                            </div>
                        </div>



                        <!-- Total Blogs Widget -->
                        <div
                            class="bg-purple-600 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition-all duration-300 hover:scale-105">
                            <h3 class="text-xl font-semibold text-white">Total Blogs</h3>
                            <div class="mt-3">
                                <span class="text-white text-3xl">{{ $totalBlogs }}</span>
                                <!-- Displaying the total number of blogs -->
                            </div>
                            <div class="mt-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h6l6 14h6"></path>
                                </svg>
                            </div>
                        </div>

                    </div>

                </div>


            </main>
            <footer class="border-t p-4 pb-3 text-xs bg-gray-100">
                2024 © Design & Develop by PlayOn24.
            </footer>
        </div>

    </div>


</body>

</html>
