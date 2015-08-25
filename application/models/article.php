<?php
//require_once ('..\libraries\datamapper.php');

//namespace fai\models;


/**
 * @author akil
 * @version 1.0
 * @created 06-Jul-2015 12:01:05 PM
 */
class Article extends DataMapper
{
    public $table = 'articles';
    public $has_one = array('sub_category','state','user');
    public $has_many = array(
        'comment' => array(
            'class' => 'comment',
            'other_field' => 'article',
            'join_self_as' => 'article',
            'join_other_as' => 'comment',
            'join_table' => 'articles_comments'),
        );
    
	function __construct($id=NULL)
	{
            parent::__construct($id);
	}

	function __destruct()
	{
	}



}
?>