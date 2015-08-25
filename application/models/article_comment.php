<?php

class Article_comment extends DataMapper
{
    var $table = 'articles_comments';
    //var $has_one = 'article';
    //var $has_many = array('comment');
    
	function __construct()
	{
            parent::__construct();
	}

	function __destruct()
	{
	}



}