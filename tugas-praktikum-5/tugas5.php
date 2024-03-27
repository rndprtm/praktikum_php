<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h2>FORM MAHASISWA</h2>
                <hr>
                <form action="hasil.php" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-2 col-form-label mt-5 ml-2">Nama</label> 
                        <div class="col-4 mt-5">
                            <input id="text1" name="nama" placeholder="Nama Mahasiswa" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-2 col-form-label ml-2">NIM</label> 
                        <div class="col-4">
                            <input id="text2" name="nim" placeholder="NIM" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggallahir" class="col-2 col-form-label ml-2">Tanggal Lahir</label> 
                        <div class="col-4">
                            <input id="text3" name="tanggallahir" placeholder="Tanggal Lahir" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="textarea" class="col-2 col-form-label ml-2">Alamat</label> 
                        <div class="col-4">
                                <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="select" class="col-2 col-form-label ml-2">Jurusan</label> 
                             <div class="col-4">
                                <select id="select" name="jurusan" class="custom-select">
                                    <option value="sistem  informasi">Sistem Informasi</option>
                                    <option value="teknik informatika">Teknik Informatika</option>
                                    <option value="bisnis digital">Bisnis Digital</option>
                                </select>
                            </div>
                    </div> 
                    <br>
                    <div class="form-group row">
                        <div class="offset-2 col-2">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
