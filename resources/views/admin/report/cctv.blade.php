@extends('layouts.app')

@section('title')
    Dashboard - Laporan
@endsection

@section('navbar-header')
    Laporan - CCTV
@endsection

@section('content')
  
    {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      {{-- Header and Table --}}
      <div>
        {{-- Header --}}
        <div class="pt-16 px-4 mx-auto max-w-screen-xl">
          {{-- contain breadcrump, header text, sub-header text, and option menu --}}
          <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
            <!-- Breadcrumb -->
            <nav class="flex py-3 text-gray-700 dark:text-gray-100" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                <li class="inline-flex items-center">
                  <a href="{{route('dashboard')}}" class="inline-flex items-center text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400">
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
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">CCTV</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">
            {{-- header text --}}
            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-8 text-base md:text-lg xl:text-xl uppercase font-roboto font-bold mb-4">
              <svg class="flex-shrink-0 w-5 mr-3 h-5 text-gray-900 dark:text-gray-200 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path
                  d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"
                />
              </svg>
              Laporan pengecekan CCTV
            </h1>

            {{-- sub header text --}}
            <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Tabel laporan ini akan menampilkan hasil input dari pengecekan yang telah dilakukan sebelumnya. Tabel ini dapat diubah sesuai dengan tanggal data pengecekan
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
              
              {{-- add data --}}
              @include('components.dashboard.buttons._add-button', ['route' => route('cctv.create')])

              {{-- Search --}}
              <div>
                <form action="{{route('cctv.index')}}" method="GET">
                  <div class="flex">
                    <select
                      id="kolom"
                      class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-l-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                      name="kolom"
                    >
                      <option selected>Pilih Kolom</option>
                      <option value="hardware_name">Nama Perangkat</option>
                      <option value="record_status">Status Rekaman</option>
                      <option value="record_desc">Keterangan Rekaman</option>
                      <option value="clean_status">Status Kebersihan</option>
                      <option value="clean_desc">Keterangan Kebersihan</option>
                    </select>

                    <div class="relative w-full font-montserrat">
                      <input
                        type="text"
                        name="cari"
                        class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-r-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                        placeholder="Cari"
                        required
                      />

                      @include('components.dashboard.buttons._search-button')
                    </div>
                  </div>
                </form>
              </div>

              {{-- Select date --}}
              <div class="flex-initial w-60">
                <form class="flex items-center" method="get" action="{{route('cctv.index')}}">
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
                      class="z-20 text-xs md:text-sm text-gray-900 bg-gray-100  rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-50 block w-full pl-10 p-3.5 font-roboto"
                      required
                    />
                  </div>

                  @include('components.dashboard.buttons._date-search-button')
                </form>
              </div>

              {{-- show current data --}}
              <div>
                <form action="{{route('cctv.index')}}" method="GET">
                  <input type="text" name="all" class="hidden" readonly value="all" />

                  @include('components.dashboard.buttons._show-current-button')
                  
                </form>
              </div>
            </div>
          </div>
        </div>

        {{-- Table --}}
        <div class="px-4 mx-auto max-w-screen-xl">
          <div class="relative overflow-x-auto shadow-lg bg-white dark:bg-slate-800 sm:rounded-lg p-4">
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
                        Status Rekaman
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionStatusRekaman('statusRekaman')" class="ml-2">
                        <span id="sortIconStatusRekaman">&#x25B2;</span>
                      </a>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                      <span>
                        Keterangan Rekaman
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionKeteranganRekaman('keteranganRekaman')" class="ml-2">
                        <span id="sortIconKeteranganRekaman">&#x25B2;</span>
                      </a>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                      <span>
                        Status Kebersihan
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionStatusKebersihan('statusKebersihan')" class="ml-2">
                        <span id="sortIconStatusKebersihan">&#x25B2;</span>
                      </a>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                      <span>
                        Kondisi Kebersihan
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionKondisiKebersihan('kondisiKebersihan')" class="ml-2">
                        <span id="sortIconKondisiKebersihan">&#x25B2;</span>
                      </a>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200">
                @foreach ($cctvs as $data)
                <tr>
                  @if (Session::has('cari')) @php $date = $data->date; $carbon = \Carbon\Carbon::parse($date); $formatted = $carbon->isoFormat(' D MMMM Y'); @endphp
                  <td class="px-3 py-4">
                    {{$formatted}}
                  </td>

                  @endif
                  <td class="px-6 py-4">
                    {{$data->hardware_name}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->record_status}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->record_desc}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->clean_status}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->clean_desc}}
                  </td>
                  <td class="px-6 py-4">
                    <form onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')" action="{{route('cctv.destroy', $data->id)}}" method="POST">
                      @csrf @method('DELETE')
                      <div class="inline-flex rounded-md shadow-md" role="group">

                        @include('components.dashboard.buttons._edit-in-table', ['route' => route('cctv.edit', $data->id)])
                        
                        @include('components.dashboard.buttons._show-in-table', ['route' => route('cctv.show', $data->id)])

                        @include('components.dashboard.buttons._delete-in-table')

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
    </div>

    {{-- pagination --}}
    @if (!Session::has('cari'))  
      <div class="px-4 py-4 mx-auto max-w-screen-xl">
        {{ $cctvs->links() }}
      </div>
    @endif

    <script>
      var sortDirection = 'asc';
      var dataDokumen = $dokumen;
      
      function toggleSortDirectionNamaPerangkat(column) {
          toggleSortDirection(column, 'sortIconNamaPerangkat', 0);
      }
  
      function toggleSortDirectionStatusRekaman(column) {
          toggleSortDirection(column, 'sortIconStatusRekaman', 1);
      }
  
      function toggleSortDirectionKeteranganRekaman(column) {
          toggleSortDirection(column, 'sortIconKeteranganRekaman', 2);
      }
  
      function toggleSortDirectionStatusKebersihan(column) {
          toggleSortDirection(column, 'sortIconStatusKebersihan', 3);
      }
  
      function toggleSortDirectionKondisiKebersihan(column) {
          toggleSortDirection(column, 'sortIconKondisiKebersihan', 4);
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

@endsection