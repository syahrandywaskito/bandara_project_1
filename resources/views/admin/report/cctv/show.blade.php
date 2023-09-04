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
          <a href="{{route('cctv.index')}}" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-lg font-roboto font-semibold sm:text-xl text-gray-100 uppercase whitespace-nowrap">CCTV - Lihat data</span>
          </a>
        </div>
        <div class="flex items-center">
            {{-- Dark toggle --}}
            <div>
              <button id="theme-toggle" type="button" class="text-gray-100 hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm p-2.5 transition duration-200">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
              </button>
            </div>
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-white rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 p-1 rounded-full" src="{{asset('img/user.png')}}" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-gray-100 divide-y divide-gray-100 rounded shadow-md" id="dropdown-user">
                <div class="px-4 py-3 font-roboto" role="none">
                  <p class="text-sm text-gray-900" role="none">
                    {{auth()->user()->name}}
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate" role="none">
                    {{auth()->user()->email}}
                  </p>
                </div>
                <ul class="py-1 font-roboto" role="none">
                  <li>
                    <a href="{{route('dashboard')}}" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Earnings</a>
                  </li>
                  <li>
                    <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>

  @include('components.dashboard.sidebar')

  <div class="py-7 px-5 sm:ml-64">  
    <div class="bg-white dark:bg-slate-900">
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
                  <a href="{{URL::previous()}}" class="ml-1 text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">CCTV</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2">Show</span>
                </div>
              </li>
            </ol>
          </nav>

          <div class="text-center mt-8 font-montserrat">
            <h1 class="text-gray-900 dark:text-gray-200 lg:px-2 text-lg md:text-xl font-bold uppercase">
              Lihat  
            </h1>
            <p class="text-sm uppercase dark:text-gray-200">{{ $cctv->hardware_name }}</p>
          </div>

          <div class="lg:px-2 dark:text-gray-200 font-montserrat mt-8 flex justify-between">
            <div>
              <h3>Tanggal data dibuat</h3>
              <p>
                {{$day}}, {{$date}}
              </p>
            </div>
            <div class="text-end">
              <h3>Tanggal sebenarnya</h3>
              <p>
                {{now()->format('l')}}, {{now()->format('d M Y')}}
              </p>
            </div>
          </div>

          <hr class="h-px my-4 bg-gray-400 border-0">

          <div class="sm:text-center sm:flex sm:justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-60 lg:gap-y-10 dark:text-gray-200">
              <div>
                <div class="font-montserrat mt-6 lg:px-2 ">
                  <p class="text-sm uppercase font-semibold">Kondisi Rekaman</p>
                  <p class="pt-2">
                    <span
                      @if ($cctv->record_status == 'T')
                        class="text-gray-50 bg-black py-1 px-2 rounded-l-lg inline-block"
                      @elseif($cctv->record_status == 'S')
                        class="text-gray-50 bg-red-700 py-1 px-2 rounded-l-lg inline-block"
                      @else
                        class="text-gray-50 bg-green-700  py-1 px-2 rounded-l-lg inline-block"
                      @endif
                    >
                      {{ $cctv->record_status}}
                    </span>
                      : {{ $cctv->record_desc}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Kondisi kebersihan</p>
                  <p class="pt-2">
                    <span
                    @if ($cctv->clean_status == 'T')
                      class="text-gray-50 bg-black py-1 px-2 rounded-l-lg inline-block"
                    @elseif($cctv->clean_status == 'S')
                      class="text-gray-50 bg-red-700 py-1 px-2 rounded-l-lg inline-block"
                    @else
                      class="text-gray-50 bg-green-700  py-1 px-2 rounded-l-lg inline-block"
                    @endif
                    >
                      {{ $cctv->clean_status}}
                    </span>
                      : {{ $cctv->clean_desc}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Ditambahkan pada</p>
                  <p class="pt-2">
                    {{ $cctv->created_at->format('d M Y | H:m:s')}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Diubah pada</p>
                  <p class="pt-2">
                    {{ $cctv->updated_at->format('d M Y | H:m:s')}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Ditambahkan Oleh</p>
                  <p class="pt-2">
                    {{ $cctv->created_by}}
                  </p>
                </div>
              </div>
              <div>
                <div class="font-montserrat mt-6 lg:px-2">
                  <p class="text-sm uppercase font-semibold">Diubah Oleh</p>
                  <p class="pt-2">
                    {{ $cctv->updated_by}}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('js/darkToggle.js')}}"></script>
</body>
</html>