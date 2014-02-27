<?php
/*
Referee Controller

Created February 2014
*/


namespace Controller {

require_once(dirname(__FILE__) . '/Controller.php');


	class Referee extends Controller {
	
	
		private $template = 'referee.php';
		public $page = 'referee';
	
	
		/**
		Render the template part of the view
		
		@exception theme file does not exist
		*/
		public function template() {
			
			if(is_array($this->data)) {
				extract($this->data);
			}
			
			if(file_exists($this->themeDir . '/' . $this->template)) {
				include($this->themeDir . '/' . $this->template);
			}
			
		
		}
		
		
		/**
		Call GET methode with parameters
		
		@param params
		*/
		public function GET($args) {
		}
	
	
	}

}

?>