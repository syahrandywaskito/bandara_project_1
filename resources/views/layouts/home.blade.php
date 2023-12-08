<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>

          {{-- * Page Title --}}
          @yield('title', 'Homepage')

    </title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />

    {{-- * Animation Off --}}
    <style>
      @media only screen and (max-width: 768px) {
        [data-aos] {
          opacity: 1 !important;
          transform: none !important;
        }
      }
    </style>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])

  </head>
  <body 
        {{-- * Body color untuk setiap halaman yang berbeda --}}
        class="@yield('body_color', 'bg-gradient-to-t from-blue-300')"
  >


    {{-- * Web Page Content --}}
    @yield('content')

    {{-- * footer --}} 
    @include('components.home.footer') 

    {{-- * JS AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    {{-- * JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- * Clock  --}}
    <script>
      $(document).ready(function () {
        // Function to update the clock display
        function updateClock() {
          const now = new Date();
          const hours = now.getHours();
          const minutes = now.getMinutes();
          const seconds = now.getSeconds();

          const formattedTime = `${formatNumber(hours)} : ${formatNumber(minutes)} : ${formatNumber(seconds)}`;

          $(".clock").html(formattedTime); // Update the clock element's contents
        }

        // Helper function to format numbers with leading zeros
        function formatNumber(number) {
          return (number < 10 ? "0" : "") + number;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial clock update
        updateClock();
      });
    </script>

    {{-- * Self JS --}}
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="{{asset('js/smoothScroll.js')}}"></script>
  </body>
</html>