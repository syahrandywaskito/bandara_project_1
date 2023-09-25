<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon" />
    <title>Admin - Berita</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/onPageLoad.js')}}"></script>
    {{-- tailwind css using vite --}} @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="dark:bg-slate-900 bg-white">
    {{-- Navbar Part --}}
    <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900 dark:bg-indigo-950 dark:border-slate-900">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button
              data-drawer-target="logo-sidebar"
              data-drawer-toggle="logo-sidebar"
              aria-controls="logo-sidebar"
              type="button"
              class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            >
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                ></path>
              </svg>
            </button>
            <a href="{{route('cctv.create')}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center font-roboto uppercase font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 whitespace-nowrap">Berita - Ubah Data</span>
            </a>
          </div>
          <div class="flex items-center">
            {{-- Dark toggle --}} 
            @include('components.dashboard.darktoggle') 
            {{-- User Profile Menu --}} \
            @include('components.dashboard.userprofile')
          </div>
        </div>
      </div>
    </nav>

    {{-- Sidebar Part --}} 
    @include('components.dashboard.sidebar') 

    {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <div class="bg-white dark:bg-slate-900">
        <div class="py-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 dark:bg-gray-100 shadow-sm" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                <li class="inline-flex items-center">
                  <a href="{{route('dashboard')}}" class="inline-flex items-center text-xs md:text-sm font-medium text-gray-700 hover:text-indigo-600">
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
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">Berita</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium text-gray-700 md:ml-2">Ubah Data</span>
                  </div>
                </li>
              </ol>
            </nav>

            {{-- Header text --}}
            <h1 class="text-gray-900 dark:text-gray-200 lg:px-2 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              Halaman Ubah Data
            </h1>

            {{-- Input form --}}
            <div class="font-roboto flex-row items-center">
              <div class="mt-4">
                <form action="{{route('beritas.update', $berita->id)}}" method="POST" enctype="multipart/form-data" class="">
                  @csrf @method('PUT')
                  <div class="grid grid-cols-1 grid-flow-row-dense gap-4">
                    {{-- gambar visible and get data from file --}}
                    <div>
                      <label for="gambar" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Input Gambar
                      </label>
                      <input
                        type="file"
                        id="gambar"
                        class="image-field text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="gambar"
                        value="{{old($berita->gambar)}}"
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
                        class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="judul"
                        value="{{$berita->judul}}"
                      />
                    </div>
  
                    {{-- isi dari berita --}}
                    <div>
                      <label for="isi" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Keterangan Rekaman
                      </label>
                      <textarea name="isi" id="" cols="30" rows="10" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3">
                        {{$berita->isi}}
                      </textarea>
                    </div>
  
                    {{-- group of button --}}
                    <div class="inline-flex rounded-md shadow-sm ml-0" role="group">
                      <button
                        type="submit"
                        class="submitButton inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-900 text-white border-2 border-gray-900 rounded-l-lg hover:bg-gray-500 hover:border-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950"
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
                          Submit
                        </span>
                      </button>
                      <button
                        type="reset"
                        class="inline-flex rounded-r-lg items-center px-4 py-2 text-sm font-medium text-white bg-gray-900 border-2 border-t border-b border-gray-900 hover:bg-gray-500 hover:border-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950"
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

    <script src="{{asset('js/compress-image.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("isi");
    </script>
    <script src="{{asset('js/darkToggle.js')}}"></script>
  </body>
</html>
