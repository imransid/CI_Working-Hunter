<div class="container">
	<div style="padding-left:35%;" class="row">
		<div style="width:45%;" >

			<?php echo form_open('index.php/crud_admin/admin_cheker'); ?>
				<aside class="well alert-warning"> 
					<?php echo br(1); ?>
					No activity within 1440 seconds; please log in again.
					

				</aside>
				<aside class="well">
					<label class="lead " for="exampleInputEmail1">AC-TYPE : </label>
									<?php 

										$options = array(
										        'admin'         => 'ADMIN',
										        'user'           => 'USER'
										);
										$js = array(
										        'class'       => ' pull-right',
										        'onChange' => 'some_function();'
										);
	
									echo form_dropdown('user_type', $options, 'user', $js);

									 ?>
									 <br><br>
					<label class="lead">Email : </label>
					 <input name="admin_email" class="pull-right"  type="text" required placeholder="user eamil" required />
					 <br><br>
					 <label class="lead">Password : </label>
					 <input name="wd_password" class="pull-right" type="password" required placeholder="password" required />
					 	
				</aside>
				 <aside class="well text-center" style="background-color: #aaaaaa; margin-top:-20px;">
				 		<button class="btn btn-primary lead">Log in</button>
				 </aside>

			<?php echo form_close(); ?>
		</div>
	</div>
</div>