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
<body class=" bg-[#f9f5f2]">

  {{-- navbar --}}
  <nav class=" bg-[#5e7c60] shadow-lg rounded-lg mx-10 mt-7">
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
              <a href="{{route('homepage')}}"
                class=" py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                Home
              </a>

              <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-100  font-semibold text-sm px-5 py-2.5 text-center inline-flex items-center  border-b-2 border-gray-100" type="button">
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
                    <hr class="border-0 bg-[#5e7c60] h-1 ">
                    <div class="py-2">
                      <a href="{{route('report.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Report</a>
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
             class="py-3 px-4 bg-[#f9f5f2] text-[#5e7c60] rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
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
          <li >
            <a href="{{route('homepage')}}" class="block text-md text-gray-100 py-4 px-2 font-bold">Home</a>
          </li>
          <li>
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-100 hover: focus:ring-4 focus:outline-none px-2 py-2.5 inline-flex items-center" type="button">
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
      <h1 class=" uppercase mb-4 text-3xl font-semibold tracking-tight leading-none text-gray-950 md:text-4xl lg:text-5xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
        Hardware maintenance Checkup Report Page
      </h1>
      <p class="mb-8 pt-3 text-lg font-normal text-gray-800 lg:text-xl font-montserrat" data-aos="fade-up" data-aos-delay="200">
        Halaman yang memuat semua laporan checkup harian dari perangkat-perangkat yang ada di bandara <strong>Abdulrachman Saleh</strong>
      </p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="#about" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-[#f9f5f2] rounded-lg bg-[#5e7c60] font-montserrat hover:-translate-y-1 hover:scale-105 transition duration-200 focus:ring-4 focus:ring-gray-100" data-aos="fade-up" data-aos-delay="300">
            Let's Look
        </a>  
    </div>
    </section>
  </header>

  {{-- report section --}}
  <section>
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
      <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-8 md:p-12 mb-8"> 
        <div class="text-center pb-7 md:pb-10" data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
          <h1 class="font-semibold font-montserrat text-lg md:text-2xl uppercase">Report Data</h1>
        </div>
        <div id="accordion-color" class="shadow-md rounded-lg" data-accordion="collapse" data-active-classes="bg-[#5e7c60] text-[#f9f5f2]">
          <h2 id="accordion-color-heading-1">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#5e7c60] rounded-t-xl focus:ring-2 focus:ring-[#5e7c60]" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
              <span>CCTV Report</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 font-roboto bg-white">
              <div class="p-5">
                <p class="mb-2 font-semibold">
                  Report Table
                </p>
                <p>
                  {{now()->format('l')}}, 
                  {{now()->format('d M Y')}}
                </p>
              </div>
              <div class="relative overflow-x-auto rounded-md shadow-md">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Hardware Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Record Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Record Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Clean Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Clean Description
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($cctv as $data)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$data->hardware_name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$data->record_status}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->record_desc}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->clean_status}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->clean_desc}}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <h2 id="accordion-color-heading-2">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#5e7c60] focus:ring-2 focus:ring-[#5e7c60]" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
              <span>Komputer Report</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
            <div class="p-5">
              <p class="mb-2 text-gray-500">
                Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.
              </p>
              <p class="text-gray-500">
                Check out the 
                <a href="https://flowbite.com/figma/" class="text-blue-600 hover:underline">
                  Figma design system
                </a> based on the utility classes from Tailwind CSS and components from Flowbite.
              </p>
            </div>
          </div>
          <h2 id="accordion-color-heading-3">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
              <span>FIDS Report</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <div class="p-5">
              <p class="mb-2 text-gray-500">
                The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.
              </p>
              <p class="mb-2 text-gray-500">
                However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.
              </p>
              <p class="mb-2 text-gray-500">
                Learn more about these technologies:
              </p>
              <ul class="pl-5 text-gray-500 list-disc">
                <li>
                  <a href="https://flowbite.com/pro/" class="text-blue-600 hover:underline">Flowbite Pro
                  </a>
                </li>
                <li>
                  <a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 hover:underline">Tailwind UI
                  </a>
                </li>
              </ul>
            </div>
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