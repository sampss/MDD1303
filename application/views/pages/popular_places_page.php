<div data-role="page" id="popular_places_page"> 	
	
	<div data-role="header" data-theme="a">
	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons -->

    		<nav data-role="navbar">
    			<ul>
					<li><a href="<?php echo site_url('bethere_home'); ?>">My Places</a></li>
					<li><a href="<?php echo site_url('bethere_home/be_somewhere'); ?>" >Be Somewhere</a></li>
					<li><a href="<?php echo site_url('bethere_home/popular_places'); ?>" class="ui-btn-active ui-state-persist">Popular Places</a></li>
				</ul>
			</nav>

			
	</div> <!-- / headerbar -->
		    
    <div data-role="content" class="custom_content">

    	<div class="search_container">    
    		<form method="post" action="<?php echo site_url('bethere_home/be_somewhere'); ?>">
    			<div class="search_field_container">
    				<label for="search_zip"></label>
    				<input type="search" name="search_zip" id="search_zip" class="search_zip" value="<?php echo ''/*$search_zip*/; ?>" placeholder="zip" data-mini="true" />
				</div>
				<div class="search_submit_div">
				<button type="submit" data-theme="a" name="search_submit" data-inline="true" class="search_submit">Search</button>
    			</div>
    		</form>
    	</div>    
    
	<?php echo $test_output;?>
		
	</div><!-- /content -->