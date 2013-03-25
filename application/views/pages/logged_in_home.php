<div data-role="page" id="signup_page"> 	
	
	<div data-role="header" data-theme="a">
	 
			<h1><?php echo $header_title; ?></h1>
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $log_out_link; ?>" data-role="button" data-theme="a">Logout</a> 
			</div><!-- close control group for buttons --> 
			
	</div> <!-- / headerbar -->
	    
    <div data-role="content" style="padding:0px;margin:0px;">
	<?php echo $test_output;?>
	
	
	<div class="container_1" style="border:1px solid black;background-color:lightgray;width:100%;margin:0px;padding:0px;">
		<div style="width:100%;background-color:lightgreen;border-bottom:1px solid black;padding:0px;margin:0px;height:25px;">
			<p class="my_dates" style="float:left;padding:0px;margin:5px 0px 0px 5px;width:30%;">03/10/13</p>
			<p class="my_pace_titles" style="float:left;padding:0px;margin:5px 0px 0px 0px;width:30%;text-align:center;">Sully's</p>
			<a href="<?php echo site_url('controller/function'.$id_variable); ?>" class="my_edit_links" style="float:right;padding:0px;margin:5px 5px 0px 0px;width:30%;text-align:right;">Edit</a>
			<div style="clear: both;margin:0px;padding:0px;"></div>
		</div>
		
		<div style="width:100%;padding:0px;margin:0px;">
			<p style = "padding:0px;margin:5px 0px 0px 5px;">123 somedrive, somerset ky 42519</p>
		</div>
		<div>
		<div style="width:50%;float:left">
			<div style="float:left;width:50%;">
				<p style="margin:5px 0px 0px 5px;">Arrive: <br/> 2:00 PM</p>
			</div>
			<div style="width:50%;float:right;">
				<p style="margin:5px 0px 0px 5px;">Leave: <br/>4:00 PM</p>			
			</div>
			<div style="clear: both;"></div>
		</div>
		<div style="width:50%;float:right;">
			<a href="#" data-role="button" data-inline="true" data-mini="true" data-theme="a" style="float:right;">Locate</a>
			<div style="clear: both;"></div>
		</div>
		<div style="clear: both;"></div>
		</div>
		
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