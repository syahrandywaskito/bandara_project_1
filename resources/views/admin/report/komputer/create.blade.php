<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Laporan</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{asset('js/onPageLoad.js')}}"></script>
   {{-- tailwind css using vite --}}
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" dark:bg-slate-900 bg-white">
  
  {{-- Navbar Part --}}
  <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900 dark:bg-indigo-950 dark:border-slate-900">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg sm:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
          </button>
          <a href="{{route('cctv.create')}}" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center font-roboto uppercase font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 whitespace-nowrap">Komputer - Tambah Data</span>
          </a>
        </div>
        <div class="flex items-center">

            {{-- Dark toggle --}}
            @include('components.dashboard.darktoggle')
         
            {{-- User Profile Menu --}}
            @include('components.dashboard.userprofile')
        </div>
      </div>
    </div>
  </nav>

  {{-- Sidebar Part --}}
  @include('components.dashboard.sidebar')
  
  {{-- Content Part --}}
  <div class="py-7 md:px-5 lg:ml-64">  
    <section class="bg-white dark:bg-slate-900">
      <div class="py-16 px-4 mx-auto max-w-screen-xl text-start lg:py-16">
        <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-md px-5 py-8 sm:px-8 md:p-12"> 

          <!-- Breadcrumb -->
          <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 dark:bg-gray-100 shadow-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
              <li class="inline-flex items-center">
                <a href="{{route('dashboard')}}" class="inline-flex items-center text-xs md:text-sm font-medium text-gray-700 hover:text-indigo-600">
                  <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Dashboard
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="{{URL::previous()}}" class="ml-1 text-xs md:text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">Komputer</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-xs md:text-sm font-medium text-gray-700 md:ml-2">Tambah Data</span>
                </div>
              </li>
            </ol>
          </nav>

          <h1 class="text-gray-900 dark:text-gray-200 lg:px-2 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
            Halaman Tambah Data
          </h1>
          <div class="lg:hidden font-montserrat text-xs md:text-sm pt-3 dark:text-gray-200">
            <h3>Tanggal hari ini</h3>
            <p>
              {{now()->format('l')}}, {{now()->format('d M Y')}}
            </p>
          </div>
        </div>

        <div class="font-roboto flex-row items-center ">
        
          <div data-dial-init>
            <div id="alert-3" class="flex items-center p-4 my-4 text-green-800 rounded-lg bg-green-50 z-30" role="alert">
              <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div class="ml-3 text-xs md:text-sm font-medium alert-message">
              </div>
              <button type="hide" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
              </button>
            </div>
          </div>

          @php
              $no = 1;
          @endphp

          @foreach ($list as $item)

          @php
              $no++;
              $hideElement = "elementToHide{$no}";
              $dataForm = "dataForm{$no}";
              $toHide = "#elementToHide{$no}";
          @endphp

            <div id="{{$hideElement}}" class="mt-4">
              <form id="{{$dataForm}}" enctype="multipart/form-data" class="">
                @csrf
                <div class="grid grid-cols-1 grid-flow-row-dense md:grid-cols-3 gap-4">

                  {{-- Date if sm, md is Hidden --}}
                  <div class="hidden lg:block lg:col-span-3">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Tanggal Sekarang</label>
                    <input type="date" class=" text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-300 dark:bg-gray-300 block w-full p-3"  required name="date" value="{{now()->format('Y-m-d')}}" readonly>
                  </div>

                  {{-- Created by is normally hidden --}}
                  <div class="hidden">
                    <label for="by" class="block mb-2 text-sm font-medium text-gray-900">
                      Dibuat oleh
                    </label>
                    <input type="text" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="created_by" value="{{auth()->user()->name}}" readonly>
                  </div>

                  {{-- Update by is normally hidden --}}
                  <div class="hidden">
                    <label for="by" class="block mb-2 text-sm font-medium text-gray-900">
                      Diubah oleh
                    </label>
                    <input type="text" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="updated_by" value="{{auth()->user()->name}}" readonly>
                  </div>

                  {{-- Computer name is visible and get data from list --}}
                  <div class="md:col-span-3">
                    <label for="computer-name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Nama Perangkat
                    </label>
                    <input type="text" id="computer-name" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-300 dark:bg-gray-300 block w-full p-3" required value="{{$item->name}}" readonly name="computer_name">
                  </div>

                  {{-- on off condition always visible but different font size --}}
                  <div>
                    <label for="on-off-condition" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Kondisi Nyala/Mati
                    </label>
                    <select id="on-off-condition" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="on_off_condition">
                      <option selected>Pilih Kondisi</option>
                      <option value="menyala">menyala</option>
                      <option value="mati">mati</option>
                    </select>
                  </div>
                  
                  {{-- on off desc always visible but different font size --}}
                  <div class="md:col-span-2">
                    <label for="on-off-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Keterangan Nyala/Mati
                    </label>
                    <input type="text" id="on-off-desc" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="on_off_desc">
                  </div>

                  {{-- uninstalled app always visible but different font size --}}
                  <div>
                    <label for="uninstalled-app" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Aplikasi di Uninstall
                    </label>
                    <input type="text" id="uninstalled-app" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="uninstalled_app">
                  </div>

                  {{-- uninstalled app desc always visible but different font size --}}
                  <div class="md:col-span-2">
                    <label for="uninstalled-app-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Keterangan Aplikasi di Uninstall
                    </label>
                    <input type="text" id="uninstalled-app-desc" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="uninstalled_app_desc">
                  </div>

                  {{-- Clean file status always visible but different font size --}}
                  <div>
                    <label for="clean-file-status" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Status Pembersihan File
                    </label>
                    <select id="clean-file-status" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="clean_file_status">
                      <option selected>Pilih Status</option>
                      <option value="hapus">hapus</option>
                      <option value="tidak hapus">tidak hapus</option>
                    </select>
                  </div>

                  {{-- clean file desc always visible but different font size --}}
                  <div class="md:col-span-2">
                    <label for="clean-file-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                      Keterangan Pembersihan File
                    </label>
                    <input type="text" id="clean-file-desc" class="text-xs sm:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none  focus:border-indigo-800 dark:border-gray-100 w-full p-3" required name="clean_file_desc">
                  </div>
                </div>
                
                {{-- button group contain submit,reset, and hidden form if form unecessary --}}
                {{-- button text hidden if viewport under sm --}}
                <div class="inline-flex rounded-md shadow-sm mt-3" role="group">
                  <button type="submit" data-form="{{$dataForm}}" class="submitButton inline-flex items-center px-4 py-2 text-sm font-medium bg-gray-900 text-white border-2 border-gray-900 rounded-l-lg hover:bg-gray-500 hover:border-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                      <path fill-rule="evenodd" d="M8 1a.75.75 0 01.75.75V6h-1.5V1.75A.75.75 0 018 1zm-.75 5v3.296l-.943-1.048a.75.75 0 10-1.114 1.004l2.25 2.5a.75.75 0 001.114 0l2.25-2.5a.75.75 0 00-1.114-1.004L8.75 9.296V6h2A2.25 2.25 0 0113 8.25v4.5A2.25 2.25 0 0110.75 15h-5.5A2.25 2.25 0 013 12.75v-4.5A2.25 2.25 0 015.25 6h2zM7 16.75v-.25h3.75a3.75 3.75 0 003.75-3.75V10h.25A2.25 2.25 0 0117 12.25v4.5A2.25 2.25 0 0114.75 19h-5.5A2.25 2.25 0 017 16.75z" clip-rule="evenodd" />
                    </svg>
                    <span class="hidden md:block">
                      Submit
                    </span>  
                  </button>
                  <button type="reset" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-900 border-2 border-t border-b border-gray-900 hover:bg-gray-500 hover:border-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                      <path fill-rule="evenodd" d="M10 4.5c1.215 0 2.417.055 3.604.162a.68.68 0 01.615.597c.124 1.038.208 2.088.25 3.15l-1.689-1.69a.75.75 0 00-1.06 1.061l2.999 3a.75.75 0 001.06 0l3.001-3a.75.75 0 10-1.06-1.06l-1.748 1.747a41.31 41.31 0 00-.264-3.386 2.18 2.18 0 00-1.97-1.913 41.512 41.512 0 00-7.477 0 2.18 2.18 0 00-1.969 1.913 41.16 41.16 0 00-.16 1.61.75.75 0 101.495.12c.041-.52.093-1.038.154-1.552a.68.68 0 01.615-.597A40.012 40.012 0 0110 4.5zM5.281 9.22a.75.75 0 00-1.06 0l-3.001 3a.75.75 0 101.06 1.06l1.748-1.747c.042 1.141.13 2.27.264 3.386a2.18 2.18 0 001.97 1.913 41.533 41.533 0 007.477 0 2.18 2.18 0 001.969-1.913c.064-.534.117-1.071.16-1.61a.75.75 0 10-1.495-.12c-.041.52-.093 1.037-.154 1.552a.68.68 0 01-.615.597 40.013 40.013 0 01-7.208 0 .68.68 0 01-.615-.597 39.785 39.785 0 01-.25-3.15l1.689 1.69a.75.75 0 001.06-1.061l-2.999-3z" clip-rule="evenodd" />
                    </svg>
                    <span class="hidden md:block">
                      Reset
                    </span>
                  </button>
                  <button type="button" data-target="{{$toHide}}" class="hideButton inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-900 border-2 border-gray-900 rounded-r-md hover:bg-gray-500 hover:border-gray-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:bg-indigo-900 dark:border-indigo-900 dark:hover:bg-indigo-950">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                      <path fill-rule="evenodd" d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.091 1.092a4 4 0 00-5.557-5.557z" clip-rule="evenodd" />
                      <path d="M10.748 13.93l2.523 2.523a9.987 9.987 0 01-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 010-1.186A10.007 10.007 0 012.839 6.02L6.07 9.252a4 4 0 004.678 4.678z" />
                    </svg>
                    <span class="hidden md:block">
                      Sembunyikan
                    </span>
                  </button>
                </div>
              </form>
            </div>
              
            <hr class="border-2 rounded-xl border-indigo-800 dark:border-gray-100 border-opacity-30 mt-5 lg:hidden">
          @endforeach
           
        </div>
      </div>
    </section>
  </div>

  <script>
    $(document).ready(function() {
        $(".hideButton").click(function() {
            const targetSelector = $(this).data("target");
            const targetElement = $(targetSelector);

            targetElement.toggle();
            if (targetElement.is(":visible")) {
                $(this).text("Hide Element");
            } else {
                $(this).text("Show Element");
            }
        });

        $(".submitButton").click(function (event) {
            event.preventDefault();
            var formData = new FormData(document.getElementById($(this).data("form")));

            var responseElement = $(this).closest('form').find('.responseMessage');

            fetch("{{ route('komputer.store') }}", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                responseElement.text(data.message);
                $(".alert-message").text(data.message);
                $(".alert-message").show();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
  </script>

  <script src="{{asset('js/darkToggle.js')}}"></script>

</body>
</html>