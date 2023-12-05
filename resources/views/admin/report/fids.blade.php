@extends('layouts.app')

@section('title')
    Dashboard - Laporan
@endsection

@section('navbar-header')
    Laporan - Fids
@endsection

@section('content')
    <div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="pt-16 px-4 mx-auto max-w-screen-xl">
          <div class="bg-white dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
            <!-- Breadcrumb -->
            <nav class="flex py-3 text-gray-700" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                <li class="inline-flex items-center">
                  <a href="{{route('dashboard')}}" class="inline-flex items-center text-xs md:text-sm font-medium hover:text-indigo-600">
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
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">FIDS</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-8 text-base md:text-lg xl:text-xl uppercase font-roboto font-bold mb-4">
              <svg class="flex-shrink-0 w-5 mr-3 h-5 text-gray-900 dark:text-gray-200 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path
                  d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"
                />
              </svg>
              Laporan pengecekan FIDS
            </h1>
            <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Tabel laporan ini akan menampilkan hasil input dari pengecekan yang telah dilakukan sebelumnya. Tabel ini dapat diubah sesuai dengan tanggal data pengecekan
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">

              {{-- add data --}}
              @include('components.dashboard.buttons._add-button', ['route' => route('fids.create')])

              {{-- Search --}}
              <div>
                <form action="{{route('fids.index')}}" method="GET">
                  <div class="flex">
                    <select
                      id="kolom"
                      class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-l-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                      name="kolom"
                    >
                      <option selected>Pilih Kolom</option>
                      <option value="monitor_name">Nama Perangkat</option>
                      <option value="monitor_view">Kondisi Tampilan</option>
                      <option value="view_desc">Keterangan Tampilan</option>
                      <option value="clean_condition">Kondisi Kebersihan</option>
                      <option value="condition_desc">Keterangan Kondisi</option>
                    </select>

                    <div class="relative w-full font-montserrat">
                      <input
                        type="text"
                        name="cari"
                        class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-r-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                        placeholder="Cari"
                        required
                      />

                      <button
                        type="submit"
                        title="Cari data"
                        class="absolute top-0 right-0 p-3 text-xs md:text-sm font-medium h-full text-gray-50 bg-indigo-800 rounded-r-lg hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 focus:outline-none dark:bg-gray-50 dark:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200 dark:hover:ring-1 dark:hover:ring-indigo-900"
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
                <form class="flex items-center" method="get" action="{{route('fids.index')}}">
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
                  <button
                    type="submit"
                    title="Cari berdasarkan tanggal"
                    class="p-4 ml-2 text-xs md:text-sm font-medium h-full text-gray-50 bg-indigo-800 rounded-lg hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 focus:outline-none dark:bg-gray-50 dark:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200 dark:hover:ring-1 dark:hover:ring-indigo-900"
                  >
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                  </button>
                </form>
              </div>
              
              {{-- show current data --}}
              <div>
                <form action="{{route('fids.index')}}" method="GET">
                  <input type="text" name="all" class="hidden" readonly value="all" />
                  
                  @include('components.dashboard.buttons._show-current-button')

                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 mx-auto max-w-screen-xl">
          <div class="relative overflow-x-auto shadow-lg bg-white dark:bg-indigo-950 sm:rounded-lg p-4">
            <table class="w-full text-sm text-left" id="dataTabel">
              <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                <span class="uppercase">Tabel pengecekan</span>
                <p class="font-normal mt-1 text-xs md:text-sm">
                  {{$date}}
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
                        Kondisi Tampilan
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionKondisiTampilan('kondisiTampilan')" class="ml-2">
                        <span id="sortIconKondisiTampilan">&#x25B2;</span>
                      </a>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                      <span>
                        Keterangan Tampilan
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionKeteranganTampilan('keteranganTampilan')" class="ml-2">
                        <span id="sortIconKeteranganTampilan">&#x25B2;</span>
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
                    <div class="flex items-center">
                      <span>
                        Keterangan Kebersihan
                      </span>
                      <a href="javascript:void(0);" onclick="toggleSortDirectionKeteranganKebersihan('keteranganKebersihan')" class="ml-2">
                        <span id="sortIconKeteranganKebersihan">&#x25B2;</span>
                      </a>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody class="font-roboto text-center text-xs md:text-sm dark:text-gray-200">
                @foreach ($fids as $data)
                <tr>
                  @if (Session::has('cari')) @php $date = $data->date; $carbon = \Carbon\Carbon::parse($date); $formatted = $carbon->isoFormat('D MMMM Y'); @endphp
                  <td class="px-3 py-4">
                    {{$formatted}}
                  </td>
                  @endif
                  <td class="px-6 py-4">
                    {{$data->monitor_name}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->monitor_view}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->view_desc}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->clean_condition}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->condition_desc}}
                  </td>
                  <td class="px-6 py-4">
                    <form onsubmit="return confirm('Apakah anda ingin menghapus data ini ?')" action="{{route('fids.destroy', $data->id)}}" method="POST">
                      @csrf @method('DELETE')
                      <div class="inline-flex rounded-md shadow-md" role="group">
                        <a
                          href="{{route('fids.edit', $data->id)}}"
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
                          href="{{route('fids.show', $data->id)}}"
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
    </div>
    
    {{-- pagination --}}
    @if (!Session::has('cari'))
      <div class="px-4 py-4 mx-auto max-w-screen-xl">
        {{ $fids->links() }}   
      </div>
    @endif

    <script>
      var sortDirection = 'asc';
      var dataDokumen = $dokumen;
      
      function toggleSortDirectionNamaPerangkat(column) {
          toggleSortDirection(column, 'sortIconNamaPerangkat', 0);
      }
  
      function toggleSortDirectionKondisiTampilan(column) {
          toggleSortDirection(column, 'sortIconKondisiTampilan', 1);
      }
  
      function toggleSortDirectionKeteranganTampilan(column) {
          toggleSortDirection(column, 'sortIconKeteranganTampilan', 2);
      }
  
      function toggleSortDirectionKeteranganKebersihan(column) {
          toggleSortDirection(column, 'sortIconKeteranganKebersihan', 3);
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