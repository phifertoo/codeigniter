<?php

class Users extends CI_Controller {
    // https://localhost/ci/index.php/users/show
    public function show() {
        // load the model
        $this->load->model('user_model');
        // access the get_users() function from the user_model
        $data[results] = $this->user_model->get_users();

        // foreach ($result as $object) {
        //     // echo $object . "<br>";
        //     echo $object->id;
        //     echo $object->username;
        //     echo $object->password;
        // }
        // $data['welcome'] = "Welcome to my page";

        $this->load->view('user_view', $data);
    }
}

?>