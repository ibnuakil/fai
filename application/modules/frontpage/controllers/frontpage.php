<?php


//namespace fai\controllers;


/**
 * @author akil
 * @version 1.0
 * @created 06-Jul-2015 12:12:18 PM
 */
class FrontPage extends MX_Controller
{

	function __construct()
	{
            parent::__construct();
            $this->load->model('User');
            $this->load->model('Category');
            $this->load->model('Article_comment');
            $this->load->model('Comment');
            $this->load->library('form_validation');            
            $this->load->library('sessionutility');
            $this->load->helper(array('form', 'url', 'captcha'));
	}

	function __destruct()
	{
	}



	public function index()
	{
            $view = 'home_page';
            $article = new Article();
            $base_url = base_url().'index.php/frontpage/frontpage/index';
            $offset = $this->uri->segment(4,0);
            $articles = $article->get(10, $offset);
            $total_row = $article->count();
            setPagingTemplate($base_url, 3, $total_row);
            $data['articles'] = $articles;
            showHome($view,$data);
	}
        
        public function registrasi()
        {
            $view = 'form_registrasi';
            $vals = array(
                'img_path' => './assets/captcha/',
                'img_url' => base_url() . 'assets/captcha/',
                'font_path' => './assets/fonts/monofont.ttf',
                'img_width' => '150',
                'img_height' => 30,
                'expiration' => 60
                );
            $captcha = create_captcha($vals);
            
            $this->session->set_userdata('captchaWord', $captcha['word']);
            
            $data['captcha'] = $captcha;
            showHome($view,$data);
        }
        
        public function menu($id)
        {
            $view = 'page';
            $page = new StaticPage($id);
            $data['page'] = $page;
            showHome($view,$data);
        }

        public function profil() 
        {
            $view = '';
            showHome($view);
        }

        public function organisasi()
        {
            $view = '';
            showHome($view);
        }
        
        public function doRegister()
        {
            $captchaword = $this->session->userdata('captchaWord');
            $captcha = $this->input->post('captcha');
            
            $this->form_validation->set_rules('userid', 'User Id', 'trim|required|min_length[5]|max_length[12]|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');            
            $this->form_validation->set_rules('last_name', 'First Name', 'trim');
            $this->form_validation->set_rules('address', 'Address', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim');            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|numeric');
            $this->form_validation->set_rules('institution', 'Institution', 'trim');
            $this->form_validation->set_rules('captcha', 'Captcha Code', 'trim|required');
            
            if ($this->form_validation->run() == TRUE && strcmp(strtoupper($captcha),strtoupper($captchaword)) == 0)
		{
                    $userid = $this->clearField($this->input->post('userid'));
                    $password = $this->clearField($this->input->post('password'));
                    $firstname = $this->clearField($this->input->post('first_name'));
                    $lastname = $this->clearField($this->input->post('last_name'));
                    $address = $this->clearField($this->input->post('address'));
                    $city = $this->clearField($this->input->post('city'));
                    $email = $this->clearField($this->input->post('email'));
                    $phone = $this->clearField($this->input->post('phone'));
                    $institution = $this->clearField($this->input->post('institution'));
                    
                    //simpan data registrasi
                    $user = new User();
                    $user->user_id = $userid;
                    $user->first_name = $firstname;
                    $user->last_name = $lastname;
                    $user->address = $address;
                    $user->city = $city;
                    $user->email = $email;
                    $user->phone = $phone;
                    $user->institution = $institution;
                    $user->password = $password;
                    $user->date_registered = date('Y-m-d');
                    $user->type = 'user';
                    if($user->save()){
                        $view = 'success_page';
                        $data['first_name'] = $firstname;
                        $data['last_name'] = $lastname;
                        showHome($view, $data);
                    }else{
                        echo 'Registration failed!';
                    }
		}
		else
		{
                    $view = 'form_registrasi';
                    $vals = array(
                        'img_path' => './assets/captcha/',
                        'img_url' => base_url() . 'assets/captcha/',
                        'font_path' => './assets/fonts/monofont.ttf',
                        'img_width' => '150',
                        'img_height' => 30,
                        'expiration' => 60
                        );
                    $captcha = create_captcha($vals);

                    $this->session->set_userdata('captchaWord', $captcha['word']);

                    $data['captcha'] = $captcha;
                    showHome($view,$data);
                        
                    
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
        
        public function checkUserId($userid)
        {
            $user = new User($userid);
            $user->where('user_id', $userid)->get();
            if($user->user_id != ''){
                echo 'Userid already exist!';
            }
        }
        
        public function doLogin() 
        {
            $userid = $this->clearField($this->input->post('userid'));
            $password = $this->clearField($this->input->post('pass'));
            $user = new User();
            $user->where('user_name', $userid);
            $user->where('password', md5($password));
            $user->get();
            if($user->email != ''){
                $name = $user->first_name.' '.$user->last_name;
                $data = array('session_status'=>TRUE,'session_name'=> $name,'session_user'=> $user->id ,'session_type'=> $user->type);
                $this->session->set_userdata($data);
                $this->index();
            }else{
                echo '<script>';
                echo 'alert("Validation Fail !");';
                echo 'window.history.back(1);';
                echo '</script>';
            }
        }
        
        public function doLogout() 
        {
            $this->session->sess_destroy();
            $this->index();
        }
        
        public function detail($id) 
        {
            $article = new Article();
            $article->where('id', $id);
            $article->get();
            $view = 'detail_page';
            $data['article'] = $article;
            showHome($view, $data);
        }
        
        public function saveComment()
        {
            if($this->sessionutility->validateSession()){
                $article_id = $this->uri->segment(4);
                $article = new Article();
                $article->where('id', $article_id)->get();
                
                $comment = new Comment();
                $comment->user_id = $this->session->userdata('session_user');
                $comment->comments = $this->clearField($this->input->post('comment'));
                $comment->reply_of = 0;
                $comment->save();
                
                $article_comment = new Article_comment();
                $article_comment->article_id = $article->id;
                $article_comment->comment_id = $comment->id;
                        
                if($article_comment->save()){
                    
                    $this->detail($article_id);
                }
            }else{
                echo '<script>';
                echo 'alert("Validation Fail !");';
                echo 'window.history.back(1);';
                echo '</script>';
            }
        }
        
        public function listByCategory($id)
        {
            $view = 'home_page';
            $article = new Article();
            $base_url = base_url().'index.php/frontpage/frontpage/index';
            $offset = $this->uri->segment(4,0);
            $articles = $article->get(10, $offset);
            $total_row = $article->count();
            setPagingTemplate($base_url, 3, $total_row);
            $data['articles'] = $articles;
            showHome($view,$data);
        }
}
?>