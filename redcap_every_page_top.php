<?php

if (strpos(PAGE, 'DataEntry') !== false) 
{
 	$user_rights = REDCap::getUserRights(strtolower(USERID));
	$user_rights = $user_rights[USERID];

	$group_id = $user_rights['group_id'];
	
	// Right now we are hiding the dashboard if a user is not in a DAG and doesn't have create records rights 
	if ($group_id == 0 && $user_rights['record_create'] == 0) {
   			// Hide Dashboard
			$hide_status_dashboard = true;
			}
		if ($hide_status_dashboard) {
			?>
			   <style>
			      #center {opacity: 0;}
			   </style>
	   		<script>
       				$(document).ready(function() {
					$('#center').hide();	
				        // Show the center again...
				        $('#center').animate({opacity: 1}, 250);
				});      
			 </script>
			<?php
}
}


