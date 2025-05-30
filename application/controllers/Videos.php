<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index() {
        $data['heading'] = 'PBS KIDS Videos';
        $this->load->view('components/header', $data);
        $this->load->view('videos_list');
    }
    
    public function view($slug = NULL) {
        $data['heading'] = 'Watch Video';
        $data['slug'] = $slug;
        $this->load->view('components/header', $data);
        $this->load->view('video_view', $data);
    }
} 