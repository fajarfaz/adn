<template>
<div id="loader" class="inset-0 m-auto"> 
        <img src="/images/11.png" class="object-contain animate-pulse">
    </div>
    <div id="myDiv"  class="bg-[url('/images/bg.svg')] bg-cover overflow-x-hidden animate-bottom ">

        <nav class="bg-[#232222] text-white border-gray-200 px-4 md:px-20 lg:px-40 xl:px-52 py-4 rounded fixed z-40 w-full" data-aos="zoom-in-top" data-aos-duration="800"  x-data="{open: false , isOpen : false}" >
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="/" class="flex space-x-4 items-center opacity-75 hover:opacity-100 duration-300">
                    <img src="/images/11.png" class="w-12 h-12 object-contain">
                    <div class="flex flex-col leading-4 justify-start md:hidden lg:inline-flex">
                        <span class=" text-base font-semibold whitespace-nowrap dark:text-white">ADN </span>
                        <span class="tracking-wider">Developer</span>
                    </div>
                </a>
                <div class="flex md:order-2">
                    <button type="button" class="hidden md:inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
                    <button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false" @click="isOpen = !isOpen">
                        <span class="sr-only">Open main menu</span>
                        <svg x-show="!isOpen" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg x-show="isOpen" class=" w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="md:hidden justify-between items-center w-full flex md:w-auto md:order-1 " x-show="isOpen" x-transition>
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-base tracking-wide md:font-medium w-full text-center space-y-4">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-4 md:pl-2 text-white bg-blue-700 bg-blue-400/30" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Work</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                        <li>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</a>
                        </li>
                    </ul>
                </div>

                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-base tracking-wide md:font-medium">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-4 md:pl-2 text-white bg-blue-700  md:bg-transparent border-l-2  border-red-600 md:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Work</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container bg-[url('bg-top.jpg')] bg-contain mx-auto shadow-xl mt-20 rounded-b-[54px]" data-aos="fade-down">
            <div class=" h-full backdrop-blur-lg text-white rounded-none md:rounded-b-[50px] md:px-10 lg:px-24 xl:px-36 py-10 lg:py-16 xl:py-20 relative" style="background: linear-gradient(112.51deg, rgba(40, 33, 38, 0.8) 27.75%, rgba(109, 10, 207, 0) 122.45%);">
                <div class="flex md:flex-row flex-col ">
                    <h1 class="text-3xl md:text-4xl xl:text-6xl lg:text-5xl font-bold md:leading-snug lg:leading-snug xl:leading-snug z-10 w-100 md:w-8/12 md:px-0 px-8 md:pb-0 pb-8  text-center md:text-left"  data-aos="zoom-in-right" data-aos-duration="500">
                        We help you 
                        <span class="relative inline-flex px-4 -ml-4"> 

                            <span class="z-10"> build </span> 
                            <img src="/images/build-back.svg" class="absolute inset-x-0 bottom-3 z-0 w-full">
                            <img src="/images/build-front.svg" class="absolute bottom-3 inset-x-0 z-20 w-10/12 mx-auto">
                        </span>
                        <span class="text-[#FF502F]">digital products </span>for your 
                        <span class="text-[#FF502F]">glorious cause</span>
                    </h1>
                    <div class="relative md:w-4/12 w-full px-4 flex items-center z-10"  >
                        <img src="/images/rss.png" class="md:absolute relative object-contain md:py-0 py-4 w-32 md:w-40 xl:w-72 lg:w-52 md:-right-8 lg:-right-16 xl:right-5 lg:top-0 xl:-top-10 mx-auto" data-aos="zoom-in-left" data-aos-duration="800">
                    </div>
                </div>
                
                <div class="text-sm xl:text-xl lg:text-lg font-semibold md:mt-16 lg:mt-24 leading-relaxed md:leading-loose text-gray-50 css-typing text-center tracking-wider md:px-0 px-8 md:mt-0 mt-6" id="labelOne">

                </div>

                <div class="mx-auto flex flex-row items-center space-x-6 md:space-x-10 px-8 md:px-10 lg:px-16 xl:px-32 mt-10 text-xs md:text-base lg:text-lg justify-between w-max">
                    <button class="rounded-full bg-gradient-to-bl from-orange-500 to-orange-600 text-white font-semibold  py-5 md:px-8 lg:px-12 tracking-wider w-72 shadow-lg duration-500 hover:shadow-orange-500/50"><span class="hidden md:inline-block"> Start Now</span> <span class="md:hidden inline-block"> Start now</span></button>
                    <button class="rounded-full border border-white text-white font-semibold  py-5 md:px-8 lg:px-12 tracking-wider w-72 duration-300 hover:bg-white hover:text-gray-700">See our work</button>

                </div>
                <img src="/images/bubble-1.png" class="absolute top-3 md:top-0 lg:top-2 w-10/12 md:w-11/12 lg:w-10/12 inset-x-0 mx-auto">
                <div class="flex flex-row rotate-90 absolute -left-20 md:-left-16 lg:-left-10 bottom-72 md:bottom-4 items-center space-x-2 text-white z-10 md:text-base text-xs">
                    <label class="tracking-widest" data-aos="fade-right">Est. 2019</label>
                    <span class="bg-gradient-to-r from-white w-32 h-0.5" data-aos="fade-right" data-aos-duration="300"> </span>
                </div>
            </div>
        </div>

        <section class="container mx-auto flex flex-col space-y-10 px-8 md:px-10 lg:px-36 my-24 text-center">
            <label class="font-semibold md:text-xl lg:text-2xl  text-white tracking-wider" data-aos="zoom-in">
                Developing ideas from our cool clients to create a digital product
            </label>
            <div class="flex snap-x overflow-x-auto flex-row space-x-8 md:space-x-4 md:space-x-10 justify-between md:w-10/12 mx-auto md:pt-10 pb-5" id="clientScroll">

                <img src="/images/11.png" class="snap-center shrink-0 w-12 md:w-20 lg:w-24 object-contain grayscale hover:grayscale-0 duration-300 cursor-pointer" data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/logo.png" class="snap-center shrink-0 w-12 md:w-20 lg:w-24 object-contain grayscale hover:grayscale-0 duration-300 cursor-pointer" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/images/logo.png" class="snap-center shrink-0 w-12 md:w-20 lg:w-24 object-contain grayscale hover:grayscale-0 duration-300 cursor-pointer" data-aos="zoom-in" data-aos-duration="1500">
                <img src="/images/logo.png" class="snap-center shrink-0 w-12 md:w-20 lg:w-24 object-contain grayscale hover:grayscale-0 duration-300 cursor-pointer" data-aos="zoom-in" data-aos-duration="2000">
                <img src="/images/logo.png" class="snap-center shrink-0 w-12 md:w-20 lg:w-24 object-contain grayscale hover:grayscale-0 duration-300 cursor-pointer" data-aos="zoom-in" data-aos-duration="2500">

            </div>
            <div class="flex flex-row space-x-4 md:space-x-10 mx-auto pt-0 md:pt-8" data-aos="zoom-out">
                <button class="h-3 md:h-6 w-3 md:w-6 bg-gradient-to-br from-gray-300 to-gray-600 rounded-full hover:bg-white duration-300 focus:ring ring-white/50 focus:bg-gray-700" id="leftScroll"></button>
                <button class="h-3 md:h-6 w-3 md:w-6 bg-gradient-to-br from-gray-300 to-gray-600 rounded-full hover:bg-white duration-300 focus:ring ring-white/50 focus:bg-gray-700" id="midScroll"></button>
                <button class="h-3 md:h-6 w-3 md:w-6 bg-gradient-to-br from-gray-300 to-gray-600 rounded-full hover:bg-white duration-300 focus:ring ring-white/50 focus:bg-gray-700" id="righttScroll"></button>

            </div>          
        </section>

        <section class="container mx-auto flex flex-col space-y-10 px-8  md:px-10 lg:px-36 my-24 text-white">
            <label class="font-semibold xl:text-5xl text-4xl tracking-wider" data-aos="fade-right">Services </label>

            <div class="relative flex snap-x md:grid grid-cols-3 gap-8 xl:gap-12 overflow-x-auto">
                
                <div data-aos="fade-right" class="snap-center shrink-0 md:w-auto w-52">
                    <div class="flex flex-col space-y-4 transition-all  bg-size-200 bg-pos-0 hover:bg-pos-100 duration-1000 bg-gradient-to-b to-purple-700 via-orange-400 from-gray-300/30 py-5 lg:py-7 px-6 lg:px-8 rounded-lg h-full"  >
                        <div class="flex flex-row space-x-2 xl:space-x-4 items-center ">
                            <div class="shrink-0 flex items-center flex-row bg-gray-900/50 rounded-full xl:w-20 w-12 lg:w-16 xl:h-20 h-12 lg:h-16 justify-center my-auto">
                                <img src="/images/ui.svg" class="w-8 lg:w-10 xl:w-12">

                            </div>
                            <label class="font-semibold lg:text-xl xl:text-2xl tracking-wider">UI/UX Design</label>                     
                        </div>
                        <p class="tracking-widest leading-relaxed xl:text-xl lg:text-lg text-base">Developing ideas from our cool clients to create a digital product</p>
                    </div>
                </div>
                <div data-aos="fade-right" class="snap-center shrink-0 md:w-auto w-52" data-aos-duration="500">
                    <div class="flex flex-col space-y-4 transition-all bg-size-200 bg-pos-0 hover:bg-pos-100 duration-1000 bg-gradient-to-b to-purple-700 via-orange-400 from-indigo-300/30 py-5 lg:py-7 px-6 lg:px-8 rounded-lg h-full" >
                        <div class="flex flex-row space-x-2 xl:space-x-4 items-center ">
                            <div class="shrink-0 flex items-center flex-row bg-gray-900/50 rounded-full xl:w-20 w-12 lg:w-16 xl:h-20 h-12 lg:h-16 justify-center my-auto">
                                <img src="/images/front.svg" class="w-6 lg:w-7 xl:w-9">
                            </div>
                            <label class="font-semibold lg:text-xl xl:text-2xl tracking-wider">Front End Developer</label>                      
                        </div>
                        <p class="tracking-widest leading-relaxed xl:text-xl lg:text-lg text-base">Developing ideas from our cool clients to create a digital product</p>
                    </div>
                </div>
                <div data-aos="fade-right" class="snap-center shrink-0 md:w-auto w-52" data-aos-duration="1000">
                    <div class="flex flex-col space-y-4 transition-all  bg-size-200 bg-pos-0 hover:bg-pos-100 duration-1000 bg-gradient-to-b to-purple-700 via-orange-400 from-gray-300/30 py-5 lg:py-7 px-6 lg:px-8 rounded-lg h-full" >
                        <div class="flex flex-row space-x-2 xl:space-x-4 items-center ">
                            <div class="shrink-0 flex items-center flex-row bg-gray-900/50 rounded-full xl:w-20 w-12 lg:w-16 xl:h-20 h-12 lg:h-16 justify-center my-auto">
                                <img src="/images/back.svg" class="w-5 lg:w-6 xl:w-8">
                            </div>
                            <label class="font-semibold lg:text-xl xl:text-2xl tracking-wider">Back End Developer</label>                       
                        </div>
                        <p class="tracking-widest leading-relaxed xl:text-xl lg:text-lg text-base">Developing ideas from our cool clients to create a digital product</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto flex flex-col space-y-10 px-8 md:px-10 lg:px-36 my-24 text-white pb-16">
            <div class="flex flex-row justify-between items-end">
                <label class="font-semibold xl:text-5xl text-4xl tracking-wider"  data-aos="fade-right">Portfolio </label>
                <a href="#" class="group hover:text-gray-400 duration-300 flex flex-row space-x-2 md:space-x-4 items-center text-gray-50 cursor-pointer" >
                    <label class="font-semibold xl:text-xl lg:text-lg tracking-wider cursor-pointer" data-aos="fade-left"> <span class="md:inline hidden">Watch more</span> </label>
                    <svg class="fill-gray-50 group-hover:fill-gray-400 duration-300 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M502.6 278.6l-128 128c-12.51 12.51-32.76 12.49-45.25 0c-12.5-12.5-12.5-32.75 0-45.25L402.8 288H32C14.31 288 0 273.7 0 255.1S14.31 224 32 224h370.8l-73.38-73.38c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l128 128C515.1 245.9 515.1 266.1 502.6 278.6z"/></svg>
                </a>
            </div>

            <div class="flex snap-x overflow-x-auto md:overflow-visible overflow-y-hidden md:grid grid-cols-2 gap-10 lg:gap-20">        
                <div class="flex flex-col space-y-4 shrink-0 snap-center md:w-auto w-full">
                    <label class="font-semibold text-2xl xl:text-3xl text-2xl tracking-wider"  data-aos="fade-right">Catering App</label>
                    <div class="h-max lg:h-full flex flex-col bg-gray-400/30 py-7 md:px-10 px-6 rounded-2xl text-lg relative" data-aos="fade-down">
                        <div class="w-full flex flex-col space-y-6">
                            <label class="xl:text-2xl lg:text-xl font-semibold tracking-wider" data-aos="fade-down">Web app with Responsive display</label>                     
                            <a href="#" class="text-white bg-orange-600 hover:bg-purple-500 duration-300 xl:text-base text-sm tracking-wider py-2.5 px-8 rounded-lg w-max font-semibold shadow-sm"> View detail</a>
                        </div>
                        <div class="relative h-[200px] lg:h-full">                          
                        </div>
                        <img src="/images/catering.png" class="absolute object-contain w-68 xl:w-96 lg:w-80 inset-x-0 -bottom-10 lg:-bottom-20 mx-auto " data-aos="fade-down" data-aos-duration="500">
                    </div>              
                </div>

                <div class="flex flex-col space-y-4 shrink-0 snap-center md:w-auto w-full">
                    <label class="font-semibold text-2xl xl:text-3xl text-2xl tracking-wider"  data-aos="fade-left">Attendance App</label>
                    <div class="flex flex-row bg-gray-400/30 py-7 md:px-10 px-6 rounded-2xl text-lg relative" data-aos="fade-down">
                        <div class="w-7/12 flex flex-col space-y-8">
                            <label class="xl:text-2xl lg:text-xl font-semibold tracking-wider" data-aos="fade-down">Web app with Responsive display</label>
                            <p class="leading-relaxed text-sm xl:text-lg lg:text-sm">Developing ideas from our cool clients to create a digital product
                            Developing ideas from our cool clients to create a digital product</p>
                            <a href="#" class="text-white bg-orange-600 hover:bg-purple-600 duration-300 xl:text-base text-sm tracking-wider py-2.5 px-8 rounded-lg w-max font-semibold shadow-sm"> View detail</a>
                        </div>
                        <div class="relative w-4/12">                           
                        </div>
                        <img src="/images/attendance.png" class="absolute object-contain w-40 md:w-52 xl:w-64 lg:w-52 -right-2 md:-right-16 lg:top-0 xl:-top-20 aos-init aos-animate z-20 overflow-visible" data-aos="fade-right" data-aos-duration="1500">
                    </div>              
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-bl from-gray-100/50 to-black/30 p-1 pl-0 text-white text-lg md:w-11/12 lg:w-max md:rounded-r-3xl rounded-none rounded-l-none mt-24 md:mr-0 -mr-1" data-aos="fade-right">
            <div class="flex flex-col space-y-10 bg-black/30 backdrop-blur-md md:rounded-r-3xl rounded-none py-10 pl-10 xl:pl-36 lg:pl-28 rounded-l-none xl:pr-40 lg:pr-10">
                <div class="flex flex-row space-x-4 items-center" data-aos="fade-top" data-aos-duration="500">
                    <img src="/images/contact.svg" class="w-14 md:w-20 object-contain">
                    <label class="font-semibold text-2xl xl:text-5xl text-4xl tracking-wider">Talk about your idea ?</label>
                </div>
                <div class=" md:ml-16 lg:ml-24 justify-center flex flex-col space-y-10" data-aos="flip-up" data-aos-duration="1200">
                    <label class="text-sm md:text-base text-center px-8 tracking-wider">Developing ideas from our cool clients to create a digital product</label>
                    <div class="border-2 border-white/30 p-1 xl:p-2 rounded-xl md:w-max w-8/12 mx-auto flex flex-col md:flex-row space-y-2 md:space-y-0">
                        <input type="text" name="" placeholder="hello@adn-dev.com" class="focus:outline-none focus:bg-black/50 bg-transparent rounded-l-xl py-2 pl-4 pr-0 md:pr-20 duration-300 xl:text-base text-sm">
                        <button class="xl:px-8 px-6 xl:py-2 py-2 bg-gradient-to-bl from-orange-500 to-purple-600 text-white font-semibold xl:text-lg text-sm rounded-lg tracking-widest opacity-75 hover:opacity-100 duration-300">Send</button>
                    </div>
                </div>
                <div class="text-xs md:text-base flex flex-col text-gray-300 xl:text-base lg:text-sm leading-relaxed" data-aos="fade-up" data-aos-duration="500">
                    <label class="text-white pb-2 tracking-widest">Active Hours: </label>
                    <label class="tracking-wider">International : 00.00 UTC - 17.00 UTC</label>
                    <label class="tracking-wider">Indonesia : 07.00 WIB - 22.00 WIB</label>
                </div>
            </div>
        </section>

        <footer class=" border-t-2 border-white/30 bottom-0 bg-black/30 grid grid-cols-1 md:grid-cols-3 gap-10 md:justify-items-center justify-items-start py-12 mt-20 text-white lg:px-36 px-10">
            <div class="flex flex-row space-x-4 items-center opacity-75 hover:opacity-100 duration-300">
                <img src="/images/logo.png" class="object-contain md:w-16 w-10">
                <div class="flex flex-col">
                    <label class="font-semibold tracking-wider text-base xl:text-xl lg:text-lg leading-5">ADN dev</label>
                    <label class="font-semibold tracking-wider text-sm md:text-base text-gray-400">Malang, Indonesia</label>
                </div>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="tracking-wider font-semibold pb-3">Our Media</label>
                <div class="flex flex-row space-x-4">
                    <a href="">
                        <img src="/images/ig.svg" class="w-8 object-contain opacity-75 duration-300 hover:opacity-100">
                    </a>
                    <a href="">
                        <img src="/images/fb.svg" class="w-8 object-contain opacity-75 duration-300 hover:opacity-100">
                    </a>
                    <a href="">
                        <img src="/images/dribbble.svg" class="w-8 object-contain opacity-75 duration-300 hover:opacity-100">
                    </a>
                    <a href="">
                        <img src="/images/bihance.svg" class="w-8 object-contain opacity-75 duration-300 hover:opacity-100">
                    </a>
                    
                </div>
            </div>
            <div class="flex flex-col space-y-1">
                <label class="tracking-wider font-semibold pb-2">Contact us</label>

                <label class="tracking-wider text-gray-300 text-sm md:text-base">hello@adn-dev.com</label>
                <label class="tracking-wider text-gray-300 text-sm md:text-base">088890308781</label>

            </div>

        </footer>


    </div>
