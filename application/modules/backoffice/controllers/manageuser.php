<?php
require_once ('icontrol.php');

//namespace fai\modules\backoffice;


/**
 * @author akil
 * @version 1.0
 * @created 14-Aug-2015 10:29:53 AM
 */
class ManageUser extends MX_Controller implements IControl
{

	function __construct()
	{
            parent::__construct();
            $this->load->model('User');
            $this->load->library('sessionutility');
            if(!$this->sessionutility->validateSession()){
                redirect(base_url());
            }
	}

	function __destruct()
	{
	}



	public function add()
	{
	}

	public function edit()
	{
	}

	public function find()
	{
	}

	public function index()
	{
	}

	public function remove()
	{
	}

	public function save()
	{
	}

}
?>