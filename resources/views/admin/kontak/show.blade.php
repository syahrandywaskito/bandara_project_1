@extends('layouts.app')

@section('title')
    Admin - Kontak & Saran
@endsection

@section('navbar-header')
    Kontak & Saran - Lihat Saran
@endsection

@section('content')

    <div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="pt-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md px-5 py-8 sm:px-8 md:p-12 md:mb-8">
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
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400 md:ml-2">Kontak & Saran</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Lihat Saran</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            <div class="text-start mt-8 font-montserrat">
              <h1 class="text-gray-900 dark:text-gray-200 text-base md:text-lg xl:text-xl uppercase font-bold">
                Lihat Saran
              </h1>
              <p class="text-xs md:text-sm capitalize dark:text-gray-200 pt-3">
                Dari : <br>
                {{$saran->nama}}
              </p>
              <p class="text-xs md:text-sm  dark:text-gray-200 pt-3">
                Alamat Email : <br>
                <a href="mailto:{{$saran->email}}" class="text-indigo-700 hover:border-b border-indigo-700 transition duration-150 dark:text-slate-300  dark:border-indigo-100">
                  {{$saran->email}}
                </a>
              </p>
            </div>

            <hr class="h-px my-7 bg-gray-400 border-0" />

            <div class="font-montserrat dark:text-gray-200">
              {{-- subjek --}}
              <div>
                <h2 class="uppercase font-semibold text-sm md:text-base">Subjek</h2>
                <p class="pt-3 text-xs sm:text-sm md:text-base">
                  {{$saran->subjek}}
                </p>
              </div>
              {{-- Pesan --}}
              <div class="mt-8">
                <h2 class="uppercase font-semibold">Pesan</h2>
                <p class="pt-3 text-xs sm:text-sm md:text-base">
                  {{$saran->pesan}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection
