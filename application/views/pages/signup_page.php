<div data-role="page" id="signup_page"> 	
	
	<div data-role="header" data-theme="a">
			<div class="ui-btn-left" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $home_page ?>" data-role="button" data-theme="a">Home</a>
			</div><!-- close control group for buttons --> 
			<h1>BeThere Sign Up</h1> 
			<div class="ui-btn-right" data-roll="controlgroup" data-type="horizontal" data-mini="true">
				<a href="<?php echo $login_page ?>" data-role="button" data-theme="a">Login</a>
			</div><!-- close control group for buttons -->
	</div> <!-- / headerbar -->
	    
    <div data-role="content">
   
		<!-- put a div in place with error text if an error exists -->
		<?php echo $form_error ; ?> <!--returns error div or blank-->
        	
    
    	<form method="post" action="<?php echo site_url('bethere_home/sign_up'); ?>" >
    			<!-- data-mini="true" not working when applied--> 
    		<label for="newusername">New Username:</label>
    		<input type="text" name="newusername" id="newusername" value="" placeholder="New Username" />
    		
    		<label for="newpassword">New Password:</label>
    		<input type="text" name="newpassword" id="newpassword" value="" placeholder="New Pass" />
    		
    		<label for="newemail">Email:</label>
    		<input type="text" name="newemail" id="newemail" value="" placeholder="Email" />
    		
    		<label for="newfirstname">First Name:</label>
    		<input type="text" name="newfirstname" id="newfirstname" value="" placeholder="First Name" />
    		
    		<label for="newlastname">Last Name:</label>
    		<input type="text" name="newlastname" id="newlastname" value="" placeholder="Last Name" />
    		
    		<label for="newuserzip">Zip Code:</label>
    		<input type="text" name="newuserzip" id="newuserzip" value="" placeholder="Zip Code" />
    		
    		<button type="submit" data-theme="a" name="signup_submit" data-inline="true" >Submit</button>
    		
    	</form>

		
	</div><!-- /content -->