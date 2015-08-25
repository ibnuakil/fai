<?php
require_once ('icontrol.php');

//namespace fai\modules\backoffice;


/**
 * @author akil
 * @version 1.0
 * @created 06-Aug-2015 10:39:02 AM
 */
class ManageCategory extends MX_Controller implements IControl
{

	function __construct()
	{
            parent::__construct();
            $this->load->model('Category');
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