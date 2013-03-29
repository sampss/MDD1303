<div data-role="page" id="be_somewhere_form"> 	
	
<div data-role="header" data-theme="a">
	 		<div class="ui-btn-left" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $prev_page; ?>" data-role="button" data-theme="a">Back</a>
			</div>
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons -->
			
	</div> <!-- / headerbar -->   

    <div data-role="content" class="custom_content">
		<?php echo $test_output;?>
		<?php 
			$add_time = $this->uri->uri_to_assoc(3);
		
			if (!empty($add_time['hidden']))
			{
				$label_array = array(
					'l_name' => '',
					'l_street' => '',
					'l_city' => '',
					'l_state' => '',
					'l_zip' => '',
					'l_phone' => ''
				);
				
				echo 
				'<h1>Please add the time and day you intend to be at '.$add_time['name'].'</h1>
				<div>
					<p>'.$add_time['street'].' '.$add_time['city'].' '.$add_time['state'].' '.$add_time['zip'].'</p>
					<p>Phone: '.$add_time['phone'].'</p>		
				</div>';
								
				
			}else
			{ 
				$add_time['hidden'] = 'text';
			
				$label_array = array(				
					'l_name' => 'Location:',
					'l_street' => 'Street:',
					'l_city' => 'City:',
					'l_state' => 'State:',
					'l_zip' => 'Zip:',
					'l_phone' => 'Phone:'
				);
			}
		
		?><!-- used to set parts of the form to hidden-->    
    
    
		<div class="create_form_div">
    	<form method="post" action="<?php echo site_url('bethere_home/be_somewhere_form'); ?>" >
    	
    		<label for="add_name"><?php echo $label_array['l_name']; ?></label>
    		<input type="<?php echo $add_time['hidden']; ?>" name="add_name" id="add_name" value="<?php echo $add_time['name']; ?>" placeholder="" />
    		
    		<label for="add_street"><?php echo $label_array['l_street']; ?></label>
    		<input type="<?php echo $add_time['hidden']; ?>" name="add_street" id="add_street" value="<?php echo $add_time['street']; ?>" placeholder="" />
    		
    		<label for="add_city"><?php echo $label_array['l_city']; ?></label>    		
    		<input type="<?php echo $add_time['hidden']; ?>" name="add_city" id="add_city" value="<?php echo $add_time['city']; ?>" placeholder="" />
    		
    		<label for="add_state"><?php echo $label_array['l_state']; ?></label>
    		<input type="<?php echo $add_time['hidden']; ?>" name="add_state" id="add_state" value="<?php echo $add_time['state']; ?>" placeholder="" />

    		<label for="add_zip"><?php echo $label_array['l_zip']; ?></label>    		
    		<input type="<?php echo $add_time['hidden']; ?>" name="add_zip" id="add_zip" value="<?php echo $add_time['zip']; ?>" placeholder="" />
    		
    		<label for="add_phone"><?php echo $label_array['l_phone']; ?></label>
    		<input type="<?php echo $add_time['hidden']; ?>" name="add_phone" id="add_phone" value="<?php echo $add_time['phone']; ?>" placeholder="" />    	
 
    		<label for="add_date">Date:</label>
    		<input type="text" name="add_date" id="add_date" value="" placeholder="Date" />
    		
    		<label for="add_arrive">Arrive:</label>
    		<input type="text" name="add_arrive" id="add_arrive" value="" placeholder="Arrive" />
    		
    		<label for="add_leave">Leave:</label>    		
    		<input type="text" name="add_leave" id="add_leave" value="" placeholder="Leave" />
    		
    		<label for="uid"></label>
    		<input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>" placeholder="" />
    		
    		<label for="lid"></label>
    		<input type="hidden" name="lid" id="lid" value="<?php echo $add_time['lid']; ?>" placeholder="" />
    		
    		<div class="be_form_submit">
    		<button type="submit" data-theme="a" name="be_somewhere_submit" data-inline="true" >Submit</button>
    		</div>
    		<div class="clear_fix"></div>
    		
    	</form>
    	</div>

		
		
	</div><!-- /content -->	
	

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	