<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	protected $data = array();

    public function __construct(){
        parent::__construct();
        $this->data['app_title'] = "Raudhwa"; //static
        $this->load->model('posts');
}

	public function index()
	{
        $data['title'] = "Makala";
        $data['active'] = "index";
        $random_article = $this->posts->get_random_article();;
        $data['slider_title'] = $random_article['title'];
        $data['slider_id'] = $random_article['post_id'];
        $data['slider_slogan'] = "Know Your Deen";

        $data['posts'] = $this->posts->get_latest_posts(); //from DB

        $data = $this->data + $data;

		$this->load->view('includes/header',$data);
		$this->load->view('components/menu');
		$this->load->view('components/slider');
		$this->load->view('pages/index');
        $this->load->view('includes/footer');
	}

    function  get_post(){
        if(IS_AJAX){
            $id = $this->input->post('id');
            $post = $this->posts->get_post($id);
            echo json_encode($post);

        }else{
            echo "Direct Access Is forbidden ;)";
        }
    }

    public function fiqhi()
	{
        $data['title'] = "Fiqhi";
        $this->load->view('includes/header',$data);
		$this->load->view('components/menu');
		$this->load->view('components/slider');
		$this->load->view('pages/index');
        $this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */