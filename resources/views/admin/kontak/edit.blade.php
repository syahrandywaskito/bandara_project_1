@extends('layouts.app')

@section('title')
    Admin - Kontak & Saran
@endsection

@section('navbar-header')
    Kontak & Saran - 
    @if (isset($kontak))
        Ubah Data  
    @else
        Tambah Data  
    @endif
@endsection

@section('content')
    {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="py-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <!-- Breadcrumb -->
            <nav class="lex py-3 text-gray-700 dark:text-gray-100 rounded-lg" aria-label="Breadcrumb">
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
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">
                      @if (isset($kontak))
                        Ubah   
                      @else
                        Tambah 
                      @endif
                        Data
                    </span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">
            
              {{-- Header text --}}
              <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">

                @if (isset($kontak))
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                  </svg>
                  Halaman Ubah data

                @else
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                  </svg>              
                  Halaman Tambah Data
                @endif              
                
              </h1>

              {{-- Input form --}}
              <div class="font-roboto flex-row items-center">
                <div class="mt-4">

                  <form 
                  
                    @if(isset($kontak))
                      action="{{route('kontak.admin.update', $kontak->id)}}" 
                    @else
                      action="{{route('kontak.admin.store')}}"
                    @endif

                    method="POST" 
                    enctype="multipart/form-data"
                  >

                    @csrf 

                    @if(isset($kontak))
                      @method('PUT')
                    @endif

                    <div class="grid grid-cols-1 grid-flow-row-dense gap-4">
                      
                      <div>

                        {{-- * Label with tooltip --}}
                        <label for="no_telepon" class="mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200 inline-flex items-center" data-tooltip-target="tooltip-right" data-tooltip-placement="right">
                          No Telepon
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 ml-2 h-5">
                            <path
                              fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </label>

                        {{-- * Tooltip --}}
                        <div id="tooltip-right" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs md:text-sm font-medium text-white bg-indigo-800 rounded-lg shadow-sm opacity-0 tooltip dark:bg-slate-600 dark:text-gray-100 w-1/2 md:w-fit">
                          Masukan no telepon tanpa 0 diawal, karena sudah terformat +62
                          <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <div class="flex items-center pt-1 shadow-md">
                          <span class="text-xs md:text-sm text-gray-100 bg-indigo-800 rounded-l-lg outline-none dark:border-indigo-900 dark:bg-slate-600 block w-fit p-3"> +62 </span>
                          <input
                            type="text"
                            id="no_telepon"
                            class="text-xs md:text-sm text-gray-900 bg-white rounded-r-lg outline-none dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                            required
                            name="no_tlp"
                            pattern="^[1-9][0-9]*$"
                            title="Masukan no telpon tanpa 0 diawal"
                            @if (isset($kontak))
                              value="{{$kontak->no_tlp}}"  
                            @endif
                          />
                        </div>
                      </div>

                      <div>
                        <label for="email" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                          Email
                        </label>
                        <input
                          type="email"
                          id="email"
                          class="text-xs md:text-sm text-gray-900 bg-white rounded-lg outline-none dark:border-gray-100 dark:bg-gray-100 block w-full p-3 shadow-md"
                          required
                          name="email_admin"
                          
                          @if (isset($kontak))
                              value="{{$kontak->email_admin}}"  
                          @endif
                        />
                      </div>
    
                      @if (isset($kontak))
                        <div class="w-fit shadow-lg" role="group">
                          @include('components.dashboard.buttons._submit-edit-button')
                        </div>
                          
                      @else
                      
                        @include('components.dashboard.buttons._submit-add-button')
                          
                      @endif

                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection