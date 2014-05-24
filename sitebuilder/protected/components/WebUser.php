<?php
/**
 * Created by PhpStorm.
 * User: VPV
 * Date: 25.05.14
 * Time: 4:31
 */
class WebUser extends CWebUser {
    private $_model = null;

    function getRole() {
        if($user = $this->getModel()){
            // в таблице User есть поле role
            return $user->role;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = Users::model()->findByPk($this->id, array('select' => 'role'));
        }
        return $this->_model;
    }
}