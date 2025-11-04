<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <h1>Hai, nama saya Ahmad Yazid Ihsani</h1>
    <?php
    if (isset($mvc) && isset($kelas)) {
        echo $mvc . " - " . $kelas;
    }
    ?>
</body>

</html>