<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon" />
    <title>Admin - Dashboard</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="{{asset('js/onPageLoad.js')}}"></script>
    {{-- tailwind css using vite --}} @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="dark:bg-slate-900 bg-white">
    {{-- sidebar & navbar --}}
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
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                ></path>
              </svg>
            </button>
            <a href="{{route('dashboard')}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center uppercase font-roboto font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 whitespace-nowrap">Dashboard</span>
            </a>
          </div>
          <div class="flex items-center">
            {{-- Dark toggle --}} @include('components.dashboard.darktoggle') {{-- User Profile Menu --}} @include('components.dashboard.userprofile')
          </div>
        </div>
      </div>
    </nav>
    @include('components.dashboard.sidebar')
    <div class="py-7 md:px-5 lg:ml-64">
      <section class="bg-white dark:bg-slate-900">
        <div class="pt-16 pb-5 px-4 mx-auto max-w-screen-xl">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12 lg:mb-8">
            <h1 class="text-gray-900 dark:text-gray-200 text-base text-center uppercase md:text-lg xl:text-2xl font-roboto font-bold mb-4">Selamat Datang di Admin Page</h1>
            <p class="text-sm lg:text-base xl:text-lg text-center font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              <strong>Admin Page</strong> atau <strong>Halaman Admin</strong> adalah halaman yang berfungsi agar admin dapat menambahkan, menghapus, dan mengedit data-data yang ditampilkan pada halaman non-admin atau yang biasa disebut
              <em>Guest User</em>. Jika anda sudah masuk ke halaman Dashboard Admin maka anda sudah mendaftar dan mendapat izin dari pihak yang mengelola website ini.
            </p>
          </div>
        </div>
        <div class="px-4 mx-auto max-w-screen-xl">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <h2 class="text-gray-900 dark:text-gray-200 text-base uppercase md:text-lg xl:text-2xl font-roboto font-bold mb-6">Panduan dalam menggunakan Admin Page</h2>
            <p class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 dark:text-gray-200 mb-4">
              Selamat datang di <strong>Admin Page</strong>. Panduan ini akan membantu Anda memahami langkah-langkah yang diperlukan untuk menginput data laporan dengan benar dan efisien.
            </p>
            <h3 class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 dark:text-gray-200 mb-4"><strong>Input data baru</strong></h3>
            <ol class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 dark:text-gray-200 mb-4 list-decimal ml-4">
              <li>Pilih menu untuk menginput data</li>
              <li>Tekan tombol Add untuk menambahkan data baru</li>
              <li>
                Masukkan data sesuai dengan format yang sudah tersedia
              </li>
              <li>Setelah selesai, tekan tombol submit</li>
              <li>Jika ingin mengulang input, tekan tombol reset</li>
            </ol>
            <h3 class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 dark:text-gray-200 mb-4"><strong>Edit data yang sudah ada</strong></h3>
            <ol class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 mb-4 dark:text-gray-200 list-decimal ml-4">
              <li>
                Tekan tombol Edit sesuai dengan data yang ingin diedit
              </li>
              <li>Ganti data yang sudah ada dengan data yang baru</li>
              <li>Setelah selesai, tekan tombol Submit</li>
            </ol>
            <h3 class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 dark:text-gray-200 mb-4"><strong>Hapus data</strong></h3>
            <ol class="text-sm lg:text-base xl:text-lg font-normal text-gray-500 dark:text-gray-200 mb-4 list-decimal ml-4">
              <li>
                Tekan tombol Delete sesuai dengan data yang ingin di delete
              </li>
              <li>
                Untuk memastikan apakah data benar-benar akan dihapus, tekan Yes untuk mengkonfirmasi
              </li>
            </ol>
          </div>
        </div>
      </section>
    </div>

    @if ($message = Session::get('errors'))
      <div class="fixed top-28 right-10" data-aos="fade-left" id="alert-box">
        @include('components.dashboard.input-error-notif')
      </div>
    @endif

    {{-- success notif --}} @include('components.dashboard.successnotif')
    <script src="{{asset('js/hide-alert.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{asset('js/darkToggle.js')}}"></script>
  </body>
</html>
