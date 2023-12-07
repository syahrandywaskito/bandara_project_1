@extends('layouts.app')

@section('title')
    Dashboard - Berita
@endsection

@section('navbar-header')
    Berita - Tambah Data
@endsection

@section('content') 
    {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="pt-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
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
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400 md:ml-2">Berita</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Tambah Data</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
              </svg>              
              Halaman Tambah Data
            </h1>

            {{-- input form --}}
            <div class="font-roboto flex-row items-center">
              <div class="mt-4">
                <form action="{{route('beritas.store')}}" method="POST" enctype="multipart/form-data" class="">
                  @csrf
                  <div class="grid grid-cols-1 grid-flow-row-dense gap-4">
                    {{-- gambar visible and get data from file --}}
                    <div>
                      <label for="image-input" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Input Gambar
                      </label>
                      <input
                        multiple
                        type="file"
                        id="image-input"
                        class="image-field text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="gambar"
                      />
                      {{-- text kompresi --}}
                      <div class="mt-2">
                        <p class="flex space-x-4 text-xs md:text-sm dark:text-gray-200 text-gray-900">
                          <span id="original-size"></span>
                          <span id="compressed-size"></span>
                        </p>
                      </div>
                    </div>
                    {{-- judul untuk header berita --}}
                    <div>
                      <label for="judul" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Judul Berita
                      </label>
                      <input
                        type="text"
                        id="judul"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="judul"
                      />
                    </div>
  
                    {{-- isi dari berita --}}
                    <div>
                      <label for="isi" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Keterangan Rekaman
                      </label>
                      <textarea name="isi" id="" cols="30" rows="10" class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"> </textarea>
                    </div>
  
                    {{-- group of button --}}
                    @include('components.dashboard.buttons._submit-add-button')
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <script src="{{asset('js/compress-image.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("isi");
    </script>
    
@endsection
