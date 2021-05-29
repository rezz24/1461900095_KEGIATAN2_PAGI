<html>
<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Mahasiswa</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
    <div style="overflow-x:auto;">
    <a class="tambah" href="{{route( 'anggota.create')}}"> Tambah Data </a>
    <table>
        <thead>
            <tr>
                <th>Anggota_id</th>
                <th>anggota_nama</th>
                <th>anggota_alamat</th>
                <th>anggota_jk</th>
                <th>anggota_telp</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $link = new mysqli("localhost","root","","praktikum2");
                $q = $link->query("select * from anggota");  
                while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
                echo "<tr>";
                echo "<th><b>".$r['anggota_id']."</b></th>";
                echo "<th><b>".$r['anggota_nama']."</b></th>";
                echo "<th><b>".$r['anggota_alamat']."</b></th>";
                echo "<th><b>".$r['anggota_jk']."</b></th>";
                echo "<th><b>".$r['anggota_telp']."</b></th>";
                echo "</tr>";
                }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>