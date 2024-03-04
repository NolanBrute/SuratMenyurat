<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href="css/bootstrap.min.css">
  <title>Login</title>
</head>

<style>

.button {
  background-color: #236DF0; 
  border: none;
  color: white;
  padding: 12px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  border-radius: 8px;
  transition-duration: 0.3s;
}

.button:hover{
  background-color: #CFDFFB; 
  color: #236DF0;
  
}

</style>


<body>
  <form action = "proses_login.php" method = "post">
  <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    
                    <h1 class="card-title mb-4">Login</h1>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text" name = "username" id="username">@</span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username anda" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
        
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" name = "password" id="password">.#</span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password anda" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                     
                    <!-- <a type="button" class="btn btn-primary">Login</a> -->
                    <button class = "button">Login</button>

                </div>
            </div>
        </div>
    </div>
  </form>

</body>
</html>