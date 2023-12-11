@extends('layouts.home')

@section('title')
    Kontak & Saran
@endsection

@section('body_color')
    bg-[#d9dad4]
@endsection

@section('content')
    
    {{-- * navbar --}}
    @include('components.home.navbar', [

      'navbar_color' => "bg-white",
      'text_color' => "text-[#2a313b]",

      // baranda
      'beranda_active' => "",
      'beranda_inactive' => "hover:-translate-y-1",

      // Alat
      'alat_active' => "",
      'alat_inactive' => "hover:-translate-y-1 focus:-translate-y-1",
      
      // layanan 
      'layanan_active' => "",
      'layanan_inactive' => "hover:-translate-y-1 ",

      // Hubungi Kami
      'hubungi_kami_active' => "border-b-2 border-[#a38458]",
      'hubungi_kami_inactive' => "",

      // register 
      'register_color' => "bg-[#a38458] text-white",

      // mobile beranda
      'mobile_beranda_active' => "",
      'mobile_beranda_inactive' => "hover:translate-x-1",

      // mobile alat 
      'mobile_alat_active' => "",
      'mobile_alat_inactive' => "hover:translate-x-1 focus:translate-x-1",

      // mobile kontak / hubungi kami
      'mobile_kontak_active' => "font-bold",
      'mobile_kontak_inactive' => ""

      ])

    
    {{-- Header --}}
    <header class="mx-1 mt-3 mb-5">
      {{-- Text --}}
      <section class="py-4 px-4 mx-auto text-center sm:py-5 md:py-6 lg:py-8 xl:py-10 sm:w-[80%]">
        <section class="bg-white shadow-lg rounded-lg">
          <div class="py-8 px-4 mx-auto lg:py-16">
            <div class="font-montserrat p-2 md:p-12 mb-4">
              <h1 class="text-[#2a313b] uppercase text-sm sm:text-base md:text-lg lg:text-2xl font-bold mb-2 text-start md:text-center" data-aos="fade-up" data-aos-delay="100">
                Hubungi Kami
              </h1>
              <p class="text-xs sm:text-sm md:text-base font-normal text-gray-700 mt-5 mb-6 text-start" data-aos="fade-up" data-aos-delay="200">
                Anda dapat menghubungi kami dengan membuka No Telepon atau Alamat Email yang sudah tersedia. Anda juga dapat memberikan saran dan masukan terhadap web ini ataupu saran dan masukan untuk kami. Diharapkan saran dan masukan dapat menjadi perbaikan untuk kami kedepannya.
              </p>

              <div data-aos="fade-up" data-aos-delay="300">
                <div class="text-start font-montserrat font-semibold mt-10 mb-4 uppercase">
                  <h4 class="text-sm md:text-base">Kontak</h4>
                </div>
  
                {{-- Kontak --}}
                @if ($kontak)
                  <div class="md:flex flex-row justify-between items-center">
                    <div class="text-start text-xs sm:text-sm md:tex-base">
                      <h5>Alamat Email</h5>
                      <p class="pt-2">   
                        <a href="mailto:{{$kontak->email_admin}}" target="_blank" class="inline-flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-3 h-6">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                          </svg>
                          <span class="text-[#a38458] hover:border-b border-[#a38458] transition duration-150 py-1">
                            {{$kontak->email_admin}}
                          </span>                    
                        </a>
                      </p>
                    </div>
                    <div class="text-start md:text-end pt-3 md:pt-0 text-xs sm:text-sm md:tex-base">
                      <h5>No Telepon</h5>
                      <p class="pt-2">    
                        <a href="https://wa.me/62{{$kontak->no_tlp}}" class=" inline-flex items-center" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 mr-3 h-6" viewBox="0 0 50 50">
                            <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z"></path>
                          </svg>
                          <span class="text-[#a38458] hover:border-b border-[#a38458] transition duration-150 py-1">
                          +62 {{$kontak->no_tlp}}
                          </span>
                        </a>
                      </p>
                    </div>
                  </div>
                @else
                  <div class="md:flex flex-row justify-between items-center">
                    <div class="text-start text-xs sm:text-sm md:tex-base">
                      <h5>Alamat Email</h5>
                      <p class="flex pt-2">   
                        <div class="inline-flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 mr-3 h-6">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                          </svg>
                          <span>
                            Email Tidak Tersedia
                          </span>                    
                        </div>
                      </p>
                    </div>
                    <div class="text-start md:text-end pt-3 md:pt-0 text-xs sm:text-sm md:tex-base">
                      <h5>No Telepon</h5>
                      <p class="pt-2 ">    
                        <div class=" inline-flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 mr-3 h-6" viewBox="0 0 50 50">
                            <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z"></path>
                          </svg>
                          <span >
                            No. Telepon Tidak Tersedia
                          </span>
                        </div>
                      </p>
                    </div>
                  </div>
                @endif
              </div>

              <div data-aos="fade-up" data-aos-delay="400">
                <div class="text-start font-montserrat font-semibold mt-7 mb-4 uppercase">
                  <h4 class="text-sm md:text-base">Saran & Masukan</h4>
                </div>
  
                <form method="post" action="{{route('saran.user.store')}}" class="text-start">
                  @csrf
                  <div class="grid grid-cols-1 grid-flow-row-dense md:grid-cols-2 gap-7">

                    {{-- * Nama --}}
                    <div class=" col-span-1">
                      <label for="nama" class="block mb-2 text-xs md:text-sm font-medium text-[#2a313b] dark:text-white">Nama</label>
                      <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-[#2a313b] text-xs md:text-sm rounded-lg block w-full p-2.5 @error('nama') is-invalid @enderror" required name="nama" />

                      {{-- * error notif --}}
                      @error('nama')
                          <div class="mt-3">
                            @include('components.dashboard._input-error-notif')
                          </div>
                      @enderror
                    </div>

                    {{-- * Email --}}
                    <div class="col-span-1">
                      <label for="email" class="block mb-2 text-xs md:text-sm font-medium text-[#2a313b] dark:text-white">Email</label>
                      <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-[#2a313b] text-xs md:text-sm rounded-lg block w-full p-2.5 @error('email') is-invalid @enderror" required name="email" />

                      {{-- * error notif --}}
                      @error('email')
                          <div class="mt-3">
                            @include('components.dashboard._input-error-notif')
                          </div>
                      @enderror
                    </div>

                    {{-- * Subjek --}}
                    <div class="col-span-2">
                      <label for="subjek" class="block mb-2 text-xs md:text-sm font-medium text-[#2a313b] dark:text-white">Subjek</label>
                      <input type="text" id="subjek" class="bg-gray-50 border border-gray-300 text-[#2a313b] text-xs md:text-sm rounded-lg block w-full p-2.5 @error('subjek') is-invalid @enderror" required name="subjek" />

                      {{-- * error notif --}}
                      @error('subjek')
                          <div class="mt-3">
                            @include('components.dashboard._input-error-notif')
                          </div>
                      @enderror
                    </div>

                    {{-- * Pesan --}}
                    <div class="col-span-2">
                      <label for="message" class="block mb-2 text-xs md:text-sm font-medium text-[#2a313b] dark:text-white">
                        Pesan
                      </label>
                      <textarea id="message" rows="4" class="block p-2.5 w-full text-xs md:text-sm text-[#2a313b] bg-gray-50 rounded-lg border border-gray-300 @error('pesan') is-invalid @enderror" name="pesan"></textarea>

                      {{-- * error notif --}}
                      @error('pesan')
                          <div class="mt-3">
                            @include('components.dashboard._input-error-notif')
                          </div>
                      @enderror
                    </div>
                  </div>
                  <button type="submit" class="mt-5 text-white bg-[#a38458] hover:bg-opacity-75 transition duration-200 focus:ring-4 focus:outline-none font-medium rounded-lg text-xs md:text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Kirim
                  </button>
                </form>
                
              </div>
            </div>
          </div>
        </section>
      </section>
    </header>

    {{-- success notif --}} 
    @include('components.dashboard._success-notif')

    @endsection
