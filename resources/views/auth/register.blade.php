<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Teknik - Login</title>

  {{-- tailwind css using vite --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-gradient-to-t from-blue-300">

  {{-- Back Button --}}
  <nav class=" bg-transparent">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-3 px-6 md:px-0">
      <a href="{{route('homepage')}}" class="flex items-center hover:bg-indigo-600 hover:shadow-md hover:text-gray-50 rounded-lg transition duration-300 font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        <span class="self-center text-md md:text-lg font-montserrat whitespace-nowrap pl-2 pr-3 py-2">Back</span>
      </a>
    </div>
  </nav>

  {{-- Login Form --}}
  <section class="h-screen mt-12 mb-10 sm:my-0 sm:h-screen">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-bold font-montserrat text-gray-900 uppercase " data-aos="fade-down" data-aos-duration="500" data-aos-delay="100">
            Register   
        </a>
        <div class="w-full bg-gray-50 rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 font-roboto" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Create an Account
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('store')}}" method="post">
                  @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border-2 border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 focus:border-indigo-400 focus:outline-none" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border-2 border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 focus:border-indigo-400 focus:outline-none" required="">
                    </div>
                    <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                      <input type="password" name="password" id="password" class="bg-gray-50 border-2 border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 focus:border-indigo-400 focus:outline-none" required="">
                    </div>
                    <button type="submit" class="w-full text-gray-100 font-montserrat bg-gradient-to-r from-indigo-600 to-blue-500 hover:-translate-y-1 hover:scale-105 transition duration-300 focus:ring-4 focus:outline-none font-semibold rounded-lg text-sm px-5 py-2.5 text-center shadow-md">
                      Create an account
                    </button>
                    <p class="text-sm font-light text-gray-700">
                        Already have an account? <a href="{{route('login')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>

  
  {{-- js script --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>