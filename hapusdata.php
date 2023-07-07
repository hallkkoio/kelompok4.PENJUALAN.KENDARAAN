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
<h4>Apakah anda yakin menghapus data ini?</h4>
<?php

$ambilsemuadatastok = mysqli_query($koneksi, "SELECT * FROM pembelian");
$i = 1;
while($data=mysqli_fetch_array($ambilsemuadatastok)){
   
    $kendaraan = $data['kendaraan'];
    $deskripsi = $data['deskripsi'];
    $pembeli = $data['pembeli'];      
    $idb = $data['idbeli'];                                     

?>
<?php
}
?>

    <form method="post">
    
        <div class="form-group">
            <input class="form-control py-4" name="idb" type="hidden" value="<?=$idb;?>" required/>
        </div>
        <br>                                        
        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">                                         
            <button type="submit" class="btn btn-danger" name="hapusdata">Hapus</button>
        </div>
    
    </form>

</body>
</html>