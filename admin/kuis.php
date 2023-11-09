<?php include 'header.php'; ?>
<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Kuis</h4>
		</div>
		<div class="panel-body">
			<a href="kuis_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br />
			<br />
			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama</th>
                    <th>Alamat</th>
					<th>HP</th>
                    <th>Jenis Kelamin</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
					<th width="15%">OPSI</th>
				</tr>
				<?php
				// koneksi database
				include '../koneksi.php';
				// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi, "select * from kuis");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama'];
							?></td>
                        <td><?php echo $d['alamat'];
							?></td>
                        <td><?php echo $d['hp'];
							?></td>
                        <td><?php echo $d['jk'];
							?></td>
                        <td><?php echo $d['nilai1'];
							?></td>
                        <td><?php echo $d['nilai2'];
							?></td>
                        <td><?php echo $d['nilai3'];
							?></td>
                        <td><?php echo $d['nilai4'];
							?></td>
                        <td><?php echo $d['nilai5'];
							?></td>
						<td>
							<a href="kuis_edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-info">Edit</a>
							<a href="kuis_hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>