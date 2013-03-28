<div data-role="page" id="logged_in_home"> 	
	
	<div data-role="header" data-theme="a">
	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons -->

    		<nav data-role="navbar">
    			<ul>
					<li><a href="<?php echo site_url('bethere_home'); ?>" class="ui-btn-active ui-state-persist" >My Places</a></li>
					<li><a href="<?php echo site_url('bethere_home/be_somewhere'); ?>">Be Somewhere</a></li>
					<li><a href="<?php echo site_url('bethere_home/popular_places'); ?>">Popular Places</a></li>
				</ul>
			</nav>

			
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
			<a href="'.site_url('bethere_home/edit_time_form/'.$str).'" class="my_edit_links">Edit</a>
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
		
	</div><!-- /content -->