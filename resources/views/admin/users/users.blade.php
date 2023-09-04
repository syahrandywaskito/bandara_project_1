<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Pengguna</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
          <a href="{{route('users.index')}}" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-lg font-roboto uppercase font-semibold sm:text-xl text-gray-100 whitespace-nowrap">Halaman pengguna</span>
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
                  <p class="text-sm text-gray-900" role="none">
                    {{auth()->user()->position}}
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
                    <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-indigo-800 border-r-4 border-indigo-900 dark:bg-indigo-950 dark:border-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium font-roboto">
          <li>
              <a href="{{route('dashboard')}}" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150">
                <svg class="w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ml-3">Dashboard</span>
              </a>
          </li>
          <li>
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150 cursor-pointer" type="button">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
              </svg>
              <span class="ml-3">Laporan</span>
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </a>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow-md w-44">
              <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="{{route('cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                </li>
                <li>
                  <a href="" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                </li>
                <li>
                  <a href="{{route('fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li>
            <a id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150 cursor-pointer" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-100  group-hover:text-gray-900">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
              </svg>              
              <span class="ml-3">Perangkat</span>
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </a>
            <!-- Dropdown menu -->
            <div id="dropdown2" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow-md w-44">
              <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="{{route('list.cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                </li>
                <li>
                  <a href="" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                </li>
                <li>
                  <a href="{{route('list.fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                </li>
              </ul>
            </div>
          </li>
          
          @if (auth()->user()->position == 'Informasi' || auth()->user()->position == 'Kepala Seksi Teknik')
            <li>
              <a href="#" class="flex items-center p-2 text-gray-100 rounded-lg hover:text-gray-900 hover:bg-gray-100 group transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                  <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                </svg>                
                <span class="flex-1 ml-3 whitespace-nowrap">Jadwal</span>
              </a>
            </li>
          @endif
          <li>
              <a href="{{route('users.index')}}" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Pengguna</span>
              </a>
          </li>
          <li>
              <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-100 rounded-lg hover:text-gray-900 hover:bg-gray-100 group transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>                
                <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
              </a>
          </li>
        </ul>
    </div>
  </aside>

  {{-- content --}}
  <div class="py-7 mt-6 sm:mt-4 px-5 sm:ml-64"> 
    <section class="bg-white dark:bg-slate-900">
      <div class="pt-10 pb-6 px-4 mx-auto max-w-screen-xl lg:pt-16 lg:pb-0">
          <div class="bg-gray-50 border border-gray-100 dark:bg-indigo-950 dark:border-0 rounded-lg shadow-lg p-8 md:p-12 mb-8">
              <!-- Breadcrumb -->
              <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 dark:text-gray-100 shadow-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                  <li class="inline-flex items-center">
                    <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-indigo-600">
                      <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                      </svg>
                      Dashboard
                    </a>
                  </li>
                  <li aria-current="page">
                    <div class="flex items-center">
                      <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2">Halaman Pengguna</span>
                    </div>
                  </li>
                </ol>
              </nav>
              <h1 class="text-gray-900 mt-8 dark:text-gray-200 text-xl md:text-2xl font-roboto font-bold mb-4 uppercase">
                Halaman Informasi pengguna
              </h1>
              <p class="text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
                Halaman ini berisi tabel untuk user yang melakukan sign up atau registrasi untuk menjadi admin
              </p>

              {{-- Menu opsi --}}
              <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
                <div>
                  <form>
                    <div class="flex">
                        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">
                          Your Email
                        </label>
                        <button id="dropdown-button" data-dropdown-toggle="dropdown-search" class="flex-shrink-0 z-10 inline-flex items-center py-3 px-4 text-sm font-medium font-montserrat text-center text-gray-900 bg-gray-100 border-2 border-gray-400 rounded-l-lg hover:bg-gray-200 focus:border-indigo-800 outline-none dark:border-gray-100" type="button">
                          All categories 
                          <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg>
                        </button>
                        <div id="dropdown-search" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700 font-montserrat" aria-labelledby="dropdown-button">
                              <li>
                                  <button type="button" class="inline-flex w-full px-4 py-2 hover:translate-x-1 transition duration-200">Hardware Name</button>
                              </li>
                              <li>
                                  <button type="button" class="inline-flex w-full px-4 py-2 hover:translate-x-1 transition duration-200">Record Status</button>
                              </li>
                              <li>
                                  <button type="button" class="inline-flex w-full px-4 py-2 hover:translate-x-1 transition duration-200">Record Description</button>
                              </li>
                              <li>
                                  <button type="button" class="inline-flex w-full px-4 py-2 hover:translate-x-1 transition duration-200">Clean Status</button>
                              </li>
                              <li>
                                  <button type="button" class="inline-flex w-full px-4 py-2 hover:translate-x-1 transition duration-200">Clean Description</button>
                              </li>
                            </ul>
                        </div>
                        <div class="relative w-full font-montserrat">
                            <input type="search" id="search-dropdown" class="block p-3.5 w-full z-20 text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-r-lg outline-none  focus:border-indigo-800 dark:border-gray-100" placeholder="search" required>

                            <button type="submit" class="absolute top-0 right-0 p-3 text-sm font-medium h-full text-gray-50 bg-indigo-800 rounded-r-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 focus:outline-none dark:bg-gray-50 dark:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200 dark:hover:ring-1 dark:hover:ring-indigo-900">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
      </div>

      <div class="px-4 py-4 mx-auto max-w-screen-xl">
        <div class="relative overflow-x-auto shadow-lg bg-gray-50 dark:bg-indigo-950 dark:border-0 sm:rounded-lg p-4">
          <table class="w-full text-sm text-left">
              <caption class="p-5 text-lg font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                <span class="uppercase">Tabel Data</span>
                  <p class=" font-normal mt-1 text-sm">
                    {{now()->format('l')}}, 
                    {{now()->format('d M Y')}}
                  </p>
              </caption>
              <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          Nama Lengkap
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Email
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Jabatan
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Aksi
                      </th>
                  </tr>
              </thead>
              <tbody class=" font-roboto text-center dark:text-gray-200">
                  @foreach ($users as $user)
                      <tr>
                        <td class="px-6 py-4">
                          {{$user->name}}
                        </td>
                        <td class="px-6 py-4">
                          {{$user->email}}
                        </td>
                        <td class="px-6 py-4">
                          {{$user->position}}
                        </td>
                        <td class="px-6 py-4">
                          <form onsubmit="return confirm('Anda ingin mengahapus user ini ?')" action="{{route('users.destroy', $user->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="inline-flex rounded-md shadow-md" role="group">
                              <button type="button" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 bg-indigo-800 rounded-l-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                                  <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                  <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>                                                          
                                Edit
                              </button>
                              <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 bg-indigo-800 rounded-r-md hover:bg-gray-100 hover:text-red-800 focus:z-10 focus:ring-2 focus:ring-red-800 focus:bg-gray-100 focus:text-red-800 dark:bg-gray-100 dark:text-red-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1 h-5">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                                </svg>                                                                                        
                                Delete
                              </button>
                            </div>
                          </form>
                        </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

   {{-- notif --}}
   @if ($message = Session::get('success'))
   <dir class="fixed top-28 right-10" data-aos="fade-left">
     <div id="alert-3" class="flex items-center shadow-md p-4 mb-4 text-green-800 rounded-lg bg-green-50 font-montserrat" role="alert">
       <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
         <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
       </svg>
       <div class="mx-4 text-sm font-medium">
         {{ $message }}
       </div>
       <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
         <span class="sr-only">Close</span>
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
         </svg>
       </button>
     </div>
   </dir>
   @endif
 
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
     AOS.init();
   </script>
 
   <script src="{{asset('js/darkToggle.js')}}"></script>
  
</body>
</html>