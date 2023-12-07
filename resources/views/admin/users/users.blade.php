@extends('layouts.app') 

@section('title') 
  Admin - Pengguna 
@endsection 

@section('navbar-header')
    Halaman Pengguna
@endsection

@section('content') 
  
  {{-- content --}}
  <div class="py-7 md:px-5 lg:ml-64">
    <div>
      <div class="pt-16 pb-5 px-4 mx-auto max-w-screen-xl">
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
          <!-- Breadcrumb -->
          <nav class="flex py-3 text-gray-700 dark:text-gray-100" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
              <li class="inline-flex items-center">
                <a href="{{route('dashboard')}}" class="inline-flex items-center font-medium hover:text-indigo-600 hover:dark:text-slate-400 text-xs md:text-sm">
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
                  <svg class="w-3 h-3 mx-1 text-inherit aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg>
                  <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Halaman Pengguna</span>
                </div>
              </li>
            </ol>
          </nav>

          <hr class="border border-gray-300">

          <h1 class="inline-flex items-center text-gray-900 mt-8 dark:text-gray-200 text-base md:text-lg xl:text-xl font-roboto font-bold mb-4 uppercase">
            <svg class="flex-shrink-0 w-5 mr-3 h-5 dark:text-gray-100 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path
                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"
              />
            </svg>
            Halaman Informasi pengguna
          </h1>
          <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
            Halaman ini berisi data siapa saja yang melakukan sign up atau registrasi untuk masuk ke halaman <strong>Dashboard</strong>
          </p>

          {{-- Menu opsi --}}
          <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
            {{-- Search --}}
            <div>
              <form action="{{route('users.index')}}" method="GET">
                <div class="flex">
                  <select
                    id="kolom"
                    class="block p-3.5 w-full z-20 text-gray-900 bg-gray-100 rounded-l-lg outline-none focus:border-indigo-800 dark:border-gray-50 dark:bg-gray-50 font-roboto text-xs md:text-sm"
                    name="kolom"
                  >
                    <option selected>Pilih Kolom</option>
                    <option value="name">Nama Lengkap</option>
                    <option value="email">Email</option>
                    <option value="position">Jabatan</option>
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

            {{-- show current data --}}
            <div>
              <form action="{{route('users.index')}}" method="GET">
                <input type="text" name="all" class="hidden" readonly value="all" />

                @include('components.dashboard.buttons._show-current-button')
                
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="px-4 mx-auto max-w-screen-xl">
        <div class="relative overflow-x-auto shadow-lg bg-white dark:bg-slate-800 sm:rounded-lg p-4">
          <table class="w-full text-sm text-left">
            <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
              <span class="uppercase">Tabel Data Pengguna</span>
            </caption>
            <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
              <tr>
                <th scope="col" class="px-6 py-3">
                  Nama Lengkap
                </th>
                <th scope="col" class="px-6 py-3">
                  Email
                </th>
                <th scope="col" class="px-6 py-3">
                  Jabatan
                </th>
                <th scope="col" class="px-6 py-3">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody class="font-roboto text-center text-xs sm:text-sm dark:text-gray-200">
              @foreach ($users as $user)
              <tr>
                <td class="px-6 py-4">
                  {{$user->name}}
                </td>
                <td class="px-6 py-4">
                  {{$user->email}}
                </td>
                <td class="px-6 py-4">
                  {{$user->position}}
                </td>
                <td class="px-6 py-4">
                  <form onsubmit="return confirm('Anda ingin mengahapus user ini ?')" action="{{route('users.destroy', $user->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <div class="inline-flex rounded-md shadow-md" role="group">

                      @include('components.dashboard.buttons._edit-in-table', ['route' => route('users.edit', $user->id)])

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
