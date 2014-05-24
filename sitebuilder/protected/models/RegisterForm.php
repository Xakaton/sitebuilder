<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user Register form data. It is used by the 'register' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
    public $name;
	public $username;
	public $password;
	public $email;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'name', 'required'),
		);
	}

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'name'=>'Ваше имя',
            'username'=>'Логин',
            'password'=>'Пароль',
            'email'=>'Email'
        );
    }

	/**
	 * Register in the user using the given username and password in the model.
	 * @return boolean whether register is successful
	 */
	public function register()
    {
        $record = Users::model()->findAllByAttributes(array('username'=>$this->username));
		if($record===null)
		{
            $record = new Users();
            $record->name = $this->name;
            $record->username = $this->username;
            $record->password = crypt($this->password, $this->password);
            $record->email = $this->email;
            if (trim($record->username) != 'admin') {
                $record->role = 'user';
            } else $record->role = 'admin';
            $record->save(false);
            return true;
		}
		else {
            return false;
        }
	}
}
