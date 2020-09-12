<?php

class Home extends CI_Controller {
    // https://localhost/ci/index.php/home
    public function index() {
        // echo 'this is the home controller';
        $this->load->view('home_view');
    }

}

?>