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

    <nav class="w-full bg-black">

        <div class="flex items-center justify-end ">

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


    <section class=" bg-left lg:bg-no-repeat -mt-32 bg-40%" style="background-image: url({{asset('storage/images/landing/1.jpg')}})">

        <div class=" bg-black w-full  lg:bg-transparent px-4 mx-auto max-w-screen-xl text-center lg:text-right py-24 lg:py-56 mr-60">

            <h1 class="mb-8 text-12xl mt-28 lg:mt-0 md:text-14xl font-bold tracking-tight leading-none text-white  ">Hello</h1>
            <p class="mb-8 text-4xl md:text-5xl text-white lg:mr-28 ">I´m <a class="hover:text-sky-500 cursor-pointer" href="#">Rodri Saiz </a></p>
            <p class=" text-4xl md:text-5xl text-white lg:mr-6 ">A Full-Stack developer </p>

        </div>

    </section>

    <!-- PROJECTS CARDS -->





    <!-- PROJECTS TEST 3 -->
    <!-- 
                <h1 class="text-3xl text-white font-bold bg-sky-500 ml-10 pl-2 w-40 mt-40" >TEST 3</h1>  
                
            -->

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-20 md:p-20 xl:p-28 2xl:p-36 3xl:p-44 4xl:p-80">

        <div class="grid gap-6 ">

            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer rounded-2xl">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  rounded-2xl">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-black group-hover:text-white text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  mb-0 pb-1">Standard Color</h2>
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













    <!-- PROJECTS TEST 1 -->


    <h1 class="text-3xl text-white font-bold bg-sky-500 ml-10 pl-2 w-40 mb-40">TEST </h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 grid-flow-rows gap-4 mx-40">

        <div class="grid gap-4 ">

            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>


            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>



        </div>

        <div class="grid gap-4 ">

            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

            <a href="www.google.com">
                <article class="h-auto max-w-full hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-auto bg-center  transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

        </div>
        <div class="row-span-1 col-span-1 bg-white text-3xl font-semibold">07</div>
        <div class="row-span-1 col-span-1 bg-white text-3xl font-semibold">08</div>
        <div class="row-span-1 col-span-1 bg-white text-3xl font-semibold">09</div>
        <div class="row-span-1 col-span-1 bg-white text-3xl font-semibold">10</div>


        <br>
        <br>
        <br>
        <!--
        <div class="row-span-5 col-span-1 bg-cover " style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="row-span-1 col-span-1 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="col-span-1 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="row-span-1 col-span-1 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="row-span-1 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
