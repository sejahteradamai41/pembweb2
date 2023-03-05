<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <p class="ml-3 mt-3">Sistem Penilaian</p>
    <div class="container=fluid">
      <div class="row m-2">
        <div class="col-8">
        <h2>Belanja Online</h2>

<form action="tugas_hasil.php" method="GET">
  <div class="form-group row">
    <label for="customer" class="col-3 col-form-label">customer</label> 
    <div class="col-6">
      <input id="customer" name="customer" placeholder="masukan nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3">Radio Buttons</label> 
    <div class="col-6">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesin cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-6">
      <input id="Jumlah" name="Jumlah" placeholder="Masukan Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        </div>
        <div class="col-4">
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    DAFTAR HARGA
  </a>
  <a href="#" class="list-group-item list-group-item-action">tv : Rp. 4.200.000</a>
  <a href="#" class="list-group-item list-group-item-action">KULKAS : Rp. 3.100.000</a>
  <a href="#" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</a>
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    HARGA DAPAT BERUBAH SETIAP SAAT
  </a>
</div>
    </div>
      </div>
    </div>
    
</body>
</html>