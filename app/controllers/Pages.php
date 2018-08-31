<?php

    class Pages extends Controller {
        public function __construct() {
            // Example of how to load a model
            // $this->postModel = $this->model('Post');
        }

        public function index() {
            $data = [
                'title' => 'DevStackMVC',
            ];
            
            $this->view('pages/index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About Us'
            ];
            
            $this->view('pages/about', $data);
        }
    }