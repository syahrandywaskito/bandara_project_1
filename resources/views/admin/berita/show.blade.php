<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Admin - Berita</title>

    {{-- off animation on mobile view --}}
    <style>
      @media only screen and (max-width: 768px) {
        [data-aos] {
          opacity: 1 !important;
          transform: none !important;
        }
      }
    </style>
    {{-- tailwind css using vite --}}
    <script src="{{asset('js/onPageLoad.js')}}"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="bg-gradient-to-b from-indigo-200 to-indigo-700 dark:bg-gradient-to-b dark:from-indigo-900 dark:to-slate-900 h-full overflow-auto">

    <div class="flex justify-between items-center mt-10">
      {{-- Back Button --}}
      <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 md:px-0">
        <a href="{{URL::previous()}}" class="flex items-center text-gray-900 hover:bg-indigo-900 dark:hover:text-indigo-950 dark:hover:bg-gray-100 hover:shadow-md hover:text-gray-50 rounded-lg transition duration-300 font-semibold dark:text-gray-50">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" stroke-width="10" />
          </svg>
          <span class="self-center text-sm md:text-base font-roboto uppercase whitespace-nowrap pl-2 pr-3 py-2">Kembali</span>
        </a>
      </div>
  
      {{-- menu --}}
      <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 md:px-0">
        <div class="flex items-center">
          {{-- Dark toggle --}} 
          @include('components.dashboard.darktoggle') 
          {{-- User Profile Menu --}} 
          @include('components.dashboard.userprofile')
        </div>
      </div>
    </div>

    {{-- Login Form --}}
    <section class="mt-12 sm:my-5">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-autolg:py-0">
        <a href="{{URL::previous()}}" class="flex items-center mb-6 text-base md:text-lg lg:text-xl font-bold font-montserrat text-gray-900 dark:text-gray-50 uppercase" data-aos="fade-up" data-aos-duration="200" data-aos-delay="50">
          Tampilan Berita
        </a>
        <div class="w-full bg-gray-50 dark:bg-transparent bg-opacity-60 rounded-lg shadow-lg md:mt-0 sm:w-[70%] xl:p-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="100">
          <div class="p-6 space-y-4 md:space-y-8 sm:p-8 font-roboto" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">
            <div class="flex justify-center">
              <img src="{{asset('storage/berita/'.$berita->gambar)}}" alt="" style="width: 500px" class="rounded-lg shadow-lg">
            </div>
            <div>
              <h2 class="text-center uppercase font-semibold dark:text-gray-50">{{$berita->judul}}</h2>
            </div>
            <hr class="border-gray-900 dark:border-gray-50">
              @php
                  $customClass = 'dark:text-gray-50 text-sm md:text-base';
              @endphp
            <div  class="{{$customClass}}">
              {!!$berita->isi!!}
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- js script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="{{asset('js/darkToggle.js')}}"></script>
  </body>
</html>
