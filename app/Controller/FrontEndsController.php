<?php
App::uses('AppController', 'Controller');

class FrontEndsController extends AppController {
	public $uses = array();

	public function index() {
		$msg ="Welcome World";
		$this->set('msg',$msg);
	}
	
	public function landing() {
		$this->layout = null;
	}
	
	public function signup() {
		$this->layout = null;
	}
	
}
?>