<?php
require_once ('icontrol.php');

//namespace fai\modules\backoffice;


/**
 * @author akil
 * @version 1.0
 * @created 06-Aug-2015 10:38:29 AM
 */
class ManageArticle extends MX_Controller implements IControl
{

	function __construct()
	{
            parent::__construct();
            $this->load->model('Article');
            $this->load->library('sessionutility');
            $this->load->library('form_validation');            
            $this->load->library('image');
            if(!$this->sessionutility->validateSession()){
                redirect(base_url());
            }
	}

	function __destruct()
	{
	}



	public function add()
	{   
            if($this->sessionutility->isAdministrator()){
                $view = 'article_form';
                $data['flaginsert'] = TRUE;
                showAdmin($view,$data);
            }else{
                redirect(base_url());
            }
	}

	public function edit()
	{
            if($this->sessionutility->isAdministrator()){
                $id = $this->uri->segment(4);
                $article = new Article();
                $article->where('id', $id)->get();
                $view = 'article_form';
                $data['flaginsert'] = FALSE;
                $data['article'] = $article;
                showAdmin($view,$data);
            }else{
                redirect(base_url());
            }
	}

	public function find()
	{
            if($this->sessionutility->isAdministrator()){
                $view = 'article_list';
                $data['flaginsert'] = TRUE;
                showAdmin($view,$data);
            }else{
                redirect(base_url());
            }
	}

	public function index()
	{
            if($this->sessionutility->isAdministrator()){
                //error_reporting(E_ALL ^ E_NOTICE);                
                $view = 'article_list';
                $article = new Article();
                $base_url = base_url().'index.php/backoffice/managearticle/';
                $uri_segment = '4';
                $offset = $this->uri->segment(3,0);
                $articles = $article->get(10,$offset);
                //print_r($articles);
                $total_row = $article->count();
                setPagingTemplate($base_url, $uri_segment, $total_row);
                
                $data['articles'] = $articles;
                showAdmin($view,$data);
            }else{
                redirect(base_url());
            }
	}

	public function remove()
	{
            if($this->sessionutility->isAdministrator()){
                //$view = 'article_list';
                $id = $this->uri->segment(4);
                $article = new Article();
                $article->where('id', $id)->get();
                $article->delete();
                //$data['flaginsert'] = TRUE;
                //showAdmin($view,$data);
                $this->index();
            }else{
                redirect(base_url());
            }
	}

	public function save()
	{
            if($this->sessionutility->isAdministrator()){
                $this->form_validation->set_rules('author', 'Author', 'trim|required');
                $this->form_validation->set_rules('datewritten', 'Date Written', 'trim|required');
                $this->form_validation->set_rules('title', 'Title', 'trim|required');
                $this->form_validation->set_rules('content', 'Content', 'trim|required');
                if($this->input->post('save')){
                    if ($this->form_validation->run() == TRUE){
                        $flaginsert = $this->uri->segment(4);
                        $article = new Article();
                        if($flaginsert != TRUE){                                            
                            $article->where('id', $this->input->post('id'))->get();
                        }
                        $article->user_id = $this->session->userdata('session_user');
                        $article->author = $this->input->post('author');
                        $article->date_written = $this->input->post('datewritten');
                        $article->title = $this->input->post('title');
                        $article->content = $this->input->post('content');
                        $article->tag = $this->input->post('tag');
                        $article->sub_category_id = $this->input->post('category');
                        $article->state_id = '1';
                        
                        if($this->image->contents() != null){
                            $image = '';
                            foreach ($this->image->contents() as $value) {
                                $image = $value['thumb'];
                            }
                            $article->image_path = $image;
                        }
                        
                        $article->save();
                    }else{
                        $this->add();
                    }
                }
                $this->image->destroy();
                $this->index();
            }else{
                redirect(base_url());
            }
	}
        
        public function uploadImage()
        {
            if($this->sessionutility->isAdministrator()){
                $file_path = realpath(APPPATH . '../assets/images/article-images/');
                $config['upload_path'] = $file_path;                        
                $config['allowed_types'] = 'gif|jpg|png';
                //$config['max_size']	= '2000';                
                $this->load->library('upload', $config);                
                
                if ( ! $this->upload->do_upload())
                {
                    echo $this->upload->display_errors();                        
                }
                else
                {
                        $data =  $this->upload->data();
                        
                        $config['image_library'] = 'gd2';
                        $config['source_image']	=  $data['full_path'];
                        $config['new_image'] = $data['file_path'].'/thumb';
                        //$config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width']	 = 100;
                        $config['height']	= 70;

                        $this->load->library('image_lib', $config); 

                        $this->image_lib->resize();
                        
                        $anImage = array('image_name'=>$data['file_name'],
                                        'file_path'=>base_url()."assets/images/article-images/".$data['file_name'],
                                        'thumb'=>base_url()."assets/images/article-images/thumb/".$data['file_name']);
                        
                        $this->image->insert($anImage);
                                               
                        echo '<ul class="thumbnails">';                        
                        foreach($this->image->contents() as $val){
                            echo '<li class="unstyled">';
                            echo $val['file_path'].': <img class="thumbnail" src="'.$val['thumb'].'">';
                            echo '</li>';                            
                        }
                        echo '</ul>';
                }
            }else{
                redirect(base_url());
            }
            
        }

}
?>