{{-- footer --}}
<footer class="bg-white mt-6 shadow">
  <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
    <div class="sm:flex sm:items-center sm:mx-5 xl:mx-0 sm:justify-between font-roboto">
      <div class="sm:w-1/2 w-full text-center sm:text-start">
        <a href="#navbar" class="flex items-center justify-center sm:justify-start mb-4 mx-3 sm:mx-0 sm:mb-0">
          <img src="{{asset('img/logo.png')}}" class="h-8 mr-3 hidden sm:block" alt="Flowbite Logo" />
          <span class="text-xs md:text-base font-semibold whitespace-nowrap uppercase">
            Teknik dan pelayanan jasa
            <br />
            bandar udara abdulrachman saleh
          </span>
        </a>
        <p class="pt-4 text-xs md:text-base">
          Jl. Komodor Udara Abdul Rahman Saleh,<br />
          Krajan, Bunut Wetan, Kec. Pakis Kabupaten Malang, <br />
          Jawa Timur 65154
          <br />
          <br />
          Telp ( 0341 ) 2992700
        </p>
      </div>
      <div>
        <ul class="flex flex-wrap items-center my-7 justify-center sm:mt-0 text-xs md:text-base font-medium text-gray-500 sm:mb-0">
          <li>
            <a id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2" class="mr-4 hover:border-b-2 border-gray-500 transition duration-200 md:mr-6 cursor-pointer inline-flex items-center py-1" type="button">
              Alat
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </a>
            <!-- Dropdown menu -->
            <div id="dropdown2" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow w-44">
              <ul class="py-2 text-gray-700 font-montserrat text-sm" aria-labelledby="dropdownHoverButton">
                <li>
                  <a href="{{route('tool.cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
                </li>
                <li>
                  <a href="{{route('tool.komputer.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                </li>
                <li>
                  <a href="{{route('tool.fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="mr-4 hover:border-b-2 border-gray-500 transition duration-200 md:mr-6 py-1">Layanan</a>
          </li>
          <li>
            <a href="{{route('kontak.user.index')}}" class="mr-4 hover:border-b-2 border-gray-500 transition duration-200 md:mr-6 py-1">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <hr class="h-px my-8 bg-gray-200 border-0" />
      <span class="block text-xs md:text-base text-gray-500 text-center font-roboto">
        © 2023
        <a href="https://abdulrachmansaleh-airport.com/" class="hover:border-b-2 border-gray-500 transition duration-200"> UPT Bandara Abdulrachman Saleh</a>
        . All Rights Reserved.
      </span>
    </div>
  </div>
</footer>
