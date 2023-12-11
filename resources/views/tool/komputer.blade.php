@extends('layouts.home')

@section('title')
    Alat - Komputer
@endsection

@section('body_color')
    bg-gray-100
@endsection

@section('content')
    
    {{-- * navbar --}}
    @include('components.home.navbar', [

      'navbar_color' => "bg-white",
      'text_color' => "text-gray-900",

      // baranda
      'beranda_active' => "",
      'beranda_inactive' => "hover:-translate-y-1",

      // Alat
      'alat_active' => "border-b-2 border-red-700",
      'alat_inactive' => "",
      
      // layanan 
      'layanan_active' => "",
      'layanan_inactive' => "hover:-translate-y-1 ",

      // Hubungi Kami
      'hubungi_kami_active' => "",
      'hubungi_kami_inactive' => "hover:-translate-y-1",

      // register 
      'register_color' => "bg-red-700 text-white",

      // mobile beranda
      'mobile_beranda_active' => "font-bold",
      'mobile_beranda_inactive' => "",

      // mobile alat 
      'mobile_alat_active' => "",
      'mobile_alat_inactive' => "hover:translate-x-1 focus:translate-x-1",

      // mobile kontak / hubungi kami
      'mobile_kontak_active' => "",
      'mobile_kontak_inactive' => "hover:translate-x-1"

      ])

    {{-- Header --}}
    <header class="mx-1 mt-3 mb-5">
      {{-- Text --}}
      <section class="py-4 px-4 mx-auto text-center sm:py-5 md:py-6 lg:py-8 xl:py-10 sm:w-[80%]">
        <section class="bg-white shadow-lg rounded-lg">
          <div class="py-8 px-4 mx-auto lg:py-16">
            <div class="font-montserrat p-2 md:p-12 mb-8">
              <h1 class="text-gray-900 uppercase text-sm sm:text-base md:text-lg lg:text-2xl font-bold mb-2 text-start md:text-center" data-aos="fade-up" data-aos-delay="100">Laporan Pengecekan <span class="underline">Komputer</span> selama satu bulan</h1>
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

@endsection