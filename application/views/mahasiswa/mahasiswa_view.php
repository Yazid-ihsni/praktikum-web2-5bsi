<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa oleh Ahmad Yazid Ihsani - 2310020035</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .table-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-top: 30px;
        }

        h1 {
            text-align: center;
            font-weight: 700;
            margin-top: 30px;
            color: #0d6efd;
        }

        .author {
            text-align: center;
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
            font-size: 14px;
        }

        thead {
            background-color: #e9ecef;
        }

        thead th {
            color: #000;
            text-align: center;
            font-weight: 600;
        }

        tbody td {
            color: #212529;
        }

        .btn-group-sm {
            gap: 5px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <p class="author">Oleh: Ahmad Yazid Ihsani - 2310020035</p>

        <div class="table-container">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if (!empty($mahasiswa)) {
                        foreach ($mahasiswa as $row) {
                    ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= isset($row->NIM) ? htmlspecialchars($row->NIM) : '-' ?></td>
                                <td><?= isset($row->nama_mhs) ? htmlspecialchars($row->nama_mhs) : '-' ?></td>
                                <td><?= isset($row->nama_prodi) ? htmlspecialchars($row->nama_prodi) : (isset($row->id_prodi) ? 'Prodi ID: ' . $row->id_prodi : '-') ?></td>
                                <td class="text-center">
                                    <div class="btn-group-sm d-flex justify-content-center">
                                        <a href="<?= site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin untuk menghapus?')">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">Tidak ada data mahasiswa.</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <div class="action-buttons">
                <a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-success">Tambah Mahasiswa</a>
                <button onclick="window.open('<?= site_url('mahasiswa/cetak') ?>', '_blank')" class="btn btn-warning">
                    Cetak Data
                </button>
            </div>
        </div>

        <footer>
            <p>&copy; <?= date('Y') ?> Sistem Informasi - Universitas Islam Kalimantan Muhammad Arsyad Al - Banjari</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function cetakData() {
            window.print();
        }

        const style = document.createElement('style');
        style.innerHTML = `
            @media print {
                .action-buttons, .btn {
                    display: none !important;
                }
                .table-container {
                    box-shadow: none !important;
                    padding: 0 !important;
                }
                body {
                    background: white !important;
                }
                h1, .author {
                    color: black !important;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>

</html>