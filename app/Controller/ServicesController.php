<?php
App::uses('AppController', 'Controller');

class ServicesController extends AppController {

	public $uses = array('City',"User");
	public $components = array('RequestHandler');

	public function getCity() {
        $city = $this->City->getCity();
        $this->set(array(
            'city_data' => $city,
            '_serialize' => array('city_data')
        ));
    }

    public function addSignup() {
        $this->User->create();
        
        //$this->request->data['uuid'] = String::uuid();
        //echo "<pre>";print_r($this->request->data);die();
        if ($this->User->save($this->request->data)) {
             $message = array("status" => "1", "msg" => "User Created!!!");
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}
?>