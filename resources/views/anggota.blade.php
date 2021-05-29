<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>table anggota</title>
  <style>
    table{
      border-collapse: collapsel;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    thead{
      background-color: #f2f2f2;
    }
    th,td{
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .tambah{
      padding: 80px 16px;
      text-decoration: none;
    }
  </style>
</head>

<body>
    <div style="overflow-x: auto">
    <table>
      <thread>
        <tr>
        <th>no</th>
        <th>id anggota</th>
        <th>nama anggota</th>
        <th>alamat</th>
        <th>jenis kelamin</th>
        <th>telp</th>
        </tr>
      </thread>
      <tbody>
        <?php $no=1 ?>
        @foreach ($anggota)
        <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $anggota_id }}</td>
        <td>{{ $anggota_nama }}</td>
        <td>{{ $anggota_alamat }}</td>
        <td>{{ $anggota_jk }}</td>
        <td>{{ $anggota_telp }}</td>
        </tr>
    </table>
</body>