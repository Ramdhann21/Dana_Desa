<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Data Dana Desa</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Laporan</h3>
  <table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Keperluan</th>
            <th>Tanggal</th>
            <th>Dana Masuk</th>
            <th>Dana Keluar</th>
            <th>Total</th>
            <th>Tujuan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($laporans as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->keperluan }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->dana_masuk }}</td>
                <td>{{ $item->dana_keluar }}</td>
                <td>{{ $item->total }}</td>
                <td>{{ $item->tujuan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>
