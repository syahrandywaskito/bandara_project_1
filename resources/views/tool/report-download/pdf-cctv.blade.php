<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Pengecekan CCTV {{now()->format('d-m-Y')}}.pdf</title>
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
        Tabel Pengecekan CCTV <br>
        {{now()->isoFormat('dddd, D MMMM Y')}}
      </h1>
    </div>

    <div class="relative overflow-x-auto mt-8">
      <table class="w-full text-sm text-left">
          <thead class="text-xs text-center text-gray-900 bg-gray-200 uppercase border-b-2 border-black">
              <tr>
                  <th scope="col" class="px-1 py-2 border-2">Nama Perangkat</th>
                  <th scope="col" class="px-1 py-2 border-2">Status Rekaman</th>
                  <th scope="col" class="px-1 py-2 border-2">Keterangan Rekaman</th>
                  <th scope="col" class="px-1 py-2 border-2">Status Kebersihan</th>
                  <th scope="col" class="px-1 py-2 border-2">Keterangan Kebersihan</th>  
              </tr>
          </thead>
          <tbody class="text-center">
            @foreach ($cctv as $data)
            <tr class="">
                <td scope="row" class="px-2 py-3 border-2">
                    {{$data->hardware_name}}
                </td>
                <td scope="row" class="px-2 py-3 border-2">
                    {{$data->record_status}}
                </td>
                <td scope="row" class="px-2 py-3 border-2">
                    {{$data->record_desc}}
                </td>
                <td scope="row" class="px-2 py-3 border-2">
                    {{$data->clean_status}}
                </td>
                <td scope="row" class="px-2 py-3 border-2">
                    {{$data->clean_desc}}
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</body>
</html>