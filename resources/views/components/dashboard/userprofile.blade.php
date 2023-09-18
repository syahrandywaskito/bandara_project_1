{{-- User Profile Menu --}}
<div class="flex items-center ml-3">
  <div>
    <button type="button" class="flex text-sm bg-white rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
      <span class="sr-only">Open user menu</span>
      <img class="w-8 h-8 p-1 rounded-full" src="{{asset('img/user.png')}}" alt="user photo">
    </button>
  </div>
  <div class="z-50 hidden my-4 text-base list-none bg-gray-100 divide-y divide-gray-100 rounded shadow-md" id="dropdown-user">
    <div class="px-4 py-3 font-roboto text-xs md:text-sm" role="none">
      <p class=" text-gray-900 font-semibold" role="none">
        {{auth()->user()->name}}
      </p>
      <p class=" font-medium text-gray-900 truncate pt-1" role="none">
        {{auth()->user()->email}}
      </p>
      <p class=" font-medium text-gray-900 truncate pt-1" role="none">
        {{auth()->user()->position}}
      </p>
    </div>

    <hr class="border-0 bg-gray-300 h-1 ">

    <ul class="py-1 font-roboto text-xs md:text-sm" role="none">
      <li>
        <a href="{{route('dashboard')}}" class="block px-4 py-2 text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Settings</a>
      </li>
      <li>
        <a href="{{route('logout')}}" class="block px-4 py-2 text-gray-700 hover:translate-x-1 transition duration-200" role="menuitem">Logout</a>
      </li>
    </ul>
  </div>
</div>