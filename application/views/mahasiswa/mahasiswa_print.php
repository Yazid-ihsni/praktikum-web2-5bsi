<!DOCTYPE html>
<html>

<head>
    <title>Cetak Daftar Mahasiswa oleh Ahmad Yazid Ihsani - 2310020035</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 120%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $nhs) : ?>
                <tr>
                    <td><?= $nhs->NIM ?></td>
                    <td><?= $nhs->nama_mhs ?></td>
                    <td><?= $nhs->nama_prodi ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>