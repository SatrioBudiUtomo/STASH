<div class="content-wrapper"> 
	<section class="content">
		<?php foreach($alumni as $ex) { ?>

			<form action="<?php echo base_url().'alumni/update'?>" enctype="multipart/form-data" method="post">
				<div class="form-group"> 
					<label>Nama Alumni</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $ex->id ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $ex->nama ?>">
				</div>
				<div class="form-group"> 
					<label>Angkatan</label>
					<input type="text" name="angkatan" class="form-control" value="<?php echo $ex->angkatan ?>">
				</div>
				<div class="form-group"> 
					<label>Tanggal Lahir</label>
					<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $ex->tgl_lahir ?>">
				</div>
				<div class="form-group"> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan" class="form-control" value="<?php echo $ex->pekerjaan ?>">
				</div>
				<!-- <div class="form-group"> 
					<label>Jabatan</label>
					<input type="text" name="jabatan" class="form-control" value="<?php echo $mhs->jabatan ?>">
				</div>
				<div class="form-group"> 
					<label>No Handphone</label>
					<input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp ?>">
				</div> -->
				<div class="form-group"> 
					<label>Foto</label>
					<input type="file" name="foto" class="form-control" value="<?php echo $ex->foto ?>">
				</div>



				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>

		<?php } ?>
	</section>	
</div>	