<?php
//require_once ('..\libraries\datamapper.php');

//namespace fai\models;


/**
 * @author akil
 * @version 1.0
 * @created 06-Jul-2015 12:01:10 PM
 */
class Comment extends DataMapper
{
    var $table = 'comments';
    var $has_one = array('user','article');
    
	function __construct($id=NULL)
	{
            parent::__construct($id);
	}

	function __destruct()
	{
	}



}
?>