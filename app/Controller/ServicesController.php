<?php
App::uses('AppController', 'Controller');

class ServicesController extends AppController {

	public $uses = array('City');
	public $components = array('RequestHandler');

	public function getCity() {
        $city = $this->City->getCity();
        $this->set(array(
            'city_data' => $city,
            '_serialize' => array('city_data')
        ));
    }
}
?>