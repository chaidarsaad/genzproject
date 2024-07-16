<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GenZ Project</title>

    @include('includes.style')

    <!-- Toastify CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/toastify.min.css') }}">
    <!-- end Toastify CSS -->
</head>

<body class="text-gray-700">
    <!-- preloader -->
    <div class="preloader loaded-success fixed inset-0 z-50 bg-gray-50">
        <div class="flex items-center justify-center h-full">
            <div class="relative">
                <svg class="animate-spin h-8 w-8 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- ========== { HEADER }==========  -->
    <header class="fixed top-0 left-0 right-0 z-40">
        <nav class="main-nav">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="lg:flex lg:justify-between">
                    <div class="flex justify-between">
                        <a href="{{ route('landing') }}" class="flex items-center">
                            <div class="mx-w-10 text-3xl font-bold capitalize text-gray-900 flex items-center">GenZ
                                Project
                            </div>
                        </a>
                        <!-- mobile nav -->
                        <div class="flex flex-row items-center py-4 lg:py-0">
                            <div class="relative text-gray-900 hover:text-black block lg:hidden">
                                <button type="button" class="menu-mobile block py-3 border-b-2 border-transparent">
                                    <span class="sr-only">Mobile menu</span>
                                    <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="close bi bi-x-lg h-8 w-8" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                        <path fill-rule="evenodd"
                                            d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row">
                        <!-- nav menu -->
                        <ul
                            class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-gray-900 text-sm items-center font-bold">
                            <li class="relative hover:text-black">
                                <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent"
                                    href="#hero">Home</a>
                            </li>
                            <li class="relative hover:text-black">
                                <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#services">What
                                    we do</a>
                            </li>
                            <li class="relative hover:text-black">
                                <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#portfolio">Our
                                    works</a>
                            </li>
                            @if ($clients->isNotEmpty())
                                <li class="relative hover:text-black">
                                    <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent"
                                        href="#clients">Clients</a>
                                </li>
                            @endif
                            <li class="relative hover:text-black">
                                <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#team">Team</a>
                            </li>
                            <li class="relative hover:text-black">
                                <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent"
                                    href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- hero start -->
        <div id="hero" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- content -->
                    @if ($hero != null)
                        <div
                            class="flex-shrink max-w-full px-4 sm:px-12 lg:px-18 w-full sm:w-9/12 lg:w-1/2 self-center">
                            <img src="{{ Storage::url($hero->image) }}" class="w-full max-w-full h-auto"
                                alt="hero image">
                        </div><!-- end content -->

                        <!-- text -->
                        <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                            <div class="text-center lg:text-left mt-6 lg:mt-0">
                                <div class="mb-12">
                                    <h1 class="text-3xl leading-normal text-black font-bold mb-4">
                                        {{ $hero->title }}<br>
                                        <span data-toggle="typed"
                                            data-options='{"strings": {{ $hero->services = json_encode($hero->services) }} }'></span>
                                    </h1>
                                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">
                                        {{ $hero->subtitle }}</p>
                                </div>
                                <a class="py-2.5 px-10 inline-block text-center leading-normal text-gray-900 bg-white border-b border-gray-100 hover:text-black hover:ring-0 focus:outline-none focus:ring-0 mr-4"
                                    href="#portfolio">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem"
                                        height="1.5rem" fill="currentColor" viewBox="0 0 512 512">
                                        <path
                                            d="M304,384V360c0-29,31.54-56.43,52-76,28.84-27.57,44-64.61,44-108,0-80-63.73-144-144-144A143.6,143.6,0,0,0,112,176c0,41.84,15.81,81.39,44,108,20.35,19.21,52,46.7,52,76v24"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        <line x1="224" y1="480" x2="288" y2="480"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        <line x1="208" y1="432" x2="304" y2="432"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        <line x1="256" y1="384" x2="256" y2="256"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        <path d="M294,240s-21.51,16-38,16-38-16-38-16"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    </svg>
                                    Our Work
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- end Hero -->

        <!-- start services -->
        <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- Heading start -->
                <header class="text-center mx-auto mb-12 lg:px-20">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-black">What We Do</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Save time managing
                        advertising & Content for your business.</p>
                </header><!-- End heading -->

                <!-- row -->
                <div class="flex justify-center flex-wrap flex-row -mx-4 text-center">
                    @forelse ($services as $key => $service)
                        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                            data-wow-duration="1s">
                            <!-- service block -->
                            <div
                                class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                                <div class="inline-block text-gray-900 mb-4">
                                    <!-- icon -->
                                    <img class="w-8 h-8" src="{{ Storage::url($service->image) }}"
                                        alt="image {{ $service->title }}">
                                </div>
                                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{ $service->title }}
                                </h3>
                                <p class="text-gray-500">{{ $service->subtitle }}</p>
                            </div>
                            <!-- end service block -->
                        </div>
                    @empty
                        <p class="text-gray-900 text-center">No services found.</p>
                    @endforelse
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Portfolio Content -->
        <div id="portfolio" class="section relative z-0 py-12 md:py-16 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- Heading start -->
                <header class="text-center mx-auto mb-12 lg:px-20">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Our work</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We create engaging
                        experiences that are innovatingand beautiful.</p>
                </header><!-- End heading -->
            </div>

            <div class="flex flex-wrap flex-row justify-center">
                @foreach ($portofolios as $portofolio)
                    <figure class="flex-shrink max-w-full px-3 w-full sm:w-1/2 lg:w-1/5 group wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="relative overflow-hidden cursor-pointer mb-6">
                            <a href="{{ Storage::url($portofolio->image) }}" data-gallery="gallery1"
                                data-glightbox="title: {{ $portofolio->title }}; description: {{ $portofolio->description }}"
                                class="glightbox3">
                                <img class="block w-full h-auto transform duration-500 grayscale hover:scale-125"
                                    src="{{ Storage::url($portofolio->image) }}"
                                    alt="Image {{ $portofolio->title }}">
                                <div
                                    class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-black text-center">
                                    <h3 class="text-base leading-normal font-semibold my-1 text-white">
                                        {{ $portofolio->title }}</h3>
                                    <small class="d-block">{{ $portofolio->subtitle }}</small>
                                </div>
                            </a>
                        </div>
                    </figure>
                @endforeach
            </div>
        </div>
        <!--  End Content -->

        <!-- start clients -->
        @if ($clients->isNotEmpty())
            <div id="clients" class="section relative py-8 bg-white dark:bg-gray-800">
                <div class="container xl:max-w-6xl mx-auto px-4">
                    <!-- Heading start -->
                    <header class="text-center mx-auto mb-12 lg:px-20">
                        <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Our Clients</h2>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60"
                            style="margin: 0 auto;height: 35px;" xml:space="preserve">
                            <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                                style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                            <line x1="55.1" y1="30.4" x2="100" y2="30.4"
                                class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                            <line x1="45.1" y1="30.4" x2="0" y2="30.4"
                                class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        </svg>
                        <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We create engaging
                            experiences that are innovatingand beautiful.</p>
                    </header>
                    <!-- End heading -->
                </div>
                <div class="container xl:max-w-6xl mx-auto px-4">
                    <div class="flex flex-wrap flex-row -mx-4 justify-center">
                        <div class="w-full px-4">
                            <!-- slider client -->
                            <div id="post-carousel" class="navslider-hover splide post-carousel">
                                <div class="splide__track">
                                    <div class="splide__list grayscale">
                                        @foreach ($clients as $client)
                                            <div class="splide__slide">
                                                <div class="w-full px-4 text-center pb-3">
                                                    <a href="#" target="_blank">
                                                        <img class="grayscale mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                                            src="{{ Storage::url($client->image) }}"
                                                            alt="image {{ $client->name }}">
                                                        {{-- <span>{{ $client->name }}</span> --}}
                                                        {{-- <small>{{ $client->name }}</small> --}}
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slider client -->
                    </div>
                </div>
            </div>
        @endif
        <!-- End brand-->

        <!-- Team start -->
        <div id="team" class="section relative pt-20 pb-8 md:pt-16 bg-white dark:bg-gray-800">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100"><span
                            class="font-light">Our</span> Team</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                </header><!-- end section header -->

                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    @forelse ($teams as $key => $team)
                        <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6">
                            <div class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12 hover-grayscale-0 wow fadeInUp"
                                data-wow-duration="1s">
                                <!-- team block -->
                                <div class="relative overflow-hidden px-6">
                                    <img src="{{ Storage::url($team->image) }}"
                                        class="w-36 h-36 mx-auto rounded-full bg-gray-50 grayscale"
                                        alt="image {{ $team->name }}">
                                </div>
                                <div class="pt-6 text-center">
                                    <p class="text-lg leading-normal font-bold mb-1">{{ $team->name }}</p>
                                    <p class="text-gray-500 leading-relaxed font-light">{{ $team->position }}</p>
                                    <!-- social icon -->
                                    <div class="mt-2 mb-5 space-x-2">
                                        <a class="hover:text-blue-700" aria-label="Twitter link" href="#">
                                            <!-- <i class="fab fa-twitter text-twitter"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block"
                                                width="1rem" height="1rem" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="hover:text-blue-700" aria-label="Facebook link" href="#">
                                            <!-- <i class="fab fa-facebook text-facebook"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block"
                                                width="1rem" height="1rem" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="hover:text-blue-700" aria-label="Instagram link" href="#">
                                            {{-- <i class="fab fa-instagram text-instagram"></i> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block"
                                                width="1rem" height="1rem" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z">
                                                </path>
                                                <path fill="currentColor"
                                                    d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z">
                                                </path>
                                                <path fill="currentColor"
                                                    d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="hover:text-blue-700" aria-label="Linkedin link" href="#">
                                            <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block"
                                                width="1rem" height="1rem" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end team block -->
                        </div>
                    @empty
                        <p class="text-gray-900 text-center">No teams found.</p>
                    @endforelse

                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- End Team-->

        <!-- contact start -->
        <div id="contact" class="section relative pb-20 bg-white dark:bg-gray-800">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="max-w-ful px-4 w-full lg:w-8/12">
                        <div class="bg-gray-50 border-b border-gray-100 w-full p-12 wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".5s">
                            <!-- section header -->
                            <header class="text-center mx-auto mb-12 lg:px-20">
                                <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">
                                    <span class="font-light">Contact</span> Us
                                </h2>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60"
                                    style="margin: 0 auto;height: 35px;" xml:space="preserve">
                                    <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                                        style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                                    <line x1="55.1" y1="30.4" x2="100" y2="30.4"
                                        class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;">
                                    </line>
                                    <line x1="45.1" y1="30.4" x2="0" y2="30.4"
                                        class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;">
                                    </line>
                                </svg>
                                <p class="text-gray-600 leading-relaxed font-light text-xl mx-auto pb-2">Have
                                    questions
                                    about service, please contact us.</p>
                            </header>
                            <!-- end section header -->

                            <!-- contact form -->
                            <form id="contact-form" action="{{ route('send-message') }}" method="POST">
                                @csrf
                                <div class="flex flex-wrap flex-row -mx-4">
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
                                        <label class="inline-block mb-2" for="name">Your Name</label>
                                        <input type="text" name="name"
                                            class="@error('name') is-invalid @enderror w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="name">
                                        @error('name')
                                            <div class="validate">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
                                        <label class="inline-block mb-2" for="email">Your Email</label>
                                        <input @error('email') is-invalid @enderror type="email"
                                            class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="email" id="email">
                                        @error('email')
                                            <div class="validate">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-wrap flex-row -mx-4">
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
                                        <label class="inline-block mb-2" for="phone_number">Number Phone</label>
                                        <input type="number" name="phone_number"
                                            class="@error('phone_number') is-invalid @enderror w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="phone_number">
                                        @error('phone_number')
                                            <div class="validate">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
                                        <label class="inline-block mb-2" for="service">Service</label>
                                        <select @error('service') is-invalid @enderror
                                            class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="service" id="service">
                                            <option value="">Select service</option>

                                            @foreach ($services as $service)
                                                <option value="{{ $service->title }}">{{ $service->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('service')
                                            <div class="validate">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label class="inline-block mb-2" for="message">Message</label>
                                    <textarea
                                        class="@error('message') is-invalid @enderror w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        name="message" rows="10" id="message"></textarea>
                                    @error('message')
                                        <div class="validate">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center mb-6">
                                    <button type="submit"
                                        class="py-2.5 px-10 inline-block text-center leading-normal text-gray-100 bg-black border border-black hover:text-white hover:ring-0 focus:outline-none focus:ring-0"
                                        href="#project">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem"
                                            class="inline-block mr-1" fill="currentColor" viewBox="0 0 512 512">
                                            <rect x="48" y="96" width="416" height="320" rx="40"
                                                ry="40"
                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                            <polyline points="112 160 256 272 400 160"
                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                        </svg>
                                        Send message
                                    </button>
                                </div>
                            </form>
                            <div id="response-message"></div>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contact -->
    </main>
    <!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-gray-50 text-gray-700">
        <!--Footer content-->
        <div id="footer-content" class="relative pt-8 xl:pt-16 pb-6 xl:pb-12">
            <div class="container xl:max-w-6xl mx-auto px-4 overflow-hidden">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full lg:w-2/5 px-3">
                        @if ($setting != null)
                            <div class="flex items-center justify-center mb-2">
                                <span class="text-3xl leading-normal mb-2 font-bold text-gray-800 mt-2">
                                    {{ $setting->name_company }}
                                </span>
                            </div>
                            <p class="text-center">{{ $setting->slogan }}</p>
                        @endif

                        <ul class="flex justify-center space-x-3 mt-6 mb-6 lg:mb-0">
                            <!-- Facebook -->
                            <li>
                                <a target="_blank" class="hover:text-gray-800" rel="noopener noreferrer"
                                    href="#" title="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!-- Twitter -->
                            <li>
                                <a target="_blank" class="hover:text-gray-800" rel="noopener noreferrer"
                                    href="#" title="Twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!-- YouTube -->
                            <li>
                                <a target="_blank" class="hover:text-gray-800" rel="noopener noreferrer"
                                    href="#" title="YouTube">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M508.64,148.79c0-45-33.1-81.2-74-81.2C379.24,65,322.74,64,265,64H247c-57.6,0-114.2,1-169.6,3.6-40.8,0-73.9,36.4-73.9,81.4C1,184.59-.06,220.19,0,255.79q-.15,53.4,3.4,106.9c0,45,33.1,81.5,73.9,81.5,58.2,2.7,117.9,3.9,178.6,3.8q91.2.3,178.6-3.8c40.9,0,74-36.5,74-81.5,2.4-35.7,3.5-71.3,3.4-107Q512.24,202.29,508.64,148.79ZM207,353.89V157.39l145,98.2Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!-- Instagram -->
                            <li>
                                <a target="_blank" class="hover:text-gray-800" rel="noopener noreferrer"
                                    href="#" title="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z">
                                        </path>
                                        <path fill="currentColor"
                                            d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z">
                                        </path>
                                        <path fill="currentColor"
                                            d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z">
                                        </path>
                                    </svg>
                                </a>
                            </li><!-- end Instagram -->

                            <li>
                                <a target="_blank" class="hover:text-gray-800" rel="noopener noreferrer"
                                    href="#" title="WhatsApp">
                                    <img class="w-8 h-8" src="{{ asset('src/img/dummy/whatsapp-svgrepo-com.svg') }}"
                                        alt="WhatsApp">
                                </a>
                            </li><!-- end WhatsApp -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Start footer copyright-->
        <div class="footer-dark">
            <div class="container xl:max-w-6xl mx-auto px-4 py-4 border-t border-gray-200 border-opacity-10">
                <div class="row">
                    <div class="col-12 col-md text-center">
                        @if ($setting != null)
                            <p class="d-block my-3">Copyright © {{ $setting->name_company }} | All rights reserved.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div><!--End footer copyright-->
    </footer>
    <!-- end footer -->

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#"
        class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
    <!-- =========={ end SCROLL TO TOP }==========  -->

    {{-- script --}}
    @include('includes.script')
    {{-- end scriptt --}}

    <!-- Toastify JS -->
    <script src="{{ asset('src/js/toastify.min.js') }}"></script>
    <!-- Your other scripts -->

    {{-- script toastify --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);

                fetch(form.action, {
                        method: form.method,
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(data => {
                                throw data;
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            Toastify({
                                text: "Message sent successfully! Please wait for the response",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                style: {
                                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                                }
                            }).showToast();
                            form.reset();
                        } else {
                            Toastify({
                                text: "Failed to send message. Please try again.",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                style: {
                                    background: "linear-gradient(to right, #ff6b6b, #f06595)",
                                }
                            }).showToast();
                        }
                    })
                    .catch(error => {
                        const errorMessage = error.message || "An error occurred. Please try again.";
                        Toastify({
                            text: errorMessage,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            style: {
                                background: "linear-gradient(to right, #ff6b6b, #f06595)",
                            }
                        }).showToast();
                    });
            });
        });
    </script>
    {{-- end script toastify --}}
</body>

</html>
