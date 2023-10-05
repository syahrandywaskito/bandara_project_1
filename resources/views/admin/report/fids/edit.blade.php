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
    {{-- sidebar & navbar --}}
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
            <a href="{{route('dashboard')}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center font-roboto font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 uppercase whitespace-nowrap">FIDS - Ubah data</span>
            </a>
          </div>

          {{-- contain menu navbar --}}
          <div class="flex items-center">
            {{-- Dark toggle --}} @include('components.dashboard.darktoggle') {{-- User Profile Menu --}} @include('components.dashboard.userprofile')
          </div>
        </div>
      </div>
    </nav>

    {{-- include sidebar from /components/dashboard/sidebar --}} @include('components.dashboard.sidebar') {{-- Header content, contain breadcrump and header text, if sm date are visible --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <section class="bg-white dark:bg-slate-900">
        <div class="py-16 px-4 mx-auto max-w-screen-xl text-start lg:py-16">
          <div class="bg-gray-50 border border-gray-100 dark:bg-indigo-950 dark:border-0 rounded-lg shadow-md px-5 py-8 sm:px-8 md:p-12 md:mb-8">
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
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">FIDS</a>
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

            <h1 class="text-gray-900 dark:text-gray-200 lg:px-2 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              Halaman ubah data
            </h1>
            {{-- date, if lg is hidden --}}
            <div class="text-xs md:text-sm font-montserrat lg:px-2 pt-3 dark:text-gray-200">
              <h3>Tanggal data</h3>
              <p>
                {{$date}}
              </p>
            </div>
            <form class="font-montserrat lg:px-2 mt-6" action="{{route('fids.update', $fid->id)}}" method="POST">
              @csrf @method('PUT')

              <div class="grid grid-cols-1 grid-flow-row-dense md:grid-cols-3 gap-4">
                {{-- monitor name, if sm text-xs --}}
                <div class="md:col-span-3">
                  <label for="hardware-name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Nama Perangkat</label>
                  <input
                    type="text"
                    id="hardware-name"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-200 dark:bg-gray-200 w-full p-3"
                    required
                    value="{{$fid->monitor_name}}"
                    readonly
                    name="monitor_name"
                  />
                </div>

                {{-- Updaated by normally hidden --}}
                <div class="md:col-span-3 hidden">
                  <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Diubah oleh</label>
                  <input
                    type="text"
                    id="hardware-name"
                    class="text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    value="{{auth()->user()->name}}"
                    readonly
                    name="updated_by"
                  />
                </div>

                {{-- Monitor view, if sm text-xs --}}
                <div>
                  <label for="record-status" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Kondisi Tampilan</label>
                  <select id="record-status" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="monitor_view">
                    <option>Pilih Kondisi</option>
                    <option value="V" {{$fid->monitor_view == 'V' ? 'selected' : ''}}>V</option>
                    <option value="X" {{$fid->monitor_view == 'X' ? 'selected' : ''}}>X</option>
                  </select>
                </div>

                {{-- view desc, if sm text-xs --}}
                <div class="md:col-span-2">
                  <label for="record-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Keterangan Tampilan</label>
                  <input
                    type="text"
                    id="record-desc"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    name="view_desc"
                    value="{{$fid->view_desc}}"
                  />
                </div>

                {{-- clean condition, if sm text-xs --}}
                <div>
                  <label for="clean-status" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Kondisi Kebersihan</label>
                  <select id="clean-status" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="clean_condition">
                    <option>Pilih Kondisi</option>
                    <option value="V" {{$fid->clean_condition == 'V' ? 'selected' : ''}}>V</option>
                    <option value="X" {{$fid->clean_condition == 'X' ? 'selected' : ''}}>X</option>
                  </select>
                </div>

                {{-- condition desc, if sm text-xs --}}
                <div class="md:col-span-2">
                  <label for="clean-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Keterangan Kebersihan</label>
                  <input
                    type="text"
                    id="clean-desc"
                    class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3"
                    required
                    name="condition_desc"
                    value="{{$fid->condition_desc}}"
                  />
                </div>
              </div>

              {{-- button for submit --}}
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
                Update
              </button>
            </form>
          </div>
        </div>
      </section>

      <script src="{{asset('js/darkToggle.js')}}"></script>
    </div>
  </body>
</html>
