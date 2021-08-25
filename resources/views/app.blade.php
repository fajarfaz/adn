<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'ADN') }}</title>

   

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;800&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
        <!-- Scripts -->
        @routes
       <!--  <script src="{{ mix('js/app.js') }}" defer></script> -->

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>
    <body class=" antialiased  mx-auto">
        <!-- header/navigation -->
        <div x-data="{ isOpen: false }" class="flex justify-between p-4 lg:p-8  w-full " style="background: #232222CC;">
            <div class="flex items-center">
                <h3 class="text-2xl font-bold text-white">Logo</h3>
            </div>

            <!-- left header section -->
            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden space-x-6 lg:inline-block max-w-7xl mx-auto">
                <a href="#" class="text-base text-white ">Home</a>
                <a href="#" class="text-base text-white ">Services</a>
                <a href="#" class="text-base text-white ">Work</a>
                <a href="#" class="text-base text-white ">Contact</a>
            </div>

            <!-- mobile navbar -->
            <div class="mobile-navbar">
                <!-- navbar wrapper -->
                <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                @click.away=" isOpen = false">
                <div class="flex flex-col space-y-6">
                    <a href="#" class="text-sm text-black">Menu1</a>
                    <a href="#" class="text-sm text-black">Menu2</a>
                    <a href="#" class="text-sm text-black">Menu3</a>
                    <a href="#" class="text-sm text-black">Menu3</a>
                </div>
            </div>
        </div>
        <!-- end mobile navbar -->
    </div>
    <!-- right header section -->

</div>
    
    <div class="max-w-7xl mx-auto">
        <div class="bg-gray-600 px-6 flex flex-col">
            <div class="flex flex-row bg-black text-gray-600">
                <label>We help you build digital products for your glorious cause</label>
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Kode_Trayek_ASD.png" class="object-cover w-12">
            </div>
            <div>s</div>
            <div>s</div>
        </div>

    </div>

    
    </body>
</html>
