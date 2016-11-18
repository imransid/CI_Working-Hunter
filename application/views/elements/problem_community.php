<div class="row">
<?php echo form_open('index.php/upload/do_upload_prog'); ?>
	<div class=" alert alert-success">
		<div class="page-header text-center">
			<h1>Community Foram</h1>
		</div>
	</div>
		<?php echo br(2) ?>
		<h4><samp>Tittle : </samp>
		<input type="text" placeholder="problem tittle" required name="community_tittle"></h4>
		<?php echo br(2) ?>
		<h4><samp>upload pic : </samp>
		<input type="file" name="userfile"></h4>
		<?php echo br(2) ?>
		<h4><samp>Description : </samp>
		<textarea name="community_about" id="" cols="30" rows="10" placeholder="Write About Somting !" required>	
		</textarea>
		</h4>
		<?php echo br(3) ?>
		<button class=" btn btn-md btn-primary text-center col-md-offset-6">Submit</button>
		<?php echo br(2) ?>
<?php echo form_close(); ?>
</div>