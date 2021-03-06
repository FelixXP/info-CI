<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->model(LoginBar_model);
		$data['infoNav'] = $this->load->view('common\nav', '', TRUE);
		$data['infoFooter'] = $this->load->view('common\footer', '', TRUE);
		$this->load->view('discussion\discussion', $data);
	}
	
	public function addComment()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		session_start();
		$this->form_validation->set_rules('comment', 'Comment', 'required|min_length[1]|max_length[450]');
		$this->form_validation->set_rules('discussion_type', 'Discussion_type', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			header('Location:../discussion');
		}
		else{
	
			if($_SESSION[username]&&$_SESSION[id])
			{
				$this->load->model(Discussion_model);
				$comment=$this->input->post(comment);
				$type=$this->input->post(discussion_type);
				$this->Discussion_model->add($comment,$type);
				header('Location:../discussion');
			}else{
				header('Location:../discussion');
			}
	
		}
	
	}
}
