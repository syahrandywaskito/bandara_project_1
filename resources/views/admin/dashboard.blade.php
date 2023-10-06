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
            <h1 class="text-gray-900 dark:text-gray-200 text-base text-center uppercase md:text-lg xl:text-2xl font-roboto font-bold mb-4">Selamat Datang di Dashboard Admin</h1>
            <p class="text-sm lg:text-base xl:text-lg text-center font-normal font-montserrat text-gray-600 dark:text-gray-200 mb-3">
              <strong>Admin Dashboard</strong> atau <strong>Dashboard Admin</strong> adalah bagian yang berfungsi agar pengguna yang terdaftar untuk masuk ke Dashboard dapat menambahkan, menghapus, dan mengedit data-data yang ditampilkan pada halaman non-Dashboard atau yang biasa disebut
              <em>Tampilan Pengguna</em> atau <em>Landing Page</em>. Jika anda sudah masuk ke halaman Dashboard Admin maka anda sudah mendaftar dan mendapat izin dari pihak yang mengelola website ini.
            </p>
          </div>
        </div>

        {{-- Timeline Pembuatan Laporan --}}
        <div class="px-4 pb-8 mx-auto max-w-screen-xl">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <h2 class="inline-flex items-center text-gray-900 dark:text-gray-200 text-base uppercase md:text-lg xl:text-xl font-roboto font-bold mb-6">
              <svg class="flex-shrink-0 w-5 mr-3 h-5 text-gray-900 dark:text-gray-200 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path
                  d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"
                />
              </svg>
              Panduan dalam pembuatan laporan pengecekan
            </h2>
            <p class="text-sm lg:text-base xl:text-lg font-normal text-gray-600 dark:text-gray-200 mb-4">
              Selamat datang di <em>Panduan Pembuatan Laporan</em>. Panduan ini akan membantu anda memahami langkah-langkah yang diperlukan untuk menginput data laporan dengan benar dan efisien.
            </p>
            
            <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10 font-roboto">
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Penambahan Perangkat
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Menambahkan nama perangkat yang akan di cek 
                </h3>
                <p class="mb-4 text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Penambahan perangkat berfungsi untuk menambahkan input laporan yang ada pada bagian laporan tambah data.
                </p>
              </li>
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Pembuatan Laporan
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Pembuatan laporan dari hasil pengecekan perangkat
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Laporan dibuat dari data pengecekan yang dilakukan setiap hari. Input data akan muncul sesuai dengan perangkat yang ditambahkan sebelumnya. Pembuatan laporan akan di atur perhari, jika ingin memasukkan laporan pada tanggal yang diinginkan, maka ubah tanggal pada input tanggal.
                </p>
              </li>
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Tampilan Laporan
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Menampilkan laporan dalam bentuk tabel
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Laporan akan ditampilkan dalam bentuk tabel yang lengkap dengan <em>Aksi</em> yang dapat dilakukan kepada data seperti : <strong>Edit</strong>, <strong>Lihat</strong>, dan <strong>Delete</strong>. Laporan akan ditampilkan sesuai hari ini saja, jika ingin melihat laporan tanggal sebelumnya, maka ubah pada input tanggal.
                </p>
              </li>
              <li class="ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Download Laporan
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Mendownload laporan dalam bentuk PDF
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Laporan dapat di download oleh semua orang yang ingin melihat laporan tersebut yang tersedia dalam bentuk PDF yang akan direkap perbulan.
                </p>
              </li>
            </ol>

          </div>
        </div>

        {{-- Timeline Pembuatan berita --}}
        <div class="px-4 pb-8 mx-auto max-w-screen-xl">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <h2 class="inline-flex items-center text-gray-900 dark:text-gray-200 text-base uppercase md:text-lg xl:text-xl font-roboto font-bold mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mr-3 h-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"
                />
              </svg>
              Panduan dalam pembuatan berita
            </h2>
            <p class="text-sm lg:text-base xl:text-lg font-normal text-gray-600 dark:text-gray-200 mb-4">
              Selamat datang di <em>Panduan Pembuatan Berita</em>. Panduan ini akan membantu anda memahami langkah-langkah dalam membuat berita terkini sesuai peristiwa yang ada dan terjadi.
            </p>
            
            <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10 font-roboto">
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Penambahan Berita
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Menambahkan berita pada halaman tambah berita
                </h3>
                <p class="mb-4 text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Penambahan berita ini dapat dilakukan oleh siapa saja yang dapat mengakses dashboard. Syarat yang harus dipatuhi yaitu berita harus bersifat fakta dan aktual
                </p>
              </li>
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Tampilan Berita
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Tampilan berita dalam bentuk tabel
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Berita ditampilkan dalam bentuk tabel, lengkap dengan aksi yang dapat dipilih seperti : <strong>Edit</strong>, <strong>Lihat</strong>, dan <strong>Delete</strong>.
                </p>
              </li>
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Landing Page Berita
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Menampilkan berita pada landing page
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Berita akan ditampilkan pada <em>Landing Page</em>, dan dapat di buka untuk melihat secara lengkap isi berita.
                </p>
              </li>
            </ol>
          
          </div>
        </div>

        {{-- Timeline Pembuatan Jadwal --}}
        <div class="px-4 pb-8 mx-auto max-w-screen-xl">
          <div class="bg-gray-50 border border-gray-100 dark:border-0 dark:bg-indigo-950 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <h2 class="inline-flex items-center text-gray-900 dark:text-gray-200 text-base uppercase md:text-lg xl:text-xl font-roboto font-bold mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-3 h-6">
                <path
                  d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                />
                <path
                  fill-rule="evenodd"
                  d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                  clip-rule="evenodd"
                />
              </svg>
              Panduan dalam pembuatan jadwal
            </h2>
            <p class="text-sm lg:text-base xl:text-lg font-normal text-gray-600 dark:text-gray-200 mb-4">
              Selamat datang di <em>Panduan Pembuatan Jadwal</em>. Panduan ini akan membantu anda memahami langkah-langkah dalam membuat jadwal penerbangan yang sesuai dengan FIDS pada bandara.
            </p>
            
            <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10 font-roboto">
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Penambahan Jadwal
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Menambahkan jadwal pada halaman tambah jadwal
                </h3>
                <p class="mb-4 text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Penambahan berita ini dapat dilakukan oleh siapa saja yang dapat mengakses dashboard. Syarat yang harus dipatuhi yaitu jadwal harus sesuai dengan data yang ada, usahakan tidak ada kesalahan yang disengaja dalam menginput jadwal. 
                </p>
              </li>
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Tampilan Jadwal
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Tampilan berita dalam bentuk tabel
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Berita ditampilkan dalam bentuk tabel yang dibagi menjadi tabel keberangkatan dan kedatangan, lengkap dengan aksi yang dapat dipilih seperti : <strong>Edit</strong>, <strong>Lihat</strong>, dan <strong>Delete</strong>.
                </p>
              </li>
              <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-indigo-800 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-400"></div>
                <span class="mb-1 text-xs md:text-sm font-normal leading-none text-indigo-700 dark:text-gray-300">
                  Landing Page Jadwal
                </span>
                <h3 class="text-xs sm:text-sm md:text-base font-semibold text-gray-900 dark:text-gray-50 uppercase">
                  Menampilkan jadwal pada landing page
                </h3>
                <p class="text-xs sm:text-sm md:text-base font-normal text-gray-600 dark:text-gray-300">
                  Jadwal akan ditampilkan pada <em>Landing Page</em>, dan dibagi menjadi jadwal keberangkatan dan kedatangan.
                </p>
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
