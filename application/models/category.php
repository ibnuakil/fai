<?php
//require_once ('..\libraries\datamapper.php');

//namespace fai\models;


/**
 * @author akil
 * @version 1.0
 * @created 06-Jul-2015 12:01:14 PM
 */
class Category extends DataMapper
{

	var $table = 'categories';
        var $has_many = array('sub_category');

        function __construct()
	{
            parent::__construct();
	}

}
?>