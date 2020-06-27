<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL ALUMNI</strong></h4>

		<table class="table">
			<tr>
				<th>Nama Lengkap</th>
				<td><?php echo $detail->nama ?></td>
			</tr>
			<tr>
				<th>ANGKATAN</th>
				<td><?php echo $detail->angkatan ?></td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td><?php echo $detail->tgl_lahir ?></td>
			</tr>
			<tr>
				<th>Pekerjaan</th>
				<td><?php echo $detail->pekerjaan ?></td>
			</tr>
			<!-- <tr>
				<th>No. Handphone</th>
				<td><?php echo $detail->no_telp ?></td>
			</tr> -->
			<tr>
				<th>Foto</th>
				<td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="110"></td>
			</tr>
		</table>
		<a href="<?php echo base_url('Alumni/index') ?>" class="btn btn-danger">Kembali</a>
	</section>
</div>