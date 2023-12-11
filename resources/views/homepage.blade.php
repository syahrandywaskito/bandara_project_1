@extends('layouts.home')

@section('title')
    Homepage
@endsection

@section('body_color')
    bg-gradient-to-t from-blue-300  
@endsection

@section('content')

    {{-- * navbar --}}
    @include('components.home.navbar', [

      'navbar_color' => "bg-gradient-to-r from-indigo-600 to-blue-300",
      'text_color' => "text-gray-100",

      // baranda
      'beranda_active' => "border-b-2 border-gray-100",
      'beranda_inactive' => "",

      // Alat
      'alat_active' => "",
      'alat_inactive' => "hover:-translate-y-1 focus:-translate-y-1",
      
      // layanan 
      'layanan_active' => "",
      'layanan_inactive' => "hover:-translate-y-1 ",

      // Hubungi Kami
      'hubungi_kami_active' => "",
      'hubungi_kami_inactive' => "hover:-translate-y-1",

      // register 
      'register_color' => "bg-white text-indigo-500",

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
    <header class="mx-10 mt-3 mb-5 flex items-center h-[75vh] md:h-[65vh] lg:h-[70vh] xl:h-[90vh]">
      {{-- Text --}}
      <section class="py-4 px-4 mx-auto max-w-screen-xl text-center sm:py-5 md:py-6 lg:py-8 xl:py-10 sm:w-[70%] md:w-[60%]">
        <h1 class="uppercase mb-4 font-semibold tracking-tight leading-none text-gray-950 text-base lg:text-lg xl:text-2xl font-montserrat" data-aos="fade-up" data-aos-delay="100">
          Teknik dan Pelayanan Jasa <br />
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

    <section id="about" class="px-4 mx-auto max-w-screen-xl">
      <div class="grid grid-cols-1 px-4 mx-auto gap-4">
        <div class="text-center" data-aos="fade-up" data-aos-delay="300" data-aos-ease="ease-in-out">
          <h1 class="font-semibold font-montserrat text-sm md:text-base lg:text-xl uppercase">
            Berita
          </h1>
        </div>

        <div class="flex-row lg:flex lg:space-x-10 justify-center mt-7">
          @if ($beritaPaginate) 
            @foreach ($beritaPaginate as $data)
              <div class="">
                <div class="bg-white border border-gray-200 rounded-lg shadow lg:w-[40rem]" data-aos="fade-right" data-aos-delay="600" data-aos-ease="ease-in-out" data-aos-duration="400">
                  <a href="{{route('berita', $data->id)}}">
                    <div href="#">
                      <img class="rounded-t-lg" src="{{asset('/storage/berita/'.$data->gambar)}}" alt="" />
                    </div>
                    <div class="p-5 font-montserrat">
                      <div>
                        <h5 class="mb-1 text-sm sm:text-base md:text-lg font-bold tracking-tight text-gray-900">
                          {{$data->judul}}
                        </h5>
                      </div>
                      <div class=" truncate text-xs sm:text-sm md:text-base">
                        {!! Str::limit(strip_tags($data->isi), $limit = 100, $end = '...') !!}
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            @endforeach
  
              <div class=" flex-row space-y-5 mt-5 lg:mt-0" data-aos="fade-left" data-aos-delay="600" data-aos-ease="ease-in-out" data-aos-duration="400">
                @foreach ($beritaPaginate2 as $data)
                  <a href="{{route('berita', $data->id)}}" class="flex space-x-5 items-center bg-white rounded-lg shadow-md hover:translate-x-1 transition duration-200 pr-5">
                    <div>
                      <img src="{{ asset('/storage/berita/'.$data->gambar) }}" class=" w-32 lg:w-44 rounded-l-lg" alt="">
                    </div>
                    <div>
                      <h3 class="text-sm font-bold font-roboto">{{ $data->judul}}</h3>
                      <div class=" truncate text-xs sm:text-sm md:text-base mt-1">
                          {!! Str::limit(strip_tags($data->isi), $limit = 35, $end = '...') !!}
                        </div>
                    </div>
                  </a>
                  @endforeach
              </div>
          
          @else
  
            <div>
              <div class="bg-white border border-gray-200 rounded-lg shadow" data-aos="fade-up" data-aos-delay="600" data-aos-ease="ease-in-out" data-aos-duration="400">
                <div class=" cursor-not-allowed">
                  <div href="#">
                    <img class="rounded-t-lg" src="{{asset('img/image-not-available-.jpg')}}" alt="" />
                  </div>
                  <div class="p-5 font-montserrat">
                    <div href="#">
                      <h5 class="mb-1 text-sm sm:text-base md:text-lg font-bold tracking-tight text-gray-900">
                        Berita Tidak Tersedia
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          @endif
        </div>

      </div>

      {{-- TODO : Buat layout berita menjadi lebih rapi tanpa menggunakan carousel --}}
      {{-- ? : Layout model 1 berita terbaru ditampilkan full, sedangkan berita yang sudah berlalu akan ditampilkan dalam row yang berada disamping berita 1 --}}

      
      <div class="text-center pb-8 md:pb-3 mt-20" data-aos="fade-up" data-aos-delay="100" data-aos-duration="400" data-aos-ease="ease-in-out">

        {{-- * Header ToolTip --}}
        <h1 class="font-semibold font-montserrat text-sm md:text-base lg:text-xl uppercase mb-2 text-gray-900 inline-flex items-center cursor-default"data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom">
          Jadwal Penerbangan
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 ml-2 h-5">
            <path
              fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
              clip-rule="evenodd"
            />
          </svg>
        </h1>

        {{-- * Tooltip --}}
        <div id="tooltip-bottom" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs md:text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg shadow-sm opacity-0 tooltip dark:bg-slate-600 dark:text-gray-100 w-1/2 md:w-fit">
          Jam Penerbangan Bisa Berubah Sewaktu-waktu
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>

      {{-- jadwal penerbangan normal --}}
        <div class=" py-3 px-4 mx-auto max-w-screen-xl">

          {{-- jadwal keberangkatan --}}
            <div class="relative overflow-x-auto overflow-y-hidden">
                <table class=" w-full text-sm text-left bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-ease="ease-in-out">
                  {{-- caption --}}
                  <caption class="pt-2 text-right">
                    <div class="pb-6 flex justify-between items-center">
                      <div class="text-sm md:text-base">
                        <h2 class="font-montserrat font-semibold uppercase inline-flex items-center cursor-default">
                          Jadwal keberangkatan
                        </h2>
                      </div>
                      <div class="text-sm md:text-base">
                        <p class="font-montserrat hidden sm:block">
                          {{now()->isoFormat('dddd, D MMMM Y')}}
                        </p>
                        <p class="font-montserrat clock hidden sm:block"></p>
                      </div>
                    </div>
                  </caption>
                  {{-- table head --}}
                  <thead class="text-xs font-montserrat sm:text-sm text-center text-gray-50 uppercase bg-gradient-to-r from-indigo-600 to-blue-500">
                    <tr>
                      <th scope="col" class="px-6 py-3">
                        maskapai
                      </th>
                      <th scope="col" class="px-6 py-3">
                        id Penerbangan
                      </th>
                      <th scope="col" class="px-6 py-3">
                        tujuan
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Jam Penerbangan
                      </th>
                    </tr>
                  </thead>
                  <tbody id="scheduleData" class="text-center font-roboto">
                    @foreach ($keberangkatan as $data)
                      @php
                      $hari = now()->isoFormat('dddd');
                      @endphp
            
                      @if ($data->id_penerbangan != 'GA-291' || in_array($hari, ['Senin', 'Rabu', 'Jumat', 'Sabtu', 'Minggu']))  
                      <tr>
                        <td class="px-4 lg:px-0 py-2 text-center hidden md:block">
                          <img src="{{asset('/storage/logo/'.$data->logo_maskapai)}}" style="width: 120px" alt="{{$data->maskapai}}" class="mx-auto">
                        </td>
                        <td class="px-4 py-6 text-xs md:text-sm block md:hidden">
                          {{ $data->maskapai }}
                        </td>
                        <td class="px-6 py-4 text-xs md:text-sm">
                          {{ $data->id_penerbangan }}
                        </td>
                        <td class="px-6 py-4 text-xs md:text-sm">
                          {{ $data->tujuan }}
                        </td>
                        <td class="px-6 py-4 text-xs md:text-sm">
                          @php 
                            $jam = $data->jam; 
                            $carbon = \Carbon\Carbon::parse($jam); 
                            $formatted = $carbon->isoFormat('HH:m');
                          @endphp
                            {{$formatted }}
                        </td>
                      </tr>
                      @endif
                    @endforeach
                  </tbody>
                </table>
            </div>

            {{-- jadwal kedatangan --}}
            <div class="relative overflow-x-auto overflow-y-hidden">
              <table class=" w-full mt-14 text-sm text-left bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-ease="ease-in-out">
                {{-- caption --}}
                <caption class="pt-2 text-right">
                  <div class="pb-6 flex justify-between items-center">
                    <div class="text-sm md:text-base">
                      <h2 class="font-montserrat font-semibold uppercase inline-flex items-center cursor-default">
                        Jadwal Kedatangan
                      </h2>
                    </div>
                    <div class="text-sm md:text-base">
                      <p class="font-montserrat hidden sm:block">
                        {{now()->isoFormat('dddd, D MMMM Y')}}
                      </p>
                      <p class="font-montserrat clock hidden sm:block"></p>
                    </div>
                  </div>
                </caption>
                {{-- table head --}}
                <thead class="text-xs font-montserrat sm:text-sm text-center text-gray-50 uppercase bg-gradient-to-r from-indigo-600 to-blue-500">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      id Penerbangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Dari
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jam Penerbangan
                    </th>
                  </tr>
                </thead>
                <tbody id="scheduleData" class="text-center font-roboto">
                  @foreach ($kedatangan as $data)
                    @php
                    $hari = now()->isoFormat('dddd');
                    @endphp
          
                    @if ($data->id_penerbangan != 'GA-290' || in_array($hari, ['Senin', 'Rabu', 'Jumat', 'Sabtu', 'Minggu']))  
                    <tr>
                      <td class="px-4 lg:px-0 py-2 text-center hidden md:block">
                        <img src="{{asset('/storage/logo/'.$data->logo_maskapai)}}" style="width: 120px" alt="{{$data->maskapai}}" class="mx-auto">
                      </td>
                      <td class="px-4 py-6 text-xs md:text-sm block md:hidden">
                        {{ $data->maskapai }}
                      </td>
                      <td class="px-6 py-4 text-xs md:text-sm">
                        {{ $data->id_penerbangan }}
                      </td>
                      <td class="px-6 py-4 text-xs md:text-sm">
                        {{ $data->tujuan }}
                      </td>
                      <td class="px-6 py-4 text-xs md:text-sm">
                        @php 
                          $jam = $data->jam; 
                          $carbon = \Carbon\Carbon::parse($jam); 
                          $formatted = $carbon->isoFormat('HH:m');
                        @endphp
                        {{$formatted }}
                      </td>
                    </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>

        </div>  
    </section>

@endsection
