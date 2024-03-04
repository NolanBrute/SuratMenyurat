<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>

    <br>
    <div class="container">
        
        <ul class="nav nav-pills">
        <img src="images/SMKN3Kendal-BGRemove.png" alt="Bootstrap" width="30" height="40">
        &nbsp;
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="surat_masuk.php">Surat Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="surat_keluar.php">Surat Keluar</a>
        </li>
       
        </ul>

        <br>

    <div class="card">
        <div class="card-header">
        Salam dari Admin
        </div>

        <div class="card-body">
            <h5 class="card-title">Hello, World!</h5>
            <p class="card-text">Selamat datang di Program Surat menyurat SMKN3 Kendal. Tekan tombol dibawah ini untuk membuat Surat</p>
            <a href="surat_keluar.php" class="btn btn-primary">Buat Surat</a>
        </div>
    </div>

    <br>
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Buat Surat</h5>
        <p class="card-text">Buat Surat || Artinya anda membuat surat keluar untuk dikirimkan ke pengguna.</p>
        <a href="surat_keluar.php" class="btn btn-primary">Buat Surat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Surat Masuk</h5>
        <p class="card-text">Input semua surat yang masuk ke inbox anda dan menginput data secara manual : )</p>
        <a href="surat_masuk.php" class="btn btn-primary">Surat Masuk</a>
      </div>
    </div>
  </div>
</div>

<br>

<div class="card mb-3">
  <img class="card-img-top" src="images/Screenshot (804).png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Blue Background</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">You are Reading this.</small></p>
  </div>
</div>

    </div>
        

</body>
</html>