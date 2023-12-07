@extends('layouts.app')

@section('title')
    Dashboard - Berita
@endsection

@section('navbar-header')
    Berita
@endsection

@section('content') 
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
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Berita</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            {{-- header text --}}
            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-8 text-base md:text-lg xl:text-xl uppercase font-roboto font-bold mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mr-3 h-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"
                />
              </svg>
              Halaman Berita
            </h1>

            {{-- sub header text --}}
            <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Tabel ini akan menampilkan berita yang sudah diinput. Berita tersebut akan terlihat pada homepage dalam bentuk carousel pada tampilan desktop, dan bentuk card dalam tampilan mobile
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
              
              {{-- add data --}}
              @include('components.dashboard.buttons._add-button', ['route' => route('beritas.create')])

              {{-- Search --}}
              <div>
                <form action="{{route('beritas.index')}}" method="GET">
                  <div class="flex">
                    <select
                      id="kolom"
                      class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-l-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                      name="kolom"
                    >
                      <option selected>Pilih Kolom</option>
                      <option value="judul">Judul</option>
                      <option value="isi">Isi</option>
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

              {{-- show all data --}}
              <div>
                <form action="{{route('beritas.index')}}" method="GET">
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
            <table class="w-full text-sm text-left">
              <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                <span class="uppercase">Tabel Berita</span>
              </caption>
              <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Gambar
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Judul
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Isi
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200">
                @foreach ($berita as $data)
                <tr>
                  <td class="px-6 py-4">
                    <img src="{{asset('/storage/berita/'.$data->gambar)}}" style="width: 150px;" class="rounded-lg" />
                  </td>
                  <td class="px-6 py-4">
                    {{$data->judul}}
                  </td>
                  <td class="px-6 py-4">
                    {!! Str::limit(strip_tags($data->isi), $limit = 100, $end = '...') !!}
                  </td>
                  <td class="px-6 py-4">
                    <form onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')" action="{{route('beritas.destroy', $data->id)}}" method="POST">
                      
                      @csrf @method('DELETE')

                      <div class="inline-flex rounded-md shadow-md" role="group">

                        @include('components.dashboard.buttons._edit-in-table', ['route' => route('beritas.edit', $data->id)])

                        @include('components.dashboard.buttons._show-in-table', ['route' => route('beritas.show', $data->id)])

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
@endsection
