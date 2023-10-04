<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Teknik - Register</title>

    <style>
      @media only screen and (max-width: 768px) {
        [data-aos] {
          opacity: 1 !important;
          transform: none !important;
        }
      }
    </style>
    {{-- tailwind css using vite --}} @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="bg-[#94c5fd] sm:bg-login bg-cover bg-bottom sm:overflow-hidden">
    {{-- Back Button --}}
    <div class="md:fixed sm:left-8 top-10 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-3 px-6 md:px-0">
      <a href="{{route('homepage')}}" class="flex items-center hover:bg-indigo-600 hover:shadow-md hover:text-gray-50 rounded-lg transition duration-300 font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        <span class="self-center text-sm md:text-base font-roboto uppercase whitespace-nowrap pl-2 pr-3 py-2">Kembali</span>
      </a>
    </div>

    {{-- Register Form --}}
    <section class="h-screen mt-12 sm:my-0">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{route('register')}}" class="flex items-center mb-6 text-sm md:text-lg xl:text-2xl font-bold font-montserrat text-gray-900 uppercase" data-aos="fade-down" data-aos-duration="500" data-aos-delay="100">
          Register
        </a>
        <div class="w-full bg-gray-50 bg-opacity-60 rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8 font-roboto" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
            <h1 class="text-md uppercase font-bold leading-tight tracking-tight text-gray-900 text-sm md:text-lg">
              Buat Akun
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{route('store')}}" method="post">
              @csrf {{-- Nama lengkap --}}
              <div>
                {{-- label --}}
                <label for="name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900">Nama Lengkap</label>

                {{-- input --}}
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="bg-gray-50 border-2 border-gray-100 text-gray-900 text-xs md:text-sm rounded-lg block w-full p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none @error('name') is-invalid @enderror"
                  value="{{old('name')}}"
                  required=""
                  autofocus
                  title="Nama tidak boleh mengandung angka"
                  pattern="[a-zA-Z]+"
                />

                {{-- error notif jika input salah --}} @error('name')
                <div class="mt-3">
                  @include('components.dashboard.input-error-notif')
                </div>
                @enderror
              </div>

              {{-- email --}}
              <div>
                {{-- label --}}
                <label for="email" class="block mb-2 text-xs md:text-sm font-medium text-gray-900">Email</label>

                {{-- input --}}
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="bg-gray-50 border-2 border-gray-100 text-gray-900 text-xs md:text-sm rounded-lg block w-full p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none @error('email') is-invalid @enderror"
                  value="{{old('email')}}"
                  required=""
                />

                {{-- error notif --}} @error('email')
                <div class="mt-3">
                  @include('components.dashboard.input-error-notif')
                </div>
                @enderror
              </div>

              {{-- password --}}
              <div>
                {{-- label --}}
                <label for="passwordInput" class="mb-2 text-xs md:text-sm font-medium text-gray-900 flex" title="Password harus memuat 1 Kapital, minimal 8 karakter, dan minimal 1 angka">
                  Password
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 ml-1 h-5">
                    <path
                      fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </label>

                {{-- input --}}
                <div class="flex">
                  <input
                    type="password"
                    id="passwordInput"
                    name="password"
                    class="bg-gray-50 border-2 border-gray-100 text-gray-900 text-xs md:text-sm rounded-lg block w-full p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none @error('password') is-invalid @enderror"
                    required
                    value="{{old('password')}}"
                    id="password"
                    title="Kata sandi harus memiliki panjang minimal 8 karakter dan mengandung setidaknya satu huruf kapital, huruf kecil, dan angka."
                    maxlength="15"
                    minlength="8"
                    aria-label="Password"
                    aria-describedby="password-addon"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
                  />

                  {{-- show hide password --}}
                  <button
                    type="button"
                    id="togglePassword"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                  >
                    <div id="eyeIcon">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path
                          fill-rule="evenodd"
                          d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.091 1.092a4 4 0 00-5.557-5.557z"
                          clip-rule="evenodd"
                        />
                        <path d="M10.748 13.93l2.523 2.523a9.987 9.987 0 01-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 010-1.186A10.007 10.007 0 012.839 6.02L6.07 9.252a4 4 0 004.678 4.678z" />
                      </svg>
                    </div>
                  </button>
                </div>

                {{-- error notif --}} @error('password')
                <div class="mt-3">
                  @include('components.dashboard.input-error-notif')
                </div>
                @enderror
              </div>

              {{-- pilih jabatan --}}
              <div>
                {{-- label --}}
                <label for="position" class="block mb-2 text-xs md:text-sm font-medium text-gray-900">Jabatan</label>

                {{-- input --}}
                <select
                  id="position"
                  class="bg-gray-50 border-2 border-gray-100 text-gray-900 text-xs md:text-sm rounded-lg p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none block w-full @error('position') is-invalid @enderror"
                  name="position"
                  value="{{old('position')}}"
                  required
                >
                  <option selected class="bg-gray-300">Pilih Jabatan</option>
                  <option value="Kepala Seksi Teknik">Kepala Seksi Teknik</option>
                  <option value="Pemeriksa Sanitasi">Pemeriksa Sanitasi</option>
                  <option value="Pengelola Terminal">Pengelola Terminal</option>
                  <option value="Pengelola Retribusi Terminal">Pengelola Retribusi Terminal</option>
                  <option value="Teknisi">Teknisi</option>
                  <option value="Analisis Penerbangan">Analisis Penerbangan</option>
                  <option value="Informasi">Informasi</option>
                  <option value="input">Jabatan lain</option>
                </select>

                <div id="inputField" style="display: none;" class="mt-3">
                  <input
                    type="text"
                    id="otherPosition"
                    name="position"
                    placeholder="Masukkan Jabatan Lainnya"
                    class="bg-gray-50 border-2 border-gray-100 text-gray-900 text-xs md:text-sm rounded-lg p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none block w-full capitalize"
                  >
                </div>                

                {{-- error notif --}} @error('position')
                <div class="mt-3">
                  @include('components.dashboard.input-error-notif')
                </div>
                @enderror
              </div>

              {{-- button --}}
              <button
                type="submit"
                class="w-full text-gray-100 font-montserrat bg-gradient-to-r from-indigo-600 to-blue-500 hover:-translate-y-1 hover:scale-105 transition duration-300 focus:ring-4 focus:outline-none font-semibold rounded-lg text-xs md:text-sm px-5 py-2.5 text-center shadow-md"
              >
                Buat Akun
              </button>
              <p class="text-xs md:text-sm font-light text-gray-700">Sudah punya akun ? <a href="{{route('login')}}" class="font-medium text-primary-600 hover:text-indigo-500">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="{{asset('js/hide-password.js')}}"></script>

    {{-- js script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
