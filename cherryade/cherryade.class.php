<?php
/*
 * Cherryade :: A Simple and Open Source PHP Manager
 * Copyright 2015 Cherryade.co
 * Version 1.0 First Release
 * Cherryade.co :: Github.com/cherryade
 * Released under the MIT license.
 */

class Cherryade {
	private $output;
	private $templateDir;
	private $templateVariables;

	public function __construct($page) {
		if (file_exists('cherryade/cherryade.config.php')) {
			include_once('cherryade/cherryade.config.php');
			$this->templateDir = $templateDir;
			$this->templateVariables = $templateVariables;
		} else {
			die('<strong>Cherryade Configuration Error:</strong> Cherryade was unable to find the cherryade.config.php file. Error 1001.');
		}
		if (file_exists($templateDir.''.$page)) {
			$preparedPage = $this->preparePage($page);
		} else {
			die('<strong>Cherryade Configuration Error:</strong> Cherryade was unable to find the requested template ('.$this->templateDir.''.$page.').');
		}
	}

	private function preparePage($page) {
		$pageContent = file_get_contents($this->templateDir.''.$page);
		foreach ($this->templateVariables as $key => $value) {
			$tagToReplace = "[$key]";
			$pageContent = str_replace($tagToReplace, $value, $pageContent);
		}
		$outputPage = $this->outputPage($pageContent);
	}

	private function outputPage($page) {
		echo $page;
	}
}