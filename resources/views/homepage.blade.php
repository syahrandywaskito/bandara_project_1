<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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

              <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-100 hover:-translate-y-1 font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center transition duration-200 cursor-pointer" type="button">
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
             class="py-2 px-4 bg-white text-indigo-500 rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
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
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-100 hover: focus:ring-4 focus:outline-none px-2 py-2.5 cursor-pointer inline-flex items-center" type="button">
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
                <a href="{{route('report.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Report</a>
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
      <h1 class=" uppercase mb-4 text-3xl font-semibold tracking-tight leading-none text-gray-950 lg:text-5xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
        Abdulrachman Saleh Airport <br>
        Engineering Website
      </h1>
      <p class="mb-8 pt-3 text-lg font-normal text-gray-800 lg:text-xl font-montserrat" data-aos="fade-up" data-aos-delay="200">
        Welcome to the <strong>Abdurrahman Saleh Airport</strong> Engineering Website. We are ready to serve and provide information about the techniques used at <strong>Abdurrahman Saleh Airport</strong>
      </p>
      <a href="#about" class="text-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center hover:translate-y-3 transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6  h-6" data-aos="fade-up" data-aos-delay="300">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
        </svg> 
      </a>
    </section>
  </header>

  {{-- About --}}
  <section id="about">
    {{-- carousel --}}
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-8 md:p-12 mb-8"> 
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
    {{-- Fligth Schedule --}}
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
          <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-8 md:py-10 md:px-12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500" data-aos-ease="ease-in-out"> 
            <div class="pb-6 px-3 flex justify-between items-center">
              <div class="text-xl">
                <h2 class="font-montserrat font-semibold uppercase">Flight Schedule</h2>
              </div>
              <div class="">
                <p class="font-montserrat">
                  {{now()->format('l')}}, {{now()->format('d M Y')}}
                </p>
                <p class="font-montserrat clock">
                </p>
              </div>
            </div>    
            <div class="relative overflow-x-auto rounded-lg shadow-md">
              <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left">
                  <thead class="text-xs text-center text-gray-50 uppercase bg-gradient-to-r from-indigo-600 to-blue-500">
                    <tr>
                      <th scope="col" class="px-6 py-3">
                        Airline
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Flight ID
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Departure
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Destination
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Arrival
                      </th>
                    </tr>
                  </thead>
                  <tbody id="scheduleData" class="text-center font-roboto">
                    <script>
                      // const apiUrl = 'https://airlabs.co/api/v9/schedules?dep_iata=MLG&api_key=84cea78b-daa2-4bcd-9042-b9cb4501a443';
                      // const scheduleDataElement = document.getElementById('scheduleData');
                                                
                      // fetch(apiUrl)
                      // .then(response => response.json())
                      // .then(data => {
                      //   if (data.response) {
                      //     const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
                      //     const todaySchedules = data.response.filter(schedule => {
                      //     // Exclude schedules with flight_iata ID7109 and QG161
                      //     return !['ID7109', 'QG161'].includes(schedule.flight_iata) && schedule.dep_time_utc.includes(today);
                      //     });
                                                          
                      //     todaySchedules.forEach(schedule => {
                      //     const row = document.createElement('tr');
                      //     const airlineName = schedule.airline_icao === 'BTK' ? 'Batik Air' : (schedule.airline_icao === 'GIA' ?  'Garuda Indonesia' : (schedule.airline_icao === 'CTV' ? 'Citilink' : 'N/A'));
                      //     const airportName = schedule.arr_iata === 'HLP' ? 'Halim Perdana Kusuma' : (schedule.arr_iata === 'CGK' ? 'Soekarno-Hatta' : 'N/A');
                      //     row.innerHTML = `
                      //                       <td class="px-6 py-4">${airlineName || 'N/A'}</td>
                      //                       <td class="px-6 py-4">${schedule.flight_iata || 'N/A'}</td>
                      //                       <td class="px-6 py-4">${schedule.dep_time || 'N/A'}</td>
                      //                       <td class="px-6 py-4">${airportName || 'N/A'}</td>
                      //                       <td class="px-6 py-4">${schedule.arr_time || 'N/A'}</td>
                      //                     `;
                      //     scheduleDataElement.appendChild(row);
                      //     });
                      //   } 
                      //   else {
                      //     console.error('No schedules found in the response.');
                      //   }
                      // })
                      // .catch(error => {
                      //     console.error('An error occurred:', error);
                      // });
                    </script>
                  </tbody>
                </table>
              </div>
            </div>
           
          </div>
          
    </div>
  </section>

  {{-- footer --}}
  <footer class="bg-white mt-6 shadow">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:mx-5 xl:mx-0 sm:justify-between font-roboto">
          <div class="sm:w-1/2 text-center sm:text-start">
            <a href="{{route('homepage')}}" class="flex items-center mb-4 mx-3 sm:mx-0 sm:mb-0">
                <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-lg md:text-xl font-semibold whitespace-nowrap uppercase">Teknik Bandara Abdulrachman Saleh</span>
            </a>
            <p class="pt-4">
              Jl. Komodor Udara Abdul Rahman Saleh,<br>
              Krajan, Bunut Wetan, Kec. Pakis Kabupaten Malang, <br>
              Jawa Timur 65154 <br><br>
              Telp ( 0341 ) 2992700

            </p>
          </div>
          <div>
            <ul class="flex flex-wrap items-center my-7 justify-center sm:mt-0 text-sm font-medium text-gray-500 sm:mb-0">
                <li>
                    <a href="#" class="mr-4 hover:border-b-2 border-gray-500 transition duration-200 md:mr-6 ">Tool</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:border-b-2 border-gray-500 transition duration-200 md:mr-6">Service</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:border-b-2 border-gray-500 transition duration-200 md:mr-6 ">Contact Us</a>
                </li>
            </ul>
          </div>
        </div>
        <div>
          <hr class="h-px my-8 bg-gray-200 border-0">
          <span class="block text-sm text-gray-500 text-center font-roboto">
            © 2023 
            <a href="" class="hover:border-b-2 border-gray-500 transition duration-200">
            UPT Bandara Abdulrachman Saleh</a>
            . All Rights Reserved.
          </span>
        </div>
    </div>
  </footer>

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

  <script src="{{asset('js/clock.js')}}"></script>
  <script src="{{asset('js/smoothScroll.js')}}"></script>

</body>
</html>