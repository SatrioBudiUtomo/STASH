<div class="content-wrapper"> 
	<section class="content">
		<?php foreach($anggota as $member) { ?>

			<form action="<?php echo base_url().'anggota/update'?>" enctype="multipart/form-data" method="post">
				<div class="form-group"> 
					<label>Nama Mahasiswa</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $member->id ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $member->nama ?>">
				</div>
				<div class="form-group"> 
					<label>NIM</label>
					<input type="text" name="nim" class="form-control" value="<?php echo $member->nim ?>">
				</div>
				<div class="form-group"> 
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $member->tgl_lahir ?>">
				</div>
				<div class="form-group"> 
					<label>Jurusan</label>
					<input type="text" name="jurusan" class="form-control" value="<?php echo $member->jurusan ?>">
				</div>
				<div class="form-group"> 
					<label>Jabatan</label>
					<input type="text" name="jabatan" class="form-control" value="<?php echo $member->jabatan ?>">
				</div>
				<div class="form-group"> 
					<label>No Handphone</label>
					<input type="text" name="no_telp" class="form-control" value="<?php echo $member->no_telp ?>">
				</div>
				<div class="form-group"> 
					<label>Foto</label>
					<input type="file" name="foto" class="form-control" value="<?php echo $member->foto ?>">
				</div>



				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>

		<?php } ?>
	</section>	
</div>	