@extends('layouts.app')

@section('title')
    Admin - Sistem
@endsection

@section('navbar-header')
    Sistem
@endsection

@section('content')
    
{{-- content --}}
<div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="pt-16 px-4 mx-auto max-w-screen-xl">
          <div class="bg-white dark:bg-indigo-950 dark:border-0 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
            <!-- Breadcrumb -->
            <nav class="flex py-3 text-gray-700 rounded-lg" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                <li class="inline-flex items-center">
                  <a href="{{route('dashboard')}}" class="inline-flex items-center font-medium hover:text-indigo-600 text-xs md:text-sm">
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
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Sistem</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            <h1 class="inline-flex items-center text-gray-900 mt-8 dark:text-gray-200 text-base md:text-lg xl:text-xl font-roboto font-bold mb-4 uppercase">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
              </svg> 
              Halaman Sistem
            </h1>
            <p class="text-sm lg:text-base xl:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Halaman ini berisi perintah untuk backup dan restore data pada database
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 flex-row space-y-10  font-montserrat text-gray-600 dark:text-gray-200">  
              
              {{-- backup --}}
              <div>
                <h3 class="uppercase font-semibold inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>                                    
                  Backup
                </h3>
                <p class="mb-6 ml-7">
                  Backup Data akan meng-backup data sekarang yang ada di database. Backup baru akan menimpa backup yang lama.
                  <br><em class="text-red-700">Semua data akan dibackup kecuali data Pengguna. Jika terhapus, harus mendaftar lagi terlebih dahulu</em>
                </p>
                <a href="{{route('system.index.backup')}}" class="ml-6 bg-indigo-800 text-gray-50 p-3 rounded-lg shadow-lg hover:bg-gray-100 hover:text-indigo-800 transition duration-200">Backup Data</a>
                {{-- flash message --}}
                @if(session()->has('backup'))
                <div class="ml-7 pt-4 text-green-600">
                        {{ session()->get('backup') }}
                      </div>
                      @endif
                    </div>
                    
                    {{-- restore --}}
                    <div class="">
                <h3 class="uppercase font-semibold inline-flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>                                    
                  Restore
                </h3>
                <p class="mb-4 ml-7">
                  Restore Data akan menghapus data yang ada sekarang dan menggantinya dengan data yang sudah di-backup sebelumnya. <br><em class="text-red-700">Data Baru yang belum di backup akan hilang saat direstore. Pastikan Backup dahulu sebelum Restore</em>
                </p>
                <form method="post" action="{{ route('system.index.restore') }}">
                  @csrf
                  <button type="submit" class="ml-6 bg-indigo-800 text-gray-50 p-2.5 rounded-lg shadow-lg hover:bg-gray-100 hover:text-indigo-800 transition duration-200">Restore Data</button>
                </form>
                @if(session()->has('restore'))
                    <div class="ml-7 pt-4 text-green-600">
                      {{ session()->get('restore') }}
                    </div>
                    @endif
                    
                  </div>
                  
                </div>
          </div>
        </div>
      </div>
    </div>

@endsection