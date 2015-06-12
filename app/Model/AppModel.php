<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	public function beforeSave($options=array()){
			
		/*$userID = null;
		
		if (isset($_SESSION['Auth']['User']['id'])) {
			$userID = $_SESSION['Auth']['User']['id'];
		}
		
		if (empty($userID) && isset($_GET['user_id']) && !empty($_GET['user_id'])) {
			$userID = $_GET['user_id'];
		}
		
		if (!empty($userID)) {
			if (isset($this->_schema['created_by']) && empty($primar_key) ){
				$this->data[$this->name]['created_by'] = $userID;
			}
			if (isset($this->_schema['updated_by'])){
				$this->data[$this->name]['updated_by'] = $userID;
			}
		}*/

		$primar_key = $this->id; 
		
		if(isset($this->data[$this->name]['id']) && empty($primar_key)){
			$primar_key = $this->data[$this->name]['id']; 
		}
		
		if (isset($this->_schema['uuid']) && empty($primar_key)){
			$this->data[$this->name]['uuid'] = String::uuid();
		}
		return true;
	}
}
