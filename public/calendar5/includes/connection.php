<?php
	
	// DB Connection Configuration
	define('DB_HOST', ''); 
	define('DB_USERNAME', 'root'); 
	define('DB_PASSWORD', ''); 
	define('DATABASE', 'calendar'); 
	define('TABLE', 'calendar');
	define('USERS_TABLE', 'users');
	
	define('SITE_FILES_URL', '');
	
	// Default Categories
	$categories = array("General", "Personal", "Work");
	
	/*
	Only applied for non user versions
	Should (non admin versions) display user events from the database?
	 true - does not display user events 
	 false - will display all events on the database even private ones on non admin versions (e.g: 'Simple')
	*/
	define('PUBLIC_PRIVATE_EVENTS', true);
	
	// Feature to import events
	define('IMPORT_EVENTS', true);
	
?>