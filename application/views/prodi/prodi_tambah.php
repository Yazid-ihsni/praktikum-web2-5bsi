<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Program Studi oleh Ahmad Yazid Ihsani - 2310020035</title>

    <!-- Bootstrap 5 CDN -->
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
        <h1>Form Tambah Program Studi</h1>
        <p class="author">Oleh: Ahmad Yazid Ihsani - 2310020035</p>

        <div class="form-container">
            <form action="<?= site_url('prodi/simpan') ?>" method="post">
                <div class="mb-3">
                    <label for="kode_prodi" class="form-label">Kode Program Studi</label>
                    <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" required
                        placeholder="Masukkan kode program studi">
                </div>
                <div class="mb-3">
                    <label for="nama_prodi" class="form-label">Nama Program Studi</label>
                    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required
                        placeholder="Masukkan nama program studi">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-custom">Simpan</button>
                    <a href="<?= site_url('prodi') ?>" class="btn btn-secondary btn-custom">Kembali</a>
                </div>
            </form>
        </div>

        <footer>
            <p>&copy; <?= date('Y') ?> Sistem Informasi - Universitas Islam Kalimantan Muhammad Arsyad Al - Banjari</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>