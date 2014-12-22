<?php 
/*
 * Cherryade :: A Simple and Open Source PHP Manager
 * Copyright 2015 Cherryade.co
 * Version 1.0 First Release
 * Cherryade.co :: Github.com/cherryade
 * Released under the MIT license.
 */

/*
 * This is the directory of which your template files are located.
 * Ensure that there is a trailing slash or you may get an error.
 */
$templateDir = 'templates/';

/*
 * Set variables for your template here. Variables within the html
 * should be called like '[sitename]' for example, this would then
 * output 'Cherryade', as defined below.
 */
$templateVariables = array('sitename' => 'Cherryade',
						   'sitepath' => 'http://www.cherryade.co',
						   'header' => file_get_contents('templates/header.html'),
						   'footer' => file_get_contents('templates/footer.html')
						   );