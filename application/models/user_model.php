<?php 

class User_model extends CI_Model {
    // function that communicates with the database
    public function get_users() {
        // $config['hostname'] = 'localhost';
        // $config['username'] = 'root';
        // $config['password'] = '';
        // $config['database'] = 'errand_db';

        // $connection = $this->load->database($config);
        $query = $this->db->get('users');
        return $query->result();
    }
}

?>