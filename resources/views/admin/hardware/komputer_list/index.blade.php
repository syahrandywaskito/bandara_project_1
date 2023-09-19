<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon" />
    <title>Admin - Perangkat</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
              class="inline-flex items-center p-2 text-sm text-gray-100 rounded-lg sm:hidden hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
            <a href="{{route('cctv.index')}}" class="flex ml-2 md:mr-24">
              <img src="{{asset('img/logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center uppercase font-roboto font-semibold hidden sm:block sm:text-base md:text-lg lg:text-xl text-gray-100 whitespace-nowrap">Perangkat - Komputer</span>
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
          <div class="bg-gray-50 border border-gray-100 dark:bg-indigo-950 dark:border-0 rounded-lg shadow-lg px-5 py-8 md:p-12 lg:mb-8">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 dark:text-gray-100 shadow-sm" aria-label="Breadcrumb">
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
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium text-gray-700 md:ml-2">List Komputer</span>
                  </div>
                </li>
              </ol>
            </nav>
            <h1 class="text-gray-900 dark:text-gray-200 mt-8 text-base md:text-lg xl:text-xl uppercase font-roboto font-bold mb-4">
              List Perangkat Komputer
            </h1>
            <p class="text-sm lg:text-lg font-normal font-montserrat text-gray-500 dark:text-gray-200 mb-3">
              Tabel perangkat ini akan menampilkan data dari nama perangkat Komputer. Nama perangkat dapat diubah dan dihapus
            </p>

            {{-- Menu opsi --}}
            <div class="pt-3 lg:flex items-center flex-row space-y-7 lg:space-x-4 lg:space-y-0">
              {{-- add data --}}
              <div>
                <button
                  type="button"
                  data-modal-target="create-modal"
                  data-modal-toggle="create-modal"
                  class="px-5 py-3.5 text-xs sm:text-sm md:text-base font-medium text-center inline-flex items-center text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200 dark:bg-gray-100 dark:text-green-700 dark:hover:bg-indigo-900 dark:hover:text-gray-100 dark:border-gray-100"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" />
                  </svg>
                  Tambah
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="px-4 mx-auto max-w-screen-xl">
          <div class="relative overflow-x-auto shadow-lg bg-gray-50 dark:bg-indigo-950 dark:border-0 sm:rounded-lg p-4">
            <table class="w-full text-sm text-left">
              <caption class="p-5 text-sm lg:text-base font-semibold text-left text-gray-900 dark:text-gray-200 font-montserrat">
                <span class="uppercase">Tabel Perangkat</span>
              </caption>
              <thead class="text-xs text-gray-100 uppercase bg-indigo-800 dark:bg-gray-100 dark:text-gray-900 text-center font-roboto">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    No
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Nama Perangkat
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Aksi
                  </th>
                </tr>
              </thead>
              @php $no = 1; @endphp
              <tbody class="font-roboto text-center text-xs md:text-sm dark:text-gray-200">
                @foreach ($list as $data)
                <tr>
                  <td class="px-6 py-4">
                    {{$no++}}
                  </td>
                  <td class="px-6 py-4">
                    {{$data->name}}
                  </td>
                  <td class="px-6 py-4">
                    <form onsubmit="return confirm('Apakah anda ingin menghapus data ini ?')" action="{{route('list.komputer.destroy', $data->id)}}" method="post">
                      @csrf @method('DELETE')
                      <div class="inline-flex rounded-md shadow-md" role="group">
                        <a
                          href="{{route('list.komputer.edit', $data->id)}}"
                          class="inline-flex items-center px-4 py-2 text-xs md:text-sm font-medium text-gray-50 bg-indigo-800 rounded-l-lg hover:bg-gray-100 hover:text-indigo-800 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-gray-100 dark:text-indigo-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2 h-5">
                            <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                            <path
                              d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"
                            />
                          </svg>
                          Edit
                        </a>
                        <button
                          type="submit"
                          class="inline-flex items-center px-4 py-2 text-xs md:text-sm font-medium text-gray-50 bg-indigo-800 rounded-r-md hover:bg-gray-100 hover:text-red-800 focus:z-10 focus:ring-2 focus:ring-red-800 focus:bg-gray-100 focus:text-red-800 dark:bg-gray-100 dark:text-red-800 dark:hover:bg-indigo-900 dark:hover:text-gray-100 transition duration-200"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-1 h-5">
                            <path
                              fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                              clip-rule="evenodd"
                            />
                          </svg>
                          Delete
                        </button>
                      </div>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>

    {{-- Create Data Modal--}}
    <div id="create-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white dark:bg-edit-dark bg-cover rounded-lg shadow">
          <div class="px-6 py-6 lg:px-8 font-montserrat">
            <h3 class="mb-4 text-sm sm:text-base md:text-lg font-medium text-gray-900 dark:text-gray-200">Tambah Data</h3>
            <form class="space-y-6" action="{{route('list.komputer.store')}}" method="POST">
              @csrf
              <div>
                <label for="name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-white">Nama Monitor FIDS</label>
                <input type="text" name="name" class="text-xs md:text-sm text-gray-900 bg-gray-50 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 w-full p-3" required />
              </div>
              <button
                type="submit"
                class="w-full text-gray-50 bg-indigo-800 rounded-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-indigo-800 transition duration-200 text-xs md:text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-gray-100"
              >
                Tambah
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    {{-- success notif --}} @include('components.dashboard.successnotif')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="{{asset('js/darkToggle.js')}}"></script>
  </body>
</html>
