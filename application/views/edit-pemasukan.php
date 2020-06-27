<div class="content-wrapper"> 
	<section class="content">
		<?php foreach($pemasukan as $msk) { ?>

			<form action="<?php echo base_url().'pemasukan/update'?>" enctype="multipart/form-data" method="post">
				<div class="form-group"> 
					<label>Tanggal</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $msk->id ?>">
					<input type="date" name="tanggal" class="form-control" value="<?php echo $msk->tanggal ?>">
				</div>
				<div class="form-group"> 
					<label>Keterangan</label>
					<textarea name="keterangan" class="form-control" value="<?php echo $msk->keterangan ?>"></textarea> 
				</div>
				<div class="form-group"> 
					<label>Nominal</label>
					<input type="text" name="nominal" class="form-control" value="<?php echo $msk->nominal ?>">
				</div>

				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>

		<?php } ?>
	</section>	
</div>	