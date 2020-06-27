<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Alumni
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Alumni</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Alumni</button>
    	<table class="table table-hover table-responsive">
	    			<tr>
		    			<th>NO</th>
		    			<th>NAMA ALUMNI</th>
		    			<th>ANGKATAN</th>
		    			<th>TANGGAL LAHIR</th>
		    			<th>PEKERJAAN</th>
		    			<th colspan="3"><center>ACTION</center></th>
	    			</tr>	
    		<?php 

    		$no =1;
    		foreach ($alumni as $ex) : 
    		 ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $ex->nama ?></td>
    			<td><?php echo $ex->angkatan ?></td>
    			<td><?php echo $ex->tgl_lahir ?></td>
    			<td><?php echo $ex->pekerjaan ?></td>
    			<td align="center"><?php echo anchor('Alumni/detail/'.$ex->id,'<div class="btn btn-success"><i class="fa fa-search-plus"></i></div>') ?></td>
    			<td align="center" onclick="javascript: return confirm('Are you sure?')"><?php echo anchor('alumni/hapus/'.$ex->id, '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>')?></td>
    			<td align="center"><?php echo anchor('alumni/edit/'.$ex->id, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    		</tr>
    	<?php endforeach; ?>
    	</table>
    </section>

    <!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA ALUMNI</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo form_open_multipart('Alumni/tambah_aksi');  ?>
		        	<div class="form-group">
		        		<label>Nama Alumni</label>
		        		<input type="text" name="nama" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Angkatan</label>
		        		<input type="text" name="angkatan" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Tanggal Lahir</label>
		        		<input type="date" name="tgl_lahir" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Pekerjaan</label>
		        		<input type="text" name="pekerjaan" class="form-control">
		        	</div>
		        	<!-- <div class="form-group">
		        		<label>No Handphone</label>
		        		<input type="text" name="no_telp" class="form-control">
		        	</div> -->
		        	<div class="form-group">
		        		<label>Foto</label>
		        		<input type="file" name="foto" class="form-control">
		        	</div>

			        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
			        <button type="submit" class="btn btn-primary">Simpan</button>
		        <?php echo form_close(); ?>
		      </div>
		    </div>
		  </div>
		</div>
</div>