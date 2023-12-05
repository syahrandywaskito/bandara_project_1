@extends('layouts.app')

@section('title')
    Dashboard - Jadwal
@endsection

@section('navbar-header')
    Jadwal
@endsection

@section('content')
    
    <div class="py-7 md:px-5 lg:ml-64">
      {{-- Header and Table --}}
      <div>
        {{-- Header --}}
        <div class="pt-16 px-4 mx-auto max-w-screen-xl">
          {{-- contain breadcrump, header text, sub-header text, and option menu --}}
          <div class="bg-white dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
            <!-- Breadcrumb -->
            <nav class="flex py-3 text-gray-700 rounded-lg" aria-label="Breadcrumb">
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
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Jadwal</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            {{-- header text --}}
            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-8 text-base md:text-lg xl:text-xl uppercase font-roboto font-bold mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-3 h-6">
                <path
                  d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                />
                <path
                  fill-rule="evenodd"
                  d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                  clip-rule="evenodd"
                />
              </svg>
              Halaman jadwal Penerbangan
            </h1>

            {{-- sub header text --}}
            <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Tabel ini akan menampilkan jadwal penerbangan yang sudah diinput. Jadwal yang diinput akan ditampilkan pada halaman homepage dalam bentuk tabel
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">

              {{-- add data --}}
              @include('components.dashboard.buttons._add-button', ['route' => route('jadwal.create')])

              {{-- Search --}}
              <div>
                <form action="{{route('jadwal.index')}}" method="GET">
                  <div class="flex">
                    <select
                      id="kolom"
                      class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-l-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                      name="kolom"
                    >
                      <option selected>Pilih Kolom</option>
                      <option value="maskapai">Maskapai</option>
                      <option value="id_penerbangan">ID Penerbangan</option>
                      <option value="tujuan">Tujuan</option>
                      <option value="jam">Jam Penerbangan</option>
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
                        title="Cari data"
                        type="submit"
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

              {{-- show all data --}}
              <div>
                <form action="{{route('jadwal.index')}}" method="GET">
                  <input type="text" name="all" class="hidden" readonly value="all" />

                  @include('components.dashboard.buttons._show-current-button')
                  
                </form>
              </div>
            </div>
          </div>
        </div>

        @if (Session::has('cari'))
          {{-- Tabel jadwal keseluruhan --}}
          <div class="px-4 mx-auto max-w-screen-xl">
            <div class="relative overflow-x-auto shadow-lg bg-white dark:bg-indigo-950 sm:rounded-lg p-4">
              <table class="w-full text-sm text-left">
                <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                  <span class="uppercase">Tabel Jadwal Keseluruhan</span>
                </caption>
                <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      Logo Maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Nama Maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      ID Penerbangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Tujuan / Dari
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jam Penerbangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jenis Penerbangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200">
                  @foreach ($all as $data)
                  <tr>
                    <td class="px-6 py-4">
                      <img src="{{asset('storage/logo/'.$data->logo_maskapai)}}" style="width: 150px;" class="rounded-lg" />
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->maskapai }}
                    </td>
                    <td class="px-6 py-4">
                      {{$data->id_penerbangan}}
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->tujuan }}
                    </td>
                    <td class="px-6 py-4">
                      @php 
                        $jam = $data->jam; 
                        $carbon = \Carbon\Carbon::parse($jam); 
                        $formatted = $carbon->isoFormat('HH:m');
                      @endphp
                      {{$formatted }}
                    </td>
                    <td class="px-6 py-4 capitalize">
                      {{ $data->jenis_penerbangan }}
                    </td>
                    <td class="px-6 py-4">
                      <form onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')" action="{{route('jadwal.destroy', $data->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <div class="inline-flex rounded-md shadow-md" role="group">
                          <a
                            href="{{route('jadwal.edit', $data->id)}}"
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
        @else
          {{-- Tabel jadwal keberangkatan --}}
          <div class="px-4 mx-auto max-w-screen-xl">
            <div class="relative overflow-x-auto shadow-lg bg-white dark:bg-indigo-950 sm:rounded-lg p-4">
              <table class="w-full text-sm text-left">
                <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                  <span class="uppercase">Tabel Jadwal Keberangkatan</span>
                </caption>
                <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      Logo Maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Nama Maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      ID Penerbangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Tujuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jam Keberangkatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200">
                  @foreach ($jadwal_keberangkatan as $data)
                  <tr>
                    <td class="px-6 py-4">
                      <img src="{{asset('storage/logo/'.$data->logo_maskapai)}}" style="width: 150px;" class="rounded-lg" />
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->maskapai }}
                    </td>
                    <td class="px-6 py-4">
                      {{$data->id_penerbangan}}
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->tujuan }}
                    </td>
                    <td class="px-6 py-4">
                      @php 
                        $jam = $data->jam; 
                        $carbon = \Carbon\Carbon::parse($jam); 
                        $formatted = $carbon->isoFormat('HH:m');
                      @endphp
                      {{$formatted }}
                    </td>
                    <td class="px-6 py-4">
                      <form onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')" action="{{route('jadwal.destroy', $data->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <div class="inline-flex rounded-md shadow-md" role="group">
                          <a
                            href="{{route('jadwal.edit', $data->id)}}"
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

          {{-- Tabel jadwal kedatangan --}}
          <div class="px-4 mx-auto max-w-screen-xl mt-10">
            <div class="relative overflow-x-auto shadow-lg bg-white dark:bg-indigo-950 sm:rounded-lg p-4">
              <table class="w-full text-sm text-left mt-5">
                <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                  <span class="uppercase">Tabel Jadwal Kedatangan</span>
                </caption>
                <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      Logo Maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Nama Maskapai
                    </th>
                    <th scope="col" class="px-6 py-3">
                      ID Penerbangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Dari
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jam Kedatangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200">
                  @foreach ($jadwal_kedatangan as $data)
                  <tr>
                    <td class="px-6 py-4">
                      <img src="{{asset('storage/logo/'.$data->logo_maskapai)}}" style="width: 150px;" class="rounded-lg" />
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->maskapai }}
                    </td>
                    <td class="px-6 py-4">
                      {{$data->id_penerbangan}}
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->tujuan }}
                    </td>
                    <td class="px-6 py-4">
                      @php 
                        $jam = $data->jam; 
                        $carbon = \Carbon\Carbon::parse($jam); 
                        $formatted = $carbon->isoFormat('HH:m');
                      @endphp
                      {{$formatted }}
                    </td>
                    <td class="px-6 py-4">
                      <form onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')" action="{{route('jadwal.destroy', $data->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <div class="inline-flex rounded-md shadow-md" role="group">
                          <a
                            href="{{route('jadwal.edit', $data->id)}}"
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
        @endif
      </div>
    </div>

@endsection
