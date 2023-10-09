<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon" />
    <title>Admin - Laporan</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/onPageLoad.js')}}"></script>
    {{-- tailwind css using vite --}} @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="dark:bg-slate-900 bg-white">
    {{-- Navbar Part --}}
    <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900 dark:bg-indigo-950 dark:border-slate-900">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button
              data-drawer-target="logo-sidebar"
              data-drawer-toggle="logo-sidebar"
              aria-controls="logo-sidebar"
              type="button"
              class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg sm:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            >
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                ></path>
              </svg>
            </button>
            <a href="{{URL::current()}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center font-roboto font-semibold hidden sm:block sm:text-base md:text-lg xl:text-xl text-gray-100 uppercase whitespace-nowrap">Komputer - Ubah data</span>
            </a>
          </div>
          <div class="flex items-center">
            {{-- Dark toggle --}} @include('components.dashboard.darktoggle') {{-- User Profile Menu --}} @include('components.dashboard.userprofile')
          </div>
        </div>
      </div>
    </nav>

    {{-- Sidebar Part --}} @include('components.dashboard.sidebar') {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <section class="bg-white dark:bg-slate-900">
        <div class="py-16 px-4 mx-auto max-w-screen-xl text-start lg:py-16">
          <div class="bg-gray-50 border border-gray-100 dark:bg-indigo-950 dark:border-0 rounded-lg shadow-md px-5 py-8 sm:p-8 md:p-12 md:mb-8">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 dark:bg-gray-100 shadow-sm" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                <li class="inline-flex items-center">
                  <a href="{{route('dashboard')}}" class="inline-flex items-center text-xs md:text-sm font-medium text-gray-700 hover:text-indigo-600">
                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                      />
                    </svg>
                    Dashboard
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">Komputer</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium text-gray-700 md:ml-2">Edit</span>
                  </div>
                </li>
              </ol>
            </nav>

            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 lg:px-2 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
              </svg>              
              Halaman Ubah data
            </h1>
            <div class="text-xs md:text-sm font-montserrat lg:px-2 pt-3 dark:text-gray-200">
              <h3>Tanggal data</h3>
              <p>
                {{$date}}
              </p>
            </div>
            <form class="font-montserrat lg:px-2 mt-6" action="{{route('komputer.update', $komputer->id)}}" method="POST">
              @csrf @method('PUT')

              <div class="grid grid-cols-1 grid-flow-row-dense md:grid-cols-3 gap-4">
                {{-- Updated by normally hidden --}}
                <div class="hidden">
                  <label for="by" class="block mb-2 text-sm font-medium text-gray-900">
                    Diubah oleh
                  </label>
                  <input
                    type="text"
                    class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                    required
                    name="updated_by"
                    value="{{auth()->user()->name}}"
                    readonly
                  />
                </div>

                {{-- Computer name --}}
                <div class="md:col-span-3">
                  <label for="computer-name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Nama Perangkat
                  </label>
                  <input
                    type="text"
                    id="computer-name"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-200 dark:bg-gray-200 block w-full p-3"
                    required
                    value="{{$komputer->computer_name}}"
                    readonly
                    name="computer_name"
                  />
                </div>

                {{-- on off condition --}}
                <div>
                  <label for="on-off-condition" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Kondisi Nyala/Mati
                  </label>
                  <select id="on-off-condition" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3 capitalize" required name="on_off_condition">
                    <option>Pilih Kondisi</option>
                    <option value="menyala" {{$komputer->on_off_condition == 'menyala' ? 'selected' : ''}}>menyala</option>
                    <option value="mati" {{$komputer->on_off_condition == 'mati' ? 'selected' : ''}}>mati</option>
                  </select>
                </div>

                {{-- on off desc --}}
                <div class="md:col-span-2">
                  <label for="on-off-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Keterangan Nyala/Mati
                  </label>
                  <input
                    type="text"
                    id="on-off-desc"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    name="on_off_desc"
                    value="{{$komputer->on_off_desc}}"
                  />
                </div>

                {{-- uninstalled app --}}
                <div>
                  <label for="uninstalled-app" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Aplikasi di Uninstall
                  </label>
                  <input
                    type="text"
                    id="uninstalled-app"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    name="uninstalled_app"
                    value="{{$komputer->uninstalled_app}}"
                  />
                </div>

                {{-- uninstalled app desc --}}
                <div class="md:col-span-2">
                  <label for="uninstalled-app-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Keterangan Aplikasi di Uninstall
                  </label>
                  <input
                    type="text"
                    id="uninstalled-app-desc"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    name="uninstalled_app_desc"
                    value="{{$komputer->uninstalled_app_desc}}"
                  />
                </div>

                {{-- clean file status --}}
                <div>
                  <label for="clean-file-status" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Status Pembersihan File
                  </label>
                  <select id="clean-file-status" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3 capitalize" required name="clean_file_status">
                    <option>Pilih Status</option>
                    <option value="hapus" {{$komputer->clean_file_status == 'hapus' ? 'selected' : ''}}>hapus</option>
                    <option value="tidak hapus" {{$komputer->clean_file_status == 'tidak hapus' ? 'selected' : ''}}>tidak hapus</option>
                  </select>
                </div>

                {{-- clean file desc --}}
                <div class="md:col-span-2">
                  <label for="clean-file-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                    Keterangan Pembersihan File
                  </label>
                  <input
                    type="text"
                    id="clean-file-desc"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    name="clean_file_desc"
                    value="{{$komputer->clean_file_desc}}"
                  />
                </div>
              </div>

              {{-- Submit button --}}
              <button
                type="submit"
                class="mt-4 px-5 py-2.5 text-xs md:text-sm font-medium text-center inline-flex items-center text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-3 h-5">
                  <path
                    fill-rule="evenodd"
                    d="M8 1a.75.75 0 01.75.75V6h-1.5V1.75A.75.75 0 018 1zm-.75 5v3.296l-.943-1.048a.75.75 0 10-1.114 1.004l2.25 2.5a.75.75 0 001.114 0l2.25-2.5a.75.75 0 00-1.114-1.004L8.75 9.296V6h2A2.25 2.25 0 0113 8.25v4.5A2.25 2.25 0 0110.75 15h-5.5A2.25 2.25 0 013 12.75v-4.5A2.25 2.25 0 015.25 6h2zM7 16.75v-.25h3.75a3.75 3.75 0 003.75-3.75V10h.25A2.25 2.25 0 0117 12.25v4.5A2.25 2.25 0 0114.75 19h-5.5A2.25 2.25 0 017 16.75z"
                    clip-rule="evenodd"
                  />
                </svg>
                Ubah
              </button>
            </form>
          </div>
        </div>
      </section>

      <script src="{{asset('js/darkToggle.js')}}"></script>
    </div>
  </body>
</html>
