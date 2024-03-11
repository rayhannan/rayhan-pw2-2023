<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <form action="form_belanja.php" method="POST">
        <h3>Belanja barang Online</h3>
        <hr>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Customer</label> 
            <div class="col-3">
                <input id="text" name="customer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_playstation" type="radio" class="custom-control-input" value="Playstation"> 
                    <label for="radio_playstation" class="custom-control-label">Playstation</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_televisi" type="radio" class="custom-control-input" value="Televisi"> 
                    <label for="radio_televisi" class="custom-control-label">Televisi</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_ac" type="radio" class="custom-control-input" value="AC"> 
                    <label for="radio_ac" class="custom-control-label">AC</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-3">
                <input id="text1" name="jumlah" placeholder="Jumlah" type="number" required="required" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>