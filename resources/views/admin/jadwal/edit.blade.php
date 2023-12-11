@extends('layouts.app')

@section('title')
    Dashboard - Jadwal
@endsection

@section('navbar-header')
    Jadwal - Ubah Data
@endsection

@section('content')
    {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="pt-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-white dark:border-0 dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
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
                <li>
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400 md:ml-2">Jadwal</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Ubah Data</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
              </svg>              
              Halaman Ubah data
            </h1>

            {{-- input form --}}
            <div class="font-roboto flex-row items-center">
              <div class="mt-4">
                <form action="{{route('jadwal.update', $jadwal->id)}}" method="POST" enctype="multipart/form-data" class="">
                  @csrf
                  @method('PUT')
                  <div class="grid grid-cols-1 grid-flow-row-dense md:grid-cols-3 gap-4">
                    {{-- Logo Maskapai --}}
                    <div class="md:col-span-3">
                      <label for="logo-maskapai" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Input Logo Maskapai</label>
                      <input
                        type="file"
                        id="logo-maskapai"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3 @error('logo_maskapai') is-invalid @enderror"
                        name="logo_maskapai"
                        value="{{$jadwal->logo_maskapai}}"
                      />

                      {{-- error notif --}}
                      @error('logo_maskapai')
                          <div class="mt-3">
                            @include('components.dashboard._input-error-notif')
                          </div>
                      @enderror
                    </div>

                    {{-- Maskapai --}}
                    <div class="md:col-span-3">
                      <label for="maskapai" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Nama Maskapai</label>
                      <input
                        type="text"
                        id="maskapai"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="maskapai"
                        value="{{$jadwal->maskapai}}"
                      />
                    </div>
                    {{-- jenis penerbangan --}}
                    <div>
                      <label for="jenis-penerbangan" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Jenis Penerbangan</label>
                      <select id="jenis-penerbangan" class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3" required name="jenis_penerbangan">
                        <option>Jenis Penerbangan</option>
                        <option value="keberangkatan" {{$jadwal->jenis_penerbangan == 'keberangkatan' ? 'selected' : ''}}>Keberangkatan</option>
                        <option value="kedatangan" {{$jadwal->jenis_penerbangan == 'kedatangan' ? 'selected' : ''}}>Kedatangan</option>
                      </select>
                    </div>
                    {{-- id penerbangan --}}
                    <div class="md:col-span-2">
                      <label for="id_penerbangan" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">ID Penerbangan</label>
                      <input
                        type="text"
                        id="id_penerbangan"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="id_penerbangan"
                        value="{{$jadwal->id_penerbangan}}"
                      />
                    </div>
                    <div class="md:col-span-2">
                      <label for="tujuan" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Tujuan</label>
                      <input
                        type="text"
                        id="tujuan"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="tujuan"
                        value="{{$jadwal->tujuan}}"
                      />
                    </div>
                    <div >
                      <label for="jam" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Jam Penerbangan</label>
                      <input
                        type="time"
                        id="jam"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="jam"
                        value="{{$jadwal->jam}}"
                      />
                    </div>

                    @include('components.dashboard.buttons._submit-edit-button')
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
