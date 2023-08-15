<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Teknik - Homepage</title> 
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

  {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  {{-- tailwind css using vite --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-gradient-to-t from-blue-300">

  {{-- navbar --}}
  <nav class=" bg-gradient-to-r from-indigo-600 to-blue-300 shadow-lg rounded-lg mx-10 mt-7">
    <section class=" mx-auto px-4 max-w-6xl">
      <section class=" flex justify-between">

        {{-- Logo And Primary Menu --}}
        <section class=" flex space-x-8">

          {{-- Navbar Logo --}}
            <section>
              <a href="" class=" flex items-center py-4 px-2">
                <img src="{{ asset('img/logo.png') }}" class=" h-11 w-10 mr-3" alt="logo">
                <span class=" font-semibold text-gray-100 text-lg">TEKNIK</span>
              </a>
            </section>
            
            <section class=" hidden md:flex items-center space-x-2">
              <a href=""
                class=" py-4 px-2 text-gray-100 border-b-2 border-gray-100 font-semibold">
                Home
              </a>

              <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-100 hover:-translate-y-1 font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center transition duration-200" type="button">
                Tool 
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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
                      <a href="" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Report</a>
                    </div>
                </div>

              <a href=""
                class=" py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                Service             
              </a>

              <a href=""
                class=" py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                Contact Us
              </a>
            </section>

        </section>

        {{-- Secondary Navbar Item --}}
        <section class="hidden md:flex items-center space-x-3">
          <a href="{{route('login')}}"
             class="py-4 px-2 text-gray-100 font-medium hover:-translate-y-1 transition duration-200">
             Login
          </a>

          <a href="{{route('register')}}"
             class="py-3 px-4 bg-white text-indigo-500 rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
             Register
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
        <ul>
          <li class="active">
            <a href="" class="block text-md text-gray-100 py-4 px-2 font-bold">Home</a>
          </li>
          <li>
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-100 hover: focus:ring-4 focus:outline-none px-2 py-2.5        inline-flex items-center" type="button">
              Tool
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </a>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44">
              <ul class="py-2 text-sm text-gray-700 font-montserrat" aria-labelledby="dropdownHoverButton">
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
                <a href="" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Report</a>
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
            <a href="{{route('login')}}" class="block text-md text-gray-100 py-4 px-2 hover:translate-x-1 transition duration-200">Log In</a>
          </li>
          <li>
            <a href="{{route('register')}}" class="block text-md bg-white text-indigo-500 rounded-lg shadow-md py-3 px-4 hover:bg-opacity-75 transition duration-200 text-center">Register</a>
          </li>
        </ul>
      </section>

    </section>
  </nav>

  {{-- Header --}}
  <header class=" mx-10 mt-3 mb-5 flex items-center h-[90vh]">

    {{-- Text --}}
    <section class="py-5 px-4 mx-auto max-w-screen-xl text-center lg:py-10 md:w-[60%]">
      <h1 class="mb-4 text-4xl font-semibold tracking-tight leading-none text-gray-950 md:text-5xl lg:text-6xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
        Website Teknik Bandara Abdurrahman Saleh
      </h1>
      <p class="mb-8 pt-3 text-lg font-normal text-gray-800 lg:text-xl font-montserrat" data-aos="fade-up" data-aos-delay="200">
        Selamat datang di Website Teknik Bandar Udara <strong>Abdurrahman Saleh</strong>. Kami siap melayani dan memberikan informasi seputar terknik yang digunakan di Bandar Udara <strong>Abdurrahman Saleh</strong>
      </p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="#about" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-100 rounded-lg bg-gradient-to-r from-indigo-600 to-blue-500 font-montserrat hover:-translate-y-1 hover:scale-105 transition duration-200 focus:ring-4 focus:ring-gray-100" data-aos="fade-up" data-aos-delay="300">
            Let's Look
        </a>  
    </div>
    </section>
  </header>

  {{-- About --}}
  <section id="about">
    {{-- carousel --}}
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
        <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-lg p-8 md:p-12 mb-8"> 
          <div class="text-center pb-7 md:pb-10" data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
            <h1 class="font-semibold font-montserrat text-lg md:text-2xl uppercase">Tool Overview</h1>
          </div>
          <div id="controls-carousel" class="relative w-full shadow-lg" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-[70vh]" data-aos="fade-right" data-aos-delay="600"  data-aos-ease="ease-in-out" data-aos-duration="400">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/tool/cctv">
                      <img src="{{asset('img/cctv.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grayscale hover:grayscale-0 transition duration-200" alt="...">
                    </a>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                  <a href="/tool/fids">
                    <img src="{{asset('img/time.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grayscale hover:grayscale-0 transition duration-200" alt="...">
                  </a>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <a href="/tool/komputer">
                    <img src="{{asset('img/laptop.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grayscale hover:grayscale-0 transition duration-200" alt="">
                  </a>
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
    </div>
    {{-- Arrival Schedule --}}
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
          <div class="bg-gray-100 border border-gray-200 rounded-lg shadow-lg p-8 md:py-10 md:px-12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500" data-aos-ease="ease-in-out"> 
            <div class="pb-6 px-3 flex justify-between items-center">
              <div class="text-xl">
                <h2 class="font-montserrat font-semibold uppercase">Arrival</h2>
              </div>
              <div class="">
                <p class="font-montserrat">
                  {{now()->format('l')}}, {{now()->format('d M Y')}}
                </p>
                <p class="font-montserrat clock">
                </p>
              </div>
            </div>    
            <div class="relative overflow-x-auto rounded-lg drop-shadow-xl">
              <table class="w-full text-sm text-left text-gray-500">
                  <thead class="text-xs uppercase bg-gradient-to-r from-indigo-600 to-blue-500 text-gray-50 font-roboto text-center">
                      <tr>
                          <th scope="col" class="px-6 py-3">
                              Airline
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Flight
                          </th>
                          <th scope="col" class="px-6 py-3">
                              From
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Time
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Remark
                          </th>

                      </tr>
                  </thead>
                  <tbody class=" font-roboto text-center">
                      <tr class="bg-white border-b ">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                              Batik Air
                          </th>
                          <td class="px-6 py-4">
                              ID-7583
                          </td>
                          <td class="px-6 py-4">
                              Jakarta Halim Perdana
                          </td>
                          <td class="px-6 py-4">
                              12.55
                          </td>
                          <td class="px-6 py-4">
                              Scheduled
                          </td>
                      </tr>
                      <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Batik Air
                        </th>
                        <td class="px-6 py-4">
                            ID-7583
                        </td>
                        <td class="px-6 py-4">
                            Jakarta Halim Perdana
                        </td>
                        <td class="px-6 py-4">
                            12.55
                        </td>
                        <td class="px-6 py-4">
                            Scheduled
                        </td>
                      </tr>
                      <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Batik Air
                        </th>
                        <td class="px-6 py-4">
                            ID-7583
                        </td>
                        <td class="px-6 py-4">
                            Jakarta Halim Perdana
                        </td>
                        <td class="px-6 py-4">
                            12.55
                        </td>
                        <td class="px-6 py-4">
                            Scheduled
                        </td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
          
    </div>
    {{-- Departure Schedule --}}
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
      <div class="bg-gray-100 border border-gray-200 rounded-lg shadow-lg p-8 md:py-10 md:px-12" data-aos="fade-right" data-aos-delay="300" data-aos-duration="600" data-aos-ease="ease-in-out"> 
        <div class="pb-6 px-3 flex justify-between items-center">
          <div class="text-xl">
            <h2 class="font-montserrat font-semibold uppercase">Departure</h2>
          </div>
          <div class="text-mc">
            <p class="font-montserrat">
              {{now()->format('l')}}, {{now()->format('d M Y')}}
            </p>
            <p class="font-montserrat clock">
            </p>
          </div>
        </div>    
        <div class="relative overflow-x-auto rounded-lg drop-shadow-xl">
          <table class="w-full text-sm text-left text-gray-500">
              <thead class="text-xs uppercase bg-gradient-to-r from-indigo-600 to-blue-500 text-gray-50 font-roboto text-center">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          Airline
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Flight
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Destination
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Time
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Remark
                      </th>

                  </tr>
              </thead>
              <tbody class=" font-roboto text-center">
                  <tr class="bg-white border-b ">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                          Batik Air
                      </th>
                      <td class="px-6 py-4">
                          ID-7583
                      </td>
                      <td class="px-6 py-4">
                          Jakarta Halim Perdana
                      </td>
                      <td class="px-6 py-4">
                          12.55
                      </td>
                      <td class="px-6 py-4">
                          Scheduled
                      </td>
                  </tr>
                  <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Batik Air
                    </th>
                    <td class="px-6 py-4">
                        ID-7583
                    </td>
                    <td class="px-6 py-4">
                        Jakarta Halim Perdana
                    </td>
                    <td class="px-6 py-4">
                        12.55
                    </td>
                    <td class="px-6 py-4">
                        Scheduled
                    </td>
                  </tr>
                  <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Batik Air
                    </th>
                    <td class="px-6 py-4">
                        ID-7583
                    </td>
                    <td class="px-6 py-4">
                        Jakarta Halim Perdana
                    </td>
                    <td class="px-6 py-4">
                        12.55
                    </td>
                    <td class="px-6 py-4">
                        Scheduled
                    </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
      </div>    
    </div>
  </section>

  {{-- JS AOS --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  {{-- clock --}}
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
  {{-- js script --}}
  <script src="{{asset('js/clock.js')}}"></script>
  <script>
    const btn = document.querySelector("#mobile-menu-button");
    const menu = document.querySelector("#mobile-menu");

    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    })
  </script>
</body>
</html>