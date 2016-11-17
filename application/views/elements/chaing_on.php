
<aside style="background-color:yellow; width:400px;" class="pull-right">
	<button style="width:100%;" class="btn disabled text-center address">CHAT</button>
	<br>
	<div id="chat_view_port"></div>
	<br>
	<div style="background-color:red;">
		<input type="text" id="chat_message" name="chat_message" value="">
		<?php echo anchor('#', 'Say it', array('title' => 'Send this chat message', 'id' => 'submit_message')); ?>
	</div>
	<button id="form_search" style="width:100%;" type="button" class="btn text-center" area-label="center">
		<span type="button" style="font-size:25px;" class="glyphicon glyphicon-collapse-down"></span>
	</button>
</aside>

<h1><?php echo $user_type; ?></h1>