@extends('layouts.app')

@section('title')
    Admin - Pengguna
@endsection

@section('navbar-header')
    Halaman Pengguna - Ubah Data
@endsection

@section('content')
    
{{-- Content Part --}}
<div class="py-7 md:px-5 lg:ml-64">
  <div>
        <div class="py-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-white dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
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
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">Pengguna</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium text-gray-700 md:ml-2">
                      Ubah Data
                    </span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            {{-- Header text --}}
            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
              </svg>              
              Halaman Ubah data
            </h1>
            
            {{-- Input form --}}
            <div class="font-roboto flex-row items-center">
              <div class="mt-4">
                <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                  <div class="grid grid-cols-1 grid-flow-row-dense gap-4">
                    
                    <div>
                      <label for="name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Nama Lengkap
                      </label>
                      <input
                      type="text"
                      id="name"
                      class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                      required
                      name="name"
                      value="{{$user->name}}"
                      />
                    </div>

                      <div>
                        <label for="email" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                          Email
                        </label>
                        <input
                        type="email"
                        id="email"
                        class="text-xs md:text-sm text-gray-900 bg-gray-200 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-300 dark:bg-gray-300 block w-full p-3"
                        required
                        name="email"
                        value="{{$user->email}}"
                        readonly
                        />
                      </div>

                      <div>
                        <label for="jabatan" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                          Jabatan
                        </label>
                        <input
                        type="text"
                        id="jabatan"
                        class="text-xs md:text-sm text-gray-900 bg-gray-200 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-300 dark:bg-gray-300 block w-full p-3"
                        required
                        name="position"
                        value="{{$user->position}}"
                        readonly
                        />
                      </div>
    
                      {{-- group of button --}}
                      <div class="inline-flex rounded-md shadow-sm ml-0" role="group">
                        <button
                        type="submit"
                        class="submitButton inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-900 text-white border-2 border-gray-900 rounded-lg hover:bg-gray-500 hover:border-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950"
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
                      </div>
                    </div>
                  </form>
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
    <script src="{{asset('js/darkToggle.js')}}"></script>
    
@endsection