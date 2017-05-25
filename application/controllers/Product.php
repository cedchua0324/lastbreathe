<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends CI_Controller{


function index(){
		$this->load->view('layout/header');
		$this->load->view('employee/index');
		$this->load->view('layout/footer');
	}
	
}