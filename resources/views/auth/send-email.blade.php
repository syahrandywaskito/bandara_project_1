<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Kirim Email</title>

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
  <body class="bg-login bg-cover bg-bottom sm:overflow-hidden">
    {{-- Back Button --}}

    <div class="md:fixed sm:left-8 sm:mt-0 mt-5 top-10 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 md:px-0">
      <a href="{{route('login')}}" class="flex items-center hover:bg-indigo-600 hover:shadow-md hover:text-gray-50 rounded-lg transition duration-300 font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        <span class="self-center text-sm md:text-base font-roboto uppercase whitespace-nowrap pl-2 pr-3 py-2">Kembali</span>
      </a>
    </div>

    {{-- Login Form --}}
    <section class="mt-12 sm:my-0 h-screen">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-gray-50 bg-opacity-60 rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8 font-roboto" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
            <h1 class="font-bold leading-tight tracking-tight uppercase text-gray-900 text-sm md:text-lg">
              Kirim Email Kamu
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{route('send-email.send')}}" method="POST">
              @csrf

              {{-- email --}}
              <div>

                {{-- label --}}
                <label for="email" class="block mb-2 text-xs md:text-sm font-medium text-gray-900">Email</label>

                {{-- input --}}
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="bg-gray-50 border-2 border-gray-100 text-gray-900 rounded-lg block w-full p-2.5 focus:ring-indigo-400 focus:ring-2 focus:outline-none @error('email') is-invalid @enderror text-xs md:text-sm"
                  required
                  autofocus
                  value="{{old('email')}}"
                />

                {{-- error notif --}}
                @error('email')
                    <div class="mt-3">
                      @include('components.dashboard._input-error-notif')
                    </div>
                @enderror
              </div>
              <button
                type="submit"
                class="w-full text-gray-100 font-montserrat bg-gradient-to-r from-indigo-600 to-blue-500 hover:-translate-y-1 hover:scale-105 transition duration-300 focus:ring-4 focus:outline-none font-semibold rounded-lg px-5 py-2.5 text-center shadow-md text-xs md:text-sm"
              >
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    @if ($message = Session::get('success'))
    <div class="fixed right-10 top-5" data-aos="fade-left" id="alert-box">
      <div id="alert-3" class="flex items-center shadow-md p-4 mb-4 text-green-800 rounded-lg bg-green-50 font-montserrat" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <div class="mx-4 text-sm font-medium">
          {{ $message }}
        </div>
        <button
          type="button"
          class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
          data-dismiss-target="#alert-3"
          aria-label="Close"
        >
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
        </button>
      </div>
    </div>
    @endif 

    <script src="{{asset('js/hide-password.js')}}"></script>

    <script src="{{asset('js/hide-alert.js')}}"></script>

    {{-- js script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
