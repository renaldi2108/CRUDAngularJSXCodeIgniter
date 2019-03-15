<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    public function index() {
        $this->load->helper('url');

		$this->load->view('index');
    }

    public function input() {
        $this->load->view('input');
    }

    public function listed() {
        $this->load->view('list');
    }
}