-->
    </div>


    <!-- PROJECTS TEST 2 -->


    <h1 class="text-3xl text-white font-bold bg-sky-500 ml-10 pl-2 w-40">TEST 2 </h1>



    <a href="www.google.com">
        <article class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
            <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-36 hover:bg-opacity-75 transform duration-300 rounded-xl">
                <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                    On A Day Like Today
                </h1>
                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                </div>
                <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                </p>
            </div>
        </article>
    </a>




    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-20 md:p-20 xl:p-28 2xl:p-36 3xl:p-44 4xl:p-80">

        <div class="grid gap-4 ">
            <!-- Test 1 -->
            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group ">
                    <div class=" absolute -bottom-10 group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute bottom-12 group-hover:bottom-24 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                    On A Day Like Today
                                </h1>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                </div>
                                <p class="opacity-0 text-white text-xl group-hover:opacity-80 group-hover:translate-y-0 duration-300 ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                                </p>
                            </div>
                        </div>
                    </div>
                    <img src="https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>

            <!-- Test 2 -->

            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group ">
                    <div class=" absolute -bottom-10 group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class=" absolute -bottom-10 group-hover:top-0 left-0 w-full h-full group-hover:bg-green-900 transition-all ease-in-out duration-500  ">
                                <div class="w-full h-full   p-5   relative">
                                    <div class="absolute bottom-0 group-hover:bottom-24 text-white  text-left   transition-all ease-in-out duration-500 ">
                                        <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
                                        <p class="text-lg font-light text-white">Lorem ipsum dolor sit amet, #brands.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>

            <!-- Test 3 QUEDA!!! -->

            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group ">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
                                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 translate-y-20 group-hover:translate-y-0 duration-500">
                                </div>
                                <p class="text-lg font-light text-white translate-y-20 group-hover:translate-y-0 duration-500">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>
            <!-- Test 3 hasta aca!!! -->
            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-2xl shadow-green-900 overflow-hidden group ">
                    <div class=" absolute -bottom-10 group-hover:top-0 left-0 w-full h-full group-hover:bg-green-900 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute bottom-0 group-hover:bottom-24 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
                                <p class="text-lg font-light text-white">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>




        </div>

        <div class="grid gap-4">

            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-2xl shadow-green-900 overflow-hidden group ">
                    <div class=" absolute -bottom-10 group-hover:top-0 left-0 w-full h-full group-hover:bg-green-900 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute bottom-0 group-hover:bottom-24 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
                                <p class="text-lg font-light text-white">Lorem ipsum dolor sit amet, #brands.</p>
                            </div>
                        </div>
                    </div>
                    <img src="https://source.unsplash.com/random/400x400" class="w-full z-0  h-full    object-fill example ">
                </div>
            </a>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
            </div>

        </div>

        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
            </div>
        </div>
    </div>



    <!-- PROJECTS TEST 3 -->

    <h1 class="text-3xl text-white font-bold bg-sky-500 ml-10 pl-2 w-40 mt-40">TEST 3</h1>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-20 md:p-20 xl:p-28 2xl:p-36 3xl:p-44 4xl:p-80">

        <div class="grid gap-6 ">

            <a href="#" class=" shadow-2xl relative ">
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-4 cursor-pointer">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-4 cursor-pointer">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-2 cursor-pointer">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-4 cursor-pointer">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
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
                <div class="  h-full relative shadow-white hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] overflow-hidden group transform duration-500 hover:-translate-y-4 cursor-pointer">
                    <div class=" absolute  group-hover:top-0 left-0 w-full h-full hover:bg-black group-hover:bg-opacity-60 transition-all ease-in-out duration-500  ">
                        <div class="w-full h-full   p-5   relative">
                            <div class="absolute -bottom-10  group-hover:bottom-8 text-white  text-left   transition-all ease-in-out duration-500 ">
                                <h2 class="text-2xl font-bold  text-white mb-0 pb-1">Standard Color</h2>
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


    </div>




    <!-- PROJECTS TEST  ORIGINAL -->

    <h1 class="text-3xl text-white font-bold bg-sky-500 ml-10 pl-2 w-40 mt-40">ORIGINAL </h1>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-20 md:p-40">

        <div class="grid gap-4 ">

            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
            </div>

        </div>
        <div class="grid gap-4">

            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
            </div>

        </div>

        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
            </div>
        </div>
    </div>


    <!-- PROJECTS TEST 2.1 -->

    <h1 class="text-9xl text-white">TEST</h1>


    <div class="  py-6 sm:py-8 lg:py-12">

        <div class="mx-auto max-w-screen-xl px-4 md:px-8 pb-16 border-b-8 border-white">

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">



                <!-- image - start -->

                <a href="www.google.com">
                    <article class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-36 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>

                <!-- 
                <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 bg-white">
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                
                <div
                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
            </div>
            
            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
            </a>
            
           image - end -->

                <!-- image - start 

            <a href="www.google.com">
                <article class="group relative flex items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center transform duration-500 hover:-translate-y-2 cursor-pointer group" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                    <div class="bg-black bg-opacity-20 px-10 pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

        -->



                <!-- image - start 

        <a href="" class="group relative flex h-48 items-end overflow-hidden rounded-xl bg-gray-100 shadow-lg md:col-span-2 md:h-80 hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center transform duration-500 hover:-translate-y-2 cursor-pointer group" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                   
            <div class="bg-black bg-opacity-20 px-20 flex flex-wrap flex-col pt-48 hover:bg-opacity-75 transform duration-300 rounded-xl">
                <h1 class="text-white text-3xl mb-10 transform translate-y-20 group-hover:translate-y-0 duration-300">
                    On A Day Like Today
                </h1>
                <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                </div>
                <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                </p>
            </div>
            
        </a>


      
            
            <a href="" class="group relative flex h-48 items-end overflow-hidden rounded-xl bg-gray-100 shadow-lg md:col-span-2 md:h-80 hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center transform duration-500 hover:-translate-y-2 cursor-pointer group" style="background-image: url(https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg);">
                   
                <div class="bg-black h-full w-full bg-opacity-20 hover:bg-opacity-75 transform duration-300 rounded-xl min-h-150 px-10 flex flex-wrap flex-col ">

                    <h1 class="text-white text-3xl mb-5 pb-96 transform translate-y-20 group-hover:translate-y-0 duration-300 ">
                        On A Day Like Today
                    </h1>
                    <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                    </div>
                    <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                    </p>
                </div>
                
            </a>



        image - end -->


                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
                </a>


                <!-- 
                <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                
                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>
            
                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
            </a>
            -->

                <!-- image - end -->

                <!-- image - start -->
                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dev</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Retro</span>
                </a>
                <!-- image - end -->
            </div>
        </div>
    </div>














    <div class=" h-screen h-full py-6 sm:py-8 lg:py-12">

        <div class="mx-auto max-w-screen-xl px-4 md:px-8 border-b-4 border-white">

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                <!-- image - start -->
                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dev</span>
                </a>
                <!-- image - end -->

                <!-- image - start -->
                <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>

                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Retro</span>
                </a>
                <!-- image - end -->
            </div>
        </div>
    </div>




    <!-- PROJECTS TEST 3 -->


    <div class="grid grid-cols-5 gap-3 p-24">


        <div class="row-span-3 col-span-2 bg-trasparent rounded-md">
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
            </a>
        </div>

        <div class="row-span-3 col-span-3  bg-trasparent rounded-md">
            <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Retro</span>
            </a>
        </div>

        <div class="bg-white p-3 rounded-md">Cell 3</div>
        <div class="bg-white p-3 rounded-md">Cell 4</div>
        <div class="col-span-2 bg-white p-3 rounded-md">Cell 5</div>
        <div class="bg-white p-3 rounded-md">Cell 6</div>
        <div class="bg-white p-3 rounded-md">Cell 7</div>
        <div class="bg-white p-3 rounded-md">Cell 8</div>
    </div>











    <!-- PROJECTS TEST 7 -->

    <br>
    <br>
    <br>

    <div class="grid grid-cols-3 gap-3">
        <div class="row-span-3 bg-white p-3 rounded-md">Cell 1</div>
        <div class="row-span-2 bg-white p-3 rounded-md">Cell 2</div>
        <div class="bg-white p-3 rounded-md">Cell 3</div>
        <div class="bg-white p-3 rounded-md">Cell 4</div>
        <div class="col-span-2 bg-white p-3 rounded-md">Cell 5</div>
        <div class="bg-white p-3 rounded-md">Cell 6</div>
        <div class="bg-white p-3 rounded-md">Cell 7</div>
        <div class="bg-white p-3 rounded-md">Cell 8</div>
    </div>




    <!-- PROJECTS -->




    <section class="container mx-auto p-10 md:py-20 px-0 md:p-20 md:px-0 antialiased">
        <section class="grid lg:grid-cols-2 2xl:grid-cols-3 grid-cols-1 gap-40 ">



            <a href="www.google.com">
                <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>




            <a href="www.google.com">
                <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>





            <a href="www.google.com">
                <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>


            <a href="www.google.com">
                <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>




            <a href="www.google.com">
                <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>






            <a href="www.google.com">
                <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            On A Day Like Today
                        </h1>
                        <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                        </p>
                    </div>
                </article>
            </a>

        </section>
    </section>




    <div class="grid grid-rows-6 grid-flow-col gap-4 mx-40">
        <div class="row-span-3 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="col-span-2 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="row-span-2 col-span-2 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="col-span-2 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="row-span-2 col-span-2 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
        <div class="row-span-3 bg-cover bg-center" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">">01</div>
    </div>







    <!-- 
        <section class="container mx-auto p-10 md:py-20 px-0 md:p-20 md:px-0 antialiased">
            <section class="grid lg:grid-cols-2 2xl:grid-cols-3 grid-cols-1 gap-40 ">


             
                <a href="www.google.com">
                    <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>


                

                <a href="www.google.com">
                    <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>

                
            


                <a href="www.google.com">
                    <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>


                 <a href="www.google.com">
                    <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>


     

                <a href="www.google.com">
                    <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>

                
            

     

                <a href="www.google.com">
                    <article class="mx-auto max-w-sm hover:shadow-[rgba(160,_160,_160,_0.4)_0px_30px_90px] bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group rounded-xl" style="background-image: url(https://images.pexels.com/photos/3299386/pexels-photo-3299386.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=900);">
                        <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300 rounded-xl">
                            <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                                On A Day Like Today
                            </h1>
                            <div class="w-16 h-2 bg-sky-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                            </div>
                            <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, beatae!
                            </p>
                        </div>
                    </article>
                </a>

                </section>
            </section>

   -->

    <!-- FOOTER -->







</body>

</html>