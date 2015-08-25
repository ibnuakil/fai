<?php
//require_once ('..\..\..\newevapro\application\models\modusers.php');

//namespace Library;


/**
 * @author user
 * @version 1.0
 * @created 14-Sep-2014 10:55:11 AM
 */
class SessionUtility
{

	//public $m_ModUsers;
        var $CI;
	function __construct()
	{
            $this->CI =& get_instance();		
            // Load the Sessions class
            $this->CI->load->library('session');
            $this->CI->load->model('User');
            
	}

	function __destruct()
	{
	}

        public function validateSession()
        {
            $acc = FALSE;
            $status = strtoupper($this->CI->session->userdata('session_status'));
            if($status==TRUE){
                $acc = TRUE;
            }
            return $acc;
        }
        
        public function validateAccess($module)
        {
            
        }       

	public function isAdministrator()
	{
            $type = $this->CI->session->userdata('session_type');
            $r = FALSE;
            if($type=='administrator'){
                $r = TRUE;
            }
            return $r;
	}

	public function isEndUser()
	{
            $type = $this->CI->session->userdata('session_type');
            $r = FALSE;
            if($type=='user'){
                $r = TRUE;
            }
            return $r;
	}

	public function isSupervisor()
	{
            
	}
        
        
       
}
?>