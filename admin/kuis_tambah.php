<?php include 'header.php'; ?>
<div class="container">
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Data Kuis Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="kuis_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat ..">
                    </div>
                    <div class="form-group">
                        <label>HP</label>
                        <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp ..">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jk" placeholder="Masukkan jenis kelamin ..">
                    </div>
                    <div class="form-group">
                        <label>Nilai 1</label>
                        <input type="text" class="form-control" name="nilai1" placeholder="Masukkan nilai ..">
                    </div>
                    <div class="form-group">
                        <label>Nilai 2</label>
                        <input type="text" class="form-control" name="nilai2" placeholder="Masukkan nilai ..">
                    </div>
                    <div class="form-group">
                        <label>Nilai 3</label>
                        <input type="text" class="form-control" name="nilai3" placeholder="Masukkan nilai ..">
                    </div>
                    <div class="form-group">
                        <label>Nilai 4</label>
                        <input type="text" class="form-control" name="nilai4" placeholder="Masukkan nilai ..">
                    </div>
                    <div class="form-group">
                        <label>Nilai 5</label>
                        <input type="text" class="form-control" name="nilai5" placeholder="Masukkan nilai ..">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>