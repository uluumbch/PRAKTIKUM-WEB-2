<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="get" class="container">
        <div class="mb-3">
            <label for="input1">Nama</label>
            <input type="text" class="form-control" name="input1" id="input1">
            <?php 
                if (isset($_GET['input1']) && empty($_GET['input1'])) {
                    echo "<p class='text-danger'>nama tidak boleh kosong!!</p>";
                }
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIM</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="NIM">
        </div>

        <div class="mb-3">
            <input type="radio" name="jk" id="jkl" value="L">
            <label for="jkl">Laki-laki</label>
            <br>
            <input type="radio" name="jk" id="jkp" value="P">
            <label for="jkp">Perempuan</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <?php 
        if (isset($_GET) ) {
            echo $_GET['jk'];
        }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>