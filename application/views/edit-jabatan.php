<div class="content-wrapper"> 
	<section class="content">
		<?php foreach($jabatan as $jab) { ?>

			<form action="<?php echo base_url().'jabatan/update'?>" enctype="multipart/form-data" method="post">
				<div class="form-group"> 
					<label>Jabatan</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $jab->id ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $jab->nama ?>">
				</div>
				<div class="form-group"> 
					<label>Deskripsi</label>
					<textarea name="deskripsi" class="form-control" value="<?php echo $jab->deskripsi ?>"></textarea> 
				</div>

				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>

		<?php } ?>
	</section>	
</div>	
