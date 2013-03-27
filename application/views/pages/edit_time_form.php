<div data-role="page" id="edit_time_form"> 	
	
	<div data-role="header" data-theme="a">
			<div class="ui-btn-left" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $home_page ?>" data-role="button" data-theme="a">Home</a>
			</div><!-- close control group for buttons --> 	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons -->

			
	</div> <!-- / headerbar -->
	    
    <div data-role="content">
   
		<!-- put a div in place with error text if an error exists -->
		<?php echo $form_error ; ?> <!--returns error div or blank-->
		
		<?php $str = $this->uri->assoc_to_uri($edit_this_time); ?>
		
		<h1>Please Update Your Information for <?php echo $edit_this_time['name']; ?></h1>
		<div>
			<p><?php echo $edit_this_time['street'].' '.$edit_this_time['city'].' '.$edit_this_time['state'].' '.$edit_this_time['zip']; ?></p>
		
		</div>
    
    	<form method="post" action="<?php echo site_url('bethere_home/edit_time_form/'.$str); ?>" >
 
    		<label for="edit_date">Date:</label>
    		<input type="text" name="edit_date" id="edit_date" value="<?php echo $edit_this_time['day']; ?>" placeholder="" />
    		
    		<label for="edit_arrive">Arrive:</label>
    		<input type="text" name="edit_arrive" id="edit_arrive" value="<?php echo $edit_this_time['arrive']; ?>" placeholder="" />
    		
    		<label for="edit_leave">Email:</label>
    		<input type="text" name="edit_leave" id="edit_leave" value="<?php echo $edit_this_time['leave']; ?>" placeholder="" />
    		
    		<label for="edit_id"></label>
    		<input type="hidden" name="edit_id" id="edit_id" value="<?php echo $edit_this_time['id']; ?>" placeholder="" />
    		
    		<button type="submit" data-theme="a" name="edit_submit" data-inline="true" >Submit</button>
    		
    		<a href="<?php echo site_url('bethere_home/delete_this_time/'.$str); ?>" data-role="button" data-theme="a" data-inline="true">Delete</a>
    		
    	</form>
    	
    	

		
	</div><!-- /content -->