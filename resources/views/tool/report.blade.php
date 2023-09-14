<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan</title> 
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

  {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  {{-- tailwind css using vite --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-[#f9f5f2]">

  {{-- navbar --}}
  <nav class=" bg-[#5e7c60] shadow-lg rounded-lg mx-10 mt-7" id="navbar">
    <section class=" mx-auto px-4 max-w-6xl">
      <section class=" flex justify-between">

        {{-- Logo And Primary Menu --}}
        <section class=" flex space-x-8">

          {{-- Navbar Logo --}}
            <section>
              <a href="" class=" flex items-center py-4 px-2">
                <img src="{{ asset('img/logo.png') }}" class=" h-11 w-10 mr-3" alt="logo">
                <span class=" font-semibold text-gray-100 uppercase text-lg">teknik dan <br>pelayanan jasa</span>
              </a>
            </section>
            
            <section class=" hidden md:flex items-center space-x-2">
              <a href="{{route('homepage')}}"
                class=" py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                Beranda
              </a>

              <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-100  font-semibold text-sm px-5 py-2.5 text-center inline-flex items-center  border-b-2 border-gray-100 cursor-pointer" type="button">
                Alat
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
                      <a href="{{route('report.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Laporan</a>
                    </div>
                </div>

              <a href=""
                class=" py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                Layanan             
              </a>

              <a href=""
                class=" py-4 px-2 text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                Hubungi Kami
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
             class="py-2 px-4 bg-[#f9f5f2] text-[#5e7c60] rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
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
            <a href="{{route('homepage')}}" class="block text-md text-gray-100 py-4 px-2 font-bold">Beranda</a>
          </li>
          <li>
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-100 hover: focus:ring-4 focus:outline-none px-2 py-2.5 inline-flex items-center cursor-pointer" type="button">
              Alat
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
              <hr class="border-0 bg-[#5e7c60] h-1 ">
              <div class="py-2">
                <a href="{{route('report.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">laporan</a>
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
            <a href="{{route('register')}}" class="block text-md bg-white text-[#5e7c60] rounded-lg shadow-md py-3 px-4 hover:bg-opacity-75 transition duration-200 text-center">Register</a>
          </li>
        </ul>
      </section>

    </section>
  </nav>


  {{-- Header --}}
  <header class=" mx-10 mt-3 mb-5 flex items-center h-[90vh]">

    {{-- Text --}}
    <section class="py-5 px-4 mx-auto max-w-screen-xl text-center lg:py-10 md:w-[60%]">
      <h1 class=" uppercase mb-4 text-3xl font-semibold tracking-tight leading-none text-gray-950 md:text-4xl lg:text-4xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
        Laporan checkup harian
      </h1>
      <p class="mb-8 pt-3 text-lg font-normal text-gray-800 lg:text-xl font-montserrat" data-aos="fade-up" data-aos-delay="200">
        Halaman yang memuat semua laporan pemeriksaan harian di <strong>Bandar Udara Abdulrachman Saleh</strong>
      </p>
      <a href="#report" class="text-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center hover:translate-y-3 transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 animate-bounce h-6" data-aos="fade-up" data-aos-delay="300">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
        </svg> 
      </a>
    </section>
  </header>

  {{-- report section --}}
  <section id="report" class="">
    <div class="py-3 px-4 mx-auto max-w-screen-xl">
      <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-8 md:p-12"> 
        <div class="text-center pb-7 md:pb-10" data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
          <h1 class="font-semibold font-montserrat text-lg md:text-2xl uppercase">Laporan</h1>
        </div>
        <div id="accordion-color" class="shadow-md rounded-lg" data-accordion="collapse" data-active-classes="bg-[#5e7c60] text-[#f9f5f2]">

          {{-- accordion CCTV --}}
          <h2 id="accordion-color-heading-1">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#5e7c60] rounded-t-xl focus:ring-2 focus:ring-[#5e7c60]" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
              <span>Laporan CCTV</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 font-roboto bg-white">
              <div class="p-5">
                <p class="mb-2 font-semibold">
                  Tabel Laporan
                </p>
                <p>
                  {{now()->isoFormat('dddd, D MMMM Y')}}
                </p>
                <p>
                  <a href="{{route('report.cctv.download')}}" target="_blank" class="hover:text-[#5e7c60] hover:border-b-2 border-[#5e7c60]">Simpan Tabel</a>
                </p>
              </div>
              <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs uppercase bg-[#5e7c60] text-[#f9f5f2] border border-[#5e7c60]">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Perangkat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status rekaman
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan rekaman
                            </th>
                            <th scope="col" class="px-6 py-3">
                                status kebersihan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                keterangan kebersihan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($cctv as $data)
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border border-[#5e7c60]">
                                {{$data->hardware_name}}
                            </th>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->record_status}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->record_desc}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->clean_status}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->clean_desc}}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>

          {{-- accordion Komputer --}}
          <h2 id="accordion-color-heading-2">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#5e7c60] focus:ring-2 focus:ring-[#5e7c60]" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
              <span>Laporan Komputer</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 font-roboto bg-white">
              <div class="p-5">
                <p class="mb-2 font-semibold">
                  Tabel Laporan
                </p>
                <p>
                  {{now()->isoFormat('dddd, D MMMM Y')}}
                </p>
                <p>
                  <a href="{{route('report.komputer.download')}}" target="_blank" class="hover:text-[#5e7c60] hover:border-b-2 border-[#5e7c60]">Simpan Tabel</a>
                </p>
              </div>
              <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs uppercase bg-[#5e7c60] text-[#f9f5f2] border border-[#5e7c60]">
                        <tr>
                          <th scope="col" class="px-6 py-3">
                              Nama Perangkat
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Kondisi Nyala/Mati
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Keterangan Nyala/Mati
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Aplikasi di Uninstall
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Keterangan Aplikasi di Uninstall
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Status pembersihan file
                          </th>
                          <th scope="col" class="px-6 py-3 ">
                              Keterangan pembersihan file
                          </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($komputer as $data)
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border border-[#5e7c60]">
                              {{$data->computer_name}}
                            </th>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                              {{$data->on_off_condition}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                              {{$data->on_off_desc}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                              {{$data->uninstalled_app}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                              {{$data->uninstalled_app_desc}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                              {{$data->clean_file_status}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                              {{$data->clean_file_desc}}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>

          {{-- accordion FIDS --}}
          <h2 id="accordion-color-heading-3">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 focus:ring-2 focus:ring-[#5e7c60]" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
              <span>Laporan FIDS</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <div class="p-5 font-roboto bg-white">
              <div class="p-5">
                <p class="mb-2 font-semibold">
                  Tabel Laporan
                </p>
                <p>
                  {{now()->isoFormat('dddd, D MMMM Y')}}}
                </p>
                <p>
                  <a href="{{route('report.fids.download')}}" target="_blank" class="hover:text-[#5e7c60] hover:border-b-2 border-[#5e7c60]">Simpan Tabel</a>
                </p>
              </div>
              <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs uppercase bg-[#5e7c60] text-[#f9f5f2] border border-[#5e7c60]">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Perangkat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                kondisi tampilan 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                keterangan tampilan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                kondisi kebersihan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                keterangan kebersihan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($fids as $data)
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border border-[#5e7c60]">
                                {{$data->monitor_name}}
                            </th>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->monitor_view}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->view_desc}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->clean_condition}}
                            </td>
                            <td class="px-6 py-4 border border-[#5e7c60]">
                                {{$data->condition_desc}}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
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
  {{-- clock --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  {{-- js script --}}
  <script src="{{asset('js/clock.js')}}"></script>
  <script src="{{asset('js/smoothScroll.js')}}"></script>
</body>
</html>