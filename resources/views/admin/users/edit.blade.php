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
          <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <!-- Breadcrumb -->
            <nav class="flex py-3 text-gray-700 dark:text-gray-100 rounded-lg" aria-label="Breadcrumb">
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
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400 md:ml-2">Pengguna</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">
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
                      class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
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
                        class="text-xs md:text-sm text-gray-900 bg-gray-100 shadow-md rounded-lg outline-none dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
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
                        class="text-xs md:text-sm text-gray-900 bg-gray-100 shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="position"
                        value="{{$user->position}}"
                        readonly
                        />
                      </div>
    
                      {{-- group of button --}}
                      <div class="inline-flex rounded-md shadow-lg ml-0 w-fit" role="group">

                        @include('components.dashboard.buttons._submit-edit-button')

                      </div>
                    </div>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection