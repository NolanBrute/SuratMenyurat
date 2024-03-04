<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/bootstrap.min.css">
    <title>Surat Keluar</title>
</head>
<body>
    <br>
    <div class="container">
    <a class = "btn btn-primary" href = "surat_keluar.php">Kembali</a>
    <div>
    <br>
    <h3>Surat Keluar</h3>
    </div>

    <br>
    <div class="card">
        <div class = "card-body">
            <form method="POST" action="proses_tambah_suratkeluar.php" enctype="multipart/form-data">
            <br>

            <h6>Nomor Agenda</h6>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
            </div>
                <input type="text" name = "no_agenda" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <h6>Tanggal Surat</h6>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
            </div>
                <input type="date" name = "tgl_surat" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <h6>Tujuan Surat</h6>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
            </div>
                <input type="text" name = "tujuan_surat"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <h6>Nomor Surat</h6>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
            </div>
                <input type="text" name = "no_surat" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <h6>Perihal</h6>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
            </div>
                <input type="text" name = "perihal" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <h6>File Surat</h6>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
            </div>
                <input type="file" name = "file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required = "">
            </div>

            <div>
                <button class = "btn btn-primary" type="submit">Simpan</button>
            </div>

</form>
            
    </div>
    </div>
    
</body>
</html>