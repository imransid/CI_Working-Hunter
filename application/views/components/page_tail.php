	<script type="text/javascript" src="<?php echo site_url('boots/js/I_hack_js.js'); ?>"></script>
	<!--script type="text/javascript" src="<?php //echo base_url(); ?>boots/js/jquery.browser.js"></script-->
	<script	type="text/javascript" src="<?php echo site_url('boots/js/bootstrap.js'); ?>"></script>
	<!--script type="text/javascript" src="<?php //echo site_url('boots/js/Userhelp.js'); ?>"></script-->


	<script>

		$(document).ready(function() {
			//$('#form_search').click(function() {
				//$('.search_form').slideToggle('200');
				//$('table').fadeToggle();
				//$('#searching_form').fadeToggle('slow');
				//alert("hi");
			//});status
			
			
			setInterval(function( ){ get_chat_message(); },2500);///for auto loading few time later.
			
			$("input#chat_message").keypress(function(e) { //for woring enter
				
				if(e.which == 13){
					$("a#submit_message").click();
				}

			});

			
			var user_id = <?php echo $user_id; ?>;
			var chat_id = <?php echo $chat_id; ?>;
			var ac_type = "<?php echo $user_type; ?>";
			var name = "<?php echo $name ?>";
		
		$("a#submit_message").click(function(){

				var chat_message_content = $("input#chat_message").val();

			
				if(chat_message_content  === "") { return false; }
				
				$.post("<?php echo base_url(); ?>" + "index.php/chat/ajax_add_chat_message", {chat_message_content: chat_message_content, chat_id : chat_id, user_id : user_id, ac_type : ac_type, name : name}, function(data) {
					//do sucessfull;
					
					if(data.status == 'ok'){
						$("div#chat_view_port").html(data.content);
						}
						else{
							alert("DATABASE ERROR 404");
							//do something for error
						}

					
				},"json");

				return false;


			});	


			function get_chat_message(){


				 $.ajax({
				        url: "<?php echo base_url(); ?>" + "index.php/chat/get_chat_message",
				        data: {chat_id: chat_id}, // change this to send js object
				        type: "post",
				        dataType: 'json',
				        success: function(data){
				           //document.write(data); just do not use document.write
				           
				        if(data.status == 'ok'){
						$("div#chat_view_port").html(data.content);
						}
						else{
							alert("DATABASE ERROR 404");
							//do something for error
						}

				        }
				        });


			}

			get_chat_message();



		});
	</script>

	
</body>
</html>