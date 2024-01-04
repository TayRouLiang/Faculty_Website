<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses_AdminView extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this -> load -> model('FCourse', '', TRUE);
		$this -> load -> library('session');
	}

	public function index(){
		$course_name = $this->FCourse->getcourseName();
		$data['cname'] = $course_name;

		$this->load->view('headerAfterLogin');
		$this->load->view('courses_adminView', $data);
		$this->load->view('footer');
	}
}
