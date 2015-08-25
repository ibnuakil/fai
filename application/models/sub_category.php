<?php
//require_once ('..\libraries\datamapper.php');

//namespace fai\models;


/**
 * @author akil
 * @version 1.0
 * @created 23-Aug-2015 3:23:06 PM
 */
class Sub_Category extends DataMapper
{

	public $has_many = array('article');
	public $has_one = array('category');
	public $table = 'sub_categories';

	function __construct()
	{
            parent::__construct();
	}

	function __destruct()
	{
	}



}
?>