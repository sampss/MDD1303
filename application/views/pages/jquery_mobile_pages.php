<div data-role="page" id="page1"> 	
	
	<div data-role="header">
	 
    	<h1>Header Bar</h1> 
    	
    </div><!-- /header --> 
    
    <div data-role="content">   
        <p>Content Section</p>

		<?php var_dump($user_info) ?>

<!--        
       <?php foreach($articles as $article){ ?>
       
    <p>
        <h3><?php echo $article->title; ?></h3>
            By <strong><?php echo $article->author; ?></strong>
    </p>
    <br />  
    
<?php	}   ?> 
--> 
  
    </div><!-- /content -->