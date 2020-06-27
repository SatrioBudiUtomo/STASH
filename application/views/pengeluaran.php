<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Keuangan Keluar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Keuangan Keluar</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
        <button class="btn btn-success"><i class="fa fa-print"></i> Print</button>
    	<table class="table table-hover">
    		<tr>
    			<th scope="col">NO</th>
    			<th scope="col">TANGGAL</th>
    			<th scope="col">KETERANGAN</th>
                <th scope="col">NOMINAL</th>
    			<th colspan="2" scope="col"><center>ACTION</center></th>
    		</tr>
    		<?php 

    		$no =1;
            $total = 0;
    		foreach ($pengeluaran as $klr) : 
                $total += $klr->nominal;    
    		 ?>
    		<tr>
    			<td class="col-md-1"><?php echo $no++ ?></td>
    			<td class="col-md-2"><?php echo $klr->tanggal ?></td>
    			<td class="col-md-6"><?php echo $klr->keterangan ?></td>
                <td class="col-md-6">Rp. <?php echo $klr->nominal ?></td>
    			<td align="center" onclick="javascript: return confirm('Are you sure?')"><?php echo anchor('pengeluaran/hapus/'.$klr->id, '<center><button class="btn btn-danger"><i class="fa fa-trash"></i></button></center>')?></td>
    			<td align="center"><?php echo anchor('pengeluaran/edit/'.$klr->id, '<center><div class="btn btn-primary"><i class="fa fa-edit"></i></div></center>') ?></td>
    		</tr>
            
    	<?php endforeach; ?>
            <tr>    
                <td colspan="3" align="right"><strong>Total</strong></td>
                <td>Rp. <?php   echo $total; ?></td>
            </tr>
    	</table>
    </section>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT PENGELUARAN</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo form_open_multipart('pengeluaran/tambah_aksi');  ?>
		        	<div class="form-group">
		        		<label>Tanggal</label>
		        		<input type="date" name="tanggal" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label>Keterangan</label>
		        		<textarea name="keterangan" class="form-control"></textarea>
		        	</div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="text" name="nominal" class="form-control">
                    </div>

		        	
			        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
			        <button type="submit" class="btn btn-primary">Simpan</button>
		        <?php echo form_close(); ?>
		      </div>
		    </div>
		  </div>
		</div>
	</div>