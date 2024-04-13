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
                <h2>Tambah Mahasiswa</h2>
                <hr>
                <form action="insert.php" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-2 col-form-label mt-5 ml-2">Nama</label> 
                        <div class="col-4 mt-5">
                            <input id="text1" name="nama" placeholder="Nama Mahasiswa" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-2 col-form-label ml-2">NIM</label> 
                        <div class="col-4">
                            <input id="text2" name="nim" placeholder="NIM" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select" class="col-2 col-form-label ml-2">Jurusan</label> 
                             <div class="col-4">
                                <select id="select" name="jurusan" class="custom-select" required>
                                    <option value="sistem  informasi">Sistem Informasi</option>
                                    <option value="teknik informatika">Teknik Informatika</option>
                                    <option value="bisnis digital">Bisnis Digital</option>
                                </select>
                            </div>
                    </div> 
                    <div class="form-group row">
                        <label for="nim" class="col-2 col-form-label ml-2">Semester</label> 
                        <div class="col-4">
                            <input id="text2" name="semester" placeholder="Semester" type="number" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="offset-2 col-2">
                            <form action="insert.php">
                            <input type="submit" value="Tambah">
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>