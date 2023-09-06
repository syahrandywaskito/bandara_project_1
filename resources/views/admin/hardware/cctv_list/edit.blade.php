<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Admin - Perangkat</title>

  {{-- tailwind css using vite --}}
  <script src="{{asset('js/onPageLoad.js')}}"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-edit-light dark:bg-edit-dark bg-cover bg-bottom overflow-hidden">

  {{-- Back Button --}}

    <div class="md:fixed sm:left-8 sm:mt-0 mt-5 top-10 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 md:px-0">
      <a href="{{URL::previous()}}" class="flex items-center text-gray-100 hover:bg-indigo-900 dark:hover:text-indigo-950 dark:hover:bg-gray-100 hover:shadow-md hover:text-gray-50 rounded-lg transition duration-300 font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" stroke-width="10" />
        </svg>                    
        <span class="self-center text-md md:text-md font-roboto uppercase whitespace-nowrap pl-2 pr-3 py-2">Kembali</span>
      </a>
    </div>

    <div class="md:fixed right-8 sm:mt-0 mt-5 top-10 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 md:px-0">
      <div class="flex items-center">

        {{-- Dark toggle --}}
        @include('components.dashboard.darktoggle')
        
        {{-- User Profile Menu --}}
        @include('components.dashboard.userprofile')
    </div>
    </div>


  {{-- Login Form --}}
  <section class=" mt-12 sm:my-0 h-screen">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{URL::previous()}}" class="flex items-center mb-6 text-2xl font-bold font-montserrat text-gray-100 uppercase" data-aos="fade-down" data-aos-duration="500" data-aos-delay="100">
            Ubah Data   
        </a>
        <div class="w-full bg-gray-50 dark:bg-indigo-950 bg-opacity-60 rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 font-roboto" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <form class="space-y-4 md:space-y-6" action="{{route('list.cctv.update', $cctv_list->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nama Perangkat</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border-2 border-gray-100 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none" value="{{$cctv_list->name}}">
                    </div>
                    <button type="submit" class="w-full text-gray-100 font-montserrat bg-gradient-to-r from-indigo-600 to-blue-500 hover:-translate-y-1 hover:scale-105 transition duration-300 focus:ring-4 focus:outline-none font-semibold rounded-lg text-sm px-5 py-2.5 text-center shadow-md dark:from-indigo-800 dark:to-indigo-900">
                      Ubah
                    </button>
                </form>
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