<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'ADN') }}</title>

   

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;800&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
        }
        .bg-orange-500{
            background: #FF502F;
        }
        .bg-orange-500:hover{
            background-color: #FF502F;
        }
        .border-orange-500{
            border-color: #FF502F;
        }


    </style>
        <!-- Scripts -->
        @routes
       <!--  <script src="{{ mix('js/app.js') }}" defer></script> -->

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>
    <body class=" antialiased h-screen mx-auto" style="background-color:#232222;"> 
        <div style="background-image: url('{{asset('image/bk.png')}}');">
        <!-- header/navigation -->
        <div class="border-b border-gray-600" style="background: rgba(35, 34, 34, 0.8);" >
        <div x-data="{ isOpen: false }" class="flex justify-between p-4 md:px-8 md:py-4 max-w-6xl mx-auto" >
            <div class="flex items-center">
                 <img src="{{ asset('image/logo.jpg') }}" class="object-cover w-16 rounded-lg">
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
            <div class="hidden space-x-10 lg:inline-block max-w-7xl mx-auto font-semibold tracking-wider">
                <a href="#" class="text-base text-white border-l-4 pl-1 border-red-600">Home</a>
                <a href="#" class="text-base text-white ">Services</a>
                <a href="#" class="text-base text-white ">Work</a>
                <a href="#" class="text-base text-white rounded-lg bg-orange-500 py-2 px-4">Contact US</a>
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
</div>
    <!-- background: linear-gradient(112.51deg, rgba(40, 33, 38, 0.8) 27.75%, rgba(109, 10, 207, 0) 122.45%); -->
    <div class="max-w-7xl mx-auto" style="">
        
            
        <div class="relative border-b border-gray-900 rounded-b-2xl shadow-xl "  > 
            <img src="{{asset('image/pc-center.jpg')}}" class=" absolute -z-10 inset-0 rounded-b-2xl">
            <div class="px-12 py-16 flex space-y-3 flex-col rounded-b-2xl px-40 bg-center bg-cover bg-no-repeat backdrop-filter backdrop-blur-sm z-10"  style="background: linear-gradient(112.51deg, rgba(40, 33, 38, 0.8) 27.75%, rgba(109, 10, 207, 0) 122.45%);">
            <div class="flex flex-row text-gray-600 space-x-1 items-center ">
                <label class="text-6xl font-semibold tracking-wider text-white leading-tight">We help you build digital products for your glorious cause</label>
                <img src="{{ asset('image/mobile-left.png') }}" class="object-cover w-64">
            </div>
            <div> 
                <label class="text-white text-2xl font-semibold tracking-wider leading-tight">Let us make digital products realized with development from ui/ux design, front end, back end to full-stack development</label></div>
            <div class="grid grid-cols-2 gap-6 px-6 items-center text-center mx-auto py-7 text-xl duration-300">
                <button class="px-7 py-4 rounded-lg bg-orange-500 text-white font-semibold tracking-wider shadow-lg ">Start your Glorius</button>
                 <button class="px-7 py-4 rounded-lg border-2 border-orange-500 text-white font-semibold tracking-wider hover:bg-orange-500">See Our works</button>
            </div>
            </div>
        </div>

         <div class=" px-12 py-10 flex space-y-3 flex-col rounded-b-2xl px-40 bg-center bg-cover bg-no-repeat " >
            <div class="text-gray-600 text-center mb-10">
                <label class="text-xl font-semibold tracking-wider text-white leading-tight">Developing ideas from our cool clients to create a digital product</label>              
            </div>
            <div class="flex space-x-8 items-center justify-center"> 
                <?php for ($i=0; $i < 6; $i++) { 
                    ?>
                 <img src="{{ asset('image/logo.jpg') }}" class="object-cover w-28 rounded-lg">
                <?php } ?>
                 
            </div>           
        </div>
          <div class=" px-12 py-10 flex space-y-3 flex-col rounded-b-2xl px-40 bg-center bg-cover bg-no-repeat " >
            <div class="text-gray-600 text-center mb-10">
                <label class="text-xl font-semibold tracking-wider text-white leading-tight">Developing ideas from our cool clients to create a digital product</label>              
            </div>
            <div class="flex space-x-8 items-center justify-center"> 
                <?php for ($i=0; $i < 6; $i++) { 
                    ?>
                 <img src="{{ asset('image/logo.jpg') }}" class="object-cover w-28 rounded-lg">
                <?php } ?>
                 
            </div>           
        </div>

    </div>

    </div>
    </body>
</html>
