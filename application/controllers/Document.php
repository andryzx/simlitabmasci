<?php

class Document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Document_model');
        $this->document = $this->Document_model;
    }

    public function accept()
    {
        $id = $this->uri->segment(3);

        $this->document->accept($id);

        redirect('dashboard');
    }

    public function reject()
    {
        $id = $this->uri->segment(3);

        $this->document->reject($id);

        redirect('dashboard');
    }
}
