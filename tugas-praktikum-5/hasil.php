<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nama = $_POST['nama'];
                            $nim = $_POST['nim'];
                            $tanggallahir = $_POST['tanggallahir'];
                            $alamat = $_POST['alamat'];
                            $jurusan = $_POST['jurusan'];

                            echo "<ul class='list-group'>";
                            echo "<class='list-group-item active' aria-current='true'>Data Mahasiswa";
                            echo "<li class='list-group-item'>Nama: " . $nama . "</li>";
                            echo "<li class='list-group-item'>NIM: " . $nim . "</li>";
                            echo "<li class='list-group-item'>Tanggal Lahir: " . $tanggallahir . "</li>";
                            echo "<li class='list-group-item'>Alamat: " . $alamat . "</li>";
                            echo "<li class='list-group-item'>Jurusan: " . $jurusan . "</li>";
                            echo "</ul>";
                        }
                        ?>
                    </div>
                </div>
            </div>