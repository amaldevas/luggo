<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transporterController extends CI_Controller {
	public function istransporterSession()
	{
		if($this->session->userdata('email') && $this->session->userdata('type')=='transporter' && $this->session->userdata('id') && $this->session->userdata('type'))
		{
			$credentials['email']=$this->session->userdata('email');
			$credentials['name']=$this->session->userdata('name');
			$credentials['id']=$this->session->userdata('id');
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	public function transporterLogin()
	{
		if($this->istransporterSession())
		{

		}
		else
		{
			if($this->input->post())
			{

			}
			else
			{
				$this->load->view('transporterView/transporterLogin');
			}
		}
	}
}
