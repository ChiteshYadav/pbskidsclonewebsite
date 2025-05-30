<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index() {
        $data['heading'] = 'Educational Games';
        $data['content'] = 'games_list'; // Specify the content view
        $this->load->view('layouts/main', $data); // Load the main layout
    }
    
    public function play($game_name) {
        // This will be used to load individual games
        $data['game_name'] = $game_name;
        $data['heading'] = 'Play ' . ucwords(str_replace('-', ' ', $game_name));
        $data['content'] = 'game_player'; // Specify the content view
        $this->load->view('layouts/main', $data); // Load the main layout
    }

    public function view($game_id) {
        // Load the game view page
        $data['game_id'] = $game_id;
        $data['heading'] = 'Play ' . ucwords(str_replace('-', ' ', $game_id));
        $data['content'] = 'game_view'; // Specify the content view
        $this->load->view('layouts/main', $data); // Load the main layout
    }
} 