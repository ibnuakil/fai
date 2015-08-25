<?php
        function showAdmin($view, $data=array(), $template='index')
	{
		$ci = &get_instance();
		$data['view'] = $view;
		$user = $ci->session->userdata('session_name');
		$data['userincharge'] = $user;		
		$data = $ci->load->view($template, $data);
	}
	
	function showHome($view, $data=array(), $template='index')
	{
		$ci = &get_instance();
		$data['view'] = $view;
		$data = $ci->load->view($template, $data);
	}
                
        
        function setPagingTemplate($base_url,$uri_segment,$total_row)
{
        $ci = &get_instance();
        $ci->load->library('pagination');
        $config['base_url'] = $base_url;
        $config['per_page'] = '10';
        $config['num_links'] = '5';
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['next_link'] = '>>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<<';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['uri_segment'] = $uri_segment;
        $config['total_rows'] = $total_row;
        $ci->pagination->initialize($config);
        
    }
    
    function setPagingTemplateManagement($base_url,$uri_segment,$total_row)
{
        $ci = &get_instance();
        $ci->load->library('pagination');
        $config['base_url'] = $base_url;
        $config['per_page'] = '10';
        $config['num_links'] = '5';
        $config['num_tag_open'] = '<span id="pagination">';
        $config['num_tag_close'] = '</span>';
        $config['cur_tag_open'] = '<span id="pagecurrent">';
        $config['cur_tag_close'] = '</span>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<span id="pagination">';
        $config['first_tag_close'] = '</span>';               
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<span id="pagination">';
        $config['last_tag_close'] = '</span>';
        $config['uri_segment'] = $uri_segment;
        $config['total_rows'] = $total_row;
        $ci->pagination->initialize($config);
        
    }
?>
