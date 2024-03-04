<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="css/bootstrap.min.css">
    <title>Surat Masuk</title>
</head>
<body>
    <br>
    <div class = "container">
    <a class = "btn btn-primary" href = "surat_masuk.php">Kembali</a>
    <div>
    <br>
    <h3>Surat Masuk</h3>
    </div>
   
    <br>
    <div class="card">
        <div class = "card-body">
        <form method="POST" action="proses_tambah_suratmasuk.php" enctype="multipart/form-data" >
        <br>
            <h6>Nomor Surat</h6>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            </div>
                <input type="text" name = "no_surat" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

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

            <h6>Tanggal Masuk</h6>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            </div>
                <input type="date" name = "tgl_masuk"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <h6>Asal pengiriman Surat</h6>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            </div>
                <input type="text" name = "asal_surat" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
        </div>
    </div>
        </form>
            

    </div>
   

</body>
</html>