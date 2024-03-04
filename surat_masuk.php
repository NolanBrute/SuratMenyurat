<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Surat Masuk</title>
</head>

<style>

.button {
  background-color: #236DF0; 
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  border-radius: 8px;
  transition-duration: 0.3s;
}

.button:hover{
  background-color: #CFDFFB; 
  color: #236DF0;
  
}

.button2 {
  background-color: #FC473F; 
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  border-radius: 8px;
  transition-duration: 0.3s;
}

.button2:hover{
  background-color: #FFD4D2; 
  color: #FC473F;
  
}

</style>


<body>
 <br>
 <div class="container">
        
        <ul class="nav nav-pills">
        <img src="images/SMKN3Kendal-BGRemove.png" alt="Bootstrap" width="30" height="40">
        &nbsp;
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
        <li class="nav-item">
            <a class="nav-link active" href="surat_masuk.php">Surat Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="surat_keluar.php">Surat Keluar</a>
        </li>
       
        </ul>

        <br>
        <div class="">
    <center><a class = "btn btn-primary" href = "tambah_suratmasuk.php">Tambah Surat</a></center>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <table class="table">
        <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">No surat</th>
            <th scope="col">No Agenda</th>
            <th scope="col">Tanggal Surat</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Asal surat</th>
            <th scope="col">Perihal</th>
            <th scope="col">File</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM tb_suratmasuk ORDER BY id ASC";
                $hasil = mysqli_query($koneksi, $query);
                if (!$hasil){
                    die("Query error :". mysqli_errno($koneksi). "-". mysqli_error($koneksi));
                }
                $nomor = 1;
                while($row = mysqli_fetch_assoc($hasil)) {
                ?>

                <tr>
                    <td><?php echo $nomor;?></td>

                    <td><?php echo $row['no_surat'];?></td>

                    <td><?php echo $row['no_agenda'];?></td>

                    <td><?php echo $row['tgl_surat'];?></td>

                    <td><?php echo $row['tgl_masuk'];?></td>

                    <td><?php echo $row['asal_surat'];?></td>

                    <td><?php echo $row['perihal'];?></td>

                    <td><?php echo $row['file'];?></td>

                    <td>
                        <a class = "button" href ="edit_surat.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a class = "button2" href ="proses_hapus_masuk.php?id=<?php echo $row['id'];?>"onclick = "return confirm('Yakin jika Data yang anda pilih akan dihapus ?')">Hapus</a>
                    </td>
                </tr>
             <?php
             $nomor++;
            }
            ?>
    </table>
        </div>
    </div>
        
    </div>
    <br>
    
    
    
   

   
</body>
</html>