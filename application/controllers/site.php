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
        $data['title'] = "Mwanzo";
        $data['active'] = "index";
        $data['slider_title'] = "Ijue dini yako";
        $data['slider_slogan'] = "Know Your Deen";

        $data['posts'] = $this->posts->get_latest_posts(); //from DB

        $data = $this->data + $data;

		$this->load->view('includes/header',$data);
		$this->load->view('components/menu');
		$this->load->view('components/slider');
		$this->load->view('pages/index');
        $this->load->view('includes/footer');
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