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
          <div class="bg-white dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
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
                <li>
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium hover:text-indigo-600 md:ml-2">Jadwal</a>
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
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        name="logo_maskapai"
                        value="{{$jadwal->logo_maskapai}}"
                      />
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
                    <div class="inline-flex rounded-md shadow-sm ml-0" role="group">
                      <button
                        type="submit"
                        class="submitButton inline-flex items-center px-4 py-2 text-sm font-medium bg-indigo-800 text-white rounded-l-lg hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950"
                        title="Submit data"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                          <path
                            fill-rule="evenodd"
                            d="M8 1a.75.75 0 01.75.75V6h-1.5V1.75A.75.75 0 018 1zm-.75 5v3.296l-.943-1.048a.75.75 0 10-1.114 1.004l2.25 2.5a.75.75 0 001.114 0l2.25-2.5a.75.75 0 00-1.114-1.004L8.75 9.296V6h2A2.25 2.25 0 0113 8.25v4.5A2.25 2.25 0 0110.75 15h-5.5A2.25 2.25 0 013 12.75v-4.5A2.25 2.25 0 015.25 6h2zM7 16.75v-.25h3.75a3.75 3.75 0 003.75-3.75V10h.25A2.25 2.25 0 0117 12.25v4.5A2.25 2.25 0 0114.75 19h-5.5A2.25 2.25 0 017 16.75z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="hidden md:block">
                          Ubah
                        </span>
                      </button>
                      <button
                        type="reset"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium bg-indigo-800 text-white rounded-r-lg hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950"
                        title="reset form"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                          <path
                            fill-rule="evenodd"
                            d="M10 4.5c1.215 0 2.417.055 3.604.162a.68.68 0 01.615.597c.124 1.038.208 2.088.25 3.15l-1.689-1.69a.75.75 0 00-1.06 1.061l2.999 3a.75.75 0 001.06 0l3.001-3a.75.75 0 10-1.06-1.06l-1.748 1.747a41.31 41.31 0 00-.264-3.386 2.18 2.18 0 00-1.97-1.913 41.512 41.512 0 00-7.477 0 2.18 2.18 0 00-1.969 1.913 41.16 41.16 0 00-.16 1.61.75.75 0 101.495.12c.041-.52.093-1.038.154-1.552a.68.68 0 01.615-.597A40.012 40.012 0 0110 4.5zM5.281 9.22a.75.75 0 00-1.06 0l-3.001 3a.75.75 0 101.06 1.06l1.748-1.747c.042 1.141.13 2.27.264 3.386a2.18 2.18 0 001.97 1.913 41.533 41.533 0 007.477 0 2.18 2.18 0 001.969-1.913c.064-.534.117-1.071.16-1.61a.75.75 0 10-1.495-.12c-.041.52-.093 1.037-.154 1.552a.68.68 0 01-.615.597 40.013 40.013 0 01-7.208 0 .68.68 0 01-.615-.597 39.785 39.785 0 01-.25-3.15l1.689 1.69a.75.75 0 001.06-1.061l-2.999-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="hidden md:block">
                          Reset
                        </span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
