<?php
//require_once ('..\libraries\datamapper.php');

//namespace fai\models;


/**
 * @author akil
 * @version 1.0
 * @created 06-Jul-2015 12:01:30 PM
 */
class State extends DataMapper
{
    var $has_many = array('article');


}
?>