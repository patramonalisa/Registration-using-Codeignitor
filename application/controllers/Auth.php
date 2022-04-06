<?php
class Auth extends CI_Controller
{
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('mobile','Mobile','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');
		}
		else
		{
			$this->load->model('Auth_model');

			$formArray= array();
			$formArray['user_name']=$this->input->post('name');
			$formArray['user_email']=$this->input->post('email');
			$formArray['user_password']=$this->input->post('password');
			$formArray['user_age']=$this->input->post('age');
			$formArray['user_mobile']=$this->input->post('mobile');

			$this->Auth_model->create($formArray);
			$this->session->set_flashdata('msg','your a/c has been created sucessfully');
			redirect(base_url().'index.php/Auth/register');
		}

		
	}
}
?>