</template>
<style type="text/css">
    body{
        font-family: 'Poppins', sans-serif;
    }

    #loader {
        position: absolute;
        z-index: 1;
        width: 120px;
        height: 120px;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from { bottom:-100px; opacity:0 } 
        to { bottom:0px; opacity:1 }
    }

    @keyframes animatebottom { 
        from{ bottom:-100px; opacity:0 } 
        to{ bottom:0; opacity:1 }
    }

    #myDiv {
        display: none;
    }

</style>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        },
        mounted(){
            var typewriter = new Typewriter(app, {
                loop: false,
                delay: 40,
            });

            typewriter  
            .typeString('I have ideas but confusion to realizing it.')  
            .pauseFor(500)  
            .deleteChars(31)
            .typeString(', Let us realizing your digital product idea to life, from beginning to ready for use, let`s continue talk about it !')
            .pauseFor(4000)
            .start();




            $(function() { 
                $(window).on('scroll',function() 
                { 
                    AOS.init();                     
                }
                ); 
                
            });

            var myVar;
            function preloader() {
                myVar = setTimeout(showPage, 500);
            }

            function showPage() {

                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
            }

            $("#leftScroll").click(function () { 
                var leftPos = $('#clientScroll').scrollLeft();
                $("#clientScroll").animate({scrollLeft: leftPos - 400}, 0);
                console.log('regist');
            });

            $("#midScroll").click(function () { 
                var leftPos = $('#clientScroll').scrollLeft();
                $("#clientScroll").animate({scrollLeft: leftPos + 200}, 0);
            });

            $("#rightScroll").click(function () { 
                var leftPos = $('#clientScroll').scrollLeft();
                $("#clientScroll").animate({scrollLeft: leftPos + 400}, 0);
            });
        }
    })
</script>
