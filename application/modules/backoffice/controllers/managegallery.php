<?php
require_once ('icontrol.php');

//namespace fai\modules\backoffice;


/**
 * @author akil
 * @version 1.0
 * @created 14-Aug-2015 9:59:46 AM
 */
class ManageGallery extends MX_Controller implements IControl
{

	function __construct()
	{
            parent::__construct();
            $this->load->model('Article');
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