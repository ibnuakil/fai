<?php
//require_once ('..\libraries\datamapper.php');

//namespace fai\models;


/**
 * @author akil
 * @version 1.0
 * @created 06-Jul-2015 12:01:01 PM
 */
class User extends DataMapper
{

	var $validation = array(
        'user_name' => array(
            'label' => 'UserId',
            'rules' => array('required', 'trim', 'unique', 'alpha_dash', 'min_length' => 3, 'max_length' => 20),
        ),
        'password' => array(
            'label' => 'Password',
            'rules' => array('required', 'min_length' => 6, 'encrypt'),
        ),        
        'email' => array(
            'label' => 'Email Address',
            'rules' => array('required', 'trim', 'valid_email')
        )
        );
        
        public $has_many = array('comment','article');
        
                function __construct($id = NULL) {
            parent::__construct($id);
        }


}
?>