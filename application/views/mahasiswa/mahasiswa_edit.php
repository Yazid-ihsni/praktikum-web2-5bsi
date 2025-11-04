<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa oleh Ahmad Yazid Ihsani - 2310020035</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
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

        .btn-custom {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Edit Mahasiswa</h1>
        <p class="author">Oleh: Ahmad Yazid Ihsani - 2310020035</p>

        <div class="form-container">
            <?php
            // echo '<pre>';
            // print_r($mahasiswa);
            // echo '</pre>';
            ?>

            <form action="<?= site_url('mahasiswa/perbaharui/' . ($mahasiswa->id_mahasiswa ?? '')) ?>" method="post">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim"
                        value="<?= isset($mahasiswa->NIM) ? htmlspecialchars($mahasiswa->NIM) : (isset($mahasiswa->nim) ? htmlspecialchars($mahasiswa->nim) : '') ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama_mhs" name="nama_mhs"
                        value="<?= isset($mahasiswa->nama_mhs) ? htmlspecialchars($mahasiswa->nama_mhs) : '' ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="id_prodi" class="form-label">Program Studi</label>
                    <select class="form-control" name="id_prodi" id="id_prodi" required>
                        <option value="">Pilih Program Studi</option>
                        <?php foreach ($prodi as $ps) : ?>
                            <option value="<?= $ps->id_prodi ?>">
                                <?= $ps->nama_prodi ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-custom">Perbaharui</button>
                    <a href="<?= site_url('mahasiswa') ?>" class="btn btn-secondary btn-custom">Kembali</a>
                </div>
            </form>
        </div>

        <footer>
            <p>&copy; <?= date('Y') ?> Sistem Informasi - Universitas Islam Kalimantan Muhammad Arsyad Al - Banjari</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>