<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Jabatan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Jabatan</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Jabatan</button>
    	<table class="table table-hover">
    		<tr>
    			<th scope="col">NO</th>
    			<th scope="col">JABATAN</th>
    			<th scope="col">DESKRIPSI</th>
    			<th colspan="2" scope="col"><center>ACTION</center></th>
    		</tr>
    		<?php 

    		$no =1;
    		foreach ($jabatan as $jab) : 
    		 ?>
    		<tr>
    			<td class="col-md-1"><?php echo $no++ ?></td>
    			<td class="col-md-2"><?php echo $jab->nama ?></td>
    			<td class="col-md-6"><?php echo $jab->deskripsi ?></td>
    			<td align="center" onclick="javascript: return confirm('Are you sure?')"><?php echo anchor('jabatan/hapus/'.$jab->id, '<center><button class="btn btn-danger"><i class="fa fa-trash"></i></button></center>')?></td>
    			<td align="center"><?php echo anchor('jabatan/edit/'.$jab->id, '<center><div class="btn btn-primary"><i class="fa fa-edit"></i></div></center>') ?></td>
    		</tr>
    	<?php endforeach; ?>
    	</table>
    </section>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT JABATAN</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo form_open_multipart('Jabatan/tambah_aksi');  ?>
		        	<div class="form-group">
		        		<label>Jabatan</label>
		        		<input type="text" name="nama" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Deskripsi</label>
		        		<textarea name="deskripsi" class="form-control"></textarea>
		        	</div>
		        	
			        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
			        <button type="submit" class="btn btn-primary">Simpan</button>
		        <?php echo form_close(); ?>
		      </div>
		    </div>
		  </div>
		</div>
	</div>