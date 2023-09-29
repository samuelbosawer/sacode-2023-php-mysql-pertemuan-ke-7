<?php
if($_POST != null)
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_wa'];

}
if($_GET != null)
{
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $nomor_hp = $_GET['nomor_wa'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- HEADER -->
    <header class="bg-dark text-white"> 
        <p class="p-3 text-uppercase fw-bolder">  data siswa  </p>
    </header>

    <!-- CONTENT -->
    <section>
        <div class="container"> 
            <div class="row">
                <div class="col-6">
                    <h1>Sudah terdaftar</h1>
                    <p> Nama <?= $nama?></p>
                    <p> Email <?= $email ?></p>
                    <p> Nomor <?= $nomor_hp ?></p>
                </div>    
            </div>
        </div>
    </section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>