<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title> 
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

  {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  {{-- tailwind css using vite --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-gradient-to-t from-blue-300">

  {{-- navbar --}}
  <nav class=" bg-gradient-to-r from-indigo-600 to-blue-300 shadow-lg rounded-lg mx-10 mt-7" id="navbar">
    <section class=" mx-auto px-4 max-w-6xl">
      <section class=" flex justify-between">

        {{-- Logo And Primary Menu --}}
        <section class=" flex space-x-14 lg:space-x-8">

          {{-- Navbar Logo --}}
            <section>
              <a href="{{route('homepage')}}" class=" flex items-center py-4 px-2">
                <img src="{{ asset('img/logo.png') }}" class=" h-11 w-10 mr-3" alt="logo">
                <span class=" font-semibold text-gray-100 text-xs sm:text-base xl:text-lg uppercase">Teknik dan <br>pelayanan jasa</span>
              </a>
            </section>
            
            <section class=" hidden md:flex items-center space-x-4 lg:space-x-2">
              <a href="{{route('homepage')}}"
                class=" py-4 px-2 flex text-gray-100 border-b-2 border-gray-100 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd"/>
                </svg> 
                <span class="hidden xl:block">
                  Beranda
                </span>             
              </a>

              <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-100 hover:-translate-y-1 font-semibold rounded-lg text-sm pl-3 lg:px-5 py-2.5 text-center inline-flex items-center transition duration-200 cursor-pointer" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path fill-rule="evenodd" d="M14.5 10a4.5 4.5 0 004.284-5.882c-.105-.324-.51-.391-.752-.15L15.34 6.66a.454.454 0 01-.493.11 3.01 3.01 0 01-1.618-1.616.455.455 0 01.11-.494l2.694-2.692c.24-.241.174-.647-.15-.752a4.5 4.5 0 00-5.873 4.575c.055.873-.128 1.808-.8 2.368l-7.23 6.024a2.724 2.724 0 103.837 3.837l6.024-7.23c.56-.672 1.495-.855 2.368-.8.096.007.193.01.291.01zM5 16a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
                  <path d="M14.5 11.5c.173 0 .345-.007.514-.022l3.754 3.754a2.5 2.5 0 01-3.536 3.536l-4.41-4.41 2.172-2.607c.052-.063.147-.138.342-.196.202-.06.469-.087.777-.067.128.008.257.012.387.012zM6 4.586l2.33 2.33a.452.452 0 01-.08.09L6.8 8.214 4.586 6H3.309a.5.5 0 01-.447-.276l-1.7-3.402a.5.5 0 01.093-.577l.49-.49a.5.5 0 01.577-.094l3.402 1.7A.5.5 0 016 3.31v1.277z" />
                </svg>
                
                <span class="hidden xl:block">
                  Alat 
                </span>
                <svg class="w-2.5 h-2.5 ml-2.5 hidden xl:block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </a>

                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
                    <ul class="py-2 text-sm text-gray-700 font-montserrat" aria-labelledby="dropdownHoverButton">
                      <li>
                        <a href="/tool/cctv" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                      </li>
                      <li>
                        <a href="/tool/komputer" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                      </li>
                      <li>
                        <a href="/tool/fids" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                      </li>
                    </ul>
                    <hr class="border-0 bg-gradient-to-r from-indigo-600 to-blue-300 h-1 ">
                    <div class="py-2">
                      <a href="{{route('report.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Laporan</a>
                    </div>
                </div>

              <a href=""
                class="flex py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                </svg>                
                <span class="hidden xl:block">
                  Layanan             
                </span>
              </a>

              <a href=""
                class="flex py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path fill-rule="evenodd" d="M10 3c-4.31 0-8 3.033-8 7 0 2.024.978 3.825 2.499 5.085a3.478 3.478 0 01-.522 1.756.75.75 0 00.584 1.143 5.976 5.976 0 003.936-1.108c.487.082.99.124 1.503.124 4.31 0 8-3.033 8-7s-3.69-7-8-7zm0 8a1 1 0 100-2 1 1 0 000 2zm-2-1a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
                
                <span class="hidden xl:block">
                  Hubungi Kami
                </span>
              </a>
            </section>

        </section>

        {{-- Secondary Navbar Item --}}
        <section class="hidden md:flex items-center space-x-3">
          <a href="{{route('login')}}"
             class="hidden xl:block items-center py-4 px-2 text-gray-100 font-medium hover:-translate-y-1 transition duration-200">           
            <span class="hidden xl:block">
              Login
            </span>
          </a>

          <a href="{{route('register')}}"
             class="flex items-center py-3 px-4 bg-white text-indigo-500 rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
              <path d="M11 5a3 3 0 11-6 0 3 3 0 016 0zM2.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 018 18a9.953 9.953 0 01-5.385-1.572zM16.25 5.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
            </svg>            
            <span class="hidden xl:block">
              Register
            </span>
          </a>
        </section>

        {{-- Mobile Button --}}
        <section class=" md:hidden flex items-center">
          <button class=" outline-none" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-100 md:hidden block">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
            </svg>              
          </button>
        </section>
      </section>

      {{-- Mobile Menu --}}
      <section class="hidden pb-3" id="mobile-menu">
        <ul class="text-sm">
          <li class="active">
            <a href="{{route('homepage')}}" class="block text-gray-100 py-4 px-2 font-bold">Beranda</a>
          </li>
          <li>
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-100 hover: focus:ring-4 focus:outline-none px-2 py-2.5 cursor-pointer inline-flex items-center" type="button">
              Alat
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </a>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44">
              <ul class="py-2 text-gray-700 font-montserrat text-sm" aria-labelledby="dropdownHoverButton">
                <li>
                  <a href="/tool/cctv" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                </li>
                <li>
                  <a href="/tool/cctv" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                </li>
                <li>
                  <a href="/tool/fids" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                </li>
              </ul>
              <hr class="border-0 bg-gradient-to-r from-indigo-600 to-blue-300 h-1 ">
              <div class="py-2">
                <a href="{{route('report.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Laporan</a>
              </div>
            </div>
          </li>
          <li>
            <a href="" class="block text-md text-gray-100 py-4 px-2 hover:translate-x-1 transition duration-200">Services</a>
          </li>
          <li>
            <a href="" class="block text-md text-gray-100 py-4 px-2 hover:translate-x-1 transition duration-200">Contact Us</a>
          </li>
          <li>
            <a href="{{route('login')}}" class="block text-md text-gray-100 py-4 px-2 hover:translate-x-1 transition duration-200">Login</a>
          </li>
          <li>
            <a href="{{route('register')}}" class="block text-md bg-white text-indigo-500 rounded-lg shadow-md py-3 px-4 hover:bg-opacity-75 transition duration-200 text-center">Register</a>
          </li>
        </ul>
      </section>

    </section>
  </nav>

  {{-- Header --}}
  <header class=" mx-10 mt-3 mb-5 flex items-center  h-[75vh] md:h-[65vh] lg:h-[70vh] xl:h-[90vh]">

    {{-- Text --}}
    <section class="py-4 px-4 mx-auto max-w-screen-xl text-center sm:py-5 md:py-6 lg:py-8 xl:py-10 sm:w-[70%] md:w-[60%]">
      <h1 class=" uppercase mb-4 font-semibold tracking-tight leading-none text-gray-950 text-base lg:text-lg xl:text-2xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
        Teknik dan Pelayanan Jasa <br>
        Bandar Udara Abdulrachman Saleh
      </h1>
      <p class="mb-8 pt-3 text-sm font-normal text-gray-800 sm:text-base lg:text-lg xl:text-xl font-montserrat" data-aos="fade-up" data-aos-delay="200">
        Selamat datang di Website Teknik dan Pelayanan Jasa <strong>Bandar Udara Abdulrachman Saleh</strong>. 
      </p>
      <a href="#about" class="text-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center hover:translate-y-3 transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 animate-bounce h-6" data-aos="fade-up" data-aos-delay="300">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
        </svg> 
      </a>
    </section>
  </header>

  {{-- Carousel dan jadwal penerbangan --}}
  <section id="about">
    {{-- card if viewport under md --}}
    <div class="grid grid-cols-1 px-4 mx-auto xl:hidden gap-4">
      {{-- header card --}}
      <div class="text-center " data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
        <h1 class="font-semibold font-montserrat text-sm md:text-base lg:text-xl uppercase">
          Berita
        </h1>
      </div>
      {{-- grid item yang ditampilkan dengan foreach --}}
      <div>
        <div class=" bg-white border border-gray-200 rounded-lg shadow" data-aos="fade-up" data-aos-delay="600"  data-aos-ease="ease-in-out" data-aos-duration="400">
          <a href="#">
              <img class="rounded-t-lg" src="{{asset('img/time.jpg')}}" alt="" />
          </a>
          <div class="p-5 font-montserrat">
              <a href="#">
                  <h5 class="mb-2 text-base md:text-lg font-bold tracking-tight text-gray-900">
                    Noteworthy technology acquisitions 2021
                  </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 text-sm md:text-base truncate">
                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
              </p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                  Read more
                   <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
        </div>

      </div>

      <div>
        <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" data-aos="fade-up" data-aos-delay="600"  data-aos-ease="ease-in-out" data-aos-duration="400">
          <a href="#">
              <img class="rounded-t-lg" src="{{asset('img/time.jpg')}}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-base md:text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    Noteworthy technology acquisitions 2021
                  </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm md:text-base truncate">
                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
              </p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                  Read more
                   <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
        </div>

      </div>

    </div>

    {{-- carousel if viewport md above it--}}
    <div class="px-4 mx-auto max-w-screen-xl hidden xl:block">
        {{-- header text --}}
          <div class="text-center pb-7 md:pb-10" data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
            <h1 class="font-semibold font-montserrat text-sm md:text-base lg:text-xl uppercase">
              Berita
            </h1>
          </div>
        {{-- carousel part --}}
          <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[40vh] overflow-hidden rounded-lg xl:h-[70vh]" data-aos="fade-up" data-aos-delay="600"  data-aos-ease="ease-in-out" data-aos-duration="400">
                {{-- gambar carousel yang akan ditampilkan dengan foreach --}}
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <div>
                    <img src="{{asset('img/cctv.jpg')}}" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition duration-200" alt="">

                    <div class="absolute bottom-0 w-full">
                      <div class=" bg-opacity-80 font-montserrat bg-indigo-600 text-white shadow-lg mx-6 mb-4 px-4 py-3 rounded-lg" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-ease="ease-in-out">
                        <h3 class="text-center uppercase">Pemberitahuan </h3>
                        <p class="pt-4 text-xs md:text-sm lg:text-base text-ellipsis truncate">
                          Ada perbaikan pada Elkalator Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquam quod similique error ad hic, quasi molestiae, nihil quae officia placeat quam quaerata 
                        </p>
                        <button class="flex items-center px-4 py-2 bg-gray-50 text-indigo-800 rounded-lg my-3 hover:bg-gray-200 duration-150 transition">
                          Baca lagi
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <div>
                    <img src="{{asset('img/time.jpg')}}" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition duration-200" alt="">

                    <div class="absolute bottom-0 w-full">
                      <div class=" bg-opacity-80 font-montserrat bg-indigo-600 text-white shadow-lg mx-6 mb-4 px-4 py-3 rounded-lg" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-ease="ease-in-out">
                        <h3 class="text-center uppercase">Pemberitahuan </h3>
                        <p class="pt-4 text-xs md:text-sm lg:text-base text-ellipsis truncate">
                          Ada perbaikan pada Elkalator Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquam quod similique error ad hic, quasi molestiae, nihil quae officia placeat quam quaerata 
                        </p>
                        <button class="flex items-center px-4 py-2 bg-gray-50 text-indigo-800 rounded-lg my-3 hover:bg-gray-200 duration-150 transition">
                          Baca 
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <div>
                    <img src="{{asset('img/laptop.jpg')}}" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition duration-200" alt="">

                    <div class="absolute bottom-0 w-full">
                      <div class=" bg-opacity-80 font-montserrat bg-indigo-600 text-white shadow-lg mx-6 mb-4 px-4 py-3 rounded-lg" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-ease="ease-in-out">
                        <h3 class="text-center uppercase">Pemberitahuan </h3>
                        <p class="pt-4 text-xs md:text-sm lg:text-base text-ellipsis truncate">
                          Ada perbaikan pada Elkalator Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquam quod similique error ad hic, quasi molestiae, nihil quae officia placeat quam quaerata 
                        </p>
                        <button class="flex items-center px-4 py-2 bg-gray-50 text-indigo-800 rounded-lg my-3 hover:bg-gray-200 duration-150 transition">
                          Baca lagi
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
          </div>
    </div>

    {{-- Fligth Schedule --}}
    <div class="py-3 px-4 mt-10 mx-auto max-w-screen-xl">
          <div class="bg-white border border-gray-200 rounded-lg shadow-lg py-6 sm:py-8 sm:px-8 px-4 md:py-10 md:px-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-ease="ease-in-out"> 
            <div class="pb-6 px-3 flex justify-between items-center">
              <div class="text-sm md:text-base">
                <h2 class="font-montserrat font-semibold uppercase">Jadwal Penerbangan</h2>
              </div>
              <div class=" text-sm md:text-base">
                <p class="font-montserrat hidden sm:block">
                  {{now()->isoFormat('dddd, D MMMM Y')}}
                </p>
                <p class="font-montserrat clock hidden sm:block">
                </p>
              </div>
            </div>    
            <div class="relative overflow-x-auto rounded-lg shadow-md">
              <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left">
                  <thead class="text-xs font-montserrat sm:text-sm text-center text-gray-50 uppercase bg-gradient-to-r from-indigo-600 to-blue-500">
                    <tr>
                      <th scope="col" class="px-6 py-3">
                        maskapai
                      </th>
                      <th scope="col" class="px-6 py-3">
                        id Penerbangan
                      </th>
                      <th scope="col" class="px-6 py-3">
                        keberangkatan
                      </th>
                      <th scope="col" class="px-6 py-3">
                        tujuan
                      </th>
                      <th scope="col" class="px-6 py-3">
                        kedatangan
                      </th>
                    </tr>
                  </thead>
                  <tbody id="scheduleData" class="text-center font-roboto">
                    {{-- <script type="module">
                      const apiUrl = 'https://airlabs.co/api/v9/schedules?dep_iata=MLG&api_key=f145dc59-33ef-4bc7-b015-6f45e4f9785d';
                      const scheduleDataElement = document.getElementById('scheduleData');
                      
                      fetch(apiUrl)
                      .then(response => response.json())
                      .then(data => {
                          if (data.response) {
                              const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
                              const todaySchedules = data.response.filter(schedule => {
                                  // Exclude schedules with flight_iata ID7109 and QG161
                                  return !['ID7109', 'QG161'].includes(schedule.flight_iata) && schedule.dep_time_utc.includes(today);
                              });
                              
                              todaySchedules.forEach(schedule => {
                                  const row = document.createElement('tr');
                                  const airlineName = schedule.airline_icao === 'BTK' ? '<img src="{{asset('img/ID.png')}}" width="120">' : (schedule.airline_icao === 'GIA' ? '<img src="{{asset('img/GA.png')}}" width="120">' : (schedule.airline_icao === 'CTV' ? '<img src="{{asset('img/QG.png')}}" width="120">' : 'N/A'));
                                  const airportName = schedule.arr_iata === 'HLP' ? 'Halim Perdana Kusuma' : (schedule.arr_iata === 'CGK' ? 'Soekarno-Hatta' : 'N/A');
                                  
                                  const originalDepTime = new Date(schedule.dep_time);
                                  if (originalDepTime.getHours() === 11 && originalDepTime.getMinutes() === 15) {
                                      originalDepTime.setMinutes(originalDepTime.getMinutes() + 5);
                                  }
                                  const year = originalDepTime.getFullYear();
                                  const month = (originalDepTime.getMonth() + 1).toString().padStart(2, '0'); // Month is 0-based, so we add 1
                                  const day = originalDepTime.getDate().toString().padStart(2, '0');
                                  const hours = originalDepTime.getHours().toString().padStart(2, '0');
                                  const minutes = originalDepTime.getMinutes().toString().padStart(2, '0');
                                  const modifiedDepTime = `${year}-${month}-${day} ${hours}:${minutes}`;
                                  
                                  row.innerHTML = `
                                  <td class="px-6 py-2 text-center">${airlineName || 'N/A'}</td>
                                  <td class="px-6 py-4 text-sm sm:text-base">${schedule.flight_iata || 'N/A'}</td>
                                  <td class="px-6 py-4 text-sm sm:text-base">${modifiedDepTime || 'N/A'}</td>
                                  <td class="px-6 py-4 text-sm sm:text-base">${airportName || 'N/A'}</td>
                                  <td class="px-6 py-4 text-sm sm:text-base">${schedule.arr_time || 'N/A'}</td>
                                  `;
                                  scheduleDataElement.appendChild(row);
                              });
                          } else {
                              console.error('No schedules found in the response.');
                          }
                      })
                      .catch(error => {
                          console.error('An error occurred:', error);
                      });
                    </script> --}}
                  </tbody>
                </table>
              </div>
            </div>
           
          </div>
          
    </div>
  </section>

  {{-- footer --}}
  @include('components.home.footer')

  {{-- JS AOS --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
    // Function to update the clock display
    function updateClock() {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();
        
        const formattedTime = `${formatNumber(hours)} : ${formatNumber(minutes)} : ${formatNumber(seconds)}`;
        
        $('.clock').html(formattedTime); // Update the clock element's contents
    }
    
    // Helper function to format numbers with leading zeros
    function formatNumber(number) {
        return (number < 10 ? '0' : '') + number;
    }
    
    // Update the clock every second
    setInterval(updateClock, 1000);
    
    // Initial clock update
    updateClock();
    }); 
  </script>

  <script src="{{asset('js/navbar.js')}}"></script>
  <script src="{{asset('js/smoothScroll.js')}}"></script>

</body>
</html>