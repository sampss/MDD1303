<div data-role="page" id="be_somewhere_page"> 	
	
	<div data-role="header" data-theme="a">
	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons -->

    		<nav data-role="navbar">
    			<ul>
					<li><a href="<?php echo site_url('bethere_home'); ?>">My Places</a></li>
					<li><a href="<?php echo site_url('bethere_home/be_somewhere'); ?>" class="ui-btn-active ui-state-persist">Be Somewhere</a></li>
					<li><a href="<?php echo site_url('bethere_home/popular_places'); ?>" >Popular Places</a></li>
				</ul>
			</nav>

			
	</div> <!-- / headerbar -->
		    
    <div data-role="content" class="custom_content">
    	<div class="search_create_container">
    	<div class="search_container">
    		<form method="post" action="<?php echo site_url('bethere_home/be_somewhere'); ?>">
    			<div class="search_field_container">
    				<label for="search_zip"></label>
    				<input type="search" name="search_zip" id="search_zip" class="search_zip" value="<?php echo $search_zip; ?>" placeholder="zip" data-mini="true" />
				</div>
				<div class="search_submit_div">
				<button type="submit" data-theme="a" name="search_submit" data-inline="true" class="search_submit">Search</button>
    			</div>
    		</form>
    	</div>
    	<div class="create_container">
    		<p>If you cant find the place your looking for add it!</p>
    		<div class="add_button_div">
			<a href="<?php echo site_url('bethere_home/be_somewhere'); ?>" data-role="button" data-inline="true" data-mini="true" data-theme="a" class="add_button">Add</a>
    		</div>
    	</div>
    	<div class="clear_fix"></div>
    	</div>
    
    
	<?php echo $test_output;?>
	<?php 
	foreach( $local_locations as $key => $obj )
	{
	$str = $this->uri->assoc_to_uri($obj);
	echo '
	<div class="container_1">
		
		<div class="plc_info_div">
			<h1 class="place_address_p be_somewhere_name">'.$obj['name'].'</h1>
			<p class="place_address_p">'.$obj['street'].' '.$obj['city'].' '.$obj['state'].' '.$obj['zip'].'</p>
			<p class="place_address_p">Phone: '.$obj['phone'].'</p>
		</div>
		<div>
			<div class="be_somewhere_button_div">
				<a href="'.site_url('bethere_home/be_somewhere_form/'.$str).'" data-role="button" data-inline="true" data-mini="true" data-theme="a" class="locate_button">Be Here</a>
				<div class="clear_fix"></div>
			</div>
			<div class="clear_fix"></div>
		</div>
		
	</div>';
	
	}
	?>
		
	</div><!-- /content -->