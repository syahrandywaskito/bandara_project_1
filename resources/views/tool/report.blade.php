<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan</title> 
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

  <style>
    @media only screen and (max-width: 768px){
      [data-aos] {
            opacity: 1 !important;
            transform: none !important;
      }
    }
  </style>
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
        <section class=" flex space-x-14 lg:space-x-8">

          {{-- Navbar Logo --}}
            <section>
              <a href="{{route('report.index')}}" class=" flex items-center py-4 px-2">
                <img src="{{ asset('img/logo.png') }}" class=" h-11 w-10 mr-3" alt="logo">
                <span class=" font-semibold text-gray-100 text-xs sm:text-base xl:text-lg uppercase">Teknik dan <br>pelayanan jasa</span>
              </a>
            </section>
            
            <section class=" hidden md:flex items-center space-x-4 lg:space-x-2 ">
              <a href="{{route('homepage')}}"
                class=" py-4 px-2 flex text-gray-100 font-semibold hover:-translate-y-1 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 xl:hidden h-5">
                  <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd"/>
                </svg> 
                <span class="hidden xl:block">
                  Beranda
                </span>             
              </a>

              <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-gray-100 font-semibold text-sm pl-3 lg:px-5 py-2.5 text-center inline-flex items-center cursor-pointer border-b-2 border-gray-100" type="button">
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
                    <hr class="border-0 bg-[#5e7c60] h-1 ">
                    <div class="py-2">
                      <a href="{{route('report.index')}}" class="block text-gray-600 font-semibold px-4 py-2 cursor-default">Laporan</a>
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
             class="flex items-center py-3 px-4 bg-[#f9f5f2] text-[#5e7c60] rounded-lg shadow-md font-medium hover:bg-opacity-75 transition duration-200">
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
      <section class="hidden pb-3 sm:hidden" id="mobile-menu">
        <ul class="text-sm">
          <li>
            <a href="{{route('homepage')}}" class="block text-gray-100 py-4 px-2 hover:translate-x-1 transition duration-200">Beranda</a>
          </li>
          <li class="active">
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-100 hover: focus:ring-4 focus:outline-none px-2 py-2.5 cursor-pointer inline-flex items-center font-semibold" type="button">
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
              <hr class="border-0 bg-[#5e7c60] h-1 ">
              <div class="py-2">
                <a href="{{route('report.index')}}" class="block px-4 py-2 text-gray-600 font-semibold cursor-default">Laporan</a>
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
            <a href="{{route('register')}}" class="block text-md bg-[#f9f5f2] text-[#5e7c60] rounded-lg shadow-md py-3 px-4 hover:bg-opacity-75 transition duration-200 text-center">Register</a>
          </li>
        </ul>
      </section>

    </section>
  </nav>


  {{-- Header --}}
  <header class=" mx-10 mt-3 mb-5 flex items-center h-[90vh]">

    {{-- Text --}}
    <section class="py-5 px-4 mx-auto max-w-screen-xl text-center lg:py-10 md:w-[60%]">
      <h1 class=" uppercase mb-4 font-semibold tracking-tight leading-none text-gray-950 text-base lg:text-lg xl:text-2xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
        Laporan checkup harian
      </h1>
      <p class="mb-8 pt-3 text-sm font-normal text-gray-800 sm:text-base lg:text-lg xl:text-xl font-montserrat" data-aos="fade-up" data-aos-delay="200">
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
    <div class="py-1 px-2 sm:py-3 sm:px-4 mx-auto max-w-screen-xl">

      {{-- accordion --}}
      <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-4 md:p-12"> 

        {{-- accordion header --}}
        <div class="text-center pb-7 md:pb-10" data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
          <h1 class="font-semibold font-montserrat text-sm md:text-base lg:text-xl uppercase">Laporan</h1>
        </div>

        {{-- accordion section --}}
        <div id="accordion-color" class="shadow-md rounded-lg" data-accordion="collapse" data-active-classes="bg-[#5e7c60] text-[#f9f5f2]">

          {{-- accordion CCTV --}}
          <h2 id="accordion-color-heading-1">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#5e7c60] rounded-t-xl focus:ring-2 focus:ring-[#5e7c60]" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
              <span class="text-sm md:text-base">Laporan CCTV</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 font-roboto bg-white">
              <div class="px-2 py-4 text-sm md:text-base sm:px-2 sm:py-5">
                <p class="mb-2 font-semibold ">
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
                            <th scope="col" class="px-6 py-3 text-xs">
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
                    <tbody class="text-xs sm:text-sm">
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
              <span class="text-sm md:text-base">Laporan Komputer</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 font-roboto bg-white">
              <div class="px-2 py-4 text-sm md:text-base sm:px-2 sm:py-5">
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
                    <tbody class="text-xs sm:text-sm">
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
              <span class="text-sm md:text-base">Laporan FIDS</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <div class="p-5 font-roboto bg-white">
              <div class="px-2 py-4 text-sm md:text-base sm:px-2 sm:py-5">
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
                    <tbody class="text-xs sm:text-sm">
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
  <script src="{{asset('js/navbar.js')}}"></script>
  <script src="{{asset('js/smoothScroll.js')}}"></script>
</body>
</html>