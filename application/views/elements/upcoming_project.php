<?php echo form_open_multipart('index.php/upload/do_upload');?>
	<div class="row">
		<h2 class="text-primary">
			Enter A project : 
		</h2>
		<?php echo br(3) ?>
		<div class="input-group">
			<label class="lead">Project Tittle : </label>
			<input type="text" placeholder="Project Tittle"  name="project_tittle" class="form-control" aria-describedby="sizing-addon2" required>
		</div>
		<div class="input-group">
			<?php echo br(2) ?>
			<label class="lead">Project logo : </label>
			<div class="media">
				<div class="media-left media-middle">
					<img src="<?php echo base_url(); ?>userfiles/image.jpg" alt="" class="media-object">
					<?php 
						$image = array(

						'id'            => 'upload_image',
				        'class'         => 'glyphicon glyphicon-level-up',
				        'style'         => 'font-size: 20px;',
				        'accept'		=> 'jpg/*',
				        'type'			=>  'file',
				        'size' 			=>	'20',
				        'name'      	=>	'userfile'

					);
						echo form_input($image);
					?>
				</div>
			</div>
		</div>
		<div class="input-group">
			<?php echo br(2) ?>
			<label class="lead">Need Skill : </label>
			<?php
			$array = array('class' => 'form-control','placeholder' => 'Enter Must Need SkiLL', 'name' => 'project_skill'); 
			echo form_textarea($array) ?>
		</div>
		<div class="input-group">
			<?php echo br(2) ?>
			<label class="lead">Dead Line : </label>
			<input type="text" placeholder="Project Dead Line"  name="project_deadline" class="form-control" aria-describedby="sizing-addon2">
		</div>
		<div class="input-group">
			<?php echo br(2) ?>
			<label class="lead">Contruct : </label>
			<input type="text" placeholder="Enter Email or PH-Number"  name="project_contruct" class="form-control" aria-describedby="sizing-addon2">
		</div>
		<?php echo br(2) ?>
		<button class="btn btn-primary">SEND</button>

		
	</div>

<?php echo form_close(); ?>