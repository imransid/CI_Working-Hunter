<div class="jumbotron">
	<div class="page-header text-center">
		<h1><?php echo $meta_title; ?></h1>
	</div>
</div>
<div class="demo_area">
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#section-1">TIMELINE</a></li>
			<li><a data-toggle="tab" href="#section-2">HOME</a></li>
			<li><a data-toggle="tab" href="#section-3">USERS</a></li>
			<li><a href="#section-4" data-toggle="tab">CHECK OUT</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane " id="section-3">
				<!--for users-->
				
				<div class="table-responsive">
							<table class="table table-condensed table-hover">
								<tr>
									<th>User No</th>
									<th>Name</th>
									<th>E-Mail</th>
									<th>Number</th>
									<th>Action</th>
								</tr>
								
									<?php 

									$i = 0;

									foreach ($user_list as $row)
									{
											echo "<tr>";
											echo "<td>";
									        echo $i;
									        echo "</td>";
											echo "<td>";
									        echo $row->name;
									        echo "</td>";
									   		echo "<td>";
									        echo $row->user_email;
									        echo "</td>";
											echo "<td>";
									        echo "0".$row->user_number;
									        echo "</td>";
									        echo "<td>";
									        echo anchor(base_url('index.php/crud_admin/admin_delete/'.$row->user_id), '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', 'title="delete"');
									        echo " ";
									        echo anchor(base_url('index.php/crud_admin/admin_edit/'.$row->user_id), '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',  array('title' => 'edit'));
				
									        echo "</td>";
									        echo "</tr>";
									        $i = $i + 1;
									}


									 ?>
							</table>
						</div>


			<a class="btn btn-xs btn-block btn-info" data-toggle="modal" data-target="#modal-1" type="button">Create new user</a>


			<div class="modal fade" id="modal-1" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close"  data-dismiss="modal">&times;</button>
							<div class="modal-body">
							<?php echo form_open('index.php/crud_admin/admin_insert'); ?>
								
								<div class="form-group">
									<label for="exampleInputEmail1">AC-TYPE : </label>
									<?php 

										$options = array(
										        'admin'         => 'ADMIN',
										        'user'           => 'USER'
										);
										$js = array(
										        'class'       => 'shirts',
										        'onChange' => 'some_function();'
										);
	
									echo form_dropdown('types_ac', $options, 'user', $js);

									 ?>
								</div>

								<?php br(3); ?>

								<div class="form-group">
									<label for="exampleInputEmail1">E-Mail : </label>
									<input type="email" name="user_email" class="form-control" id="exampleInputEmail1" placeholder="email">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">First name : </label>
									<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="First-Name">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">User name : </label>
									<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="User-Name">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Phone Number : </label>
									<input type="text" name="user_number" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Password : </label>
									<input type="password" name="password" class="form-control" id="exampleInputEmail1" >
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Re-Password :</label>
									<input type="password" name="passconf" class="form-control" id="exampleInputEmail1" >
								</div>


							</div>
							<div class="modal-footer">
								<button class="btn btn-primary">save</button>
								<?php echo form_close() ?>
								<a  class="btn btn-default" data-dismiss="modal">close</a>
							</div>
						</div>
					</div>
				</div>
			</div>


				
			</div>

			<div class="tab-pane" id="section-2">

				<?php $this->load->view('elements/home') ?>


			</div>
			<div class="tab-pane active" id="section-1">
				

					<?php //$this->load->view('elements/timeline_1'); ?>

					<?php $this->load->view('elements/timeline', $this->data); ?>

						
			</div>
			<div class="tab-pane" id="section-4">
					

					<?php 
								$this->view_data['chat_id'] = 1;
								$this->view_data['user_id'] = $this->session->userdata('user_id');
								$this->view_data['user_type'] = $this->session->userdata('user_type');
								$this->view_data['name']= $this->session->userdata('name');// ?>
					<?php $this->load->view('elements/chaing_on',$this->view_data); ?>



			</div>
		</div>
	</div>
</div>
			