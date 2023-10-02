<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alat - Komputer</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />

    {{-- off animation on mobile view --}}
    <style>
      @media only screen and (max-width: 768px) {
        [data-aos] {
          opacity: 1 !important;
          transform: none !important;
        }
      }
    </style>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    {{-- tailwind css using vite --}} @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="bg-gray-100">
    {{-- navbar --}}
    <nav class="bg-white shadow-lg rounded-lg mx-5 lg:mx-10 mt-7" id="navbar">
      <section class="mx-auto px-4 max-w-6xl">
        <section class="flex justify-between">
          {{-- Logo And Primary Menu --}}
          <section class="flex space-x-14 lg:space-x-8">
            {{-- Navbar Logo --}}
            <section>
              <a href="{{route('homepage')}}" class="flex items-center py-4 px-2">
                <img src="{{ asset('img/logo.png') }}" class="h-11 w-10 mr-3" alt="logo" />
                <span class="font-semibold text-gray-900 text-xs sm:text-base xl:text-lg uppercase">
                  Teknik dan <br />
                  pelayanan jasa
                </span>
              </a>
            </section>

            <section class="hidden md:flex items-center space-x-4 lg:space-x-2">
              <a href="{{route('homepage')}}" class="py-4 px-2 flex text-gray-900 hover:-translate-y-1 transition duration-200 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path
                    fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span class="hidden xl:block">
                  Beranda
                </span>
              </a>

              <a
                id="dropdownHoverButton"
                data-dropdown-toggle="dropdownHover"
                data-dropdown-trigger="hover"
                class="text-gray-900 font-semibold border-red-700 border-b-2 text-sm pl-3 lg:px-5 py-2.5 text-center inline-flex items-center cursor-pointer"
                type="button"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path
                    fill-rule="evenodd"
                    d="M14.5 10a4.5 4.5 0 004.284-5.882c-.105-.324-.51-.391-.752-.15L15.34 6.66a.454.454 0 01-.493.11 3.01 3.01 0 01-1.618-1.616.455.455 0 01.11-.494l2.694-2.692c.24-.241.174-.647-.15-.752a4.5 4.5 0 00-5.873 4.575c.055.873-.128 1.808-.8 2.368l-7.23 6.024a2.724 2.724 0 103.837 3.837l6.024-7.23c.56-.672 1.495-.855 2.368-.8.096.007.193.01.291.01zM5 16a1 1 0 11-2 0 1 1 0 012 0z"
                    clip-rule="evenodd"
                  />
                  <path
                    d="M14.5 11.5c.173 0 .345-.007.514-.022l3.754 3.754a2.5 2.5 0 01-3.536 3.536l-4.41-4.41 2.172-2.607c.052-.063.147-.138.342-.196.202-.06.469-.087.777-.067.128.008.257.012.387.012zM6 4.586l2.33 2.33a.452.452 0 01-.08.09L6.8 8.214 4.586 6H3.309a.5.5 0 01-.447-.276l-1.7-3.402a.5.5 0 01.093-.577l.49-.49a.5.5 0 01.577-.094l3.402 1.7A.5.5 0 016 3.31v1.277z"
                  />
                </svg>

                <span class="hidden xl:block">
                  Alat
                </span>
                <svg class="w-2.5 h-2.5 ml-2.5 hidden xl:block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
              </a>

              <!-- Dropdown menu -->
              <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
                <ul class="py-2 text-sm text-gray-700 font-montserrat " aria-labelledby="dropdownHoverButton">
                  <li>
                    <a href="{{route('tool.cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                  </li>
                  <li>
                    <a href="{{route('tool.komputer.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                  </li>
                  <li>
                    <a href="{{route('tool.fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                  </li>
                </ul>
              </div>

              <a href="" class="flex py-4 px-2 text-gray-900 font-semibold hover:-translate-y-1 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                </svg>
                <span class="hidden xl:block">
                  Layanan
                </span>
              </a>

              <a href="{{route('kontak.user.index')}}" class="flex py-4 px-2 text-gray-900 font-semibold hover:-translate-y-1 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path
                    fill-rule="evenodd"
                    d="M10 3c-4.31 0-8 3.033-8 7 0 2.024.978 3.825 2.499 5.085a3.478 3.478 0 01-.522 1.756.75.75 0 00.584 1.143 5.976 5.976 0 003.936-1.108c.487.082.99.124 1.503.124 4.31 0 8-3.033 8-7s-3.69-7-8-7zm0 8a1 1 0 100-2 1 1 0 000 2zm-2-1a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                    clip-rule="evenodd"
                  />
                </svg>

                <span class="hidden xl:block">
                  Hubungi Kami
                </span>
              </a>
            </section>
          </section>

          {{-- Secondary Navbar Item --}}
          <section class="hidden md:flex items-center space-x-3">
            <a href="{{route('login')}}" class="hidden xl:block items-center py-4 px-2 text-gray-900 font-medium hover:-translate-y-1 transition duration-200">
              <span class="hidden xl:block">
                Login
              </span>
            </a>

            <a href="{{route('register')}}" class="flex items-center py-3 px-4 bg-red-700 text-white rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                <path
                  d="M11 5a3 3 0 11-6 0 3 3 0 016 0zM2.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 018 18a9.953 9.953 0 01-5.385-1.572zM16.25 5.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z"
                />
              </svg>
              <span class="hidden xl:block">
                Register
              </span>
            </a>
          </section>

          {{-- Mobile Button --}}
          <section class="md:hidden flex items-center">
            <button class="outline-none" id="mobile-menu-button">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-900 md:hidden block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
              </svg>
            </button>
          </section>
        </section>

        {{-- Mobile Menu --}}
        <section class="hidden pb-3" id="mobile-menu">
          <ul class="text-sm">
            <li class="active">
              <a href="{{route('homepage')}}" class="block text-gray-900 py-4 px-2 hover:translate-x-1 transition duration-200">Beranda</a>
            </li>
            <li>
              <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-900 hover: focus:ring-4 focus:outline-none px-2 py-2.5 cursor-pointer inline-flex items-center font-bold" type="button">
                Alat
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
              </a>
              <!-- Dropdown menu -->
              <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-gray-700 font-montserrat text-xs md:text-sm" aria-labelledby="dropdownHoverButton">
                  <li>
                    <a href="{{route('tool.cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                  </li>
                  <li>
                    <a href="{{route('tool.komputer.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                  </li>
                  <li>
                    <a href="{{route('tool.fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="" class="block text-md text-gray-900 py-4 px-2 hover:translate-x-1 transition duration-200">Layanan</a>
            </li>
            <li>
              <a href="{{route('kontak.user.index')}}" class="block text-md text-gray-900 py-4 px-2 hover:translate-x-1 transition duration-200">Hubungi Kami</a>
            </li>
            <li>
              <a href="{{route('login')}}" class="block text-md text-gray-900 py-4 px-2 hover:translate-x-1 transition duration-200">Login</a>
            </li>
            <li>
              <a href="{{route('register')}}" class="block text-md bg-red-700 text-white rounded-lg shadow-md py-3 px-4 hover:bg-opacity-75 transition duration-200 text-center">Register</a>
            </li>
          </ul>
        </section>
      </section>
    </nav>

    {{-- Header --}}
    <header class="mx-1 mt-3 mb-5">
      {{-- Text --}}
      <section class="py-4 px-4 mx-auto text-center sm:py-5 md:py-6 lg:py-8 xl:py-10 sm:w-[80%]">
        <section class="bg-white shadow-lg rounded-lg">
          <div class="py-8 px-4 mx-auto lg:py-16">
            <div class="font-montserrat p-2 md:p-12 mb-8">
              <h1 class="text-gray-900 uppercase text-sm sm:text-base md:text-lg lg:text-2xl font-bold mb-2 text-start md:text-center" data-aos="fade-up" data-aos-delay="100">Laporan Pengecekan Komputer selama satu bulan</h1>
              <p class="text-xs sm:text-sm md:text-base font-normal text-gray-700 mt-5 mb-6 text-start" data-aos="fade-up" data-aos-delay="200">
                Laporan pengecekan yang direkap sebulan sekali. Untuk mendownload data laporan, silahkan masukkan dulu bulan yang ingin di download laporannya
              </p>

              <form method="GET" action="{{route('report.komputer.download')}}" target="_blank" data-aos="fade-up" data-aos-delay="300">
                <div class="text-start text-xs md:text-sm my-3 font-semibold uppercase ml-1">
                  <label for="">Pilih Bulan</label>
                </div>
                <div class="flex">
                  <div class="relative w-full flex">
                    <input
                      type="month"
                      name="bulan"
                      id="search-dropdown"
                      class="block p-2.5 w-full z-20 text-xs md:text-sm text-gray-900 bg-gray-50 rounded-l-lg border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                      placeholder="Search Mockups, Logos, Design Templates..."
                      required
                    />
                    <button
                      type="submit"
                      class=" p-2.5 text-sm font-medium h-full text-white bg-red-700 rounded-r-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-400"
                    >
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                      </svg>
                      <span class="sr-only">Search</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </section>
    </header>


    {{-- footer --}} @include('components.home.footer') {{-- JS AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function () {
        // Function to update the clock display
        function updateClock() {
          const now = new Date();
          const hours = now.getHours();
          const minutes = now.getMinutes();
          const seconds = now.getSeconds();

          const formattedTime = `${formatNumber(hours)} : ${formatNumber(minutes)} : ${formatNumber(seconds)}`;

          $(".clock").html(formattedTime); // Update the clock element's contents
        }

        // Helper function to format numbers with leading zeros
        function formatNumber(number) {
          return (number < 10 ? "0" : "") + number;
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
