<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index() {
        $data = []; // Initialize data array
        $data['content'] = 'home_content'; // Specify the home page content view
        $this->load->view('layouts/main', $data); // Load the main layout and pass the content variable
    }
} 