<div class="row well text-center">
	<h1><?php echo "working demo" ?></h1>
	<button id="form_search" type="button" class="btn" area-label="center">
		<span type="button" style="font-size:25px;" class="glyphicon glyphicon-collapse-down"></span>
	</button>
</div>
<div style="display:none;" class="row well-lg search_form text-center">
	<?php echo form_open(); ?>
	<input type="text" style="display:none;" name="search" id="searching_form" placeholder="search now!">
	<?php echo form_close(); ?>
</div>

<?php $this->load->view('elements/all_data_table') ?>
