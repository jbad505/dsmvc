*/
* Example of how to create models for the devstack framework
/*

<?php
    class Post {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getPosts() {
            $this->db->query("SELECT * FROM posts");

            return $this->db->resultSet();
        }
    }
