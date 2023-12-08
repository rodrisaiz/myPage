<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Home</title>
        
        @vite('resources/css/app.css')

        
   
        
    </head>
    <body class="bg-black">
        
        <!-- NAV BAR -->

        <!-- burguer menu-->


  <nav class="w-full bg-black">

    <div class="flex items-center justify-end md:hidden">
     
        <details class="dropdown">
            <summary class=" mt-8 mr-4 -mb-25 btn flex items-center justify-end ">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M5,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z"></path></g></g>
                </svg>
            </summary>
            <ul class="p-2  rounded-xl w-full -mb-[100px]">
                <div class=" bg-none -mr-4 rounded-xl  ">
                    <li>
                        <a class="text-xl text-white font-bold px-4 hover:text-sky-500 transition-all duration-300" href="">
                            Home
                        </a>
                    </li>
                    
                    <li>
                        <a class="text-xl text-white font-bold px-4 hover:text-sky-500 transition-all duration-300" href="">
                            Projects
                        </a>
                        
                    </li>
                    <li>
                        <a class="text-xl text-white font-bold px-4 mr-4 hover:text-sky-500 transition-all duration-300" href="">
                            About
                        </a>
                        
                    </li>
                </div>
            </ul>
          </details>
    </div>



        <nav class="w-full bg-black">

            <div class="hidden md:flex items-center justify-end  ">
             
                    <a class="text-xl text-white font-bold p-5 px-4 hover:text-sky-500 transition-all duration-300" href="">
                        Home
                    </a>
                    <a class="text-xl text-white font-bold p-5 px-4 hover:text-sky-500 transition-all duration-300" href="">
                        Projects
                    </a>
                    <a class="text-xl text-white font-bold p-5 px-4 mr-4 hover:text-sky-500 transition-all duration-300" href="">
                        About
                    </a>
             
            </div>



        </nav>

        <!-- TITLE -->

                      
            <section class=" bg-left bg-no-repeat -mt-28 mb-4 bg-40%"  style="background-image: url({{asset('storage/images/landing/1.jpg')}})">
                
                <div class=" bg-black w-full mr-60 lg:bg-transparent px-4 mx-auto max-w-screen-xl text-center lg:text-right py-24 lg:py-56 ">
                    
                    <!--<h1 class=" h-40 mb-8 text-9xl -ml-[10px] mt-32 md:mt-28 lg:mt-0 md:text-14xl font-bold tracking-tight leading-none text-white"  id="typewriter" ></h1>-->
                    <div class="grid justify-items-stretch ">
                        <div class="h-40 mb-28 flex justify-start ml-[20rem] start-px">
                            <h1 class="  text-12xl mt-28 ml-60 lg:mt-0 md:text-14xl font-bold tracking-tight leading-none text-white" id="typewriter"></h1>
                        </div>
                        
                        <!--
                            <div class="w-full h-40 flex justify-end items-center mb-8 text-9xl -ml-[10px] mt-32 md:mt-28 lg:mt-0 md:text-14xl">
                                <h1 id="typewriter" class="  text-white text-9xl font-bold"></h1>
                            </div>
                        -->
                        <p class="mb-8 text-4xl md:text-5xl text-white lg:mr-28 -mr-[25rem]">I´m <a class="hover:text-sky-500 cursor-pointer  mr-[16rem]"  href="https://www.linkedin.com/in/rodrisaiz/" target="_blank">Rodri Saiz </a></p>
                        <p class=" text-4xl md:text-5xl text-white lg:mr-6 ">Your next Full-Stack developer </p>   
                    </div>
                    
                </div>

                <div class="flex justify-center md:-mt-16 overscroll-contain" >  
                    <svg class="w-16 h-16 animate-bounce ">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </svg>
                </div>
            </section>

        <!-- PROJECTS CARDS -->





    <!-- PROJECTS TEST 3 -->
            <!-- 
                <h1 class="text-3xl text-white font-bold bg-sky-500 ml-10 pl-2 w-40 mt-40" >TEST 3</h1>  
                
            -->

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6  p-8 md:p-20 xl:p-28 2xl:p-36 3xl:p-44 4xl:p-80">
        
        <div class="grid gap-6 ">
    
            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>
    
    
            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>


            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>
        </div>


        <div class="grid gap-6 ">
    
            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>


            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>


            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>


    </div>

    <div class="grid gap-6 ">
    
        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>

    </div>


    <div class="grid gap-6 ">
    
        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>

    </div>



    <div class="grid gap-6 ">
    
        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>

    </div>


    <div class="grid gap-6 ">
    
        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>


        <a href="#" class=" shadow-2xl relative ">
            <div class="  h-full relative shadow-white hover:shadow-[rgba(240,_240,_240,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                    <div class="w-full h-full   p-5   relative">
                        <div class="absolute -bottom-10  group-hover:bottom-8 text-transparent md:text-black  group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                            <h2 class="text-2xl  font-bold  mb-0 pb-1">Standard Color</h2>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                            </div>
                            <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                        </div>
                    </div>
                </div>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" class="w-full z-0  h-full    object-fill example ">
            </div>
        </a>

    </div>



    

</div>


<!-- FOOTER-->



<footer class="bg-black">
      <div class="sm:flex sm:items-center sm:justify-between px-20 pb-8">
          <span class="text-lg text-gray-300 sm:text-center">© 2023 <a href="https://www.linkedin.com/in/rodrisaiz/" target=”_blank”  class="hover:text-sky-500">Rodri Saiz™</a>. All Rights Reserved. This page works without cookies.
          </span>
          <div class="flex mt-6 sm:justify-center sm:mt-0 gap-4">

            <a href="https://linktr.ee/rodrisaiz" target="_blank" class="mr-6 text-white hover:text-[#44e760]">
                <svg  
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-6 w-6" ><path 
                d="m13.73635 5.85251 4.00467-4.11665 2.3248 2.3808-4.20064 4.00466h5.9085v3.30473h-5.9365l4.22865 4.10766-2.3248 2.3338L12.0005 12.099l-5.74052 5.76852-2.3248-2.3248 4.22864-4.10766h-5.9375V8.12132h5.9085L3.93417 4.11666l2.3248-2.3808 4.00468 4.11665V0h3.4727zm-3.4727 10.30614h3.4727V24h-3.4727z"/>
                </svg>
            </a>
            
            <a href="mailto:rodrisaiz@icloud.com" target="_blank" class="mr-6  text-white hover:text-sky-500">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-6 w-6">
                <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
            </a>
     
            <a href="https://www.linkedin.com/in/rodrisaiz/" class="mr-6 text-white hover:text-[#0a66c2]">
                <svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-6 w-6"><path 
                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
                
            <a href="https://github.com/rodrisaiz" class="text-white hover:text-gray-500">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"><path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
            </a>
        
          </div>
      </div>
    </div>
</footer>



<!-- test-->


<!-- 
    script for the hello of the start
 
-->
<script>
const words = ["Hello", "Hola", "Salut","Kaixo", "Hallo", "你好", "Ciao ", "Hej ", "مرحبًا", "Hei ", "Olá ", "नमस्ते", "Aloha",];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];
  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j-25);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
        
      }
    }
    setTimeout(type, 0);
} else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j+25);
    j++;
    if (j == currentWord.length) {
        isDeleting = true;
       
    }
    setTimeout(type, 700);   
}

}

type();
</script>

</body>
    
</html>
