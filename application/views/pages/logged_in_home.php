<div data-role="page" id="signup_page"> 	
	
	<div data-role="header" data-theme="a">
	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons --> 
			
	</div> <!-- / headerbar -->
	    
    <div data-role="content">
	<?php echo $test_output;?>
	
	<div class="left" style="flaot:left;">
		<p class="left">03/10/13</p>
		<p class="right" style="float:right;">Sully's</p>
		<br />
		<p style = "float:left;">123 somedrive, somerset ky 42519</p>
		<br/>
		<br/>
		<p>Arrive</p>
		<p>2:00pm</p>
		<p style="float:right;">Leave</p>
		<br/>
		<p style="float:right;">4:00pm</p>
		
	</div>
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
*/		
	?>
		
	</div><!-- /content -->