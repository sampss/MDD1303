<!DOCTYPE html>
<html> 
    <head> 
    	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- viewport -->
        <meta charset="utf-8" /> 
        
        <!-- set title -->
        <title>title<?php echo $header_title; ?></title> <!-- title set using php -->
        
        <!-- stylesheet links -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css" /> 
        
        <!-- javascript links -->
        <script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
        <!--<script src="http://localhost:8888/MDD1303/application/jquery/jqset.js"></script>not working-->
        <script type="text/javascript">
			$(document).bind("mobileinit", function(){
				$.extend(  $.mobile , {
				    ajaxLinksEnabled : false
				});
			});
		</script><!--works when not linked to in jqset-->
        <script src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script>
		<!--<?php if (!empty($map_js)){echo $map_js;} ?><!-- sets the javascript for the map if exists-->--> 
		<?php if (!empty($map['js'])){echo $map['js'];} ?>

    </head> 
    <body><!-- body opening tag -->