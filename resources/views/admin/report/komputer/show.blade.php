<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Laporan</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{asset('js/onPageLoad.js')}}"></script>
   {{-- tailwind css using vite --}}
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="dark:bg-slate-900">
  
  {{-- sidebar & navbar --}}
  <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900 dark:bg-indigo-950 dark:border-slate-900">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg sm:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
          </button>
          <a href="{{route('komputer.index')}}" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-lg font-roboto font-semibold sm:text-xl uppercase text-gray-100 whitespace-nowrap">Komputer - Lihat data</span>
          </a>
        </div>
        <div class="flex items-center">
            
            {{-- Dark toggle --}}
            @include('components.dashboard.darktoggle')
            
            {{-- User Profile Menu --}}
            @include('components.dashboard.userprofile')
          </div>
      </div>
    </div>
  </nav>

  @include('components.dashboard.sidebar')

  <div class="py-7 px-5 sm:ml-64">  
    <section class="bg-white dark:bg-slate-900">
      <div class="py-16 px-4 mx-auto max-w-screen-xl text-start lg:py-16">
        <div class="bg-gray-50 border border-gray-100 dark:bg-indigo-950 dark:border-0 rounded-lg shadow-md p-8 md:p-8 mb-8"> 

          <!-- Breadcrumb -->
          <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 dark:bg-gray-100 shadow-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
              <li class="inline-flex items-center">
                <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-indigo-600">
                  <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Dashboard
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="{{URL::previous()}}" class="ml-1 text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">komputer</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2">Lihat Data</span>
                </div>
              </li>
            </ol>
          </nav>

          <div class="text-center mt-8 font-montserrat">
            <h1 class="text-gray-900 dark:text-gray-200 lg:px-2 text-lg md:text-xl font-bold uppercase">
              Lihat  
            </h1>
            <p class="text-sm uppercase dark:text-gray-200">{{ $komputer->computer_name }}</p>
          </div>

          <div class="lg:px-2 font-montserrat mt-8 flex dark:text-gray-200 justify-between">
            <div>
              <h3>Tanggal data dibuat</h3>
              <p>
                {{$day}}, {{$date}}
              </p>
            </div>
            <div class="text-end">
              <h3>Tanggal sekarang</h3>
              <p>
                {{now()->isoFormat('dddd')}}, {{now()->isoFormat('D MMMM Y')}}
              </p>
            </div>
          </div>

          <hr class="h-px my-4 bg-gray-400 border-0">

          <div class="sm:text-center sm:flex sm:justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-60 lg:gap-y-10 dark:text-gray-200">
              <div>
                <div class="font-montserrat mt-6 lg:px-2 ">
                  <p class="text-sm uppercase font-semibold">Kondisi Menyala / Mati</p>
                  <p class="pt-2">
                    <span
                      @if ($komputer->on_off_condition == 'mati')
                        class="text-gray-50 bg-red-700 py-1 px-2 rounded-l-lg inline-block"
                      @else
                        class="text-gray-50 bg-green-700  py-1 px-2 rounded-l-lg inline-block"
                      @endif
                    >
                      {{ $komputer->on_off_condition}}
                    </span>
                      : {{ $komputer->on_off_desc}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2 ">
                  <p class="text-sm uppercase font-semibold">Pembersihan File</p>
                  <p class="pt-2">
                    <span
                      @if ($komputer->clean_file_status == 'tidak hapus')
                        class="text-gray-50 bg-gray-700 py-1 px-2 rounded-l-lg inline-block"
                      @else
                        class="text-gray-50 bg-green-700  py-1 px-2 rounded-l-lg inline-block"
                      @endif
                    >
                      {{ $komputer->clean_file_status}}
                    </span>
                      : {{ $komputer->clean_file_desc}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Aplikasi di Uninstall</p>
                  <p class="pt-2">
                      {{ $komputer->uninstalled_app}} : {{ $komputer->uninstalled_app_desc}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Ditambahkan pada</p>
                  <p class="pt-2">
                    {{ $komputer->created_at->format('d M Y | H:m:s')}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Diubah pada</p>
                  <p class="pt-2">
                    {{ $komputer->updated_at->format('d M Y | H:m:s')}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Ditambahkan Oleh</p>
                  <p class="pt-2">
                    {{ $komputer->created_by}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Diubah Oleh</p>
                  <p class="pt-2">
                    {{ $komputer->updated_by}}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="{{asset('js/darkToggle.js')}}"></script>

</body>
</html>