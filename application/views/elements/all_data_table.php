<div class="table-responsive">
	<table class="table table-condensed">
		<tr>
			<th>Work topic</th>
			<th>Start time</th>
			<th>Close time</th>
			<th>Date</th>
			<th>work time</th>
		</tr>
		
			<?php 


			foreach ($quick_data as $row)
			{
					echo "<tr>";
					echo "<td>";
			        echo $row->wd_subject;
			        echo "</td>";
					echo "<td>";
			        echo $row->wd_time_start;
			        echo "</td>";
			   		echo "<td>";
			        echo $row->final_minit ;
			        echo "</td>";
					echo "<td>";
			        echo $row->wd_date;
			        echo "</td>";
			        echo "<td>";
			        echo $row->work_time;
			        echo "</td>";
			        echo "</tr>";
			        //echo $row['name'];
			        //echo $row['body'];
			}


			 ?>
	</table>
</div>
