<div class="container">
	<?php $this->load->view('elements/upcoming_project.php'); ?>
	<?php echo br(3) ?>
	<div class="row">
		<div class="text-danger">
			<h2>Add Your Task :</h2>
		</div>
		<?php echo br(2); ?>

		<?php echo form_open('index.php/welcome/upload_checking'); ?>
			<label class="lead">List of topics  : </label>
			<?php
				$large = "opu";
				$options = array(
		        'PYTHON'           => 'PYTHON',
		        'Project'          => 'Project',
		        'Django'           => 'Django',
		        'linux'            => 'linux',
		        'Job Question'     => 'Job Question',
		        'JAVA'             => 'JAVA',
		        'PHP'			   => 'PHP',
		        'Codeigniter'      => 'Codeigniter',
		        'kivy'			   =>	'kivy'
		);
		echo form_dropdown('wd_subject', $options, 'kivy'); //('field name', array name, )
			 ?>
			 <br>
			 <br>
			 <label class="lead">Start time hour : </label>
			 <input name="wd_start_hour" max="12" min="1" type="number" style="width:70px;" placeholder="hh"/>
			 <input name="wd_close_minite" max="60" min="1" type="number" style="width:70px; placeholder="mm"/>
			 <select name="wd_am_pm">
			 	<option value="AM">AM</option>
			 	<option value="PM">PM</option>
			 </select>
			 <br>
			 <br>
			<label class="lead">End time : </label>
			 <input name="wd_time" type="number" max="60" min="1" placeholder="minite"/>
			 <br><br>
			 <button class="btn btn-success">submit</button>
		<?php echo form_close(); ?>
	</div>
	<?php echo br(3) ?>
	<div class="row">

				<p class="text-center"><h2>All Task :</h2></p>

				<?php $this->load->view('elements/all_data_table') ?>

	</div>

	<?php $this->load->view('elements/user_help_form'); ?>


</div>