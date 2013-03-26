<div data-role="page" id="signup_page"> 	
	
	<div data-role="header" data-theme="a">
	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons --> 
			
	</div> <!-- / headerbar -->
	    
    <div data-role="content" class="custom_content">
	<?php echo $test_output;?>
	<?php 
	foreach( $my_locations as $key => $obj )
	{
	$str = $this->uri->assoc_to_uri($obj);
	echo '
	<div class="container_1">
		<div class="container_head">
			<p class="my_dates">'.$obj['day'].'</p>
			<p class="my_place_titles">'.$obj['name'].'</p>
			<a href="'.site_url('bethere_home/logged_in/'.$str).'" class="my_edit_links">Edit</a>
			<div class="clear_fix"></div>
		</div>
		
		<div class="place_address">
			<p class="place_address_p">'.$obj['name'].'</p>
		</div>
		<div>
			<div class="my_times_button">
				<div class="arrive_time_div">
					<p class="time_p">Arrive: <br/>'.$obj['arrive'].'</p>
				</div>
				<div class="leave_time_div" >
					<p class="time_p">Leave: <br/>'.$obj['leave'].'</p>			
				</div>
				<div class="clear_fix"></div>
			</div>
			<div class="locate_button_div">
				<a href="'.site_url('bethere_home/map_test/'.$str).'" data-role="button" data-inline="true" data-mini="true" data-theme="a" class="locate_button">Locate</a>
				<div class="clear_fix"></div>
			</div>
			<div class="clear_fix"></div>
		</div>
		
	</div>';
	
	}
	?>
	
	<?php
/*		// how to create multiple items using $my_locations
		foreach( $my_locations as $key => $obj )
		{
		
			echo '<div class="ui-grid-a custom-a">';			
			echo '<div class="ui-block-a">';
			echo '<h3>'.$obj['name'].'</h3>';
			echo '</div>';
			echo '<div class="ui-block-b custom-b">';
			echo '<p>'.$obj['arrive'].'</p>';
			echo '<p>'.$obj['leave'].'</p>';
			echo '</div>';			
			echo '</div>';
			
		}
		
		
		<?php site_url('controller/function'.$id_variable); ?>
*/		
	?>
		
	</div><!-- /content -->