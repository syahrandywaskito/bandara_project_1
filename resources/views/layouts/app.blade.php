<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon" />
    <title>
      @yield('title', 'Dashboard')
    </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="{{asset('js/onPageLoad.js')}}"></script>
    {{-- tailwind css using vite --}} 
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body>
    {{-- navbar & sidebar --}}
    <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900 dark:bg-indigo-950 dark:border-slate-900">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button
              data-drawer-target="logo-sidebar"
              data-drawer-toggle="logo-sidebar"
              aria-controls="logo-sidebar"
              type="button"
              class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            >
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                ></path>
              </svg>
            </button>
            <a href="{{URL::current()}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center uppercase font-roboto font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 whitespace-nowrap">
                @yield('navbar-header', 'Dashboard')
              </span>
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

    @yield('content')

    {{-- Aos Init --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

  </body>
</html>