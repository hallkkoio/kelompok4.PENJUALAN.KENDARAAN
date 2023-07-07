<?php

require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<form method="post">
    <div class="form-group">
        <label class="small mb-1" for="namakendaraan">Masukkan Nama Kendaraan</label>
        <input class="form-control py-4" name="kendaraan" type="text" placeholder="Masukkan Nama Kendaraan" required/>
    </div>
    <br>
    <div class="form-group">
        <label class="small mb-1" for="deskripsi">Deskripsi Kendaraan</label>
        <input class="form-control py-4" name="deskripsi" type="text" placeholder="Masukkan Deskripsi Kendaraan" required/>
    </div>
    <br>
    <div class="form-group">
        <label class="small mb-1" for="pembeli">Nama Pembeli</label>
        <input class="form-control py-4" name="pembeli" type="text" placeholder="Masukkan Nama Pembeli" required/>
    </div>
    <br>                                        
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">                                         
        <button type="submit" class="btn btn-primary" name="addnewdata">Submit</button>
    </div>
</form>
</body>
</html>