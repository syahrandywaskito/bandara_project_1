<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon" />
    <title>Admin - Laporan</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
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
              class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
            <a href="{{route('komputer.index')}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" />
              <span class="self-center uppercase font-roboto font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 whitespace-nowrap">Laporan - Komputer</span>
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
      {{-- Header and table --}}
      <div class="bg-white dark:bg-slate-900">
        {{-- header --}}
        <div class="pt-16 pb-5 px-4 mx-auto max-w-screen-xl">
          {{-- contain breadcrump, header text, sub-header text, and option menu --}}
          <div class="bg-gray-50 border border-gray-100 dark:bg-indigo-950 dark:border-0 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
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
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium text-gray-700 md:ml-2">Komputer</span>
                  </div>
                </li>
              </ol>
            </nav>

            {{-- header text --}}
            <h1 class="text-gray-900 dark:text-gray-200 mt-8 text-base md:text-lg xl:text-xl uppercase font-roboto font-bold mb-4">
              Laporan pengecekan Komputer
            </h1>

            {{-- sub header text --}}
            <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Tabel laporan ini akan menampilkan hasil input dari pengecekan yang telah dilakukan sebelumnya. Tabel ini dapat diubah sesuai dengan tanggal data pengecekan
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
              {{-- add data --}}
              <div>
                <a
                  href="{{route('komputer.create')}}"
                  class="px-5 py-3.5 text-xs sm:text-sm md:text-base font-medium text-center inline-flex items-center text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200 dark:bg-gray-50 dark:text-green-700 dark:hover:bg-indigo-900 dark:hover:text-gray-100 dark:border-gray-100"
                  title="Tambah data baru"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" />
                  </svg>
                  Tambah
                </a>
              </div>

              {{-- Search --}}
              <div>
                <form action="{{route('komputer.index')}}" method="GET">
                  <div class="flex">
                    <select
                      id="kolom"
                      class="block p-3.5 w-full z-20 text-xs md:text-sm text-gray-900 bg-gray-200 border-2 border-gray-200 rounded-l-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto"
                      name="kolom"
                    >
                      <option selected>Pilih Kolom</option>
                      <option value="computer_name">Nama Perangkat</option>
                      <option value="on_off_condition">Kondisi Nyala / Mati</option>
                      <option value="on_off_desc">Keterangan Nyala / Mati</option>
                      <option value="uninstalled_app">Aplikasi yang Diuninstall</option>
                      <option value="uninstalled_app_desc">Keterangan Aplikasi yang Diuninstall</option>
                      <option value="clean_file_status">Status Pembersihan File</option>
                      <option value="clean_file_desc">Keterangan Pembersihan File</option>
                    </select>

                    <div class="relative w-full font-montserrat">
                      <input
                        type="text"
                        class="block p-3.5 w-full z-20 text-xs md:text-sm text-gray-900 bg-gray-200 border-2 border-gray-200 rounded-r-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50"
                        placeholder="Cari"
                        name="cari"
                        required
                      />

                      <button
                        type="submit"
                        class="absolute top-0 right-0 p-3 text-xs md:text-sm font-medium h-full text-gray-50 bg-indigo-800 rounded-r-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 focus:outline-none dark:bg-gray-50 dark:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200 dark:hover:ring-1 dark:hover:ring-indigo-900"
                        title="Cari data"
                      >
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>

              {{-- Select date --}}
              <div class="flex-initial w-60">
                <form class="flex items-center" method="get" action="{{route('komputer.index')}}">
                  @csrf
                  <label for="date" class="sr-only">Search</label>
                  <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <input
                      type="date"
                      id="date"
                      name="selected_date"
                      class="font-roboto z-20 text-xs md:text-sm text-gray-900 bg-gray-200 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-800 dark:bg-gray-50 dark:border-gray-50 block w-full pl-10 p-3"
                      required
                    />
                  </div>
                  <button
                    type="submit"
                    class="p-4 ml-2 text-xs md:text-sm font-medium text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 focus:outline-none dark:bg-gray-100 dark:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-gray-100 dark:hover:border-indigo-900 dark:border-gray-100 transition duration-200"
                    title="Cari sesuai tanggal"
                  >
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                  </button>
                </form>
              </div>

              {{-- show all data or current data --}}
              <div>
                <form action="{{route('komputer.index')}}" method="GET">
                  <input type="text" name="all" class="hidden" readonly value="all" />
                  <button
                    type="submit"
                    class="p-3.5 text-base font-medium text-center inline-flex items-center text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 dark:border-gray-100 font-roboto"
                    title="Tampilkan data sekarang"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                      <path
                        fill-rule="evenodd"
                        d="M3 3.5A1.5 1.5 0 014.5 2h6.879a1.5 1.5 0 011.06.44l4.122 4.12A1.5 1.5 0 0117 7.622V16.5a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 16.5v-13zM13.25 9a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5a.75.75 0 01.75-.75zm-6.5 4a.75.75 0 01.75.75v.5a.75.75 0 01-1.5 0v-.5a.75.75 0 01.75-.75zm4-1.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="sr-only">all</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Table --}}
      <div class="px-4 mx-auto max-w-screen-xl">
        <div class="relative overflow-x-auto shadow-lg bg-gray-50 dark:bg-indigo-950 sm:rounded-lg p-4">
          <table class="w-full text-sm text-left" id="dataTabel">
            <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
              <span class="uppercase">Tabel pengecekan</span>
              <p class="font-normal mt-1 text-xs md:text-sm">
                {{ $date }}
              </p>
            </caption>
            <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
              <tr>
                @if (Session::has('cari'))
                <th scope="col" class="px-6 py-3">
                  Tanggal
                </th>
                @endif
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Nama Perangkat 
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionNamaPerangkat('namaPerangkat')" class="ml-2">
                      <span id="sortIconNamaPerangkat">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Kondisi Nyala/Mati
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionKondisiNyalaMati('kondisiNyalaMati')" class="ml-2">
                      <span id="sortIconKondisiNyalaMati">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Keterangan Nyala/Mati
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionKeteranganNyalaMati('keteranganNyalaMati')" class="ml-2">
                      <span id="sortIconKeteranganNyalaMati">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Aplikasi di Uninstall
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionAplikasiDiUninstall('aplikasiDiUninstall')" class="ml-2">
                      <span id="sortIconAplikasiDiUninstall">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Keterangan Aplikasi di Uninstall
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionKeteranganUninstall('keteranganUninstall')" class="ml-2">
                      <span id="sortIconKeteranganUninstall">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Status Pembersihan File
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionStatusPembersihanFile('statusPembersihanFile')" class="ml-2">
                      <span id="sortIconStatusPembersihanFile">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  <div class="flex items-center">
                    <span>
                      Keterangan Pembersihan File
                    </span>
                    <a href="javascript:void(0);" onclick="toggleSortDirectionKeteranganPembersihanFile('keteranganPembersihanFile')" class="ml-2">
                      <span id="sortIconKeteranganPembersihanFile">&#x25B2;</span>
                    </a>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200 capitalize">
              @foreach ($komputer as $data)
              <tr>
                @if (Session::has('cari')) @php $date = $data->date; $carbon = \Carbon\Carbon::parse($date); $formatted = $carbon->isoFormat('D MMMM Y'); @endphp

                <td class="px-2 py-4">
                  {{$formatted}}
                </td>

                @endif
                <td class="px-6 py-4">
                  {{$data->computer_name}}
                </td>
                <td class="px-6 py-4">
                  {{$data->on_off_condition}}
                </td>
                <td class="px-1 py-4">
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
                    @csrf @method('DELETE')
                    <div class="inline-flex rounded-md shadow-md" role="group">
                      <a
                        href="{{route('komputer.edit', $data->id)}}"
                        title="Edit data"
                        class="inline-flex items-center px-4 py-2 text-xs md:text-sm font-medium text-gray-50 bg-indigo-800 rounded-l-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                          <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                          <path
                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"
                          />
                        </svg>
                        Edit
                      </a>
                      <a
                        href="{{route('komputer.show', $data->id)}}"
                        title="Lihat data"
                        class="inline-flex items-center px-4 py-2 text-xs md:text-sm font-medium text-gray-50 bg-indigo-800 hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                          <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                          <path
                            fill-rule="evenodd"
                            d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        Lihat
                      </a>
                      <button
                        type="submit"
                        title="Hapus data"
                        class="inline-flex items-center px-4 py-2 text-xs md:text-sm font-medium text-gray-50 bg-indigo-800 rounded-r-md hover:bg-gray-100 hover:text-red-800 focus:z-10 focus:ring-2 focus:ring-red-800 focus:bg-gray-100 focus:text-red-800 dark:bg-gray-100 dark:text-red-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1 h-5">
                          <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                            clip-rule="evenodd"
                          />
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

    {{-- pagination --}}
    <div class="px-4 py-4 mx-auto max-w-screen-xl">
      @if (!Session::has('cari')) {{ $komputer->links() }} @endif
    </div>

    {{-- success notif --}} @include('components.dashboard.successnotif')

    <script>
      var sortDirection = 'asc';
      var dataDokumen = $dokumen;
      
      function toggleSortDirectionNamaPerangkat(column) {
          toggleSortDirection(column, 'sortIconNamaPerangkat', 0);
      }
  
      function toggleSortDirectionKondisiNyalaMati(column) {
          toggleSortDirection(column, 'sortIconKondisiNyalaMati', 1);
      }
  
      function toggleSortDirectionKeteranganNyalaMati(column) {
          toggleSortDirection(column, 'sortIconKeteranganNyalaMati', 2);
      }
  
      function toggleSortDirectionAplikasiDiUninstall(column) {
          toggleSortDirection(column, 'sortIconAplikasiDiUninstall', 3);
      }
  
      function toggleSortDirectionKeteranganUninstall(column) {
          toggleSortDirection(column, 'sortIconKeteranganUninstall', 4);
      }

      function toggleSortDirectionStatusPembersihanFile(column) {
          toggleSortDirection(column, 'sortIconStatusPembersihanFile', 5);
      }

      function toggleSortDirectionKeteranganPembersihanFile(column) {
          toggleSortDirection(column, 'sortIconKeteranganPembersihanFile', 6);
      }
  
      function toggleSortDirection(column, sortIconId, columnIndex) {
          var sortIcon = document.getElementById(sortIconId);
          var dataTabel = document.getElementById('dataTabel');
          var rows = Array.from(dataTabel.getElementsByTagName('tr')).slice(1);
  
          if (sortDirection === 'asc') {
              sortDirection = 'desc';
              sortIcon.innerHTML = '&#x25BC;';
          } else {
              sortDirection = 'asc';
              sortIcon.innerHTML = '&#x25B2;';
          }
  
          rows.sort(function(a, b) {
              var aText = a.getElementsByTagName('td')[columnIndex].textContent;
              var bText = b.getElementsByTagName('td')[columnIndex].textContent;
              console.log(aText);
              console.log(bText);
              if (sortDirection === 'asc') {
                  return aText.localeCompare(bText);
              } else {
                  return bText.localeCompare(aText);
              }
          });
  
          for (var i = 0; i < rows.length; i++) {
              dataTabel.tBodies[0].appendChild(rows[i]);
          }
      }
    </script>

    <script src="{{asset('js/hide-alert.js')}}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="{{asset('js/darkToggle.js')}}"></script>
  </body>
</html>
