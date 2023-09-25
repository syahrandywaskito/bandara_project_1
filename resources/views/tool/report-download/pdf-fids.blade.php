<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Pengecekan FIDS {{now()->format('d-m-Y')}}.pdf</title>
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
        {{$monthYear}}
      </h1>
    </div>
    @php
      $currentDate = null;
    @endphp
    @foreach ($fids as $data)
      @php
        $date = $data->date; 
        $carbon = \Carbon\Carbon::parse($date); 
        $formattedDate = $carbon->isoFormat('dddd, D MMMM Y');
      @endphp
      @if ($currentDate != $formattedDate)
        @if ($currentDate !== null)
        </tbody>
        </table>
        @endif
    <div class="mt-6 mb-3">
      <h4>
        Hari dan Tanggal <br>
        {{$formattedDate}}
      </h4>
    </div>
    <table class="w-full text-sm text-left">
      <thead class="text-xs text-center text-gray-900 bg-gray-200 uppercase border-b-2 border-black">
        <tr class="">
          <th scope="col" class="px-1 py-2 border-2">Nama Perangkat</th>
          <th scope="col" class="px-1 py-2 border-2">Kegiatan</th>
          <th scope="col" class="px-1 py-2 border-2">Status</th>
          <th scope="col" class="px-1 py-2 border-2">Keterangan</th> 
        </tr>
      </thead>
      <tbody class="text-center">
        @endif
        <tr class="">
          <td scope="row" class="px-1 py-3 border-2" rowspan="2">
              {{$data->monitor_name}}
          </td>
          <td scope="row" class="px-3 py-3 border-2 text-start">
              Kondisi tampilan monitor
          </td>
          <td scope="row" class="px-1 py-3 border-2">
              {{$data->monitor_view}}
          </td>
          <td scope="row" class="px-1 py-3 border-2">
              {{$data->view_desc}}
          </td>
        </tr>
        <tr>
          <td scope="row" class="px-3 py-3 border-2 text-start">
            Kondisi kebersihan monitor dan mini PC
          </td>
          <td scope="row" class="px-1 py-3 border-2">
            {{$data->clean_condition}}
          </td>
          <td scope="row" class="px-1 py-3 border-2">
              {{$data->condition_desc}}
          </td>
        </tr>
        @php
        $currentDate = $formattedDate;
        @endphp
        @endforeach
        @if ($currentDate !== null)
      </tbody>
    </table>
    @endif
  </div>
</body>
</html>