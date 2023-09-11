<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  {{-- style css --}}
  <style>
    /* Styling tabel saat dicetak */
    @media print {
      table {
        width: 100%;
        border-collapse: collapse;
        page-break-inside: auto; /* Menghindari pemisahan baris di tengah halaman */
      }
  
      th, td {
        padding: 8px;
        text-align: left;
      }
  
      th {
        background-color: #F2F2F2;
      }
  
      tr:nth-child(even) {
        background-color: #E0E0E0;
      }
  
      /* Menghilangkan garis tepi tabel */
      table, th, td {
        border: none;
      }
  
      /* Gaya tambahan untuk header kolom */
      th {
        font-weight: bold;
        border-bottom: 1px solid #333;
      }
    }
  </style>

</head>
<body>
  <div class="p-5 font-roboto bg-white">
    <div class="p-5">
      <p class="mb-2 font-semibold">
        Tabel Laporan
      </p>
      <p>
        {{now()->format('l')}}, 
        {{now()->format('d M Y')}}
      </p>
    </div>
    <div class="relative overflow-x-auto rounded-md shadow-md">
      <table class="w-full text-sm text-center">
          <thead class="text-xs uppercase bg-gray-50">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Nama Perangkat
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Status rekaman
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Keterangan rekaman
                  </th>
                  <th scope="col" class="px-6 py-3">
                      status kebersihan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      keterangan kebersihan
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($cctv as $data)
              <tr class="bg-white border-b">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{$data->hardware_name}}
                  </th>
                  <td class="px-6 py-4">
                      {{$data->record_status}}
                  </td>
                  <td class="px-6 py-4">
                      {{$data->record_desc}}
                  </td>
                  <td class="px-6 py-4">
                      {{$data->clean_status}}
                  </td>
                  <td class="px-6 py-4">
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