<?php


//namespace fai\modules\backoffice;


/**
 * @author akil
 * @version 1.0
 * @created 11-Jul-2015 9:47:36 AM
 */
class BackOffice extends MX_Controller
{

	function __construct()
	{
            parent::__construct();
            $this->load->library('sessionutility');
            $this->load->model('User');
	}

	function __destruct()
	{
	}



	public function index()
	{
            if($this->sessionutility->validateSession() && $this->sessionutility->isAdministrator()){
                $view = 'home_page';
                showAdmin($view);
            }else{
                $this->load->view('login_page');
            }
	}
        
        public function doLogin() 
        {
            $userid = $this->clearField($this->input->post('userid'));
            $password = $this->clearField($this->input->post('password'));
            $user = new User();
            $user->where('user_name', $userid);
            $user->where('password', md5($password));
            $user->get();
            if($user->email != ''){
                $name = $user->first_name.' '.$user->last_name;
                $data = array('session_status'=>TRUE,'session_name'=> $name, 'session_user'=> $user->id,'session_type'=>$user->type);
                $this->session->set_userdata($data);
                $this->index();
            }
        }
        
        private function clearField($string) {
            $string = str_replace("'", "", $string);
            $string = str_replace("\"", "", $string);
            $string = str_replace("--", "", $string);
            $string = str_replace("/", "", $string);
            $string = str_replace("=", "", $string);
            $string = str_replace("%", "", $string);
            $string = str_replace("&", "", $string);
            $string = str_replace("$", "", $string);
            $string = str_replace("drop", "", $string);
            $string = str_replace("table", "", $string);
            return $string;
        }

}
?>