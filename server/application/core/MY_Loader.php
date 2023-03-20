<?php

class MY_Loader extends CI_Loader{
    public function admin_template($content,$var=array()){
        $this->view('admin/layout/header');
        $this->view('admin/layout/sidebar');
        $this->view($content,$var);
        $this->view('admin/layout/footer');
    }
}