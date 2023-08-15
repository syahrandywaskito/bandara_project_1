<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  <title>Admin - Dashboard</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   {{-- tailwind css using vite --}}
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  
  {{-- sidebar & navbar --}}
  <nav class="fixed top-0 z-50 w-full bg-indigo-800 border-b-4 border-indigo-900">
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
            <span class="self-center text-xl font-roboto font-semibold sm:text-2xl text-gray-100 whitespace-nowrap">CCTV - Add Data</span>
          </a>
        </div>
        <div class="flex items-center">
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
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Earnings</a>
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

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-indigo-800 border-r-4 border-indigo-900" aria-label="Sidebar">
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
              <span class="ml-3">Report</span>
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
                  <a href="{{route('komputer')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">Komputer</a>
                </li>
                <li>
                  <a href="{{route('fids')}}" class="block px-4 py-2 hover:translate-x-1 transition duration-200">FIDS</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li>
              <a href="#" class="flex items-center p-2 text-gray-100 rounded-lg hover:text-gray-900 hover:bg-gray-100 group transition duration-150">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
              </a>
          </li>
          <li>
              <a href="#" class="flex items-center p-2 text-gray-100 rounded-lg hover:bg-gray-100 hover:text-gray-900 group transition duration-150">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-100  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
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
  

  

  <div class="py-7 px-5 sm:ml-64">  
    <section class="bg-white">
      <div class="py-16 px-4 mx-auto max-w-screen-xl text-start lg:py-16">
        <div class="bg-gray-50 border border-gray-100 rounded-lg shadow-md p-8 md:p-8 mb-8"> 


          @php
              // use Illuminate\Support\Facades\DB;
              // $hardware_name = DB::table('cctv_models')->select('hardware_name')->pluck('hardware_name');
              // var_dump($hardware_name);
          @endphp

          <!-- Breadcrumb -->
          <nav class="flex px-5 py-3 text-gray-900 border-2 border-gray-200 rounded-lg bg-gray-200 shadow-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
              <li class="inline-flex items-center">
                <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-indigo-600">
                  <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Dashboard
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="{{route('cctv.index')}}" class="ml-1 text-sm font-medium text-gray-900 hover:text-indigo-600 md:ml-2">CCTV</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2">Add Data</span>
                </div>
              </li>
            </ol>
          </nav>

         

          <h1 class="text-gray-900 lg:px-2 mt-6 text-lg md:text-xl font-montserrat font-bold">
            Add Data Page
          </h1>
          <div class="lg:hidden font-montserrat pt-3">
            <h3>Current Date</h3>
            <p>
              {{now()->format('l')}}, {{now()->format('d M Y')}}
            </p>
          </div>
        </div>
        <div method="post" class="font-roboto flex-row items-center ">
          @csrf
          <div class="my-6 mx-4 lg:mx-0 font-montserrat font-semibold">
            <h3>CCTV Keberangkatan (KBRT)</h3>
          </div>

          @if(session('success'))
            <div data-dial-init class="fixed bottom-6 right-24 group z-30">
              <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 z-30" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                  {{session('success')}} 
                </div>
                <button type="hide" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                </button>
              </div>
            </div>
          @endif

          {{-- Ekskalator --}}
          <form action="{{route('cctv.store')}}" method="post" id="elementToHide1">
            
             @csrf
            <div class="mb-3 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
              <div class="hidden lg:block">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
                <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"  required name="date" value="{{now()->format('Y-m-d')}}" readonly>
              </div>
              <div>
                <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
                <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ekskalator" readonly name="hardware_name" value="{{ old('input_field') }}">
              </div>
              <div>
                <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
                <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                  <option selected>Select Status</option>
                  <option value="B">B</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                </select>
              </div>
              <div>
                <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
                <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
              </div>
              <div>
                <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
                <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                  <option selected>Select Status</option>
                  <option value="B">B</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                </select>
              </div>
              <div>
                <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
                <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
              </div>
            </div>

            <div class="justify-center lg:justify-start space-x-4 flex">

              <button type="submit" class="text-gray-100 bg-indigo-800 hover:bg-indigo-400 hover:text-white transition duration-200 focus:ring-4 focus:outline-none focus:ring-indigo-400 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" title="Submit Input ">Submit</button>

              <button type="reset" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 transition duration-200 focus:outline-none focus:ring-gray-500 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" title="Reset Input">Reset</button>

              <button type="button" data-target="#elementToHide1" class="text-white bg-red-800 hover:bg-red-600 focus:ring-4 transition duration-200 focus:outline-none focus:ring-red-600 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hideButton" title="Close Form">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd"/>
                </svg>                
              </button>
            </div>
          </form>

          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">

          {{-- Behind --}}
          <form action="{{route('cctv.store')}}" method="post" class="mt-4" id="elementToHide2">
            @csrf
            <div class="mb-3 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
              <div class="hidden lg:block">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
                <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
              </div>
              <div>
                <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
                <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Behind" readonly name="hardware_name">
              </div>
              <div>
                <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
                <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                  <option selected>Select Status</option>
                  <option value="B">B</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                </select>
              </div>
              <div>
                <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
                <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
              </div>
              <div>
                <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
                <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                  <option selected>Select Status</option>
                  <option value="B">B</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                </select>
              </div>
              <div>
                <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
                <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
              </div>
            </div>

             <input type="hidden" name="action" value="behind">

            <div class="justify-center lg:justify-start space-x-4 flex">
              <button type="submit" class="text-gray-100 bg-indigo-800 hover:bg-indigo-400 hover:text-white transition duration-200 focus:ring-4 focus:outline-none focus:ring-indigo-400 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" title="Submit Input">Submit</button>

              <button type="reset" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 transition duration-200 focus:outline-none focus:ring-gray-500 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" title="Reset Input">Reset</button>

              <button type="button" data-target="#elementToHide2" class="text-white bg-red-800 hover:bg-red-600 focus:ring-4 transition duration-200 focus:outline-none focus:ring-red-600 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hideButton" title="Close Form">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                </svg>                
              </button>
            </div>
          </form>

          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">

          {{-- I One --}}
          <form action="{{route('cctv.store')}}" method="post" class="mt-4" id="elementToHide3">
            @csrf
            <div class="mb-3 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
              <div class="hidden lg:block">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
                <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
              </div>
              <div>
                <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
                <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT I One" readonly name="hardware_name">
              </div>
              <div>
                <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
                <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                  <option selected>Select Status</option>
                  <option value="B">B</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                </select>
              </div>
              <div>
                <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
                <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
              </div>
              <div>
                <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
                <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                  <option selected>Select Status</option>
                  <option value="B">B</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                </select>
              </div>
              <div>
                <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
                <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
              </div>
            </div>

              <input type="hidden" name="action" value="iOne">

            <div class="justify-center lg:justify-start space-x-4 flex">

              <button type="submit" class="text-gray-100 bg-indigo-800 hover:bg-indigo-400 hover:text-white transition duration-200 focus:ring-4 focus:outline-none focus:ring-indigo-400 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" title="Submit Input">Submit</button>

              <button type="reset" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 transition duration-200 focus:outline-none focus:ring-gray-500 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" title="Reset Input">Reset</button>

              <button type="button" data-target="#elementToHide3" class="text-white bg-red-800 hover:bg-red-600 focus:ring-4 transition duration-200 focus:outline-none focus:ring-red-6  00 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hideButton" title="Close Form">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                </svg>                
              </button>
            </div>
          </form>

          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT SCP 2" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Mushola" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ruang Tunggu" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT SCP 1 L" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Lobi Lt 2" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ex 2" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Jalan Lingkungan" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ex 1" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT SCP 1" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ruang Tunggu Area Garuda" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Apron 6-7" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT IPC" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Batik Air" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ruang Tunggu 192" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Pintu Keberangkatan" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Disable" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Checkin" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT PTZ" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ruang Tunggu 1" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Ruang Tunggu 2" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Drop Zone" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Teras Sisi Udara" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Stand CafeBox" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT Area Informasi" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT SCP Karyawan" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT ATM" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV KBRT SCP 1 North" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>

          <div class="mt-8 my-6 mx-4 lg:mx-0 font-montserrat font-semibold">
            <h3>CCTV Kedatangan (KDT)</h3>
          </div>

          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Pintu SIsi Udara KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Conveyor 1 KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV GSE KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Toilet KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Sisi Utara KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Gerbang Tengah KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Sisi Selatan KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Pintu Kedatangan" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>
          <hr class="border-2 rounded-xl border-indigo-800 border-opacity-30 lg:hidden">
          <div class="mb-6 lg:flex space-x-4 items-center justify-start space-y-4 lg:space-y-0">
            <div class="hidden lg:block">
              <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Current Date</label>
              <input type="date" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="date" value="{{now()->format('Y-m-d')}}" readonly>
            </div>
            <div>
              <label for="hardware-name" class="block mb-2 text-sm font-medium text-gray-900">Hardware Name</label>
              <input type="text" id="hardware-name" class="bg-gray-100 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required value="CCTV Flob Batik Air KDT" readonly name="hardware_name">
            </div>
            <div>
              <label for="record-status" class="block mb-2 text-sm font-medium text-gray-900">Record Status</label>
              <select id="record-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="record-desc" class="block mb-2 text-sm font-medium text-gray-900">Record Description</label>
              <input type="text" id="record-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="record_desc">
            </div>
            <div>
              <label for="clean-status" class="block mb-2 text-sm font-medium text-gray-900">Clean Status</label>
              <select id="clean-status" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_status">
                <option selected>Select Status</option>
                <option value="B">B</option>
                <option value="S">S</option>
                <option value="T">T</option>
              </select>
            </div>
            <div>
              <label for="clean-desc" class="block mb-2 text-sm font-medium text-gray-900">Clean Description</label>
              <input type="text" id="clean-desc" class="bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required name="clean_desc">
            </div>
          </div>

          <div class="justify-center lg:justify-start space-x-4 flex">
            <button type="submit" class="text-gray-100 bg-indigo-800 hover:bg-indigo-400 hover:text-white transition duration-200 focus:ring-4 focus:outline-none focus:ring-indigo-400 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            <button type="reset" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 transition duration-200 focus:outline-none focus:ring-gray-500 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
          </div>
        </div>        
      </div>
    </section>
  </div>

  <script>
    $(document).ready(function() {
      $(".hideButton").click(function() {
        const targetSelector = $(this).data("target");
        const targetElement = $(targetSelector);

        targetElement.toggle();
        if (targetElement.is(":visible")) {
          $(this).text("Hide Element");
        } else {
          $(this).text("Show Element");
        }
      });
    });
  </script>

</body>
</html>