<div data-role="page" id="login_page"> 	
	
	<div data-role="header" data-theme="a">
			<div class="ui-btn-left" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $home_page ?>" data-role="button" data-theme="a">Home</a>
			</div><!-- close control group for buttons --> 
			<h1>BeThere Login</h1> 
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $signup_page ?>" data-role="button" data-theme="a">Signup</a>
			</div><!-- close control group for buttons -->
	</div> <!-- / headerbar -->
	<?php echo $form_error ; ?> <!--returns error div or blank-->
	    
    <div data-role="content">   
		<form method="post" action="<?php echo site_url('bethere_home/user_login'); ?>" >
		 
    		<label for="login_username">New Username:</label>
    		<input type="text" name="login_username" id="login_username" value="" placeholder="Username" />
    		
    		<label for="login_password">New Password:</label>
    		<input type="text" name="login_password" id="login_password" value="" placeholder="Pass" />
    		
    		<button type="submit" data-theme="a" name="login_submit" data-inline="true" >Submit</button>
    		
    	</form>
		
	</div><!-- /content -->		