<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Perangkat</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   {{-- tailwind css using vite --}}
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  
  {{-- sidebar & navbar --}}
  <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900">
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
            <span class="self-center text-lg uppercase font-roboto font-semibold sm:text-xl text-gray-100 whitespace-nowrap">Perangkat - CCTV</span>
          </a>
        </div>
        <div class="flex items-center">
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
                    <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-indigo-800 border-r-4 border-indigo-900" aria-label="Sidebar">
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
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150 cursor-pointer" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-100  group-hover:text-gray-900">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
              </svg>              
              <span class="ml-3">Perangkat</span>
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
          
          @if (auth()->user()->position == 'Informasi' || auth()->user()->position == 'Kepala Seksi Teknik')
            <li>
              <a href="#" class="flex items-center p-2 text-gray-100 rounded-lg hover:text-gray-900 hover:bg-gray-100 group transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                  <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                </svg>                
                <span class="flex-1 ml-3 whitespace-nowrap">Schedule</span>
              </a>
            </li>
          @endif
          <li>
              <a href="#" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
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

  <div class="py-7 mt-6 sm:mt-4 px-5 sm:ml-64"> 
    <section class="bg-white">
      <div class="pt-10 pb-6 px-4 mx-auto max-w-screen-xl lg:pt-16 lg:pb-0">
          <div class="bg-gray-50 border border-gray-100 rounded-lg shadow-lg p-8 md:p-12 mb-8">
              <!-- Breadcrumb -->
              <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 shadow-sm" aria-label="Breadcrumb">
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
                      <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2">List CCTV</span>
                    </div>
                  </li>
                </ol>
              </nav>
              <h1 class="text-gray-900 mt-8 text-xl uppercase md:text-2xl font-roboto font-bold mb-4">
                List Perangkat CCTV
              </h1>
              <p class="text-lg font-normal font-montserrat text-gray-500 mb-3">
                Tabel perangkat ini akan menampilkan data dari nama perangkat CCTV. Nama perangkat dapat diubah dan dihapus
              </p>

              {{-- Menu opsi --}}
              <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
                  {{-- add data --}}
                  <div>
                    <button type="button" data-modal-target="create-modal" data-modal-toggle="create-modal" class="px-5 py-3 text-base font-medium text-center inline-flex items-center text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" />
                      </svg>                                          
                      Tambah 
                    </button>
                  </div>
              </div>

          </div>
      </div>

      <div class="px-4 py-4 mx-auto max-w-screen-xl">
        <div class="relative overflow-x-auto shadow-lg bg-gray-50 sm:rounded-lg p-4">
          <table class="w-full text-sm text-left">
              <caption class="p-5 text-lg font-semibold text-left text-gray-900 font-montserrat">
                <span class="uppercase">Tabel pengecekan</span>
                  <p class=" font-normal mt-1 text-sm">
                  </p>
              </caption>
              <thead class="text-xs text-gray-100 uppercase bg-indigo-800 text-center font-roboto">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          No
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Nama Perangkat
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Aksi
                      </th>
                  </tr>
              </thead>
              @php
                  $no = 1;
              @endphp
              <tbody class=" font-roboto text-center">
                  @foreach ($list as $data)
                      <tr>
                        <td class="px-6 py-4">
                          {{$no++}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->name}}
                        </td>
                        <td class="px-6 py-4">
                          <div class="inline-flex rounded-md shadow-md" role="group">
                            <a href="" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 bg-indigo-800 rounded-l-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                                <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                              </svg>                                                          
                              Edit
                            </a>
                            <button type="button" ata-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 bg-indigo-800 rounded-r-md hover:bg-gray-100 hover:text-red-800 focus:z-10 focus:ring-2 focus:ring-red-800 focus:bg-gray-100 focus:text-red-800 transition duration-200">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1 h-5">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                              </svg>                                                                                        
                              Delete
                            </button>
                          </div>
                        </td>
                      </tr>
                      <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full font-roboto">
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <form action="{{route('list.cctv.destroy', $data->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                          Delete
                                      </button>
                                    </form>
                                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batalkan</button>
                                </div>
                            </div>
                        </div>
                      </div>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  {{-- Create Data Modal--}}
  <div id="create-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8 font-montserrat">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Tambah Data</h3>
                <form class="space-y-6" action="{{route('list.cctv.store')}}" method="POST">
                  @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama CCTV</label>
                        <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "required>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
                </form>
            </div>
        </div>
    </div>

</div> 
</body>
</html>