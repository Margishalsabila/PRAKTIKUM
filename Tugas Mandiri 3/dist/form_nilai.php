<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="text-align: center;">Form Nilai</h2>
<form method="POST" action="nilai_siswa.php">
      <div class="container">
      <div class="fix-widht">
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-4">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
        <option value="Basis Data">Basis Data 1</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-4">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-4">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas</label> 
    <div class="col-4">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</form>
</body>
</html>