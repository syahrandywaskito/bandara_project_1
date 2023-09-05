<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Laporan</title>

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
          <a href="{{route('komputer.index')}}" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-lg font-roboto font-semibold sm:text-xl text-gray-100 whitespace-nowrap uppercase">Laporan - Komputer</span>
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

  @include('components.dashboard.sidebar');

  <section class="py-7 px-5 sm:ml-64">
    <div class="bg-white dark:bg-slate-900">
      <div class="pt-10 pb-6 px-4 mx-auto max-w-screen-xl lg:pt-16 lg:pb-0">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg p-8 md:p-12 mb-8">
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
                  <li aria-current="page">
                    <div class="flex items-center">
                      <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2">Komputer</span>
                    </div>
                  </li>
                </ol>
              </nav>

              <h1 class="text-gray-900 dark:text-gray-200 mt-8 text-xl uppercase md:text-2xl font-roboto font-bold mb-4">
                Laporan pengecekan Komputer
              </h1>
              <p class="text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
                Tabel laporan ini akan menampilkan hasil input dari pengecekan yang telah dilakukan sebelumnya. Tabel ini dapat diubah sesuai dengan tanggal data pengecekan
              </p>

              {{-- Menu opsi --}}
              <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
                  {{-- add data --}}
                  <div>
                    <a href="{{route('komputer.create')}}" class="px-5 py-3.5 text-base font-medium text-center inline-flex items-center text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200 dark:bg-gray-100 dark:text-green-700 dark:hover:bg-indigo-900 dark:hover:text-gray-100 dark:border-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" />
                      </svg>                                          
                      Tambah 
                    </a>
                  </div>
                  {{-- Search --}}
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
                  {{-- Select date --}}
                  <div class=" flex-initial w-60">
                    <form class="flex items-center" method="get" action="{{route('komputer.index')}}"> 
                      @csrf  
                      <label for="date" class="sr-only">Search</label>
                      <div class="relative w-full">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                            </svg>                                         
                          </div>
                          <input type="date" id="date" name="selected_date" class="z-20 text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 block w-full pl-10 p-3" required>
                      </div>
                      <button type="submit" class="p-4 ml-2 text-sm font-medium text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 focus:outline-none dark:bg-gray-100 dark:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-gray-100 dark:hover:border-indigo-900 dark:border-gray-100 transition duration-200">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                          </svg>
                          <span class="sr-only">Search</span>
                      </button>
                    </form>
                  </div>
              </div>

          </div>
      </div>
      <div class="px-4 py-4 mx-auto max-w-screen-xl">
        <div class="relative overflow-x-auto shadow-lg bg-gray-50 dark:bg-indigo-950 sm:rounded-lg p-4">
          <table class="w-full text-sm text-left">
              <caption class="p-5 text-lg font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                <span class="uppercase">Tabel pengecekan</span>
                  <p class=" font-normal mt-1 text-sm">
                     {{$day}}, {{ $date}}
                  </p>
              </caption>
              <thead class="text-xs text-gray-100  uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
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
                      <th scope="col" class="px-6 py-3">
                          Keterangan pembersihan file
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Aksi
                      </th>
                  </tr>
              </thead>
              <tbody class=" font-roboto text-center dark:text-gray-200">
                  @foreach ($komputer as $data)
                      <tr>
                        <td class="px-6 py-4">
                          {{$data->computer_name}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->on_off_condition}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->on_off_desc}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->uninstalled_app}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->uninstalled_app_desc}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->clean_file_status}}
                        </td>
                        <td class="px-6 py-4">
                          {{$data->clean_file_desc}}
                        </td>
                        <td class="px-6 py-4">
                          <form onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')" action="{{route('komputer.destroy', $data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="inline-flex rounded-md shadow-md" role="group">
                              <a href="{{route('komputer.edit', $data->id)}}" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 bg-indigo-800 rounded-l-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                                  <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                  <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>                                                          
                                Edit
                              </a>
                              <a href="{{route('komputer.show', $data->id)}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-50 bg-indigo-800 hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                                  <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                  <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>                              
                                Lihat
                              </a>
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
    </div>
  </section>

  {{-- success notif --}}
  @include('components.dashboard.successnotif')

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="{{asset('js/darkToggle.js')}}"></script>
</body>
</html>