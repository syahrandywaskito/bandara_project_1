@extends('layouts.app')

@section('title')
    Dashboard - Laporan
@endsection

@section('navbar-header')
    CCTV - Tambah Data
@endsection

@section('content')

    {{-- Content Part --}}
    <div class="py-7 md:px-5 lg:ml-64">
      <div>
        <div class="pt-16 px-4 mx-auto max-w-screen-xl text-start">
          <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg px-5 py-8 sm:px-8 md:p-12">
            <!-- Breadcrumb -->
            <nav class="flex py-3 text-gray-700 dark:text-gray-100" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 font-montserrat">
                <li class="inline-flex items-center">
                  <a href="{{route('dashboard')}}" class="inline-flex items-center text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400">
                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                      />
                    </svg>
                    Dashboard
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{route('cctv.index')}}" class="ml-1 text-xs md:text-sm font-medium hover:text-indigo-600 dark:hover:text-slate-400 md:ml-2">CCTV</a>
                  </div>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ml-1 text-xs md:text-sm font-medium md:ml-2">Tambah Data</span>
                  </div>
                </li>
              </ol>
            </nav>

            <hr class="border border-gray-300">

            <h1 class="inline-flex items-center text-gray-900 dark:text-gray-200 mt-6 text-base md:text-lg xl:text-xl uppercase font-montserrat font-bold">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-2 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
              </svg>              
              Halaman Tambah Data
            </h1>
            <div class="text-xs md:text-sm font-montserrat pt-3 dark:text-gray-200">
              <h3>Hari dan Tanggal</h3>
              <p>
                {{$formattedDate}}
              </p>
            </div>

            <div class="flex space-x-4 mt-6">
              {{-- Select date --}}
              <div class="flex-initial w-60">
                <form class="flex items-center" method="get" action="{{route('cctv.create')}}">
                  @csrf
                  <label for="date" class="sr-only">Search</label>

                  <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <input
                      type="date"
                      id="date"
                      name="selected_date"
                      class="z-20 text-xs md:text-sm text-gray-900 bg-gray-100  rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-50 block w-full pl-10 p-3.5 font-roboto"
                      required
                    />
                  </div>

                  @include('components.dashboard.buttons._date-search-button')

                </form>
              </div>

              {{-- show current data --}}
              <div>
                <form action="{{route('cctv.create')}}" method="GET">
                  <input type="text" name="all" class="hidden" readonly value="all" />
                  @include('components.dashboard.buttons._show-current-button')
                </form>
              </div>
            </div>

            <div class="font-roboto mt-10 flex-row items-center">
              <div data-dial-init class="sticky top-20">
                <div id="alert-3" class="flex items-center p-4 my-4 dark:text-green-50 text-green-950 rounded-lg bg-green-400 dark:bg-green-700 z-30" role="alert">
                  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                  </svg>
                  <span class="sr-only">Info</span>
                  <div class="ml-3 text-xs md:text-sm alert-message"></div>
                  <button
                    type="hide"
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

              @php $no = 1; @endphp @foreach ($list as $item) @php $no++; $hideElement = "elementToHide{$no}"; $dataForm = "dataForm{$no}"; $toHide = "#elementToHide{$no}"; @endphp

              <div id="{{$hideElement}}" class="mt-4">
                <form id="{{$dataForm}}" enctype="multipart/form-data" class="">
                  @csrf
                  <div class="mb-3 xl:flex xl:space-x-4 items-center justify-start space-y-4 xl:space-y-0">
                    {{-- date if sm is hidden and lg is block --}}
                    <div class="hidden xl:block">
                      <label for="date" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">
                        Tanggal Data
                      </label>
                      <input
                        type="date"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="date"
                        value="{{$date}}"
                        readonly
                      />
                    </div>

                    {{-- Created by is hidden --}}
                    <div class="hidden">
                      <label for="by" class="block mb-2 text-sm font-medium text-gray-900">Created By</label>
                      <input
                        type="text"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="created_by"
                        value="{{auth()->user()->name}}"
                        readonly
                      />
                    </div>

                    {{-- Updated by is hidden --}}
                    <div class="hidden">
                      <label for="by" class="block mb-2 text-sm font-medium text-gray-900">Updated By</label>
                      <input
                        type="text"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="updated_by"
                        value="{{auth()->user()->name}}"
                        readonly
                      />
                    </div>

                    {{-- hardware name visible and get data from list --}}
                    <div>
                      <label for="hardware-name" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Nama Perangkat</label>
                      <input
                        type="text"
                        id="hardware-name"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        value="{{$item->name}}"
                        readonly
                        name="hardware_name"
                      />
                    </div>

                    {{-- Select status for record --}}
                    <div>
                      <label for="record-status" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Status Rekaman</label>
                      <select id="record-status" class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3" required name="record_status">
                        <option selected>Select Status</option>
                        <option value="B">B</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                      </select>
                    </div>

                    {{-- Write description of record based on status --}}
                    <div>
                      <label for="record-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Keterangan Rekaman</label>
                      <input
                        type="text"
                        id="record-desc"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="record_desc"
                      />
                    </div>

                    {{-- Select status for clean --}}
                    <div>
                      <label for="clean-status" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Status Kebersihan</label>
                      <select id="clean-status" class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3" required name="clean_status">
                        <option selected>Select Status</option>
                        <option value="B">B</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                      </select>
                    </div>

                    {{-- Write desc of clean based on status --}}
                    <div>
                      <label for="clean-desc" class="block mb-2 text-xs md:text-sm font-medium text-gray-900 dark:text-gray-200">Keterangan Kebersihan</label>
                      <input
                        type="text"
                        id="clean-desc"
                        class="text-xs md:text-sm text-gray-900 bg-white shadow-md rounded-lg outline-none focus:border-indigo-800 dark:border-gray-100 dark:bg-gray-100 block w-full p-3"
                        required
                        name="clean_desc"
                      />
                    </div>
                  </div>

                  {{-- group of button --}}
                  <div class="inline-flex rounded-md shadow-sm ml-0" role="group">
                    <button
                      type="submit"
                      data-form="{{$dataForm}}"
                      class="submitButton inline-flex items-center px-4 py-2 text-sm font-medium bg-indigo-800 text-white rounded-l-lg hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-slate-600 dark:hover:bg-slate-400 dark:focus:ring-slate-600"
                      title="Submit data"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                        <path
                          fill-rule="evenodd"
                          d="M8 1a.75.75 0 01.75.75V6h-1.5V1.75A.75.75 0 018 1zm-.75 5v3.296l-.943-1.048a.75.75 0 10-1.114 1.004l2.25 2.5a.75.75 0 001.114 0l2.25-2.5a.75.75 0 00-1.114-1.004L8.75 9.296V6h2A2.25 2.25 0 0113 8.25v4.5A2.25 2.25 0 0110.75 15h-5.5A2.25 2.25 0 013 12.75v-4.5A2.25 2.25 0 015.25 6h2zM7 16.75v-.25h3.75a3.75 3.75 0 003.75-3.75V10h.25A2.25 2.25 0 0117 12.25v4.5A2.25 2.25 0 0114.75 19h-5.5A2.25 2.25 0 017 16.75z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span class="hidden md:block">
                        Submit
                      </span>
                    </button>
                    <button
                      type="reset"
                      class="inline-flex items-center px-4 py-2 text-sm font-medium bg-indigo-800 text-white hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-slate-600 dark:hover:bg-slate-400 dark:focus:ring-slate-600"
                      title="reset form"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                        <path
                          fill-rule="evenodd"
                          d="M10 4.5c1.215 0 2.417.055 3.604.162a.68.68 0 01.615.597c.124 1.038.208 2.088.25 3.15l-1.689-1.69a.75.75 0 00-1.06 1.061l2.999 3a.75.75 0 001.06 0l3.001-3a.75.75 0 10-1.06-1.06l-1.748 1.747a41.31 41.31 0 00-.264-3.386 2.18 2.18 0 00-1.97-1.913 41.512 41.512 0 00-7.477 0 2.18 2.18 0 00-1.969 1.913 41.16 41.16 0 00-.16 1.61.75.75 0 101.495.12c.041-.52.093-1.038.154-1.552a.68.68 0 01.615-.597A40.012 40.012 0 0110 4.5zM5.281 9.22a.75.75 0 00-1.06 0l-3.001 3a.75.75 0 101.06 1.06l1.748-1.747c.042 1.141.13 2.27.264 3.386a2.18 2.18 0 001.97 1.913 41.533 41.533 0 007.477 0 2.18 2.18 0 001.969-1.913c.064-.534.117-1.071.16-1.61a.75.75 0 10-1.495-.12c-.041.52-.093 1.037-.154 1.552a.68.68 0 01-.615.597 40.013 40.013 0 01-7.208 0 .68.68 0 01-.615-.597 39.785 39.785 0 01-.25-3.15l1.689 1.69a.75.75 0 001.06-1.061l-2.999-3z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      <span class="hidden md:block">
                        Reset
                      </span>
                    </button>
                    <button
                      type="button"
                      data-target="{{$toHide}}"
                      class="hideButton inline-flex items-center px-4 py-2 text-sm font-medium bg-indigo-800 text-white rounded-r-lg hover:bg-indigo-500 focus:z-10 focus:ring-2 focus:ring-indigo-800 dark:bg-slate-600 dark:hover:bg-slate-400 dark:focus:ring-slate-600"
                      title="sembunyikan form"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 md:mr-3 h-5">
                        <path
                          fill-rule="evenodd"
                          d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.091 1.092a4 4 0 00-5.557-5.557z"
                          clip-rule="evenodd"
                        />
                        <path d="M10.748 13.93l2.523 2.523a9.987 9.987 0 01-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 010-1.186A10.007 10.007 0 012.839 6.02L6.07 9.252a4 4 0 004.678 4.678z" />
                      </svg>
                      <span class="hidden md:block">
                        Sembunyikan
                      </span>
                    </button>
                  </div>
                </form>
              </div>

              <hr class="border-2 rounded-xl border-indigo-800 dark:border-gray-100 border-opacity-30 mt-5 xl:hidden" />
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        $(".hideButton").click(function () {
          const targetSelector = $(this).data("target");
          const targetElement = $(targetSelector);

          targetElement.toggle();
          if (targetElement.is(":visible")) {
            $(this).text("Hide Element");
          } else {
            $(this).text("Show Element");
          }
        });

        $(".submitButton").click(function (event) {
          event.preventDefault();
          var formData = new FormData(document.getElementById($(this).data("form")));

          var responseElement = $(this).closest("form").find(".responseMessage");

          fetch("{{ route('cctv.store') }}", {
            method: "POST",
            body: formData,
          })
            .then((response) => response.json())
            .then((data) => {
              responseElement.text(data.message);
              $(".alert-message").text(data.message);
              $(".alert-message").show();
            })
            .catch((error) => {
              console.error("Error:", error);
            });
        });
      });
    </script>

@endsection