<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Pengecekan Komputer {{now()->format('d-m-Y')}}.pdf</title>
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

  @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class=" font-roboto" onload="window.print()">

  <nav class="">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="{{route('report.index')}}" class=" flex items-center py-4 px-2">
        <img src="{{ asset('img/logo.png') }}" class=" h-11 w-10 mr-3" alt="logo">
        <span class=" font-semibold uppercase text-md">teknik dan pelayanan jasa</span>
      </a>
    </div>
  </nav>

  <div>
    <div class="text-center">
      <h1 class="font-semibold uppercase text-sm">
        Tabel Pengecekan Komputer <br>
       {{now()->isoFormat('dddd, D MMMM Y')}}
      </h1>
    </div>

    <div class="relative overflow-x-auto mt-8">
      <table class="w-full text-sm text-left">
          <thead class="text-xs text-center text-gray-900 bg-gray-200 uppercase border-b-2 border-black">
              <tr class="">
                  <th scope="col" class="px-1 py-2 border-2">Nama Perangkat</th>
                  <th scope="col" class="px-1 py-2 border-2">Kondisi Nyala/Mati</th>
                  <th scope="col" class="px-1 py-2 border-2">Keterangan Nyala/Mati</th>
                  <th scope="col" class="px-1 py-2 border-2">Aplikasi di Uninstall</th>
                  <th scope="col" class="px-1 py-2 border-2">Keterangan Aplikasi di Uninstall</th>  
                  <th scope="col" class="px-1 py-2 border-2">Status pembersihan file</th>  
                  <th scope="col" class="px-1 py-2 border-2">Keterangan pembersihan file</th>  
              </tr>
          </thead>
          <tbody class="text-center">
            @foreach ($komputer as $data)
            <tr class="">
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->computer_name}}
                </td>
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->on_off_condition}}
                </td>
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->on_off_desc}}
                </td>
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->uninstalled_app}}
                </td>
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->uninstalled_app_desc}}
                </td>
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->clean_file_status}}
                </td>
                <td scope="row" class="px-1 py-3 border-2">
                  {{$data->clean_file_desc}}
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</body>
</html>