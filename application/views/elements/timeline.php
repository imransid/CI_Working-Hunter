<div class="jumbotron">

		<?php
			if($quick_data_1){
			foreach ($quick_data_1 as $row)
									{		echo '<div class="row">';
											echo '<div class="page-header"><h1>';
									        echo $row->project_tittle;
									        echo "</h1></div>";
									        echo '<div class="media">
									        	<div class="pull-left media-left visible-lg visible-md"><a href="#"><img src="'; 
									        echo base_url();
									        echo "userfiles/";
									        echo $row->img_src; 
									        echo '" alt="" class="img-thumbnail media-object">';
									        echo br(2);
									        echo '<div class="media-body"><h4 class="media-heading">';
									        echo '<label class="lead">';
									        echo 'Must Need Skill : ';
									        echo "</label>";
									        echo "<samp>"; 
									        echo $row->project_skill;
									        echo ".</samp>";
									        echo br(1);
									        echo '<label class="lead">Project Deadline : ';
									        echo "<samp>";
									        echo $row->project_deadline;
									        echo "</samp>"; 
									        echo'</label>';
									        echo br(1);
									        echo '<label class="lead">Support : '; 
									        echo "<samp>";
									        echo $row->project_contruct;
									        echo "</samp>"; 
									        echo '</label>';
									        echo '</h4></div>';
									        echo "</a></div></div></div>";

									}
								}
								else{
									echo "<h2>NO DATA</h2>";
								}
									 ?>
	<h1></h1>
</div>