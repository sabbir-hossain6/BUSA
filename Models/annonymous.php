<?php 
	if (isset($_POST['send'])) {
		sendMessage();
	}

	function sendMessage(){
		$target = "annonymous/".basename($_FILES['input_pic']['name']);
		$receiver = $_POST['input_id'];
		$subject = $_POST['input_subject'];
		$content = $_POST['input_content'];
		$img = $_FILES['input_pic']['name'];

		if (move_uploaded_file($_FILES['input_pic']['tmp_name'], $target)) {
			$msg = "Attachment is also sent!";
		}else{
			$msg = "No attachment is sent";
		}

		addToDatabase($receiver, $subject, $content, $img);

		echo '<div class="alert alert-success">';
  		echo $msg;
		echo "</div>";
	}

	function sendMessageTest($receiver, $subject, $content){
		/*$target = "annonymous/".basename($_FILES['input_pic']['name']);
		
		$img = $_FILES['input_pic']['name'];

		if (move_uploaded_file($_FILES['input_pic']['tmp_name'], $target)) {
			$msg = "Attachment is also sent!";
		}else{
			$msg = "No attachment is sent";
		}*/
		$img = '';

		addToDatabase($receiver, $subject, $content, $img);

		echo '<div class="alert alert-success">';
  		echo "Test Done";
		echo "</div>";
	}



 ?>


 <?php 
    function get_list_view_html($count,$text){
        if ($text["t_seen"]==0) {
        	$output = '<tr class="unread">';
        	if ($text["t_important"]==0) {
        		$output = $output . '<td class="inbox-small-cells"><i class="fa fa-star"></i></td>';
        	}
        	else{
        		$output = $output . '<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>';
        	}
            
            $output = $output . '<td class="view-message ">
            						<a href="?viewThread='. $text["t_id"] .'" style="text-decoration: none; color: #212529;">'. $text["t_subject"] .'</a>
            					</td>';

            if ($text["t_img"]!= null) {
            	$output = $output . '<td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>';
            }
            else{
            	$output = $output . '<td class="view-message  inbox-small-cells"></td>';
            }
                
            $output = $output .  '<td class="view-message  text-right">'. $text["t_time"] .'</td>
              	</tr>';
        }
     	
      return $output;
    }


   



  ?>