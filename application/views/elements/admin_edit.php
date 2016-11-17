<?php echo form_open('index.php/crud_admin/admin_update'); ?>

<?php foreach ($editing_user as $value) { ?>
								<?php //echo form_hidden('user_id', $value->user_id);?>						
								<div class="form-group">
									<label for="exampleInputEmail1">E-Mail : </label>
									<input type="email" name="user_email" class="form-control" id="exampleInputEmail1" placeholder="email" value="<?php echo $value->user_email; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">First name : </label>
									<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="First-Name" value="<?php echo $value->name; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">User name : </label>
									<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="User-Name" value="<?php echo $value->username; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Phone Number : </label>
									<input type="text" name="user_number" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number" value="<?php echo $value->user_number; ?>">
								</div>

										<?php $data = array(
													        'type'  => 'hidden',
													        'name'  => 'user_id',
													        'id'    => 'hiddenemail',
													        'value' => $value->user_id,
													        'class' => 'hiddenemail'
													);

										echo form_input($data); ?>

								<button class="btn">save</button>
			
<?php }?>
<?php echo form_close(); ?>