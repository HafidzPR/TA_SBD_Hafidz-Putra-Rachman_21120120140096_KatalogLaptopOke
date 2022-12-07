<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Layanan Katalog LaptopOke</title>
  </head>
  <body>
    <h1 class="text-center mb-5">+ Tambah Data Laptop 💻</h1>

        <div class="container">
            
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="insertdata" method="POST" enctype="multipart/form-data"
                      <?php echo csrf_field(); ?>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Laptop</label>
                        <input type="text" name="Laptop" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Merek Laptop</label>
                        <input type="text" name="Merek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tipe Penggunaan Laptop</label>
                        <select class="form-select" name="Tipe" aria-label="Default select example">
                          <option selected>Silahkan pilih tipe penggunaan laptop</option>
                          <option value="gaming">Gaming Laptop</option>
                          <option value="non-gaming">Non-Gaming Laptop</option>

                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Harga Laptop (Rp.)</label>
                        <input type="number" name="Harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                        <input type="file" name="foto" class="form-control">
                      </div>
      
                      <button type="submit" class="btn btn-primary">Submit ✔️</button>
                    </form>
                  </div>
                 </div>
              </div>
            </div>
        </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH D:\Applications\Apache XAMPP\htdocs\databaselaptopoke\resources\views/tambahdata.blade.php ENDPATH**/ ?>