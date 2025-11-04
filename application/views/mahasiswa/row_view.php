<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa oleh Ahmad Yazid Ihsani - 2310020035</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #0d6efd;
            color: white;
            font-weight: 600;
            font-size: 1.3rem;
        }

        .card-body h5 {
            color: #343a40;
            font-weight: 600;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        Profil Mahasiswa
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3"><?= $row->nama_mhs ?></h5>
                        <p class="card-text mb-1"><strong>NIM:</strong> <?= $row->NIM ?></p>
                        <p class="card-text"><strong>ID Mahasiswa:</strong> <?= $row->id_mahasiswa ?></p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; <?= date('Y') ?> Sistem Informasi - Universitas Islam Kalimantan Muhammad Arsyad Al - Banjari</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>