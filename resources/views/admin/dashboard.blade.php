<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Dashboard</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="{{asset('js/onPageLoad.js')}}"></script>
   {{-- tailwind css using vite --}}
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="dark:bg-slate-900">
  
  {{-- sidebar & navbar --}}
  <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900 dark:bg-indigo-950 dark:border-slate-900     ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg sm:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
          </button>
          <a href="{{route('dashboard')}}" class="flex ml-2 md:mr-24">
            <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-lg uppercase font-roboto font-semibold sm:text-xl text-gray-100 whitespace-nowrap">Dashboard</span>
          </a>
        </div>
        
        <div class="flex items-center">
          {{-- Dark toggle --}}
            <div>
              <button id="theme-toggle" type="button" class="text-gray-100 hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm p-2.5 transition duration-200">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
              </button>
            </div>

            {{-- User Profile Menu --}}
            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-white rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 p-1 rounded-full" src="{{asset('img/user.png')}}" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-gray-100 divide-y divide-gray-100 rounded shadow-md" id="dropdown-user">
                <div class="px-4 py-3 font-roboto" role="none">
                  <p class="text-sm text-gray-900" role="none">
                    {{auth()->user()->name}}
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate" role="none">
                    {{auth()->user()->email}}
                  </p>
                </div>
                <ul class="py-1 font-roboto" role="none">
                  <li>
                    <a href="{{route('dashboard')}}" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>

  @include('components.dashboard.sidebar')

  <div class="py-7 px-5 sm:ml-64">
    <section class="bg-white dark:bg-slate-900">
      <div class="py-10 px-4 mx-auto max-w-screen-xl lg:pt-16 lg:pb-0">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg p-8 md:p-12 mb-8">
              <h1 class="text-gray-900 dark:text-gray-200 text-3xl md:text-4xl font-roboto font-bold mb-4">
                Selamat Datang di Admin Page
              </h1>
              <p class="text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
                <strong>Admin Page</strong> atau <strong>Halaman Admin</strong> adalah halaman yang berfungsi agar admin dapat menambahkan, menghapus, dan mengedit data-data yang ditampilkan pada halaman non-admin atau yang biasa disebut <em>Guest User</em>. Jika anda sudah masuk ke halaman Dashboard Admin maka anda sudah mendaftar dan mendapat izin dari pihak yang mengelola website ini.
              </p>
          </div>
      </div>
      <div class="px-4 mx-auto max-w-screen-xl">
            <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-gray-200 text-3xl font-roboto font-bold mb-2">
                  Panduan dalam menggunakan Admin Page
                </h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-200 mb-4">
                  Selamat datang di <strong>Admin Page</strong>. Panduan ini akan membantu Anda memahami langkah-langkah yang diperlukan untuk menginput data laporan dengan benar dan efisien.
                </p>
                <h3 class="text-lg font-normal text-gray-500 dark:text-gray-200 mb-4"><strong>Input data baru</strong></h3>
                <ol class="text-lg font-normal text-gray-500 dark:text-gray-200 mb-4 list-decimal ml-4">
                  <li>Pilih menu untuk menginput data</li>
                  <li>Tekan tombol Add untuk menambahkan data baru</li>
                  <li>Masukkan data sesuai dengan format yang sudah tersedia</li>
                  <li>Setelah selesai, tekan tombol submit</li>
                  <li>Jika ingin mengulang input, tekan tombol reset</li>
                </ol>
                <h3 class="text-lg font-normal text-gray-500 dark:text-gray-200 mb-4"><strong>Edit data yang sudah ada</strong></h3>
                <ol class="text-lg font-normal text-gray-500 mb-4 dark:text-gray-200 list-decimal ml-4">
                  <li>Tekan tombol Edit sesuai dengan data yang ingin diedit</li>
                  <li>Ganti data yang sudah ada dengan data yang baru</li>
                  <li>Setelah selesai, tekan tombol Submit</li>
                </ol>
                <h3 class="text-lg font-normal text-gray-500 dark:text-gray-200 mb-4"><strong>Hapus data</strong></h3>
                <ol class="text-lg font-normal text-gray-500 dark:text-gray-200 mb-4 list-decimal ml-4">
                  <li>Tekan tombol Delete sesuai dengan data yang ingin di delete</li>
                  <li>Untuk memastikan apakah data benar-benar akan dihapus, tekan Yes untuk mengkonfirmasi</li>
                </ol>
            </div>
      </div>
    </section>
  </div>

  @if ($message = Session::get('success'))
  <dir class="fixed top-28 right-10" data-aos="fade-left">
    <div id="alert-3" class="flex items-center shadow-md p-4 mb-4 text-green-800 rounded-lg bg-green-50 font-montserrat" role="alert">
      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <div class="mx-4 text-sm font-medium">
        {{ $message }}
      </div>
      <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
      </button>
    </div>
  </dir>
  @endif
  

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="{{asset('js/darkToggle.js')}}"></script>

</body>
</html>