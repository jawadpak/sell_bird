<?php 
App::uses('AppModel', 'Model');
class City extends AppModel {
    public $name = 'City';

    public function getCity() {
        return $this->find('all',array(
        	'conditions' => array('City.CountryCode' => 'PAK'),
        	'fields' => array('City.name', 'City.Id'),
        	));
	}
}

?>