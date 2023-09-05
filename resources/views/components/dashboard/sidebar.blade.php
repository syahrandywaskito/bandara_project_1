
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-indigo-800 border-r-4 border-indigo-900  dark:bg-indigo-950 dark:border-0" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto">
      <ul class="space-y-2 font-medium font-roboto">
        <li>
            <a href="{{route('dashboard')}}" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150">
              <svg class="w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
              </svg>
              <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
          <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150 cursor-pointer" type="button">
            <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
              <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
            </svg>
            <span class="ml-3">Laporan</span>
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </a>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow-md w-44">
            <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="{{route('cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
              </li>
              <li>
                <a href="{{route('komputer.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
              </li>
              <li>
                <a href="{{route('fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
              </li>
            </ul>
          </div>
        </li>

        <li>
          <a id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150 cursor-pointer" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-100  group-hover:text-gray-900">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
            </svg>              
            <span class="ml-3">Perangkat</span>
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </a>
          <!-- Dropdown menu -->
          <div id="dropdown2" class="z-10 hidden bg-gray-100 divide-y divide-gray-100 rounded-lg shadow-md w-44">
            <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="{{route('list.cctv.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">CCTV</a>
              </li>
              <li>
                <a href="" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
              </li>
              <li>
                <a href="{{route('list.fids.index')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
              </li>
            </ul>
          </div>
        </li>
        
        @if (auth()->user()->position == 'Informasi' || auth()->user()->position == 'Kepala Seksi Teknik')
          <li>
              <a href="#" class="flex items-center p-2 text-gray-100 rounded-lg hover:text-gray-900 hover:bg-gray-100 group transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                  <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                </svg> 
                <span class="flex-1 ml-3 whitespace-nowrap">Jadwal</span>
              </a>
          </li>
        @endif

        <li>
            <a href="{{route('users.index')}}" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Pengguna</span>
            </a>
        </li>
        <li>
            <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-100 rounded-lg hover:text-gray-900 hover:bg-gray-100 group transition duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>                
              <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
            </a>
        </li>
      </ul>
  </div>
</aside>
